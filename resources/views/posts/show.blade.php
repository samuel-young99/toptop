@extends('layout')
@include('headers')
@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-700">{{ $post->content }}</p>
        <a href="{{ url('/') }}" class="text-blue-500 mt-4 inline-block">Back to Home</a>
    </div>
@endsection