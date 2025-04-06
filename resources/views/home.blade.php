@extends('layout')
@include('headers')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="position-relative mb-3">
                    <h1 class="text-3xl font-bold mb-4">Latest Post</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($posts as $post)
                            <div class="bg-white p-4 rounded-lg shadow-md">
                                @if($post->image)
                                <img src="{{ url('storage/'.$post->image) }}" alt="" title=""style="width:30%; height:20%" class="object-cover mb-4 rounded-lg">
                                @endif
                                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                                <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 mt-2 inline-block">Read More</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-6">{{ $posts->links() }}</div>
                    
                </div>
            </div>
            <div class="col-lg-4 pt-3 pt-lg">
                <div class="mt-6">
                    <h2 class="text-2xl font-bold mb-4">Previous Posts</h2>
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

