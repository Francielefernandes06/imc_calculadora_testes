<?php
namespace Src;

class ImcCalculator {
    public function calcularIMC($peso, $altura) {
        return $peso / ($altura * $altura);
    }

    public function verificarAlerta($imc) {
        return $imc < 18.5 || $imc > 24.9;
    }

    public function verificarAlertaIMC($imc) {
        if ($imc < 18.5) {
            return 'Abaixo do peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            return 'Peso normal';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }
}
