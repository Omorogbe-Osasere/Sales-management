@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales Management</h4>
                  <p class="card-description">
                    Edit Sales
                  </p>
                
                

                  <form method="Post" class="forms-sample" action="{{ url('admin/update-sales/'.$data->id) }}">  
   
                      @csrf
                    
                     @method('PUT')
                       
                      <div style="color:green;">
                      {{ Session::get('message') }}
</div>
<br>

<div class="form-group">
                      <label for="exampleInputUsername1">Customers Name</label>
                      <input type="text" class="form-control" name="customersname"
                      value="{{$data->customersname}}" id="exampleInputUsername1" placeholder="Customers Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Product Name</label>
                      <input type="text" class="form-control" name="productname"
                      value="{{$data->productname}}" id="exampleInputUsername1" placeholder="Customers Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="text" value="{{$data->price}}"  class="form-control"  name="price" id="exampleInputEmail1" placeholder="Email">
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Quantity</label>
                      <input type="text" value="{{$data->quantity}}"   name="quantity" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
                    </div>

                   

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Total Price</label>
                      <input type="text" value="{{$data->totalprice}}"  name="totalprice" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>


                    
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div> 
              </div>
            </div>       
        
       @include('admin.footer')

       @endsection
       
</body>

</html>


