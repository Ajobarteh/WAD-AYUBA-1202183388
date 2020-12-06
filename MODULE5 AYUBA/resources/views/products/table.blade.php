@if(count($products) > 0)
<h3 class="text-center">Product List</h3>
<section>
<h3><a href="{{route('products.create')}}" class="btn btn-dark btn-sm"> Add Product</a> </h3>
</section>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($products as $product)
      <th scope="row">{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td>$ {{$product->price}}</td>
          <td>
            <div class="btn-group">
              <a href="{{route('products.edit', $product->id)}}" class="btn btn-info btn-sm"> Edit</a>
              <form action="{{route('products.delete', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                {{-- <a href="{{route('products.delete', $product->id)}}" class="btn btn-danger btn-sm"> Delete</a> --}}
                <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
              </form>
            </div>
          </td>
          @endforeach
      </tr>
    </tbody>
  </table>
  @else
<p class="text-center"> There is no Product </p>
<div class="text-center">
  <a href="{{route('products.create')}}" class="btn btn-dark btn-sm center">Add Product</a>
</div>
@endif
    
