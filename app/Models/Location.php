<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['location_name','info'];
    protected $table='locations';

     public function contacts() {
          return $this->belongsToMany(Contact::class);
     }


}
