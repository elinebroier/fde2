@extends('layout')

@section('content')

    @foreach($faqs as $faq)

       <h3 href="{{ $faq->path() }}"></h3>
       <h3>{{$faq->question}}</h3>
       <a>{{$faq->answer}}</a>

    @endforeach

@endsection
