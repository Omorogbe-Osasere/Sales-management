<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('admin.addcustomer');
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
            'customersname'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phonenumber'=>'required|max:255',
            'gender'=>'required|max:255',
            'birthday'=>'required|max:255',
            'address'=>'required|max:255',
    
         ]);
         Customer::Create([
            'customersname'=>$request->customersname,
             'email'=>$request->email,
              'phonenumber'=>$request->phonenumber,
              'gender'=>$request->gender,
              'birthday'=>$request->birthday,
              'address'=>$request->address,
         ]);

         return redirect('admin/viewcustomers')->with('message','Customer Added Successfully');
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
        $data = Customer::Paginate(5);
        return view('admin.viewcustomers', compact('data'));
      
    }

    

    public function see(){
        return view('admin.edit2');
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
        $data = Customer::findOrFail($id);
        return view('admin.editcustomer',compact('data'));
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
        $data = Customer::find($id);
        $data -> customersname= $request->input('customersname');
        $data -> email= $request->input('email');
        $data -> phonenumber= $request->input('phonenumber');
        $data -> gender= $request->input('gender');
        $data -> birthday= $request->input('birthday');
        $data -> birthday= $request->input('address');
        $data->update();
        return redirect('admin/viewcustomers')->with('message','Customer Updated Successfully');

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
        $data = Customer::find($id);
        $data->delete();
        return redirect('admin/viewcustomers')->with('message','Customer Deleted Successfully');

    }
}
