<?php

namespace App\Dto;


class WeatherDto 
{
    public $coords;
    public $humidity;
    public $cityName;

    public function __construct($coords, $humidity, $cityName ) {
       $this->coords    = (object)$coords;
       $this->humidity  = $humidity ;
       $this->cityName  = $cityName;
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
