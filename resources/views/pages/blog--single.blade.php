@extends('layouts.main')

@section('my_content')

<h1>{{$my_one_post->title}}</h1>
<p>{{$my_one_post->body}}</p>

@endsection
