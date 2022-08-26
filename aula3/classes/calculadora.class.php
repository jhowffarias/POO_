<?php

class calculadora {
    public $peso; public $altura;

    public function setImc($Peso, $Altura ) { 
        $this->peso = $Peso;
        $this->altura = $Altura;
    }

    public function getImc(){
        $imc = ($this->peso = $Peso / ($this->altura = $Altura **2));
        return $imc;
    }

    public function getStatus(){
        $im = $this->getImc();
        if($im <= 20.0){
            return "Você esta um magrelo, coma mais";
        } else if ($im >= 20.0 && $im <= 24.9){
            return "Você esta no peso ideal, ai sim!";
        } else if ($im >= 25.0 && $im <= 29.9){
            return "Você esta um pouco gordinho em";
        } else if ($im >= 30.0 && $im <= 34.9){
            return "Você esta gordo, vai devagar";
        } else if ($im >= 35.0 && $im <= 39.9){
            return "Você esta gordao, e o regime?";
        } else if ($im >= 40.0){
            return "Você esta um puta gordao, bora emagrecer";
        }
    }

    }
?>