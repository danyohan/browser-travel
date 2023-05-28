<?php

namespace App\Interfaces;

interface WeatherInterface
{
    public function getData();
    public function getById($id);
    public function create($dataWeather);
    public function getWeatherHistory();

}
