<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function all(){
        $brands = Brand::all();

        return view("brands", compact("brands"));
    }

    public function detail($id){
        $brand = Brand::find($id);

        return view("brand", compact("brand"));
    }
}
