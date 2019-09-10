<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'price', 'discount', 'image'];
    public $timestamps = false;

    public function brand() {
        return $this->belongsTo("App\Brand", "brand_id");
      }

      public function category() {
        return $this->belongsTo("App\Category", "category_id");
      }

}
