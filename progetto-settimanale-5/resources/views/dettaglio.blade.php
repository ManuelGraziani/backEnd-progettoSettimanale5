@extends('layouts.layout')
@section('title', $progetti->nome)

@section('content')
<div>
    <p>{{$progetti->descrizione}}</p>
    <div class="d-flex justify-content-between align-items-center">
        <h3>Attivita'</h3>
        <span >
            <a type="button" class="btn btn-outline-info" href="/attivita/create">Aggiungi attivita</a>
        </span>
    </div>
    @if (count($progetti->attivitas) > 0)
    <ul class="list-group list-group-flush">
        @foreach ($progetti->attivitas as $attivita)
        <li class="list-group-item">{{$attivita->nome}}
        <span class="float-end">
            <a type="button" class="btn btn-outline-info" href="/attivita/{{$attivita->id}}">
                <i class="bi bi-clipboard-check"></i>
            </a>
            <a type="button" class="btn btn-warning" href="/attivita/{{$attivita->id}}/edit"><i class="bi bi-pencil-square"></i></a>
            <form method="POST" action="{{route('attivita.destroy', $attivita->id)}}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
            </form>
        </span>
        </li>
        @endforeach
    </ul>
    @else
    <h3 class="mt-5 text-center">Nessuna attivita'</h3>
    @endif
</div>
@endsection