<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class order extends Model
{
    protected $guarded = [];
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function shipping_method(){
        return $this->belongsTo(shipping_method::class);
    }
    public function getCreatedAtShamsiAttribute(){
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
    public function getCreatedAtShamsiAfterFiveDaysAttribute(){
        return Jalalian::fromDateTime($this->created_at->addDays(5))->format('Y/m/d');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
