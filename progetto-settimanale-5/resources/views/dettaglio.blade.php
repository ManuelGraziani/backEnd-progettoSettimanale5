@extends('layouts.layout')
@section('title', $progetto->nome) 

@section('content')
<div>
<h1>{{ $progetto->nome }}</h1>
    <p>{{ $progetto->descrizione }}</p>
    <!-- Add more details here -->
</div>
</div>
@endsection