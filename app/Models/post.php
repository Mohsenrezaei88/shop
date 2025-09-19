<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class post extends Model
{
    protected $guarded = [];
    public function writer()
    {
        return $this->belongsTo(User::class, "writer_id");
    }
        public function category()
    {
        return $this->belongsTo(category::class, "category_id");
    }
    public function getCreatedAtShamsiAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
}
