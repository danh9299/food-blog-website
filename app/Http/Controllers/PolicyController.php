<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $policies = Policy::all();
        return view('policy.index',['policies'=>$policies]);
    
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Policy $policy)
    {
        //
        $policy = Policy::find(1);
        return view('policy.edit',['policy'=>$policy]);
   

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Policy $policy)
    {
        //
        $request->validate([
        
            'id' => 'required',
            'policy' => 'required',
           
            
        ]);

        $policy = Policy::find($request->hidden_id);
        $policy->id = $request->id;
      
        $policy->policy = $request->input('policy');
      
        $policy->save();
      
     

        // Chuyển hướng về trang danh sách tạp chí
        return redirect()->route('policy.edit')->with('success', 'Cập nhật nội dung thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Policy $policy)
    {
        //
    }
}
