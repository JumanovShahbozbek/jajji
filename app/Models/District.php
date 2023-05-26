<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function regions()
    {
        return $this->belongsTo(Region::class);
    }

    public function street()
    {
        return $this->hasMany(Street::class);
    }
}
