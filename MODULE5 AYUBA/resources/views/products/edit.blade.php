@extends('layouts.app')
@section('ayuba')
<div class="container col-md-8 offset-2">
    <h3 class="text-center">Update Product</h3>
<form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Name</label>
        <input type="text" name="name" class="form-control"  value="{{$product->name}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Price</label>
          <input type="number" name="price" class="form-control"  value="{{$product->price}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Descriotion</label>
          <textarea name="description" id="" cols="30" rows="3" class="form-control">{{$product->description}}</textarea>
        </div>
        <div class="form-group ">
          <label for="exampleFormControlTextarea1">Stock</label>
          <input type="number" name="stock" class="form-control col-md-4"  value="{{$product->stock}}">
        </div>

        <div class="form-group ">
        <img src="{{asset('images/products/' .$product->img_path)}}" width="40" alt="">
          <label for="exampleFormControlTextarea1">Image file Input</label>
          <input type="file" name="img" class="form-control">
        </div>

        <div class="form-group ">
            <input type="submit"  class="btn btn-dark btn-sm"  value="Submit">              
          </div>
      </form>
</div>
@endsection