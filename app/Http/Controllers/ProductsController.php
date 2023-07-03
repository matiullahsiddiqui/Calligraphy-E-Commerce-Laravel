<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('back_end.list-product')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end/add_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
       
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        if(in_array($extension, ['jpg', "jpeg"]))
        {
            $image_name = "img_" . rand(123456, 999999) . '.' .$extension;
            $image->move(public_path('/uploads/'), $image_name);
            $product->image = $image_name;
        }
        
            $product->description = $request->description;
            $product->price = $request->price;
            $product->length = $request->length;
            $product->width = $request->width;
            $product->sku = $request->sku;
            $product->category = $request->category;

            
            $product->save();
            return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        // return view('back_end/edit_data', compact('product'));
        return view('back_end/edit_data')->with('product', $products);
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
        $product = Products::find($id);
       
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        if(in_array($extension, ['jpg', "jpeg"]))
        {
            $image_name = "img_" . rand(123456, 999999) . '.' .$extension;
            $image->move(public_path('/uploads/'), $image_name);
            $product->image = $image_name;
        }
        
            $product->description = $request->description;
            $product->price = $request->price;
            $product->length = $request->length;
            $product->width = $request->width;
            $product->sku = $request->sku;
            $product->category = $request->category;

            
            $product->save();
            return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        Products::destroy($id);
        $image = public_path('/uploads/').$product->image;
        if (file_exists($image)){
            @unlink($image);
        }
        return redirect('products');
    }
}
