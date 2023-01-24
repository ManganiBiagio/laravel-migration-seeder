@extends("layouts.app")
@section("content")
<div class="container">
    <h1>Treni in partenza oggi</h1>
    <div class="row">
        @foreach ($trainList as $train )
        <div class="col">
            <div>
                Partenza:{{$train->station_start}}
            </div>
            <div>
                Arrivo:{{$train->station_end}}
            </div>
            <div>
                Data Partenza: {{$train->departureTimeToString()}}
            </div>
            <div>
                Data Arrivo: {{$train->arrivedTimeToString()}}
            </div>

            
        </div>
            
        @endforeach
    </div>
</div>
    
@endsection