@extends('layouts.base')
@section('title', 'Creation')
@section('main')
  {!! Form::open(['url' => '/cat/insert', 'class' => 'insertForm']) !!}
      <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('name') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Taille') }}}
      {{{ Form::number('size') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Poids') }}}
      {{{ Form::number('weight') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Age') }}}
      {{{ Form::number('Age') }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Sexe') }}}
      {{{ Form::select('gender', $genders) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Couleur') }}}
      {{{ Form::select('colors[]', $colors, 0, ['multiple' => true]) }}}
    </div>
    {{{ Form::submit('Inserer un chat') }}}
  {!! Form::close() !!}
@endsection
