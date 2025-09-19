<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Support extends Model
{
    protected $table = "support";
    protected $guarded = [];
    public function getCreatedAtShamsiAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('m/d');
    }
}
