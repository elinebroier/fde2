@extends('layout')

@section('content')

    <h1>New grade</h1>

    <form method="POST" action="/grades">
        @csrf

        <label for="course_name">Course name:</label><br>

        <input class="@error('course_name') is-danger @enderror"
               type="text"
               id="course_name"
               name="course_name"
               value="{{ old('course_name') }}">
        @error('course_name')
        <p class="is-danger">{{ $errors->first('course_name') }}</p>
        @enderror

        <br>

        <label for="test_name">Test name:</label><br>
        <input
            class="@error('test_name') is-danger @enderror"
            type="text"
            id="test_name"
            name="test_name"
            value="{{ old('test_name') }}">
        @error('test_name')
        <p class="is-danger">{{ $errors->first('test_name') }}</p>
        @enderror

        <br>

        <label for="lowest_passing_grade">Lowest passing grade:</label><br>
        <input
            class="@error('lowest_passing_grade') is-danger @enderror"
            type="number"
            id="lowest_passing_grade"
            name="lowest_passing_grade"
            value="5.5"
            value="{{ old('lowest_passing_grade') }}">
        @error('lowest_passing_grade')
        <p class="is-danger">{{ $errors->first('lowest_passing_grade') }}</p>
        @enderror

        <br>

        <label for="best_grade">Best grade, between 0.0 and 10.0:</label><br>
        <input
            class="@error('best_grade') is-danger @enderror"
            type="number"
            id="best_grade"
            name="best_grade"
            min="0.0"
            max="10.0"
            value="{{ old('best_grade') }}">
        @error('best_grade')
        <p class="is-danger">{{ $errors->first('best_grade') }}</p>
        @enderror
        <br><br>

        <input type="submit" value="Submit">
    </form>

@endsection

<!--    validate the lowest_passing_grade and best_grade attributes as a number between 0 and 10    -->
