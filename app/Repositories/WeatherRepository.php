<?php


namespace App\Repositories;

use App\Interfaces\WeatherInterface;
use App\Models\Weather;


class WeatherRepository implements WeatherInterface
{

    public function getData()
    {
        return Weather::all();
    }

    public function getById($id)
    {
        return Weather::find($id);
    }
} 