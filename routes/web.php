<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\AdminPost;
use App\HTTP\Controllers\AuthorController;

use App\HTTP\Controllers\ImageController;
use App\HTTP\Controllers\EmailController;
use App\HTTP\Controllers\SocialNetworkController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Client pages
Route::resource('/posts', PostController::class);
Route::resource('/', PostController::class);
Route::resource('/home', PostController::class);
Route::get('/list-recent-posts', [PostController::class,'showListRecentPosts'])->name('posts.list-recent-posts');

// Route cho partials/footer nằm trong AppServiceProvider, function boot

// Access admin page
Route::get('admin',function(){
    return view('admin');
});

//Email subscribe for users
Route::get('/subscribe',[EmailController::class,'store'])->name('reader-emails.store');

//404 page
Route::get('/404',function(){
    return view('404');
})->name('404.info');


//About Us
Route::get('/about-us',[AboutUsController::class,'index'])->name('aboutus.index');

// Contact
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

// Authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    // Route for dashboard
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route for Posts in admin
    Route::resource('admin/dashboard/adminposts', AdminPost::class);
    Route::get('admin/dashboard/adminposts/{post}/show', [PostController::class, 'showData'])->name('adminposts.showData');
    Route::get('admin/dashboard/adminposts/{post}/confirm', [PostController::class, 'confirmDelete'])->name('adminposts.confirm');
   
    // Route for images
    Route::get('admin/dashboard/adminimages/showAll', [ImageController::class,'showAll'])->name('adminimages.showAll');
    Route::get('admin/dashboard/adminimages/uploadImage', [ImageController::class,'uploadImage'])->name('adminimages.uploadImage');
    Route::POST('admin/dashboard/adminimages/uploadImage/saveImage',[ImageController::class,'saveImage'])->name('adminimages.saveImage');
    Route::get('admin/dashboard/adminimages/showImage/{image}',[ImageController::class,'showImage'])->name('adminimages.showImage');
    Route::get('admin/dashboard/adminimages/deleteImage/{image}',[ImageController::class,'confirmDeleteImage'])->name('adminimages.confirmDeleteImage');
    Route::post('admin/dashboard/adminimages/deleteImage/{image}/confirm',[ImageController::class,'deleteImage'])->name('adminimages.deleteImage');
    Route::get('admin/dashboard/adminimages/editImage/{image}',[ImageController::class,'editImage'])->name('adminimages.editImage');
    Route::post('admin/dashboard/adminimages/editImage/{image}/confirm',[ImageController::class,'updateImage'])->name('adminimages.updateImage');

    // Route for authors in admin
    Route::resource('admin/dashboard/adminauthors', AuthorController::class);
    Route::get('admin/dashboard/adminauthors/{author}/confirm', [AuthorController::class, 'confirmDelete'])->name('adminauthors.confirm');
    Route::delete('admin/dashboard/adminauthors/{author}/confirmDelete', [AuthorController::class, 'destroy'])->name('adminauthors.destroy');
    Route::get('admin/dashboard/adminauthors/{author}/check', [AuthorController::class, 'check'])->name('adminauthors.check');
    Route::put('admin/dashboard/adminauthors/{author}/update', [AuthorController::class, 'update'])->name('adminauthors.update');

    // Route for reader Email in admin
    Route::get('admin/dashboard/reader-emails/',[EmailController::class,'index'])->name('reader-emails.index');
   
    Route::get('admin/dashboard/reader-emails/{email}/confirm',[EmailController::class,'confirm'])->name('reader-emails.confirm');
    Route::delete('admin/dashboard/reader-emails/{email}/confirmDelete', [EmailController::class, 'destroy'])->name('reader-emails.destroy');
    

     // Route for Social Network in admin
     Route::get('admin/dashboard/socialnetwork/',[SocialNetworkController::class,'index'])->name('socialnetwork.index');
     Route::get('admin/dashboard/socialnetwork/{socialnetwork}/edit',[SocialNetworkController::class,'edit'])->name('socialnetwork.edit');
     Route::put('admin/dashboard/socialnetwork/{socialnetwork}/updateSocialNetwork',[SocialNetworkController::class,'update'])->name('socialnetwork.update');


     //Route for About Us in admin
     Route::get('admin/dashboard/about-us/edit',[AboutUsController::class,'edit'])->name('aboutus.edit');
     Route::put('admin/dashboard/about-us/{aboutus_info}/update',[AboutUsController::class,'update'])->name('aboutus.update');

     //Route for About Us in admin
     Route::get('admin/dashboard/contact/edit',[ContactController::class,'edit'])->name('contact.edit');
     Route::put('admin/dashboard/contact/{contact}/update',[ContactController::class,'update'])->name('contact.update');

    });

