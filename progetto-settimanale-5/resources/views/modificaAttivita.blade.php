@extends('layouts.layout')
@section('title', 'Modifica attivita') 

@section('content')
<form method="POST" action="/attivita/{{$attivita->id}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="{{ $attivita->nome }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Deescrizione</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="descrizione" value="{{ $attivita->descrizione }}">
    </div>
    <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection