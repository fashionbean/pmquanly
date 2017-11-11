<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'category';
    protected $fillable = ['user_id', 'name', 'status'];
    protected $dates = ['deleted_at'];

    public function category_product() {
        return $this->hasMany('App\Models\CategoryProduct', 'category_id');
    }

    public function user() {
        return $this->belongTo('App]Models\User', 'user_id');
    }
}