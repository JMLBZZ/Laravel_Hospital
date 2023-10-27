@extends('layouts.app')

@section('title')
    Enregistrer les produits
@endsection

@section('content')
{{-- message d'erreur --}}

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{-- message de succès --}}
@if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!} {{-- Les exclamations sont pour que les balises html soient bien interprétées--}}
    </div>
@endif

{{-- formulaire --}}

    <form id="formproduit" action="{{url('/sauverproduit')}}" method="POST" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group mb-3">
            <label class="form-label">Nom du produit</label>
            <input type="text" class="form-control" name="nom_produit" placeholder="Nom du produit">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix_produit" placeholder="Prix du produit">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description_produit" placeholder="Description du produit"></textarea>
        </div>
        <div class="form-group mb-3">
            <input type="submit" value="Ajouter" class="btn btn-primary mt-4">
        </div>
    </form> 

@endsection