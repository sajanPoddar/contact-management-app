<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable=['first_name', 'middle_name','last_name','address','notes'];
    protected $table = 'contacts';
}
