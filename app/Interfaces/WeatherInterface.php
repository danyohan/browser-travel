<?php

namespace App\Interfaces;

interface WeatherInterface
{
    public function getData();
    public function getById($id);

}
