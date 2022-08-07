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
              
                      @error('staffname')
    <div style ="color:red;font-size:12px;">

        {{$message}}

    </div>
    @enderror
    <br>

                      <input type="text" class="form-control" name="staffname" value="{{old('staffname') }}" @error ('staffname') style="border:1px solid red;" @enderror id="exampleInputUsername1" placeholder="Staff Name">
                
                    </div>
                    
                   

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Email</label>

                      @error('email')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror<br>

                      <input type="text"  value="{{old('email') }}" @error ('email') style="border:1px solid red;" @enderror name="email" class="form-control" id="exampleInputConfirmPassword1" placeholder="Email">
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

                    <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Make An Admin</label>
                   <input type="radio" name="role" value="1"> Yes
                   <input type="radio" name="role" value="0"> No
                    </div>

                    <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Position</label>
                   <input type="text" name="position" class="form-control">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Password</label>
                      <input type="password" name="password"  @error('password')  style="border:1px solid red" @enderror class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      @error('password')
    <div style="color:red;">
    {{$message}}
</div>
@enderror
                    
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
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
