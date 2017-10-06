<?php

namespace Bludata\Tests\DetranPE;

use Bludata\DetranPE\Tabela;
use TestCase;

class TabelaTest extends TestCase
{
    public function tabelas()
    {
        $tabelas = scandir(detranpe_storage_path('tabelas'));
        $result = [];
        foreach ($tabelas as $tabela) {
            if (!in_array($tabela, ['.', '..'])) {
                $result[] = [trim(substr($tabela, 0, (strlen($tabela) - 4)))];
            }
        }

        return $result;
    }

    /**
     * @dataProvider tabelas
     * @covers Bludata\DetranPE\Tabela::__construct
     */
    public function testCanBeInstanciable($nomeTabela)
    {
        $tabela = new Tabela($nomeTabela);
        $this->assertInstanceOf('Bludata\DetranPE\Tabela', $tabela);
    }

    /**
     * @dataProvider tabelas
     * @covers Bludata\DetranPE\Tabela::get
     *
     * @uses Bludata\DetranPE\Tabela::has
     * @uses Bludata\DetranPE\Tabela::__construct
     * @uses Bludata\DetranPE\Tabela::read
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     */
    public function testGetPassingNullReturnTabela($nomeTabela)
    {
        $tabela = new Tabela($nomeTabela);
        $this->assertInternalType('array', $tabela->get());
    }

    /**
     * @dataProvider tabelas
     * @covers Bludata\DetranPE\Tabela::get
     *
     * @uses Bludata\DetranPE\Tabela::has
     * @uses Bludata\DetranPE\Tabela::__construct
     * @uses Bludata\DetranPE\Tabela::read
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     */
    public function testGetPassingKeyReturnStringValue($nomeTabela)
    {
        $tabela = new Tabela($nomeTabela);
        $values = $tabela->get();
        foreach ($values as $key => $value) {
            $currentValue = $tabela->get($key);
            $this->assertEquals($value, $currentValue);
            $this->assertInternalType('string', $currentValue);
        }
    }

    /**
     * @dataProvider tabelas
     * @covers Bludata\DetranPE\Tabela::has
     *
     * @uses Bludata\DetranPE\Tabela::get
     * @uses Bludata\DetranPE\Tabela::__construct
     * @uses Bludata\DetranPE\Tabela::read
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     */
    public function testHas($nomeTabela)
    {
        $tabela = new Tabela($nomeTabela);
        $keys = array_keys($tabela->get());
        foreach ($keys as $key) {
            $this->assertTrue($tabela->has($key));
        }
        $keyThatDoesntExists = '...';
        $this->assertFalse($tabela->has($keyThatDoesntExists));
    }
}
