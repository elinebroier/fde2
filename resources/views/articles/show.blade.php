@extends('layout')


@section('content')

<h1>Article</h1>
<h2>{{$article->title}}</h2>
<p>{{$article->body}}</p>

@endsection
