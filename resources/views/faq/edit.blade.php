@extends('layout')

@section('content')

    <h1>Update a question</h1>

    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('PUT')

        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" value="{{ $faq->question }}"><br>
        <label for="answer">Answer:</label><br>
        <input type="text" id="answer" name="answer" value="{{ $faq->answer }}"><br><br>
        <input type="submit" value="Submit">
    </form>

    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
