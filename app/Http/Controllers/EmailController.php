<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $emails = Email::all();
        return view('reader-emails.index',['emails'=>$emails]);
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
        $request->validate([
        
         
            'email' => 'required|email',
          
            
        ]);

        $existingEmail = Email::where('email', $request->email)->first();

         if ($existingEmail) {
            // Email already exists, so we'll just redirect without saving it again
            return redirect()->route('posts.index')->with('success', 'Đăng ký email thành công');
            }


        $email = new Email;
        $email->email = $request->email;
      
        $email->save();
        return redirect()->route('posts.index')->with('success','Đăng ký email thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
        $email->delete();

        return redirect()->route('reader-emails.index')->with('success', 'Xóa thành công');
    }
    public function confirm(Email $email)
    {
        return view('reader-emails.confirm',compact('email'));
        //
    }
}