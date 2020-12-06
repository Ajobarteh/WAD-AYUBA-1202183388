@extends('layouts.app')

@section('ayuba')
  <div class="container col-md-8 offset-2">
      <h3 class="text-center my-5"> Oreder Process</h3>
  <div class="row ">
    @foreach ($product as $product)
    <div class="card mb-3" style="max-width: 790px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{asset('images/products/' .$product->img_path)}}"  class="card-img"  alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->description}}</p>
            <p class="card-text">Stock: <small class="text-muted">{{$product->stock}}</small></p>
              <b class="my-2">$ {{$product->price}}</b>
            </div>
          </div>
        </div>
      </div>
  </div>

    <form action="{{route('products.orderprocess')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="buyer_name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your detail with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contact</label>
      <input type="number" name="buyer_contact" class="form-control" >
    <input type="hidden" name="product_id" class="form-control" value="{{$product->id}}">
    </div>
    <div class="form-group ">
        <label class="form-check-label" for="exampleCheck1">Quantity</label>
      <input type="number" name="amount" class="form-control col-md-2" id="exampleCheck1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endforeach
 
</div>

@endsection