<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    /**
     * Display the admin dashboard page
     */
    public function dashboard() {
        $posts = Post::all();
        return view('dashboard', [
            'posts' => $posts]);
    }
    // Display home page
    public function home(): View
    {
        $posts = Post::all();
         
        return view('home', [
            'posts' => $posts
        ]);
    }
    // Display the post index page
    public function index() {
        $posts = Post::latest()->paginate(3); // Use paginate() instead of all()
        $recentPosts = Post::latest()->skip(4)->take(3)->get(); // Keep recent posts
        return view('home', compact('posts', 'recentPosts'));
    }
    

    /**
     * Display requested post
     */
    public function post(string $id): View
    {
        $posts = Post::find($id);

        $related_posts = Post::where('title')->where('id', '!=', $posts->id)->take(3)->get();

        return view('post', [
            'post' => $posts,
            
            'related_posts' => $related_posts
        ]);
    }

    /**
     * Display search result
     */
    public function search(Request $request): View
    {
        $key = $request->input('q');
        $posts = Post::where('title', 'like', "%{$key}%")->orderBy('id', 'desc')->paginate(env('PAGINATE_NUM'));
        

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            
        ]);
    }

   
    public function show(Post $post) {
        $posts = Post::latest();
        $recentPosts = Post::latest()->skip(4)->take(3)->get();
        return view('posts.show', compact('post', 'recentPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $title = $request->input('title');
        $content = $request->input('content');
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->image = $imagePath ?? 'default.jpg';

        $user = Auth::user();
        $post->user()->associate($user);

        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }
    
  
    public function edit(string $id): View
    {
        $posts = Post::all()->find($id);
        

        return view('posts.edit', [
            'post' => $posts,
         
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $post = Post::all()->find($id);

        // Get the data from the request
        $title = $request->input('title');
        $content = $request->input('content');
        // $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
       

        // Update post info
        $post->title = $title;
        $post->content = $content;
       

        // Save the cover image (if updated)
        if ($request->file('cover')) {
            $path = $request->file('cover')->store('cover', 'public');
            $post->cover = $path;
        }

       

        // Save post
        $post->save();

        


        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $post = Post::all()->find($id);

        $post->delete();

        return redirect()->route('dashboard');
    }
}
