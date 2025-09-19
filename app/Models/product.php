<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class product extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function attributes(){
        return $this->hasMany(Attribute::class);
    }
    public function getCreatedAtShamsiAttribute(){
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
