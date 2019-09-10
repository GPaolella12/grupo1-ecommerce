<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::all();

        return view('products', $vac);
    }

    public function add()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('/products/add', compact("brands", "categories"));
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
            "name" => "required|string|min:8|max:255",
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
        $product->stock = $request->stock;

        $product->save();
        return view('/products', compact("product"));
    }

    public function detail($id)
    {
        $vac = compact("product");

        return view("product", $vac);
    }

    public function delete(Request $request)
    {   
        $id = $request['id'];
        $product = Product::find($id);
        $product->delete();

        redirect('products');
    }
}
