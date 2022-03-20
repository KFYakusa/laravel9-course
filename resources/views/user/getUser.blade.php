@extends('layouts.app')

@section('title',$user->name)

@section('content')

<ul>
    <li> {{$user->name}}   </li>
    <li>  {{$user->email}}  </li>
    {{-- <li>  {{$user->}}  </li> --}}
    <button><a href="{{route('user.editPage',['id'=>$user->id])}}"> Edit </a>    </button>



</ul>

<form action="{{route('user.deleteUser',$user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>
@endsection

