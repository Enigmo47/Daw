<?php

class OperacionReal extends Operacion {

    public function __construct($operacion) {
        parent::__construct($operacion);

        list($this->op1, $this->op2) = $this->obtenerOperandos($operacion);
    }

    public function opera() {
        switch ($this->operador) {
            case '+':
                return $this->op1 + $this->op2;
            case '-':
                return $this->op1 - $this->op2;
            case '*':
                return $this->op1 * $this->op2;
            case '/':
                if ($this->op2 != 0) {
                    return $this->op1 / $this->op2;
                } else {
                    return "Error: División por cero";
                }
            default:
                return "Operador no válido";
        }
    }

    public function __toString() {
        $resultado = parent::__toString();
        $resultado .= $this->opera();
        return $resultado;
    }

    public function describe() {
        $operacion = parent::describe();
        $tipo = $this->getTipo() == Operacion::RACIONAL ? "Racional" : "Real";
        $operacion .= "<tr><td>Tipo de operacion</td><td>$tipo</td></tr>";
        return $operacion;
    }
}

