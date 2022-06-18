@extends('layout')

@section('content')
@foreach($articles as $article)

    <li>
        <h3>{{ $article->title }}</h3>
        <p><a href="/articles/{{$article->id}}">{{ $article->excerpt }}</a></p>
    </li>
@endforeach

@endsection

