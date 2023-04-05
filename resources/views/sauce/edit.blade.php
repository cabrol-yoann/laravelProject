@extends('sauce.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier les informations de la sauce</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('shop.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     <form action="{{ route('shop.update',$sauces->SauceId) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom de la sauce:</strong>
                <input type="text" name="Nom" value="{{ $sauces->Nom }}"class="form-control" placeholder="Saisir une sauce">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fabricant:</strong>
                <input type="text" name="Fabricant" value="{{ $sauces->Fabricant }}" class="form-control" placeholder="Saisir un fabricant">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="Description" value="{{ $sauces->Description }}" class="form-control" placeholder="Saisir une description">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ingredient Principale:</strong>
                <input type="text" name="IngredientPrincipale" value="{{ $sauces->IngredientPrincipale }}" class="form-control" placeholder="Saisir un ingrédient">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>URL:</strong>
                <input type="text" name="URL" value="{{ $sauces->URL }}" class="form-control" placeholder="Saisir une URL">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Puissance:</strong>
                <input type="text" name="Puissance" value="{{ $sauces->Puissance }}" class="form-control" placeholder="Saisir une puissance">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Likes:</strong>
                <input type="text" name="Likes" value="{{ $sauces->Likes }}" class="form-control" placeholder="Saisir un nombre de likes">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Dislikes:</strong>
                <input type="text" name="Dislikes" value="{{ $sauces->Dislikes }}" class="form-control" placeholder="Saisir un nombre de dislikes">
            </div>
        </div>
        

            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>

    </form>
@endsection
