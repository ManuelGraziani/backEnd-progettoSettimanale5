<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use App\Models\Progetto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progetti = Progetto::where('user_id', Auth::id())->get();
        return view('progetti', ['progetti' => $progetti]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('aggiungiProgetto', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        $user = Auth::user();
        $progetto = new Progetto();
        $progetto->user_id = $user->id;
        $progetto->nome = $request->nome;
        $progetto->descrizione = $request->descrizione;
        $progetto->save();

        return redirect()->action([ProgettoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetti)
    {
        return view('dettaglio', ['progetti' => $progetti]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetti)
    {
        return view('modifica', ['progetti' => $progetti]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetti)
    {
        $user = Auth::user();
        $progetti->user_id = $user->id;
        $progetti->nome = $request->nome;
        $progetti->descrizione = $request->descrizione;
        $progetti->save();
        return redirect()->action([ProgettoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetti)
    {
        $progetti->delete();
        return redirect()->action([ProgettoController::class, 'index']);
    }
}
