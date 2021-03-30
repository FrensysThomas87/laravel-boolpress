@extends('templates.base')

@section('title', 'post-create')

@section('create-post-content')

<form action="{{route('posts.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Post Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il titolo del post" name="title">
    </div>
    <div class="form-group">
      <label for="author_id">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1" name="author_id">
        @foreach ($authors as $author )
            <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tag_name">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1" name="tag_name">
        @foreach ($tags as $tag)
            <option value="{{}}">1</option>
        @endforeach


        </select>
      </div>

    <div class="form-group">
      <label for="text">Testo del post</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
