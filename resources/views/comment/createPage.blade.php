@extends('layouts.app')

@section('title','Create new Comment')

@section('content')

<h1>New Comment</h1>

<form method="post" action="{{route('comment.createComment')}}" >
  @include('comment.includes.commentForm')
</form>

@endsection
