@extends('sauce.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('shop.create') }}"> Créer ue nouvelle sauce</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <th>Fabricant </th>
            <th>Description</th>
            <th>Ingredient Principale</th>
            <th width="280px">Action</th>
            <th>Puissance</th>
            <th>Likes</th>
            <th>Dislikes</th>
        </tr>
        @foreach ($sauces as $sauce)
        <tr>

            <td>{{ $sauce->SauceId }}</td>
            <td>{{ $sauce->Fabricant }}</td>
            <td>{{ $sauce->Description }}</td>
            <td>{{ $sauce->IngredientPrincipale }}</td>
            <td>{{ $sauce->Puissance }}</td>
            <td>{{ $sauce->Likes }}</td>
            <td>{{ $sauce->Dislikes }}</td>
            <td>
                <form action="{{ route('shop.destroy',$sauce->SauceId) }}" method="POST">

                    <a class="btn btn-outline-primary" href="{{ route('shop.show',$sauce->SauceId) }}">Montrer</a>

                    <a class="btn btn-outline-success" href="{{ route('shop.edit',$sauce->SauceId) }}">Éditer</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
