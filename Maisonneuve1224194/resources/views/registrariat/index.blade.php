@extends('layouts.app')

@section('title', "Registre étudiant")

@section('content')
<!-- Page content-->
<div class="container">   
    <div class="row">
        @forelse($etudiants as $etudiant)
                <!-- Blog post-->
            <div class="mb-4 col-lg-3">
                <div class="card">
                    <a href=""><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <h2 class="card-title h4">{{ $etudiant->nom }}</h2>
                        <p class="card-title">{{ $etudiant->adresse }}</p>
                        <p class="card-title">{{ $etudiant->phone }}</p>
                        <p class="card-title h6">{{ $etudiant->email }}</p>
                        <p class="card-title">{{ date('Y-m-d', strtotime($etudiant->date_naissance)) }}</p>
                        <p class="card-title">{{ $etudiant->etudiantHasVille->ville_nom }}</p>
                        <a class="btn btn-secondary" href="{{ route('etudiant.show', $etudiant->id) }}">Fiche de l'étudiant</a>
                    </div>
                </div>
                
            </div>
        @empty
            <p>Aucun etudiant</p>
        @endforelse
        
    </div>  
</div>
@endsection