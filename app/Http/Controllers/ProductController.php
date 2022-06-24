<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addproduct');
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
            'productname'=>'required|max:255',
            'price'=>'required|max:255',
            'quantity'=>'required|max:255',
            'datepurchased'=>'required|max:255',
            'category'=>'required|max:255',
            'unitprice'=>'required|max:255',
            'description'=>'required|max:255',
            'purchasedfrom'=>'required|max:255'
         ]);
         Product::Create([
             'productname'=>$request->productname,
              'price'=>$request->price,
              'quantity'=>$request->quantity,
              'datepurchased'=>$request->datepurchased,
              'category'=>$request->category,
              'unitprice'=>$request->unitprice,
              'description'=>$request->description,
              'purchasedfrom'=>$request->purchasedfrom,
         ]);

         return redirect('viewproducts')->with('message','Product Added Successfully');
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
        $data = Product::Paginate(10);
        return view('admin.viewproducts',compact('data'));
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
        $data = Product::find($id);
        return view('admin.editproduct',compact('data'));

       
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

      
       
        $data = Product::find($id);
        $data -> productname= $request->input('productname');
        $data -> price= $request->input('price');
        $data -> quantity= $request->input('quantity');
        $data -> datepurchased= $request->input('datepurchased');
        $data -> category= $request->input('category');
        $data -> unitprice= $request->input('unitprice');
        $data -> description= $request->input('description');
        $data -> purchasedfrom= $request->input('purchasedfrom');
        $data->update();
        return redirect('viewproducts')->with('message','Product Updated Successfully');


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
        $data = Product::find($id);
        $data->delete();
        return redirect('viewproducts')->with('message','Product Deleted Successfully');
    }
}
