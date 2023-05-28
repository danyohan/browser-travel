@extends('base-template')
@section('content')
        <div class="row mb-2 mt-5">
            <div class="col-6">
                <label for="exampleInputEmail1">Ciudad</label>
                <select class="form-control" name="resoureceName" id="cities">
                    <option value="0">Seleccionar Ciudad</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}"> {{ $city->city }} </option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="row">
            
            <div class="col-6">
                <div class="alert alert-danger" id="wrong-alert">
                    Por favor seleccione una ciudad
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id="map" class="mt-2">

                    <x-maps-google :zoomLevel="4" :centerPoint="['lat' => 36.78242148969495, 'long' => -102.5524422652892]" :markers="[
                        ['lat' => $dataDto ? $dataDto->coords->lat : 1, 'long' => $dataDto ? $dataDto->coords->lon : 1],
                    ]">
                    </x-maps-google>
                </div>
            </div>

        </div>
 @endsection
