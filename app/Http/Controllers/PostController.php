<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'image_path' => 'required'
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->image_path = $request->image_path;
        $post->user_id = Auth::User()->id;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $posts = Post::find($id);
        if($posts->user_id != Auth::user()->id){
            abort(403);
        }
        return view('posts.edit', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::find($id);
        if($posts->user_id != Auth::user()->id){
            abort(403);
        }

        $request->validate([
            'content' => 'required',
            'image_path' => 'required'
        ]);

        $posts->content = $request->content;
        $posts->image_path = $request->image_path;
        $posts->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
