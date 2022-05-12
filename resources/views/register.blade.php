

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body style="background-color:#C70A7D;">
    <br><br><br>
    <style>
  #form-el{
    height:50px; 
    border:1px solid #EDEEEE;
  }
 
        </style>
<div class="container" style ="margin:auto;">
<form style="background-color:white;padding:50px;width:100%;border-radius:15px;" 
method="POST" action="{{ route('register') }}">

@csrf


<div style="margin-left:20px;">
<h3 class="text-center"><a href="index.html" style="color:black;text-decoration: none;"><span style="color:#C70A7D;">in</span>Vent45</a></h3><br>
<div class="alert alert-success">
{{ Session::get('message') }}
</div>
<div class="form-group">
    <input type="text" name="name" class="form-control" @error('name')  style="border:1px solid red" @enderror id="form-el" aria-describedby="emailHelp" placeholder="Enter Name">
   @error('name')
   <div style="color:red;">
   {{$message}}
</div>
</div>
@enderror
<br>


   
  <div class="form-group">
 
    <input type="email"  name="email" class="form-control"  @error('email')  style="border:1px solid red" @enderror id="form-el" aria-describedby="emailHelp" placeholder="Enter email">
   @error('email')
   <div style="color:red;">
   {{$message}}
</div>
</div>
@enderror
<br>



  <div class="form-group">
    <input type="password" name="password"  @error('password')  style="border:1px solid red" @enderror class="form-control"  id="form-el" placeholder="Password">
    @error('password')
    <div style="color:red;">
    {{$message}}
</div>

  </div>
  @enderror
<br>
  <div class="form-group">
    
    <input type="password" name="password_confirmation" class="form-control"  id="form-el" placeholder="Confirm Password">
  </div>
  
  <br>
 <br>
  <button type="submit" class="btn btn-dark btn-lg btn-block" style="width:100%;">Create Account</button><br><br>
  <p>Already have an account <a href="/login"
    style="color:#C70A7D;text-decoration:none;">Login</a></p>
</form>
</div>
</div>
</body>
</html>



