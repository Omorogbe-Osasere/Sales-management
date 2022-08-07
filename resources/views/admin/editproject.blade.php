@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Project Management</h4>
                  <p class="card-description">
                    Edit Task
                  </p>
                
                

                  <form method="Post" class="forms-sample" action="{{ url('admin/update-project/'.$data->id) }}">  
   
                      @csrf
                    
                     @method('PUT')
                       
                      <div style="color:green;">
                      {{ Session::get('message') }}
</div>
<br>

<div class="form-group">
                      <label for="exampleInputUsername1">Project Name</label>
                      <input type="text" class="form-control" name="projectname"
                      value="{{$data->projectname}}" id="exampleInputUsername1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Description</label>
                      <input type="text" value="{{ $data->projectdescription }}"  name="projectdescription" class="form-control" id="exampleInputConfirmPassword1" rows="20" cols="45">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Start Date</label>
                      <input type="date" value="{{ $data->startdate}}"  class="form-control"  name="startdate" id="exampleInputEmail1" placeholder="Email">
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">End Date</label>
                      <input type="date" value="{{$data->enddate}}"   name="enddate" class="form-control" id="exampleInputConfirmPassword1" placeholder="Phone Number">
                    </div>

                   
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Deadline</label>
                      <input type="text" value="{{$data->deadline}}"  name="deadline" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Assigned To</label>
                      <input type="text" value="{{$data->assignedto}}"  name="assignedto" class="form-control" id="exampleInputConfirmPassword1" placeholder="Birthday">
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


