@extends('layout')
<title>Create New Post | TopTop</title>
@include('headers')
@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Create a New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Title:</label>
                <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Content:</label>
                <textarea name="content" class="w-full px-4 py-2 border rounded-lg" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image:</label>
                <input type="file" name="image"  class="w-full px-4 py-2 border rounded-lg">
            </div>
            <button type="submit" class="bg-blue-500 text-black btn px-4 py-2 rounded-lg">Submit</button>
        </form>
    </div>
@endsection
