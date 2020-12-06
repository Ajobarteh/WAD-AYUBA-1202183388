@extends('layouts.app')

@section('ayuba')
  <div class="container col-md-8 offset-2 center">
    @if (count($products) > 0)
      <div class="row ">
        @foreach ($products as $product)
        <div class="col-md-4" >
          <div class="card mb-4 shadow-sm">
          <img src="{{asset('images/products/' .$product->img_path)}}" height="180" alt="">
            <div class="card-body">
              <p class="card-text" style="text-align: center">{{$product->description}}</p>
              <b class="my-2">$ {{$product->price}}</b>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{route('products.addtocart',$product->id)}}" class="btn-success btn-sm">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    @else
    <p class="text-center"> There is no Product </p>
    <div class="text-center">
      <a href="{{url('/')}}" class="btn btn-dark btn-sm center">Add Product</a>
    </div>
    @endif

   
@endsection