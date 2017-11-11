<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryProduct extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'inventory';
    protected $fillable = ['product_id', 'number_import', 'date_import', 'number_export', 'date_export', 'unit', 'status'];
    protected $dates = ['deleted_at'];

    public function product() {
        return $this->belongTo('App\Models\Product', 'product_id');
    }

}
