<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class notification extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCreatedAtShamsiAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
}
