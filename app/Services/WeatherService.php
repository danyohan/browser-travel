<?php

namespace App\Services;

use App\Models\Weather;
use Illuminate\Support\Facades\Http;

class WeatherService 
{

    public function getWeatherByCity(Weather $weather)
    {
       $apiKey = env('API_KEY');

       $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$weather->lat}&lon={$weather->lng}&appid={$apiKey}");
       return $response->json();
    }

   
}
