<?php

class Racional {

    private $num;
    private $den;

    public function __construct($num = null, $den = null) {
        if ($num === null && $den === null) {
            $this->num = 1;
            $this->den = 1;
        } elseif ($den === null) {
            $this->num = $num;
            $this->den = 1;
        } else {
            $this->num = $num;
            $this->den = $den;
        }

        // Si se proporciona una cadena en formato "num/den", se parsea y asigna los valores.
        if (is_string($num) && strpos($num, '/') !== false) {
            list($this->num, $this->den) = explode('/', $num, 2);
        }
    }

    public function sumar(Racional $op1): Racional {
        $resultado = new Racional(
            ($this->num * $op1->den) + ($this->den * $op1->num),
            $this->den * $op1->den
        );
        return $resultado->simplificar();
    }

    public function restar(Racional $op1): Racional {
        $resultado = new Racional(
            ($this->num * $op1->den) - ($this->den * $op1->num),
            $this->den * $op1->den
        );
        return $resultado->simplificar();
    }

    public function multiplicar(Racional $op1): Racional {
        $resultado = new Racional(
            $this->num * $op1->num,
            $this->den * $op1->den
        );
        return $resultado->simplificar();
    }

    public function dividir(Racional $op1): Racional {
        if ($op1->num == 0) {
            return "Error: División por cero";
        }

        $resultado = new Racional(
            $this->num * $op1->den,
            $this->den * $op1->num
        );
        return $resultado->simplificar();
    }

    public function __toString() {
        return $this->num . "/" . $this->den;
    }

    public function simplificar() {
        $mcd = $this->mcd();
        return new Racional($this->num / $mcd, $this->den / $mcd);
    }

    private function mcd() {
        // Implementa el algoritmo para obtener el MCD (máximo común divisor) de $this->num y $this->den.
        // Puedes usar el algoritmo de Euclides.
        $a = abs($this->num);
        $b = abs($this->den);

        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }

        return $a;
    }
}

