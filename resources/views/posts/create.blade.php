@extends('layout')
<title>Create New Post | TopTop</title>
@include('headers')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <input type="text" name="title" placeholder="Title" class="w-full p-2 border rounded mb-2"> <br />
            <textarea name="content" placeholder="Content" class="w-full p-2 border rounded mb-2" ></textarea> <br />
            <button type="submit" class="text-blue-500 text-black px-4 py-2 rounded">Create</button>
        </form>
    </div>
@endsection
