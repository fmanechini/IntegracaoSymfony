<?php


namespace App\Controller;


class Calculadora
{
    public function soma($numero1,$numero2) {
        return $numero1 + $numero2;
    }
    public function subtracao($numero1,$numero2) {
        return $numero1 - $numero2;
    }
    public function multiplicacao($numero1,$numero2) {
        return $numero1 * $numero2;
    }
    public function divisao($numero1,$numero2) {
        return $numero1 / $numero2;
    }
    public function calcular()
    {
        if ($_POST['operacao'] == 1) {
            $resultado = $this->soma($_POST['numero1'], $_POST['numero2']);
        } else {
            if ($_POST['operacao'] == 2) {
                $resultado = $this->subtracao($_POST['numero1'], $_POST['numero2']);
            } else {
                if ($_POST['operacao'] == 3) {
                    $resultado = $this->multiplicacao($_POST['numero1'], $_POST['numero2']);
                } else {
                    $resultado = $this->divisao($_POST['numero1'], $_POST['numero2']);
                }
            }
        }
        return $resultado;
    }
}