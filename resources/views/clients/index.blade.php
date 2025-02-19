<!-- resources/views/clients/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Ajouter un Client</a>
    <table class="table">
        <thead>
            <tr>
                <th>Numéro Client</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Carte Bancaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->Numeroclient }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->cartebancaire }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
            
        </tbody>
    </table>
    {!! $clients->links('pagination::bootstrap-4') !!}
@endsection
