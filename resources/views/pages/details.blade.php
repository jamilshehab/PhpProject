@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
           <img src="{{$product->gallery}}" class="detail-img">
        </div>
        <div class="col-sm-6">
            <button class="btn btn-danger"><a href="/">Go Back</a></button>
            <h2>Name : {{$product->name}}</h2>
            <h4>Price : {{$product->price}}</h4>
            <h4>Details : {{$product->description}}</h4>
            <h4>Category : {{$product->category}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Add To Cart</button>
            </form>
            <br><br>
             
            
        </div>
         
    </div>
    </div>
@endsection