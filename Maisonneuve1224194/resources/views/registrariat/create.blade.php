@extends('layouts.app')

@section('title', "Ajouter un étudiant")

@section('content')
<!-- Page content-->
<div class="container">   
    <div class="row">
                <!-- Blog post-->
            <div class="mx-auto col-lg-8">
                <div class="card">
                    <a href=""><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="nom">Nom de l'élève:</label>
                                    <input type="text" id="nom" class="form-control" name="nom"
                                        placeholder="Nom de l'élève" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="adresse">Adresse:</label>
                                    <input type="text" id="adresse" class="form-control" name="adresse" placeholder="Adresse civique" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="phone">Téléphone:</label>
                                    <input type="phone" id="phone" class="form-control" name="phone" placeholder="Numéro de téléphone" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="email">Courriel:</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Votre courriel" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="date_naissance">Date de naissance:</label>
                                    <input type="date" id="date_naissance" class="form-control" name="date_naissance" placeholder="Date de naissance" required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="ville">Ville:</label>
                                    <select name="ville_id" id="ville">
                                    @foreach($villes as $ville)
                                        <option value="{{$ville->id}}">{{$ville->ville_nom}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="btn btn-success">
                                        Ajouter l'étudiant
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
            </div>
        
    </div>  
</div>
@endsection