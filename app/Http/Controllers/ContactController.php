<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::all();
        return view('contact.index',['contacts'=>$contacts]);
    }
    public function edit(){
        $contact = Contact::find(1);
        return view('contact.edit',['contact'=>$contact]);
    }
    public function update(Request $request, Contact $contact){
        $request->validate([
        
            'id' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
           
            
        ]);

        $contact = Contact::find($request->hidden_id);
        $contact->id = $request->id;
      
        $contact->address = $request->address;

        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->save();
      
     

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('contact.edit')->with('success', 'Cập nhật nội dung thành công');

    }
}