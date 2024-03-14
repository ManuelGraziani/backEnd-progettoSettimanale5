@extends('layouts.layout')
@section('title', 'Progetti' )

@section('content')
<div>
    <button type="button" class="btn btn-primary"><a href="/create" class="text-white text-decoration-none">Aggiungi progetto</a></button>
</div>
@if($user->progetti->isNotEmpty())
<ul>
    @foreach($user->progetti as $progetto)
    <li>{{ $progetto->nome }}</li>
    <!-- Aggiungi qui altri dettagli del progetto che desideri visualizzare -->
    @endforeach
</ul>
@else 
<h3 class="text-center mt-5">Non ci sono progetti</h3>
@endif
@endsection