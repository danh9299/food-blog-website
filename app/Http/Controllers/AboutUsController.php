<?php

namespace App\Http\Controllers;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //

    public function index(){
        $aboutus_infos = AboutUs::all();
        return view('aboutus.index',['aboutus_infos'=>$aboutus_infos]);
    }
   
    public function edit(){
        $aboutus_info = AboutUs::find(1);
        return view('aboutus.edit',['aboutus_info'=>$aboutus_info]);
    }
    public function update(Request $request, AboutUs $aboutus_info){
        $request->validate([
        
            'id' => 'required',
            'content' => 'required',
           
            
        ]);

        $aboutus_info = AboutUs::find($request->hidden_id);
        $aboutus_info->id = $request->id;
      
        $aboutus_info->content = $request->input('content');
      
        $aboutus_info->save();
      
     

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('aboutus.edit')->with('success', 'Cập nhật nội dung thành công');

    }
}
