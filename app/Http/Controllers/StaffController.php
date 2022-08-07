<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\staff;
use Illuminate\Support\Facades\Hash;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addstaff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'staffname'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phonenumber'=>'required|max:255',
            'gender'=>'required|max:255',
            'birthday'=>'required|max:255',
            'address'=>'required|max:255',
             'password'=>'required|confirmed',
             'role'=>'required',
             'position'=>'required|max:255',
         ]);

         staff::Create([
            'staffname'=>$request->staffname,
            'email'=>$request->email,
             'phonenumber'=>$request->phonenumber,
             'gender'=>$request->gender,
             'birthday'=>$request->birthday,
             'address'=>$request->address,
             'password'=>Hash::make($request->password),
             'position'=>$request->position,
             'role'=>$request->role,
             
         ]);
       
          return redirect('admin/viewstaff')->with('message','Staff Successfully Added');
          

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = Staff::latest()->paginate(4);
        return view ('admin.viewstaff',compact('data'));
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
        $data = Staff::find($id);
        return view('admin.editstaff',compact('data'));
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
        $data = Staff::find($id);
        $data -> staffname= $request->input('staffname');
        $data -> email= $request->input('email');
        $data -> phonenumber= $request->input('phonenumber');
        $data -> gender=$request->input('gender');
        $data -> birthday = $request->input('birthday');
        $data -> address = $request->input('address');
        $data -> position = $request->input('position');
        $data -> role = $request->input('role');

      
        $data->update();
        return redirect('admin/viewstaff')->with('message','Updated Successfully');
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
        $data = Staff::find($id);
        $data->delete();
        return redirect('admin/viewstaff')->with('message','Staff Deleted Successfully');
    }
}
