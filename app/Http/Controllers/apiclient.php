<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class apiclient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients =  Client::all();
        $output = array();
        foreach ($clients as $client){
            $arrayclient = array ("Numeroclient" => $client->Numeroclient,"nom" => $client->nom,"email" => $client->email,"cartebancaire" => $client->cartebancaire) ;
            array_push($output,$arrayclient);
        }
    
        return(response()->json($output)); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        $output = array ("Numeroclient" => $client->Numeroclient,"nom" => $client->nom,"email" => $client->email,"cartebancaire" => $client->cartebancaire) ;
        return(response()->json($output));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
