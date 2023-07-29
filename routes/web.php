<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\AdminPost;
use App\HTTP\Controllers\AuthorController;
use App\HTTP\Controllers\CommentController;
use App\HTTP\Controllers\ImageController;
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


/*Route::get('/home', function () {
    return view('master');
});*/
Route::resource('/posts', PostController::class);
Route::resource('/', PostController::class);

Route::get('admin',function(){
    return view('admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('admin/dashboard/adminposts', AdminPost::class);
    Route::get('admin/dashboard/adminposts/{post}/show', [PostController::class, 'showData'])->name('posts.showData');
    Route::get('admin/dashboard/adminposts/{post}/confirm', [PostController::class, 'confirmDelete'])->name('posts.confirm');
   
    Route::get('admin/dashboard/adminimages/showAll', [ImageController::class,'showAll'])->name('adminimages.showAll');
    Route::get('admin/dashboard/adminimages/uploadImage', [ImageController::class,'uploadImage'])->name('adminimages.uploadImage');
    Route::POST('admin/dashboard/adminimages/uploadImage/saveImage',[ImageController::class,'saveImage'])->name('adminimages.saveImage');
    Route::get('admin/dashboard/adminimages/showImage/{image}',[ImageController::class,'showImage'])->name('adminimages.showImage');
    Route::get('admin/dashboard/adminimages/deleteImage/{image}',[ImageController::class,'confirmDeleteImage'])->name('adminimages.confirmDeleteImage');
    Route::post('admin/dashboard/adminimages/deleteImage/{image}/confirm',[ImageController::class,'deleteImage'])->name('adminimages.deleteImage');
    Route::get('admin/dashboard/adminimages/editImage/{image}',[ImageController::class,'editImage'])->name('adminimages.editImage');
    Route::post('admin/dashboard/adminimages/editImage/{image}/confirm',[ImageController::class,'updateImage'])->name('adminimages.updateImage');
});

