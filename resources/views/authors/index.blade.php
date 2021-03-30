@extends('templates.base')

@section('title', 'Authors')

@section('index-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email Adress</th>
        <th scope="col">Picture</th>
      </tr>
    </thead>
    <tbody>

      @foreach ( $authors as $author )
      <tr>
        <th scope="row">{{$author->id}}</th>
        <td>{{$author->name}}</td>
        <td>{{$author->surname}}</td>
        <td>{{$author->detail->email_adress}}</td>
        <td><img src="{{$author->detail->pic}}" alt="Picture"></td>
      </tr>
      @endforeach

</table>
@endsection
