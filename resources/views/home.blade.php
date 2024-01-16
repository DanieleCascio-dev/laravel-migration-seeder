@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        
            @foreach ($trains as $train)
            <ul class="list-group mb-3">
                <li class="list-group-item">Azienda: {{$train->azienda}}</li>
                <li class="list-group-item">Partenza: {{ $train->stazione_di_partenza }}</li>
                <li class="list-group-item">Arrivo: {{ $train->stazione_di_arrivo }} </li>
                <li class="list-group-item">Orario di partenza: {{ $train->orario_di_partenza }}</li>
                <li class="list-group-item">Orario di arrivo: {{ $train->orario_di_arrivo }}</li>
                <li class="list-group-item">Codice treno: {{ $train->codice_treno }}</li>
                <li class="list-group-item">Numero carrozze: {{ $train->numero_carrozze }}</li>
                <li class="list-group-item">In orario: {{ $train->in_orario == 1 ? 'Sì' : 'No' }}</li>
                <li class="list-group-item">{{ $train->cancellato == 1 ? 'CANCELLATO' : '' }}</li>
              </ul>
            @endforeach
        
    </div>
@endsection