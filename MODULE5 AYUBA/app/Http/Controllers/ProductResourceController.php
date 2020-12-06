<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $create_product = new Product;
        $create_product->name = $request->name;
        $create_product->price = $request->price;
        $create_product->description = $request->description;
        $create_product->stock = $request->stock;

        $imageName = $request->file('img');
        if($imageName!==null)
        {
            // get the extension
            $extension = $imageName->getClientOriginalExtension();
            // create a new file name
            $new_name = date( 'Y-m-d' ) . '-' . Str::random(10)  . '.' . $extension;
            // move file to public/images/new and use $new_name
            $imageName->move( public_path('images/products'), $imageName);

            $create_product->img_path = $new_name;
        }
        
        $create_product->save();

        return redirect(route('products.index'))->with(['status' => 'Product Created successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = PRoduct::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = PRoduct::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $create_product =  Product::find($id);
        $create_product->name = $request->name;
        $create_product->price = $request->price;
        $create_product->description = $request->description;
        $create_product->stock = $request->stock;

        $imageName = $request->file('img');
        if($imageName!==null)
        {
            // get the extension
            $extension = $imageName->getClientOriginalExtension();
            // create a new file name
            $new_name = date( 'Y-m-d' ) . '.'. $extension;

            // move file to public/images/new and use $new_name
            $imageName->move( public_path('images/products'), $new_name);

            $create_product->img_path = $new_name;
            
        }
        
       
        $create_product->save();

        return redirect(route('products.index'))->with(['status' => 'Product updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete ($id)
    {
        $product = Product::find($id);
        $product->delete();
       return back();
    }
    
    public function orders(Request $request)
    {
        $products = Product::all();
        return view('orders.index', compact('products'));
    }
    public function history(Request $request)
    {
        $products = Product::join('orders', 'orders.product_id', '=', 'products.id')->get();
        return view('orders.history', compact('products'));
    }
    public function addtocart(Request $request, $id)
    {   
        $product = Product::all();
        return view('orders.addtocart', compact('product'));
    }

    public function OrederProcess(Request $request)
    {   
        $orders = Order::create($request->all());

        return redirect(route('products.index'))->with(['status' => 'Product Created successfully.']);
    }
}
