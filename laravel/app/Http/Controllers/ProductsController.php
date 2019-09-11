<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    public function all()
    {
        $products = Product::with("brand", "category")->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();

        return view('products', compact("products", "brands", "categories"));
    }

    public function add()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('addProduct', compact("brands", "categories"));
    }

    public function search(Request $request)
    {
        $search = $request['search'];
        $products = Product::where("title", "like", "%" . $search . "%")->get();

        return view("search", compact("products", "search"));
    }

    public function store(Request $request)
    {
        $validation = [
            "name" => "required|string|min:3|max:255",
            "price" => "required|numeric|min:0|max:100000",
            "brand" => "required|exists:brands,id",
            "category" => "required|exists:categories,id",
            "stock" => "required|integer|min:0|max:1000"
        ];

        $this->validate($request, $validation);

        $product = new Product();
        $product->name = $request->name;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->stock = $request->stock;

        $product->save();
        return redirect("/productos/admin");
    }

    public function detail($id)
    {
        $product = Product::with("category", "brand")->find($id);

        return view("product", compact("product"));
    }

    public function admin(){
        
        $products = Product::with("brand", "category")->get();
        

        return view("adminProducts", compact("products"));
    }

    public function edit($id){
        $product = Product::with("brand", "category")->find($id);
        $brands = Brand::all();
        $categories = Category::all();

        return view('editProduct', compact("product", "brands", "categories"));
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->brand_id = $request->brand;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->stock = $request->stock;

        $product->save();
        return redirect('/productos/admin');

    }

    public function delete(Request $request)
    {   
        $id = $request->id;
        $product = Product::find($id);
        $product->delete();

        redirect('/productos/admin');
    }
}
