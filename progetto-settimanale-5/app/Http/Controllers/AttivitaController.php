<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;
use App\Models\Attivita;
use App\Models\Progetto;
use Illuminate\Support\Facades\Auth;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aggiungiAttivita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttivitaRequest $request)
    {
        $user = Auth::user();
        $attivita = new Attivita();
        $attivita->nome = $request->nome;
        $attivita->descrizione = $request->descrizione;
        $attivita->progetto_id = Progetto::where('user_id', $user->id)->first()->id;
        $attivita->save();

        return redirect()->action([ProgettoController::class, 'show'], ['progetti' => Progetto::where('user_id', $user->id)->first()->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivitum)
    {
        return view('dettaglioAttivita', ['attivita' => $attivitum]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivitum)
    {
        return view('modificaAttivita', ['attivita' => $attivitum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivitum)
    {
        $attivitum->nome = $request->nome;
        $attivitum->descrizione = $request->descrizione;
        $attivitum->save();
        return redirect()->action([ProgettoController::class, 'show'], ['progetti' => Progetto::where('user_id', Auth::id())->first()->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivitum)
    {
        $attivitum->delete();
        return redirect()->action([ProgettoController::class, 'show'], ['progetti' => Progetto::where('user_id', Auth::id())->first()->id]);
    }
}
