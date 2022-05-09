@extends('layouts.app')
@section('content')
<div class="custom-product">
   <div class="col-sm-4">
       <a href="#">Filter</a>
    </div>
    
            <button class="btn btn-danger"><a href="/">Go Back</a></button>
            <div class="col-sm-10">
                <div class="trending-wrapper">
               <h4>Results For Products</h4>
            @foreach ($products as $item)
                <div class="searched-item">
                    
                    <a href="details/{{$item->id}}">
                        <div class="col-sm-6">
                        <img class="trending-image" src="{{$item->gallery}}">
                        
                        <div class="">
                            <h2>{{$item->name}}</h2>
                             
                        </div>
                    </a>
                </div>
                </div>
            @endforeach
        </div>
             
    </div>
</div>
@endsection