@extends('layout')

@section('content')
    <title>Dashboard</title>

    <h2>Study Monitor</h2>

    <table>
        <tr>
            <!--<th>Block</th>-->
            <th>Course name</th>
            <!--<th>EC</th>-->
            <th>Test name</th>
            <th>Lowest passing grade</th>
            <th>Best grade</th>
        </tr>

     @foreach($grades as $grade)

            <h3 href="{{ $grade->path() }}"></h3>
            <!--'course_name', 'test_name', 'best_grade'-->
        <tr>
           <!-- <td> $grade->block </td> -->
            <td>{{ $grade->course_name }}</td>
            <!-- <td> $grade->EC </td> -->
            <td>{{ $grade->test_name }}</td>
            <td>{{ $grade->lowest_passing_grade }}</td>
            <td>{{ $grade->best_grade }}</td>

            <td><button><a href="/grades/{{ $grade->id }}/edit">Edit</a></button></td>

            <td><form method="POST" action="/grades/{{ $grade->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form></td>


        </tr>
    @endforeach

@endsection
