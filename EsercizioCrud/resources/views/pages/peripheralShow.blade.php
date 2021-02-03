@extends('layouts.main-layout')

@section('content')

    <h1>Nome: {{ $item -> name }}</h1> 
    <h2>Modello: {{ $item -> model }}</h2>
    <h4>Prezzo: {{ $item -> price }} euro</h4>
    <h4>Consumi energetici: {{ $item -> consumption }}</h4>
      
@endsection