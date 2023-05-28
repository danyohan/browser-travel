<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title>Browser Travel</title>
        @vite(['resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />  

    </head>

   
    <body class="antialiased">
        <div class="container">
            <div class="row mb-5 mt-5">
                <div class="col-6">
                    <select class="form-control" name="resoureceName" id="cities">
                        <option>Select Item</option>
                        @foreach ($cities as $city)
                          <option value="{{ $city->id }}"> {{ $city->city }} </option>
                        @endforeach    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div id="map">
                    <x-maps-google
                    :zoomLevel="4"
                    :centerPoint="['lat' => 36.78242148969495, 'long' =>  -102.5524422652892]"
                        :markers="[['lat' => ($dataDto)  ? $dataDto->coords->lat: 1, 
                                    'long' => ($dataDto) ? $dataDto->coords->lon : 1 ]]"
              
                    >
                </x-maps-google>
                </div>
                </div>
               
            </div>
           
        </div> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        @vite(['resources/js/cities.js'])
    </body>
</html>
