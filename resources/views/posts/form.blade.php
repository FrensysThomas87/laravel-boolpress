
@php

if(isset($edit) && !empty($edit)){
    $url = route('posts.update', compact('post'));
    $method = 'PUT';
}else{
    $url = route('posts.store');
    $method = 'POST';
}

@endphp



<form action="{{$url}}" method="post">
    @csrf
    @method($method)
    <div class="form-group">
      <label for="title">Post Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il titolo del post" name="title" value="{{isset($post) ? $post->title : ''}}">
    </div>
    <div class="form-group">
      <label for="author_id"></label>
        <select class="form-control" id="exampleFormControlSelect1" name="author_id">
        @foreach ($authors as $author )
            <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tags[]">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2" name="tags[]">
         @foreach ($tags as $tag )
         <option value="{{$tag->id}}">{{$tag->tag_name}}</option>

         @endforeach

        </select>
      </div>

    <div class="form-group">
      <label for="text">Testo del post</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" value="{{isset($post) ? $post->text : ''}}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
