<!-- resources/views/clients/index.blade.php -->

@extends('layouts.app')

@section('content')
   <h1>edit</h1>
   
   <form action="{{ route('clients.update', $client->id) }}" method="PUT">
      @csrf
      <div class="my-2">
         <label for="num" class="form-label">Numeroclient</label>
         <input type="text" class="form-control" name="num" id="num" value="{{$client->Numeroclient}}">
         @error('num')
            <div class="alert alert-danger">
                  {{ $message }}
            </div>
         @enderror
      
      </div>
      <div class="my-2">
         <label for="nom"  class="form-label">Nom</label>
         <input type="text" class="form-control" name="nom" id="nom" value="{{$client->nom}}">
      
         @error('nom')
            <div class="alert alert-danger">
                  {{ $message }}
            </div>
         @enderror
      </div>
      <div class="my-2">
         <label for="email"  class="form-label">Email</label>
         <input type="text" class="form-control" name="email" id="email" value="{{$client->email}}">
      
         @error('email')
            <div class="alert alert-danger">
                  {{ $message }}
            </div>
         @enderror
      
      </div>
      <div class="my-2">
         <label for="cartebancaire"  class="form-label">cartebancaire</label>
         <input type="text" class="form-control" name="cartebancaire" id="cartebancaire" value="{{$client->cartebancaire}}">
      
         @error('cartebancaire')
            <div class="alert alert-danger">
                  {{ $message }}
            </div>
         @enderror

      </div>

      <input type="submit" class="btn btn-primary" value="metre a jour">
   </form>

@endsection
