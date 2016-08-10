<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
    protected $fillable=['contact_id','group_id'];
    protected $table='contact_group';
    public function groupType(){
    	return $this->belongsTo(Group::class, 'group_id');
    }
    public function contactType(){
    	return $this->belongsTo(Contact::class, 'contact_id');
    }
    
    }
