@extends('layout')
<title>{{ $post->title}} | TopTop</title>
@include('headers')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="postion-relative mb-3">
                <div class="max-w-4xl mx-auto px-4">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-64 object-cover mb-4 rounded-lg">
                    @endif
                    <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
                    <p class="text-gray-700">{{ $post->content }}</p>
                    <a href="{{ url('/') }}" class="text-blue-500 mt-4 inline-block">Back to Home</a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 pt-lg">
            <div class="mt-6">
                <h2 class="text-2xl font-bold mb-4">
                    Previous Post
                </h2>
                <div class="bg-gray-100 p-4 rounded-lg">
                    @foreach($recentPosts as $post)
                        <div class="mb-3">
                            <a href="{{ route('posts.show', $post->id) }}" class="text-lg text-blue-500">{{ $post->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection