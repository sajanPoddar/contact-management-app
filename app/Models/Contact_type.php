<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_type extends Model
{
    protected $fillable=['type_name'];
    protected $table='contact_type';
}
