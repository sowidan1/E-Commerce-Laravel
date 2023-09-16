<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.list',compact('products'));
    }

    public function add(){

        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function show($id)
    {
        // return a specific product
    }

    public function create(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all(),[
            'name'=> 'required|max:255',
            'price'=> 'required|numeric',
            'description'=>'nullable',
            'category_id'=>'required|exists:categories,id',
            'image'=>'required|mimes:png,jpeg,jpg|max:2048'
        ]);

        if($validator->fails()){
            dd($validator);
            return redirect()->back()->withErrors($validator);
        }

        $product = new Product();
        $product->name= $request->name;
        $product->price= $request->price;
        $product->quantity= $request->quantity;
        $product->description= $request->description;
        $product->category_id= $request->category_id;

        if ($request->hasFile('image')){

            $image =$request->file('image');
            $imagePath= $image->store('images','public');
            $product->image=$imagePath;
        }

        $product->save();

        return redirect()->route('products.index');

    }

    public function update(Request $request, $id)
    {
        // update a specific product
    }
}
