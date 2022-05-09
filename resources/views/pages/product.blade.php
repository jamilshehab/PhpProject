@extends('layouts.app')
@section('content')
 <div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($products as $key => $product)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <a href="details/{{$product->id}}">
                <img src="{{url($product->gallery)}}" class="d-block w-100 img-slider"  alt="{{$product->name}}" class="slider-image"> 
                <div class="carousel-caption">
                <h3>{{$product->name }}</h3>
                 
            </div>
                </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
     <div class="trending-wrapper">
    <h3>Products</h3> 
    @foreach ($products as $product)
        <div class="trending-item">
            <a href="details/{{$product->id}}">
         <img class="trending-image" src="{{ $product->gallery }}">
         <div class="" id="item-name">
             <h6>{{$product->name}}</h6>
         </div>  
        </div>
    </a>
    @endforeach
    </div>
 </div>   
  
    @endsection
