@extends('layouts.app')
@section('ayuba')

@if (count($products) > 0)
<h3 class="text-center">History</h3>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Buyer Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($products as $product)
            <th scope="row">{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td>{{$product->buyer_name}}</td>
          <td>{{$product->buyer_contact}}</td>
          <td>$ {{$product->price * $product->amount}}</td>
          @endforeach
      </tr>
    </tbody>
  </table>
@else
<p class="text-center"> There is no data </p>
<div class="text-center">
  <a href="{{url('/')}}" class="btn btn-dark btn-sm center">Order Now</a>
</div>
@endif
    
@endsection