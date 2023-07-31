<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
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
        $authors = Author::all();
        $images = Image::all();
        // Truy xuất thông tin tác giả của bài viết
       
       return view('adminposts.create', ['authors' => $authors, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        
         
            'title' => 'required',
            'date_posted' => 'required',
            'author_id' => 'required',
            'image_id' => 'required',
            
        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->meta = $request->meta;
        $post->content = $request->content;
        $post->date_posted = $request->date_posted;
        $post->author_id = $request->author_id;
        $post->image_id = $request->image_id;
        $post->save();
        return redirect()->route('adminposts.index')->with('success','Thêm mới tác giả thành công');
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
        $post->date_posted = Carbon::parse($post->date_posted)->toDateString();
        $authors = Author::all();
        $images = Image::all();
        // Truy xuất thông tin tác giả của bài viết
       
       return view('adminposts.edit',  compact('post', 'authors', 'images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
        
            'post_id' => 'required',
            'title' => 'required',
            'date_posted' => 'required',
            'author_id' => 'required',
            'image_id' => 'required',
            
        ]);

        $post = Post::find($request->hidden_id);
        $post->post_id = $request->post_id;
        $post->title = $request->title;
        $post->meta = $request->input('meta');
        $post->content = $request->input('content');
        $post->date_posted = $request->input('date_posted');
        $post->author_id = $request->author_id;
        $post->image_id = $request->image_id;
        $post->save();
      
     

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('adminposts.index')->with('success', 'Cập nhật tác giả thành công');

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
    
    public function showListRecentPosts(){
        $posts = Post::all();
       
        return view('posts.list-recent-posts',['posts' => $posts]);
    }
   
}