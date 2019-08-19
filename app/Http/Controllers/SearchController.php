<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $students = Student::where('nrc',$request->search)->get();
        return view('admin.student.search',compact('students'));

    }

}
