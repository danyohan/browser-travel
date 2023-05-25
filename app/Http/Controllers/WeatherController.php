<?php

namespace App\Http\Controllers;

use App\Interfaces\WeatherInterface;
use App\Models\Weather;
use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    private $weatherInterface;
    private $weatherService;

    public function __construct(WeatherInterface $weatherInterface, WeatherService $weatherService)
    {
        $this->weatherInterface = $weatherInterface;
        $this->weatherService = $weatherService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->weatherInterface->getData();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($weather)
    {       
        $data  = $this->weatherInterface->getById($weather);
        return   $this->weatherService->getWeatherByCity($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
