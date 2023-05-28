<div id="label">
    <p>Humedad:
        @if ($dataDto)
            <span>{{ $dataDto->humidity }}%</span>
        @endif
    </p>
</div>
<x-maps-google :zoomLevel="4" :centerPoint="['lat' => 36.78242148969495, 'long' => -102.5524422652892]" :markers="[['lat' => $dataDto ? $dataDto->coords->lat : 1, 'long' => $dataDto ? $dataDto->coords->lon : 1]]">
</x-maps-google>
</div>
