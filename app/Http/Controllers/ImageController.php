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
     // show form for Edit the image
     public function editImage(Image $image){
        return view('adminimages.editImage',compact('image'));
     }
    // Update new image name in the db
    public function updateImage(Request $request, Image $image){
        
        $request->validate([
        
            'id' => 'required',
            'image_name' => 'required',
        ]);
        $image = Image::find($request->id);


        $oldName = $image->image_name;
        $newName = $request->image_name;

        rename(public_path('assets/images/'.$oldName), public_path('assets/images/'.$newName));
        $image->image_name = $request->image_name;
        $image->save();
        return redirect()->route('adminimages.showAll')->with('done', 'Cập nhật tên ảnh thành công');
    }


     // Confirm delete image form
    public function confirmDeleteImage(Image $image){
        return view('adminimages.confirmDeleteImage',compact('image'));
    }
    // Delete image
    public function deleteImage(Image $image){
        
        $image->delete();
        
        
        return redirect()->route('adminimages.showAll')->with('success', 'Xóa thành công');
    }
}
