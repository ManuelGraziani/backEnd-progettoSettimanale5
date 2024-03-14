@extends('layouts.layout')
@section('title', 'Progetti' )

@section('content')
<div>
  <form action="">
    <button type="submit" class="btn btn-primary">Aggiungi progetto</button>
  </form>
</div>
<ul>
  @foreach($user->progetti as $progetto)
  <li>{{ $progetto->nome }}</li>
  <!-- Aggiungi qui altri dettagli del progetto che desideri visualizzare -->
  @endforeach
</ul>
@endsection