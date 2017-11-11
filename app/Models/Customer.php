<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'customer';
    protected $fillable = ['user_id', 'fullname', 'sex', 'phone', 'email', 'address', 'company', 'tax_code', 'company_code', 'image', 'status'];
    protected $dates = ['deleted_at'];

    public function order() {
        return $this->hasMany('App\Models\Order', 'customer_id');
    }

    public function user() {
        return $this->belongTo('App]Models\User', 'user_id');
    }
}
