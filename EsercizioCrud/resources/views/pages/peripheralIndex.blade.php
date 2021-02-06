@extends('layouts.main-layout')

@section('content')

    <h3>Elenco periferiche</h3>
        <a href="{{ route('peripheralCreate') }}"> CREATE</a>
        <ul>
            @foreach ($peripherals as $item)

                <li> 
                    <a href = "{{ route('peripheralShow', $item -> id) }}">
                        Nome: {{ $item -> name }} 
                        Modello: {{ $item -> model }}  
                    </a>
                    
                    
                </li>
                
            @endforeach
        </ul>
    
@endsection