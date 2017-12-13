@extends('layouts.base')
@section('title', 'Update')
@section('main')
  {!! Form::open(['url' => '/cat/update', 'class' => 'insertForm']) !!}
      {{{ Form::hidden('id', $cat->id)}}}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name', $cat->name) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('size', $cat->size) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids') }}}
      {{{ Form::number('weight', $cat->weight) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('Age', $cat->age) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders, $cat->gender->id) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('colors[]', $colors, $cat->colors, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('updater un chat') }}}
  {!! Form::close() !!}
@endsection
