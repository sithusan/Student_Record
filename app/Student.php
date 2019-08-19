<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    //
    protected $fillable = [
        'name','parent_name','phone_no','address',
    ];
    public function academic(){
    	return $this->belongsTo(Academic::class,'academic_id');
    }
}
