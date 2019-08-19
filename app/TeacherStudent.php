<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherStudent extends Model
{
    //
    protected $table = 'teacher_students';
    public function teacher(){
        return $this->belongsTo('App\Teacher','teacher_id');
    }
    public function major(){
        return $this->belongsTo('App\Major','major_id');
    }
    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }
    public function academic(){
        return $this->belongsTo('App\Academic','academic_id');
    }

}
