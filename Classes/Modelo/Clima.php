<?php

namespace Classes\Modelo;

class Clima {

    public $codCidade;
    public $cidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $porDoSol;
    public $humidade;
    public $pressao;
    public $descricao;
    public $icone;

    //Converte de kelvin para Celsius.
    public function getTemperaturaCelsius() : float {
        return $this->temperatura - 273.15;
    }

    //Converte de kelvin para Fahrenheit.
    public function getTemperaturaFahrenheit() : float {
        return ($this->temperatura - 273.15) * (9) / 5 + 32;
    }

}

?>