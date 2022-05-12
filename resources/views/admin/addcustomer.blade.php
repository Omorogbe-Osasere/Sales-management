@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Customer's Management</h4>
                  <p class="card-description">
                    Add New Customer
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('admin.addcustomer') }}">
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

                      <input type="text" class="form-control" name="customersname" value="{{old('customersname') }}" @error ('customersname') style="border:1px solid red;" @enderror id="exampleInputUsername1" placeholder="Customers Name">
                

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>

                  
                      @error('email')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>

                      <input type="email" value="{{old('email') }}" class="form-control"  name="email" id="exampleInputEmail1" @error ('email') style="border:1px solid red;" @enderror placeholder="Email" >
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Phone Number</label>

                      @error('phonenumber')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>

                      <input type="text"  value="{{old('phonenumber') }}" @error ('phonenumber') style="border:1px solid red;" @enderror name="phonenumber" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Gender</label>
                      @error('gender')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>
                      <select class="form-control" name="gender" value="{{ old('gender') }}" @error ('gender') style="border:1px solid red;" @enderror>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Birthday</label>
                      
                      @error('birthday')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>

                      <input type="text"  name="birthday" value="{{ old('birthday') }}" @error ('birthday') style="border:1px solid red;" @enderror class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      @error('address')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>

                      <input type="text" name="address" value="{{ old('address') }}" @error ('address') style="border:1px solid red;" @enderror class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Address">
                    </div>

                    
                    <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>       
        
       @include('admin.footer')

       @endsection
       
</body>

</html>
