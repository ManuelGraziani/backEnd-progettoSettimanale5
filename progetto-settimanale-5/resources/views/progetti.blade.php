@extends('layouts.layout')
@section('title', 'Progetti' )

@section('content')
<div>
    <button type="button" class="btn btn-primary"><a href="/progetti/create" class="text-white text-decoration-none">Aggiungi progetto</a></button>
</div>
@if($user->progetti->isNotEmpty())
<div class="row">
@foreach($user->progetti as $progetto)
    <div class="col">
        <div class="card my-5" style="width: 18rem;">
          
            <div class="card-body">
                <h5 class="card-title">{{ $progetto->nome }}</h5>
                <p class="card-text">{{ $progetto->descrizione }}</p>
                <a href="progetti/{{ $progetto->id }}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@else
<h3 class="text-center mt-5">Non ci sono progetti</h3>
@endif
@endsection