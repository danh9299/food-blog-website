<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialNetwork;
class SocialNetworkController extends Controller
{
    //
    public function index()
    {
        //
        $socialnetwork = SocialNetwork::all();
       
        // Truy xuất thông tin tác giả của bài viết
       
       return view('socialnetwork.index', ['socialnetwork' => $socialnetwork]);
    }

    /* Trả về đối tượng socialnetwork chứa id = 1. Vào function boot trong AppServiceProvider
    để trả về view footer*/
    public function toHomeFooter()
    {
    $socialnetwork = SocialNetwork::where('id', 1)->first();
   
   
   
    return $socialnetwork;
    }

    //Trả về view edit
    public function edit(SocialNetwork $socialnetwork){
        return view('socialnetwork.edit',compact('socialnetwork'));
    }
    public function update(Request $request, SocialNetwork $socialNetwork)
    {
        //
        $request->validate([
            'id' => 'required',
            'Facebook' => 'required',
            'Github' => 'required',
            'Instagram' => 'required',
          
            
        ]);
     

        
        $socialnetwork = SocialNetwork::find($request->hidden_id);
        
        
        
        $socialnetwork->id = $request->id;
        $socialnetwork->Facebook = $request->Facebook;
        $socialnetwork->Github = $request->Github;
        $socialnetwork->Instagram = $request->Instagram;
        $socialnetwork->save();
      
     

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('socialnetwork.index')->with('success', 'Cập nhật Mạng Xã Hội thành công');

    }
}