@extends('layout')

@section('content')

    <form method="get" action="/faq/create">
        <button type="submit">Ask a question</button>
    </form>

    @foreach($faqs as $faq)

        <h3> <a href="/faq/{{$faq->id}}">{{$faq->question}}</a> </h3>
       <a>{{$faq->answer}}</a>

    @endforeach

@endsection
