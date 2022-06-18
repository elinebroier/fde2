@extends('layout')

@section('content')

    <h1>New Article</h1>

    <form method="POST" action="/articles">
        @csrf
        <label for="title">Title</label><br>
        <input
            class="@error('title') is-danger @enderror"
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}">
        @error('title')
            <p class="is-danger">{{ $errors->first('title') }}</p>
        @enderror
        <br>

        <label for="excerpt">Excerpt</label><br>
        <input
            class="@error('excerpt') is-danger @enderror"
            type="text"
            id="excerpt"
            name="excerpt"
            value="{{ old('excerpt') }}">
        @error('excerpt')
        <p class="is-danger">{{ $errors->first('excerpt') }}</p>
        @enderror
        <br>

        <label for="body">Body</label><br>
        <input class="@error('body') is-danger @enderror"
               type="text" id="body"
               name="body"
               value="{{ old('body') }}">
        @error('body')
        <p class="is-danger">{{ $errors->first('body') }}</p>
        @enderror
        <br><br>

        <input type="submit" value="Submit">
    </form>

@endsection
