<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $guarded = [];

   /*  public function districts()
    {
        return $this->hasMany(District::class);
    } */

   /*  public function streets()
    {
        return $this->hasMany(Street::class);
    } */
}
