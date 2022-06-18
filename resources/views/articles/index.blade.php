@extends('layout')

@section('content')

    <button class="button button1"> <a href="{{ route('articles.create') }}">New article</a></button>

    @foreach($articles as $article)
    <h2>
        <a href="{{ $article->path() }}">
            {{$article->title}}
            &nbsp;
            <button><a href="{{ route('articles.edit', $article->id) }}">Edit</a></button>
        </a>
    </h2>
    {{ $article->excerpt }}
    @endforeach



@endsection
