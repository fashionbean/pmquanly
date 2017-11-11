<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SofDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'fullname', 'sex', 'phone', 'address', 'image', 'role', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function category() {
        return $this->hasMany('App\Models\Category', 'user_id');
    }

    public function product() {
        return $this->hasMany('App\Models\Product', 'user_id');
    }

    public function staff() {
        return $this->hasMany('App\Models\Staff', 'user_id');
    }

    public function customer() {
        return $this->hasMany('App\Models\Customer', 'user_id');
    }

    public function supervisor() {
        return $this->hasMany('App\Models\Supervisor', 'user_id');
    }

    public function order() {
        return $this->hasMany('App\Models\Order', 'user_id');
    }
}
