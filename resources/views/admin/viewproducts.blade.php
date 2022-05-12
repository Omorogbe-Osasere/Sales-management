@extends('admin.header')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
              
                
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage Products</h4>
                  <p class="card-description">
                    
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
   <button type="button" class="btn btn-primary" style="margin-left:5px;
 border-radius:5px;">+Add Sales</button>
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
<p><a href="/product"><button type="button" class="btn btn-primary"
style="border-radius:5px;width:200px;">+Add New Sales</button></a></p>



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
   <a href="/addproduct"><button type="button" class="btn btn-primary" style="margin-left:5px;
 border-radius:5px;">+Add Product</button></a>
 <button type="button" data-href="/tasks" id="export" class="btn btn-primary" style="margin-left:5px;
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
                          <th>Name </th>
                          <th> Price</th>
                          <th>Quantity</th>
                          <th>Date Purchased</th>
                          <th>Category</th>
                          <th>Total Price</th>
                          
                          <th>Purchased From</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                        <td>{{$row->id}}</td>
                          <td>{{$row->productname}}</td>
                          <td class="font-weight-bold">{{ $row->price}}</td>
                          <td>{{ $row->quantity}}</td>

                          <td>{{ $row->datepurchased }}</td>
                          <td>{{ $row->category}}</td>

                          <td>{{ $row->unitprice }}</td>
                         
                          <td>{{ $row->purchasedfrom }}</td>
                          
                          <td class="font-weight-medium"><div class="badge badge-success" ><i class="icon-edit menu-icon"></i><a  style ="color:white;" href="{{ url('editproduct/'.$row['id']) }}">Edit</div></a>
                          <div class="badge badge-warning"><i class="icon-delete menu-icon"></i></div>
                        </td>
                         
                        </tr>
                       @endforeach
                      
                      </tbody>
                    </table><br><br>
                    {{ $data->links() }}
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
