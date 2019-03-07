@extends('layouts.head')

@section('content')
<div class="container">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="thumbnail" id="thumb1" href="#" target="_blank">
                        <img src="../css/image/{{$product->image}}" alt="">
                        <h5 id="price"><span class="text-center">{{$product->name}}</span></h5>
                        <h5 id="price"><span class="text-center">{{$product->price}}</span></h5>
                        <h5 id="price"><span class="text-center">{{$product->description}}</span></h5> 
                        <a href="{{route('shop',$product['id']) }}" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                    </div>                          
                </div>
           @endforeach                     
            </div>
@endsection
