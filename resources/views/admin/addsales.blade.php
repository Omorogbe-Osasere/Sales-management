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
                    Add New Sales
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('admin.addsales') }}">
                      @csrf
                       
                      <div style="color:green;">
                      {{ Session::get('message') }}
</div>
<br>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Customers Name</label>
                      @error('customersname')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                      <input type="text" class="form-control" value="{{old('customersname') }}" @error ('customersname') style="border:1px solid red;" @enderror name="customersname" id="exampleInputUsername1" placeholder="Customers Name">
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                      @error('productname')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                      <input type="text" value="{{old('productname') }}" @error ('productname') style="border:1px solid red;" @enderror class="form-control"  name="productname" id="exampleInputEmail1" placeholder="Product Name">
                    </div>
                   
                    <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    @error('price')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">$</span>
                      </div>
                     
                      <input type="number" name="price" value="{{old('price') }}" @error ('price') style="border:1px solid red;" @enderror placeholder="Price" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>

                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Quantity</label>
                      @error('quantity')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                      <input type="number" value="{{old('quantity') }}" @error ('quantity') style="border:1px solid red;" @enderror  name="quantity" class="form-control" id="exampleInputConfirmPassword1" placeholder="Quantity">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Total Price</label>
                      @error('totalprice')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                      <input type="number" name="totalprice" value="{{old('totalprice') }}" @error ('totalprice') style="border:1px solid red;" @enderror class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Price">
                    </div>

                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>       
        
       @include('admin.footer')

       @endsection
       
</body>

</html>
