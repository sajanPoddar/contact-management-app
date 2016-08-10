<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['group_name'];
    protected $table='groups';
    public function groups(){
     	return $this->hasMany(ContactGroup::class);
     }
     // public function groups(){
     // 	return $this->hasMany(ContactGroup::class);
     // }
     public function contactgroups(){
     	return $this->hasManyThrough(ContactGroup::class, Contact::class,'group_id','contact_id','id');
     }
      public function contacts() {
          return $this->belongsToMany(Contact::class);
     }

}
