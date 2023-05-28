<?php

namespace App\Services;

use App\Dto\WeatherDto;
use Illuminate\Support\Facades\Http;

class Mapper 
{

    public function conver ($data)
    {
        return new WeatherDto(
            $data['coord'],
            $data['main']['humidity']
        );

       
    }

   
}
