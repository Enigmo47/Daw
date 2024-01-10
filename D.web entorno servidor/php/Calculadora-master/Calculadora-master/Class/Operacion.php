<?php

abstract class Operacion {

    protected $op1;
    protected $op2;
    protected $operador;
    protected static $tipo;
    const RACIONAL = 1;
    const REAL = 2;
    const ERROR = -1;

    public static function tipoOperacion($operacion) {
        self::$tipo = Operacion::ERROR;

        $numReal = '[0-9]+(\.[0-9]+)?';
        $numEntero = '[0-9]+';
        $numRacional = '[0-9]+\/[1-9][0-9]*';
        $opReal = '[\+|\-|\*|\/]';
        $opRacional = '[\+|\-|\*|\:]';

        $real = "/^$numReal$opReal$numReal$/";
        $racional = "/^$numRacional$opRacional$numRacional$/";

        if (preg_match($real, $operacion)) {
            self::$tipo = Operacion::REAL;
        } elseif (preg_match($racional, $operacion)) {
            self::$tipo = Operacion::RACIONAL;
        }

        return self::$tipo;
    }

    public function __construct($operacion) {
        $this->operador = $this->obtenerOperador($operacion);
        list($this->op1, $this->op2) = $this->obtenerOperandos($operacion);
    }

    private function obtenerOperador($operacion) {
        if (strpos($operacion, '+') !== false)
            return '+';
        if (strpos($operacion, '-') !== false)
            return '-';
        if (strpos($operacion, '*') !== false)
            return '*';
        if (strpos($operacion, ':') !== false)
            return ':';
        if (strpos($operacion, '/') !== false)
            return '/';
    }

    abstract protected function obtenerOperandos($operacion);

    abstract public function opera();

    public function __toString() {
        return "<br />$this->op1$this->operador$this->op2 = ";
    }

    public function describe() {
        $operacion = "<table border=1><tr><th>Concepto</th> <th>Valores</th></tr>";
        $operacion .= "<tr><td>Operando 1</td><td>$this->op1</td></tr>";
        $operacion .= "<tr><td>Operando 2</td><td>$this->op2</td></tr>";
        $operacion .= "<tr><td>Operación</td><td>$this->operador</td></tr>";
        if (self::$tipo == Operacion::RACIONAL)
            $tipo = "Racional";
        else
            $tipo = "Real";
        $operacion .= "<tr><td>Tipo de operacion</td><td>$tipo</td></tr>";
        return $operacion;
    }
}
