<?php

namespace Classes;

class Clima {
    public $cidade;
    public $codCidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $amanhecer;
    public $porDoSol;
    public $humidade;
    public $pressoa;
    public $descricao;
    public $icone;

    //Converte de kelvin para Celsius.
    public function getTemperaturaCelsius() : float {
        $calculo = $this->temperatura - 273.15;
        return $calculo;
    }

    //Converte de kelvin para Fahrenheit.
    public function getTemperaturaFahrenheit() : float {
        $calculo = ($this->temperatura - 273.15) * (9) / 5 + 32;
        return $calculo;
    }
}