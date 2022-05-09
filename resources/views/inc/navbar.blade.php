<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total=ProductController::cartItem();
}

?>
<script>
  $(document).ready(function(){
    $(".dropdown-toggle").dropdown();
  });
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{'/'}}"><i class="fa fa-home" id="icon1">Home </i><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders"><i class="fas fa-shopping-bag" id="icon2">Orders</i></a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href="/cartlist"><i class="fas fa-shopping-cart" id="icon4">Add To Cart({{$total}})</i></a>
        </li>
      </ul>
    
      <form class="form-inline my-2 my-lg-0" action="/search">
        <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <!--if User info or user session is already login show his profile  -->
      @if (Session::has('user'))
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ Session::get('user')->name }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="/logout">Logout</a>
        
        </div>
      </div>
      @else
<!--Else login or register-->          
      <button class="btn btn-primary"><a href="/login" class="login">Login</a></button>
      <button class="btn btn-primary"><a href="/register" class="register">Register</a></button>
      @endif
      
    </div>
  </nav>