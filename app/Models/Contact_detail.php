<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_detail extends Model
{
    protected $fillable=['contact_id','contact_type_id','details_type','phoneNo_email'];
}
