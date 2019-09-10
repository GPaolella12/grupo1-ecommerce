<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class ProductsController extends Controller
{
    public function all()
    {
        $products = Product::paginate(20);
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
        return redirect("/productos");
    }

    public function detail($id)
    {
        $product = Product::find($id);

        return view("product", compact("product"));
    }

    public function delete(Request $request)
    {   
        $id = $request['id'];
        $product = Product::find($id);
        $product->delete();

        redirect('/productos');
    }
}
