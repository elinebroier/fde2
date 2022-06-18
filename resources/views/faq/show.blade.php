@extends('layout')


@section('content')

    <h1>FAQ</h1>
    <h2>{{$faq->question}}</h2>
    <p>{{$faq->answer}}</p>

@endsection
