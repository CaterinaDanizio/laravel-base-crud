@extends('layouts.main-layout')

@section('content')

    <h1>Nome: {{ $periph -> name }}</h1> 
    <h2>Modello: {{ $periph -> model }}</h2>
    <h4>Prezzo: {{ $periph -> price }} euro</h4>
    <h4>Consumi energetici: {{ $periph -> consumption }}</h4>

@endsection