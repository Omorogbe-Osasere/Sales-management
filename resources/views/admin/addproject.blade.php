@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Project</h4>
                  <p class="card-description">
                    Add New Project
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('admin.addproject') }}">
                      @csrf
                       
                      <div style="color:green;">
                      {{ Session::get('message') }}
</div>
<br>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Project Name</label>

                      @error('projectname')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror

                      <input type="text" class="form-control"  value="{{old('projectname') }}" @error ('projectname') style="border:1px solid red;" @enderror  name="projectname" id="exampleInputUsername1" placeholder="Project Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Project Description</label>
                      @error('projectdescription')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror
                      <textarea name="projectdescription"  value="{{old('projectdescription') }}" @error ('projectdescription') style="border:1px solid red;" @enderror  class="form-control" placeholder="Project Description" rows="20" cols="45"></textarea>
                      
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Start Date</label>
                      @error('startdate')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror
                      <input type="date"  value="{{old('startdate') }}" @error ('startdate') style="border:1px solid red;" @enderror  name="startdate" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">End Date</label>
                      @error('enddate')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror
                      <input type="date"  value="{{old('endadte') }}" @error ('enddate') style="border:1px solid red;" @enderror  name="enddate" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Deadline</label>

                      @error('unitprice')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror
                      <input type="date"  value="{{old('deadline') }}" @error ('deadline') style="border:1px solid red;" @enderror  name="deadline" class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Address">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Assigned to</label>

                      @error('assignedto')
    <div style ="color:red;font-size:12px;">
        {{$message}}

    </div>
    @enderror

                      <input type="text"  value="{{old('assignedto') }}" @error ('assignedto') style="border:1px solid red;" @enderror  name="assignedto" class="form-control" id="exampleInputConfirmPassword1" placeholder="Total Address">
                    </div>

                    
                    <button type="submit" class="btn btn-primary mr-2">Add Project</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>       
        
       @include('admin.footer')

       @endsection
       
</body>

</html>
