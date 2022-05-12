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
</div>
                  <div class="text-center">
                    <img src="images/no-record.png" style="width:200px;height:200px;">

                   <h1> No Records</h1>
<p>No Record(s) found. Record will appear here once created.</p>
<p><a href="/addcustomer"><button type="button" class="btn btn-primary"
 style="border-radius:5px;width:200px;">+Add New Customer</button></a></p>



</div><br><br>

@yield('content')