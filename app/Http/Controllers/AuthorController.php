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
        return view('adminauthors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        
         
            'username' => 'required',
            'email' => 'required|email|unique:authors,email',
        ]);
        $author = new Author;
        $author->author_id = $request->author_id;
        $author->username = $request->username;
        $author->email = $request->email;
        $author->save();
        return redirect()->route('adminauthors.index')->with('success','Thêm mới tác giả thành công');
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
        //somehow this function does return information of authors to the view. 
        //So i create a new check view and check() function below. It works
       
      
    }
    // Show the form to edit info of author
    public function check(Author $author)
    {
        //
       
        return view('adminauthors.check', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
        $request->validate([
        
            'author_id' => 'required',
            'username' => 'required',
            'email' => 'required',
            
        ]);

        $author = Author::find($request->hidden_id);
        $author->author_id = $request->author_id;
        $author->username = $request->username;
        $author->email = $request->email;
      
        $author->save();

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('adminauthors.index')->with('success', 'Cập nhật tác giả thành công');

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
