@extends('layouts.layout')
@section('title', 'Aggiungi attivita' )

@section('content')
<form method="POST" action="/attivita">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descrizione</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="descrizione">
  </div>
  <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
@endsection