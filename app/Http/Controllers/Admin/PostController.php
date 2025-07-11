<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

use App\Http\Requests\updatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view(
            'Admin.Post.Posts',
            compact('posts')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Post.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('post_image', 'public');
            $inputs['image'] = $imagePath;
        }
        Post::create($inputs);
        return redirect()->route('admin.posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Admin.Post.Edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updatePostRequest $request, Post $post)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $image = $request->file('image');
            $imagePath = $image->store('post_image', 'public');
            $inputs['image'] = $imagePath;
        }
        $post->update($inputs);
        return redirect()->route('admin.posts');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();
        return redirect()->back();
    }
}
