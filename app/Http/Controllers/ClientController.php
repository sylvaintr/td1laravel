<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Numeroclient' => 'required|int',
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'cartebancaire' => 'required|string|max:255',
        ]);

        return Client::create([
            'Numeroclient' => $data['num'],
            'nom' => $data['nom'],
            'email' => $data['email'],
            'cartebancaire' => $data['cartebancaire'],
            
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view('clients.show' , compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('clients.edit' , compact('client'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Numeroclient' => 'required|int',
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'cartebancaire' => 'required|string|max:255',
        ]);
        $client = Client::findOrFail($id);
        $client->Numeroclient = $request->input('num');
        $client->nom = $request->input('nom');
        $client->email = $request->input('email');
        $client->cartebancaire = $request->input('cartebancaire');

        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    
}
