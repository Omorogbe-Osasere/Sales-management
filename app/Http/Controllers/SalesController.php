<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addsales');
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
            'productname'=>'required|max:255',
            'price'=>'required|max:255',
            'quantity'=>'required|max:255',
            'totalprice'=>'required|max:255',

    
         ]);
         Sales::Create([
            'customersname'=>$request->customersname,
             'productname'=>$request->productname,
              'price'=>$request->price,
              'quantity'=>$request->quantity,
              'totalprice'=>$request->totalprice,
         ]);

         return redirect('admin/viewsales')->with('message','Sales Added Successfully');
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
    
        $data = Sales::latest()->Paginate(10);
        return view('admin.viewsales',compact('data'));
        
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
        $data = Sales::find($id);
        return view('admin.editsales',compact('data'));
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
        $data = Sales::find($id);
        $data -> customersname= $request->input('customersname');
        $data -> productname= $request->input('productname');
        $data -> price= $request->input('price');
        $data -> quantity=$request->input('quantity');
        $data -> totalprice = $request->input('totalprice');
      
        $data->update();
        return redirect('admin/viewsales')->with('message','Updated Successfully');
    }

   // public function receipt($id){

        //$data = Sales::find($id);
       // return view('admin.editreceipt',compact('data'));
       
   // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Sales::find($id);
        $data->delete();
        return redirect('admin/viewsales')->with('message','Sale Deleted Successfully');
    }
}
