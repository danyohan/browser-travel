<?php

namespace App\Dto;


class WeatherDto 
{
    public $coords;
    public $humidity;

    public function __construct($coords, $humidity) {
       $this->coords    = (object)$coords;
       $this->humidity  = $humidity ;
    }

    public function getCoord()
    {
        return $this->coords;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

   
}
