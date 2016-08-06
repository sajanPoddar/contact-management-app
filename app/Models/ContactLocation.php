<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactLocation extends Model
{
    protected $fillable=['contact_id','location_id'];
    protected $table='contact_location';
}
