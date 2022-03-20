@extends('layouts.app')
@section('title','Listagem usuário')


@section('content')


<form action="{{route('user.getAll')}}" method="get">
<input type="text" name="search" placeholder="Search">
<button>Search</button>
</form>


@foreach ($users as $user )
    <li>
        {{$user->name}} - {{$user->email}}
        <a href="{{route('user.getUser',['id'=>$user->id])}}"> Details </a>

    </li>

@endforeach
<a href="{{route('user.createPage') }}"> + </a>
@endsection


</ul>
