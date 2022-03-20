@extends('layouts.app')

@section('title','Create new User')

@section('content')

<h1>Novo usuário</h1>

<form method="post" action="{{route('user.createUser')}}" >
  @include('user.components.form')
</form>

@endsection
