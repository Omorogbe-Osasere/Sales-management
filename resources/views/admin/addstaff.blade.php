@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Staff Management</h4>
                  <p class="card-description">
                    Add New Staff
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('admin.addstaff') }}">
                      @csrf
                       
                      <div style="color:green;">
                      {{ Session::get('message') }}
</div>
<br>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Staff Name</label>
                      <input type="text" class="form-control" name="staffname" id="exampleInputUsername1" placeholder="Staff Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Email">
                    </div>
                   
                    

                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Phone Number</label>
                      <input type="text"  name="phonenumber" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
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
                      <input type="text"  name="birthday" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Address</label>
                      <input type="text" name="address" class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Address">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="text" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Add Staff</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>       
        
       @include('admin.footer')

       @endsection
       
</body>

</html>
