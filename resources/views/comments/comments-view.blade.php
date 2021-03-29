@extends('authors.templates.base')

@section('title', 'Comments')

@section('comments-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Post's Author</th>
        <th scope="col">Text</th>
        <th scope="col">Created At</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($comments as $comment)
     <tr>
        <th scope="row">{{$comment->id}}</th>
        <td>{{$comment->post->author->name}} {{$comment->post->author->surname}}</td>
        <td>{{$comment->text}}</td>
        <td>{{$comment->created_at}}</td>
      </tr>
     @endforeach


@endsection
