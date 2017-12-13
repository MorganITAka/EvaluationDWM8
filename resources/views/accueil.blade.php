@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
  <h1>Ma page d'accueil</h1>
  <table>
    <tr>
        <th>Nom</th>
        <th>Taille</th>
        <th>Poid</th>
        <th>Age</th>
        <th>Sexe</th>
        <th>Couleurs</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ($cats as $cat)
      <tr>
        <td>{{ $cat->name }}</td>
        <td>{{ $cat->size }}</td>
        <td>{{ $cat->weight }}</td>
        <td>{{ $cat->age }}</td>
        @if($cat->gender)
          <td>{{ $cat->gender->gender }}</td>
        @else
          <td>N</td>
        @endif
        @if($cat->colors)
          <td>
          @foreach($cat->colors as $color)
            {{ $color->color }}
          @endforeach
          </td>
        @else
          <td>Transparent</td>
        @endif
        <td>
          <form class="delete_form" method="GET" action="/cat/delete/{{$cat->id}}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-warning">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
          </form>
        </td>
        <td>
          <form class="update_form" method="GET" action="/cat/update/{{$cat->id}}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-warning">
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
