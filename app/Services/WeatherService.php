<?php

namespace App\Services;

use App\Interfaces\GenericInterface;
use App\Models\Animal;
use App\Models\Weather;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class WeatherService 
{

    public function getWeatherByCity(Weather $weather)
    {
       $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$weather->lat}&lon={$weather->lng}&appid=92bd6e82a9cc4375804387026e584903");
       return $response->json();
    }

   
}
