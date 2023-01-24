@extends("layouts.app")
@section("content")
<div class="container">
    <h1>Treni in partenza oggi</h1>
    <div class="row">
        @foreach ($trainList as $train )
        <div class="col">
            Partenza:{{$train->station_start}}<br>
            Arrivo:{{$train->station_end}}<br>
            Data:{{$train->start_at}}
            
        </div>
            
        @endforeach
    </div>
</div>
    
@endsection