<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Major;
use App\Subject;
use App\Teacher;
use App\TeacherStudent;
use Illuminate\Http\Request;

class TeacherStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getteacher(){
        $teachers = Teacher::get();
        return view('admin.teacherstudent.getteacher',compact('teachers'));
    }
    public function index($id)
    {
        //
        $ts = TeacherStudent::where('teacher_id',$id)->get();
        return view('admin.teacherstudent.index',compact('ts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Teacher $teacher)
    {
        //
        $academics = Academic::get();
        $majors    = Major::get();
        $subjects  = Subject::get();
        return view('admin.teacherstudent.create',compact('academics','majors','subjects','teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //

        $teacherstudent = new TeacherStudent();
        $teacherstudent->teacher_id = $id;
        $teacherstudent->major_id   = $request->major;
        $teacherstudent->academic_id = $request->academic;
        $teacherstudent->subject_id  = $request->subject;
        $teacherstudent->save();
        return redirect()->action('TeacherStudentController@index',$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeacherStudent  $teacherStudent
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherStudent $teacherStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeacherStudent  $teacherStudent
     * @return \Illuminate\Http\Response
     */
    public function edit($id,TeacherStudent $teacherstudent)
    {
        //
        $academics = Academic::get();
        $majors    = Major::get();
        $subjects  = Subject::get();
        return view('admin.teacherstudent.edit',compact('teacherstudent','academics','majors','subjects','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeacherStudent  $teacherStudent
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, TeacherStudent $teacherstudent)
    {
        //
        $teacherstudent->teacher_id = $id;
        $teacherstudent->major_id   = $request->major;
        $teacherstudent->academic_id = $request->academic;
        $teacherstudent->subject_id  = $request->subject;
        $teacherstudent->save();
        return redirect()->action('TeacherStudentController@index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeacherStudent  $teacherStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherStudent $teacherstudent,$id)
    {
        //
        $teacherstudent->delete();
        return redirect()->action('TeacherStudentController@index',$id);
    }
}
