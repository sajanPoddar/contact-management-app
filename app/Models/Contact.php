<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable=['first_name', 'middle_name','last_name','image','address','notes'];
     protected $table = 'contacts';
     public function details(){
     	return $this->hasMany(ContactDetail::class);
     }
     public function groups(){
     	return $this->hasMany(ContactGroup::class);
     }
     public function locations(){
     	return $this->hasMany(ContactLocation::class);
     }
     public function contactgroups() {
          return $this->belongsToMany('App\Models\Group');
     }
     public function contactlocations(){
          return $this->belongsToMany('App\Models\Location');
     }
}
