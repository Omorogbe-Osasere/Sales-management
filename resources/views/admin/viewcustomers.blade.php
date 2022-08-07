@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
              
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">View Customers </h4>
                  <p class="card-description">
                 
                  </p>
                  @if ($data->isEmpty())
                 
                  @include('admin.norecords')
                 
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
    <div class="col-sm-" style="margin-left:15%;">
    <div class="input-group">
    <a href="/addcustomer"><button type="button" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px;">+Add Customer</button></a>
  <button type="button" class="btn btn-primary" style="margin-left:5px;
  border-radius:5px">Export CSV</button>
</div>
    </div>
   
  </div>
                  <div class="table-responsive pt-3">
                  <div style="color:green;">
                      {{ Session::get('message') }}
</div><br>
                  <table class="table table-bordered table-dark table-hover table-sm">
                      <thead>
                        <tr>
                          <th>
                            S/N
                          </th>
                          <th>
                           Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone Number
                          </th>
                          <th>
                            Gender
                          </th>
                          <th>
                            Birthday
                          </th>

                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                        <td>{{$row['id']}}</td>
                          <td>{{$row->customersname}}</td>
                          <td class="font-weight-bold">{{ $row->email}}</td>
                          <td>{{ $row->phonenumber}}</td>

                          <td>{{ $row->gender }}</td>
                          <td>{{ $row->birthday}}</td>

                       
                          
                          <td class="font-weight-medium"><div class="badge badge-success" ><i class="icon-edit menu-icon"></i></i><a  style ="color:white;" href="{{ url('admin/editcustomer/'.$row['id']) }}">Edit</div></a>
                          <div class="badge badge-warning"><a href="{{ url('delete-customer/'.$row['id']) }}"><i class="icon-delete menu-icon"></a></i></div>
                        </td>
                        
                         
                        </tr>
                       @endforeach
                        
                      </tbody>
                    </table><br>
                    {{ $data->links() }}
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          @endif
        </div>
       
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
     @include('admin.footer')
  @endsection
</body>

</html>
