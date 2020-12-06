@extends('layouts.app')
@section('ayuba')
<div class="container col-md-8 offset-2">
    <h3 class="text-center">Add Product</h3>
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Name</label>
          <input type="text" name="name" class="form-control"  placeholder="product name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Price</label>
          <input type="number" name="price" class="form-control"  placeholder="product price">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Descriotion</label>
          <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group ">
          <label for="exampleFormControlTextarea1">Stock</label>
          <input type="number" name="stock" class="form-control col-md-4"  placeholder="product name">
        </div>

        <div class="form-group ">
          <label for="exampleFormControlTextarea1">Image Input</label>
          <input type="file" name="img" class="form-control">
        </div>

        <div class="form-group ">
            <input type="submit"  class="btn btn-dark btn-sm"  value="Submit">              
          </div>
      </form>
</div>
@endsection