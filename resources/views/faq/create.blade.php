@extends('layout')

@section('content')

    <h1>Create a new question</h1>

    <form method="POST" action="/faq">
        @csrf

        <label for="question">Question:</label><br>

        <input class="@error('question') is-danger @enderror"
            type="text"
            id="question"
            name="question"
            value="{{ old('question') }}">
        @error('question')
        <p class="is-danger">{{ $errors->first('question') }}</p>
        @enderror

        <br>

        <label for="answer">Answer:</label><br>
        <input
            class="@error('answer') is-danger @enderror"
            type="text"
            id="answer"
            name="answer"
            value="{{ old('answer') }}">
        @error('answer')
        <p class="is-danger">{{ $errors->first('answer') }}</p>
        @enderror
        <br><br>

        <input type="submit" value="Submit">
    </form>

@endsection
