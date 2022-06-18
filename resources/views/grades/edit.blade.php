@extends('layout')

@section('content')

    <h1>Update a grade</h1>

    <form method="POST" action="/grades/{{ $grade->id }}">
        @csrf
        @method('PUT')

        <label for="lowest_passing_grade">Lowest passing grade:</label><br>
        <input type="number" id="lowest_passing_grade" name="lowest_passing_grade" value="5.5" value="{{ $grade->lowest_passing_grade }}"><br>
        <label for="best_grade">Best grade, between 0.0 and 10.0:</label><br>
        <input type="number" id="best_grade" name="best_grade" min="0.0" max="10.0" value="{{ $grade->best_grade }}">
        <br><br>
        <button type="submit">Submit</button>
    </form>


    <form method="POST" action="/grades/{{ $grade->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
