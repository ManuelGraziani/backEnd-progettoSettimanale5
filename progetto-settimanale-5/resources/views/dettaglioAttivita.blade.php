@extends('layouts.layout')
@section('title', $attivita->nome)

@section('content')
<div>
    <p>{{ $attivita->descrizione }}</p>
</div>
@endsection