@extends('layouts.app')

@section('title','edit User')

@section('content')

<h1>Edit usuário</h1>

<form method="post" action="{{route('user.editUser', $user->id)}}" >
    @method('PATCH')
    @include('user.components.form')
</form>

@endsection
