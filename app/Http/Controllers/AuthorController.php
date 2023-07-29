<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = Author::all();
        
        // Truy xuất thông tin tác giả của bài viết
       
       return view('adminauthors.index', ['authors' => $authors]);
  
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
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete(Author $author)
    {
        return view('adminauthors.confirm', compact('author'));
    }
    public function destroy(Author $author)
    {
        //
        Post::where('author_id', $author->author_id)->update(['author_id' => 0]);
        $author->delete();
        return redirect()->route('adminauthors.index')->with('success', 'Xóa tác giả thành công');
       
     
    }
   
}
