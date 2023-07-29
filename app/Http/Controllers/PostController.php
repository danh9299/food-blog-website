<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        
        // Truy xuất thông tin tác giả của bài viết
       
       return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }
    // Show Data in the admin pages
    public function showData(Post $post)
    {
        //
        
        return view('adminposts.show', compact('post'));
    }
    /*Show data in admin pages*/
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete(Post $post)
    {
        return view('adminposts.confirm', compact('post'));
    }
    public function destroy(Post $post)
    {
        //
        $post->delete();

        return redirect()->route('adminposts.index')->with('success', 'Xóa thành công');
    }
    

   
}