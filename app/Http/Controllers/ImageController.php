<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /*Show Image*/
    public function showImage(Image $image){
        return view('adminimages.showImage',compact('image'));
    }
    /*Show all images in the db*/
    public function showAll(){
        $images = Image::all();
        return view('adminimages.showAll',['images' => $images]);
    }
     /*Show the form to upload image*/
     public function uploadImage()
     {
         return view('adminimages.uploadImage');
     }
 
     /*store the image to the db*/
     public function saveImage(Request $request)
     {
         // Validate the uploaded image
       
         if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            // Get the uploaded image file
            $imageFile = $request->file('image');
    
            // Generate a unique name for the image
            $imageName = $imageFile->getClientOriginalName();
    
            // Store the image in the desired directory
            
            $location = public_path('assets/images');

            $imageFile->move($location, $imageName);

            // Update the image_name field in the database
            // Assuming you have an 'Image' model associated with the 'images' table
            $image = new Image();
            $image->image_name = $imageName;
            $image->save();
            
             // Update the image_name field in the database
             // Assuming you have an 'Image' model associated with the 'images' table
             
     
             return redirect()->back()->with('success', 'Ảnh đã được tải lên thành công!');
         }
 
         // Nếu không có file ảnh được upload, thông báo lỗi
         return redirect()->back()->with('error', 'Bạn chưa chọn ảnh để tải lên.');
     }
    public function confirmDeleteImage(Image $image){
        return view('adminimages.confirmDeleteImage',compact('image'));
    }
    public function deleteImage(Image $image){
        
        $image->delete();
        
        
        return redirect()->route('adminimages.showAll')->with('success', 'Xóa thành công');
    }
}
