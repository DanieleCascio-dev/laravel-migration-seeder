@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->stazione_di_partenza }}</li>
            @endforeach
        </ul>
    </div>
@endsection