<?php


namespace App\Repositories;

use App\Interfaces\WeatherInterface;
use App\Models\Weather;
use App\Models\WeatherHistory;

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

    public function create($weatherData)
    {
        WeatherHistory::firstOrCreate(['humidity' => $weatherData->humidity, 'city'=>$weatherData->cityName]);
    }

    public function getWeatherHistory()
    {
        return WeatherHistory::paginate(10);
    }
} 