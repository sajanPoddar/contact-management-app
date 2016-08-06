<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['group_name'];
    protected $table='groups';
    // public function details(){
    //  	return $this->hasMany(ContactGroup::class);
    //  }
     public function groups(){
     	return $this->hasMany(ContactGroup::class);
     }
}
