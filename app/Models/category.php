<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class category extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->hasMany(product::class);
    }
    public function getCreatedAtShamsiAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
}
