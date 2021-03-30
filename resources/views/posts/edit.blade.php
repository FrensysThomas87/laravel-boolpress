@extends('templates.base')

@section('title', 'post-edit')

@section('edit-post-content')
@include('posts.form', ['edit' => true])
@endsection

