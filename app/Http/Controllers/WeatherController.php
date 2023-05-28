<?php

namespace App\Http\Controllers;

use App\Dto\WeatherDto;
use App\Interfaces\WeatherInterface;
use App\Models\Weather;
use App\Services\Mapper;
use App\Services\WeatherService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\VarDumper\VarDumper;

class WeatherController extends Controller
{


    public function __construct(
       private WeatherInterface $weatherInterface,
       private WeatherService $weatherService,
       private Mapper $mapper
       )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = $this->weatherInterface->getData();
        $dataDto = null;
        return view('welcome', compact('cities','dataDto' ));
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
        if($data)
        {

            $dataJson = $this->weatherService->getWeatherByCity($data);
            $dataDto =  $this->mapper->conver($dataJson);
            $html =  view('map', compact('dataDto'))->render();

            return response()->json([
                'status' => true,
                'html' => $html
            ]);
        }
        
        return null;
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
