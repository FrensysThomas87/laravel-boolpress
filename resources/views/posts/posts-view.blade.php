@extends('templates.base')

@section('title', 'Posts')

@section('posts-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        <th scope="col">Created At</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post )
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->author->name}} {{$post->author->surname}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->text}}</td>
        <td>{{$post->created_at}}</td>
      </tr>
    @endforeach

@endsection
