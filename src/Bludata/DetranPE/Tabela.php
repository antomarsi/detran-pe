<?php

namespace Bludata\DetranPE;

class Tabela
{
    /**
     * @property string $key
     */
    protected $tabela;

    /**
     * @property array $values
     */
    protected $values;

    /**
     * @property bool $tabelasRead
     */
    private $tabelaWasRead = false;

    public function __construct($tabela)
    {
        $this->tabela = $tabela;
    }

    private function read()
    {
        if ($this->tabelaWasRead) {
            return true;
        }

        $path = detranpe_storage_path('tabelas/'.$this->tabela.'.php');
        if (file_exists($path)) {
            $this->values = require $path;
            $this->tabelaWasRead = true;

            return true;
        }

        $error = sprintf('Tabela "%s" não existe', $this->tabela);

        throw new \InvalidArgumentException($error);
    }

    public function get($key = null)
    {
        $this->read();
        if (is_null($key)) {
            return $this->values;
        }

        if ($this->has($key)) {
            return $this->values[$key];
        }
    }

    public function has($key)
    {
        $this->read();

        return array_key_exists($key, $this->values);
    }
}
