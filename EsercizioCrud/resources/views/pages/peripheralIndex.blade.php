@extends('layouts.main-layout')

@section('content')

    <h3>Elenco periferiche</h3>
        <ul>
            @foreach ($peripherals as $item)

                <li> 
                    <a href = "{{ route('peripheralShow', $periph -> id) }}">
                        Nome: {{ $item -> name }} 
                        Modello: {{ $item -> model }}  
                    </a>
                    
                    
                </li>
                
            @endforeach
        </ul>
    
@endsection