@extends('templates.base')

@section('title', 'Posts')

@section('posts-content')
@foreach ($posts as $post )
    @if($post->img !== null)
    {{-- @dd($post->img) --}}
    <img src="{{ asset($post->img) }}" />
    @endif
@endforeach

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        <th scope="col">Tags</th>
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
        <td>
        @foreach ($post->tags as $tag )
            {{$tag->tag_name}}
        @endforeach
        </td>
        <td>{{$post->created_at}}</td>
      </tr>
    @endforeach

@endsection
