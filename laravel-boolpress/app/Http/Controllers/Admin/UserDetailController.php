<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserDetail::all();
        return view ('admin.userdetails.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        // $users = UserDetail::all();

        return view('admin.userdetails.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "name"=>"nullable",
            "address" => "nullable",
            'city' => 'nullable',
            'birth_place' => 'nullable',
            'birthCountry' => 'nullable',

        ]);

        $form_data = $request->all();

        $new_userdetail= new UserDetail();
        $new_userdetail->name = $form_data["name"];
        $new_userdetail->address = $form_data["address"];
        $new_userdetail->city = $form_data["city"]; 
        $new_userdetail->user_id =Auth::user()->id; 

        // $new_userdetail->password = $form_data["province"]; 
        // $new_userdetail->password = $form_data["zip"]; 
       
        $new_userdetail->birthDate = $form_data["birthDate"]; 
        $new_userdetail->birthCountry = $form_data["birthCountry"];         
    
        // $new_userdetail->fill($form_data);
        $new_userdetail->save();
        return redirect()->route('admin.userdetails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
