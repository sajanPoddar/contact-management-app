<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $table='contact_details';
    protected $fillable=['contact_id','contact_type_id','details_type','phoneNo_email'];
    public function type(){
    	return $this->belongsTo(ContactType::class, 'contact_type_id');
    }

}
