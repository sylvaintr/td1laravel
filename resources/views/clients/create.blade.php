<!-- resources/views/clients/index.blade.php -->

@extends('layouts.app')

@section('content')
    <form>
        <div class="form-group">
        <label for="nom">nom</label>
        <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="form-group">
        <label for="prenom">prenom</label>
        <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="form-group">
        <label for="age">age</label>
        <input type="text"class="form-control" name="age" id="age">
        </div>
        <div class="form-group">
        <label for="adresse">adresse</label>
        <input type="text" class="form-control" name="adresse" id="adresse">
        </div>
        <div class="form-group">
        <label for="Mail">Mail</label>
        <input type="email" class="form-control"  name="Mail" id="Mail">
        </div>
        <div class="form-group">
        <label for="mdp">mot de passe </label>
        <input type="password" class="form-control"  name="mdp" id="mdp">
        </div>
        <div class="form-group">
        <label for="vmdp">verification mot de passe</label>
        <input type="password" class="form-control"  name="vmdp" id="vmdp">
        </div>
       
        <input type="submit" class="btn btn-primary" value=" valiser">
        

    </form> 
@endsection
