<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'category_product';
    protected $fillable = ['category_id', 'product_id'];
    protected $dates = ['deleted_at'];

    public function category() {
        return $this->belongTo('App\Models\Category', 'category_id');
    }
}
