@extends('admin.header')

@section('content')
      <!-- partial -->
    
</head>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
              
                
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage Projects</h4>
                  </p>
                  @if ($data->isEmpty())
                 
                  <div class="container">
  <div class="row">
    <div class="col-sm-">
    <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" style="margin-left:5px;
  border-radius:5px">Search</button>
</div><br>
    </div>
    <div class="col-sm-" style="margin-left:15%;">
    <div class="input-group">
    <a href="/addproject"><button type="button" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px;">+Add Staff</button></a>
  <button type="button" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px">Export CSV</button>
</div>
    </div>
   
  </div>
</div>
                  <div class="text-center">
                    <img src="images/no-record.png" style="width:200px;height:200px;">

                   <h1> No Records</h1>
<p>No Record(s) found. Record will appear here once created.</p>
<p><a href="/addproject"><button type="button" class="btn btn-primary"
 style="border-radius:5px;width:200px;">+Add New Staff</button></a></p>



</div><br><br>
                 
            @else
            <div class="container">
  <div class="row">
    <div class="col-sm-">
    <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" style="margin-left:5px;
  border-radius:5px">Search</button>
</div><br>
    </div>

    <script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>

    <div class="col-sm-" style="margin-left:15%;">
    <div class="input-group">
    <a href="/addproject"><button type="button" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px;">+Add Proejct</button></a>
  <button type="button" data-href="/tasks" id="export" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px">Export CSV</button>
</div>
    </div>
   
  </div>
                  <div class="">
                  <div style="color:green;">
                      {{ Session::get('message') }}
</div><br>
            
                  




 
 <div class="row" style="margin-left:-10px;"> 
 @foreach($data as $row)
   <div class="col-md-5" style="border:1px solid lightgrey; margin-left:10px;padding:10px;margin-bottom:10px;">
 <h4>{{$row->projectname}}</h4><br>
 <p><strong>Assigned to: </strong>{{$row->assignedto}}</p>
 <p><strong>Start Date: </strong>{{$row->startdate}}</p>
 <p><strong>End Date: </strong>{{$row->enddate}}</p>
 <button type="submit" class="btn btn-primary"><i class="icon-eye menu-icon"></i></button>
                    <a href="{{ url('editproject/'.$row['id']) }}"><button class="btn btn-light">Edit</button></a>
                    <button class="btn btn-light"><i class="icon-delete menu-icon"></i></button>
                  
 </div>

@endforeach
  </div>






                

                  </div>
                </div>
              </div>
            </div>
            
            @endif
          </div>
        </div>
        
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
     @include('admin.footer')
  @endsection
</body>

</html>
