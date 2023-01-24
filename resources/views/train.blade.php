@extends("layouts.app")
@section("content")
<div class="container">
    <h1>Treni in partenza oggi</h1>
    <div class="row">
        @foreach ($trainList as $train )
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"> Partenza:{{$train->station_start}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Arrivo:{{$train->station_end}}</h6>
                  
                  
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Data Partenza: {{$train->departureTimeToString()}}</li>
                    <li class="list-group-item">Data Arrivo: {{$train->arrivedTimeToString()}}</li>
                    <li class="list-group-item">Azienda: {{$train->agency}}</li>
                    <li class="list-group-item">Codice: {{$train->getUpperCode()}}</li>
                    <li class="list-group-item">Numero di carrozze: {{$train->carriage}}</li>
                    @if ($train->in_time)
                    <li class="list-group-item">Treno in orario</li>
                    @else
                    <li class="list-group-item">Treno in ritardo</li>
                    @endif

                    @if ($train->deleted)
                    <li class="list-group-item">Cancellato</li>
                    @endif
                    
                    
                  </ul>
              </div>
            
        </div>
       
            
        @endforeach
    </div>
</div>
    
@endsection

