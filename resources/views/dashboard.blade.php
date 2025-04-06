@extends('layout')
<title>Dashboard | TopTop</title>
@include('headers')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="max-w-6xl mx-auto">
                    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
                    <a href="{{ route('posts.create') }}" class="pin text-white px-4 py-2 rounded">Add New Post</a>
                </div>
            </div>
                <div class="col-lg-8">
                    <div class="mt-6 mb-4">
                        <h2 class="text-2xl font-semibold mb-4">Manage Posts</h2>
                        <table class="w-full bg-white shadow-md rounded">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700">
                                    <th class="p-3">Title</th>
                                    <th class="p-3">Content</th>
                                    <th class="p-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                 <!-- @foreach($posts as $post) 
                                    <tr class="border-b">
                                        <td class="p-3">{{ $post->title }}</td>
                                        <th class="p-3">{{ Str::limit($post->content, 10) }}</td>
                                        <td class="p-3">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                 @endforeach  -->
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection