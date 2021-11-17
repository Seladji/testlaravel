@extends('layouts.app')

@section('content')
<h1>Créer un nouveau post</h1>
<form method="POST" action="{{route('posts.store')}}">
    @csrf
      <input type="text" name="title">
      <textarea name="content" id="" cols="30" rows="10"></textarea>
      <textarea name="comment" id="" cols="30" rows="10"></textarea>
      <button type="submit">créer</button>
</form>
    
@endsection