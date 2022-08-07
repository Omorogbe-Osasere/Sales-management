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
                
                  <form method="Post" class="forms-sample" action="{{ url('admin/update-customer/'.$data->id) }}">  
   
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
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" value="{{$data->email}}"  class="form-control"  name="email" id="exampleInputEmail1" placeholder="Email">
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Phone Number</label>
                      <input type="text" value="{{$data->phonenumber}}"   name="phonenumber" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Gender</label>
                      <select class="form-control" name="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Birthday</label>
                      <input type="text" value="{{$data->birthday}}"  name="birthday" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" value="{{ $data->address }}"  name="address" class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Address">
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


