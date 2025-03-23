@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $post->title }}" class="w-full p-2 border rounded mb-2">
            <textarea name="content" class="w-full p-2 border rounded mb-2">{{ $post->content }}</textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection