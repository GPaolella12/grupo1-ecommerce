<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoriesController extends Controller
{
    public function all() {
        $categories = Category::all();
    
        return view("categories", compact("categories"));
      }
    
      public function detail($id) {
        $category = Category::find($id);
    
        return view("category", compact("category"));
      }

      public function productsOfCategory($id){
          $products = Product::where("category_id", "like", "$id")->get();
          dd($products);

          return view("category", "products");

      }
}
