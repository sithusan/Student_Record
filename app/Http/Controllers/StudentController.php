<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Major;
use App\Student;
use App\Academic;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMajor(){
        $majors = Major::get();
        return view('admin.student.getmajor',compact('majors'));
    }
    public function index($major_id)
    {
        //
        $students = Student::where('major_id',$major_id)->get();
        return view('admin.student.index',compact('students','major_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($major_id)
    {
        //

        $academics = Academic::get();
        return view('admin.student.create',compact('major_id','academics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$major_id)
    {
        //
        $student = new Student();
        $student->name = $request->name;
        $student->parent_name = $request->parent_name;
        $student->address     = $request->address;
        $student->phone_no      = $request->phone;
        $student->roll_no       = $request->roll_no;
        $student->major_id      = $major_id;
        $student->academic_id   = $request->academic;
        $student->nrc           = $request->nrc;
        $student->save();
        return redirect()->action('StudentController@index',$major_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($major_id,Student $student)
    {
        //
        $academics = Academic::get();

        return view('admin.student.edit',compact('student','major_id','academics'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$major_id, Student $student)
    {
        //
        $student->roll_no   = $request->roll_no;
        $student->name = $request->name;
        $student->parent_name = $request->parent_name;
        $student->address     = $request->address;
        $student->phone_no       = $request->phone;
        $request->major_id    = $major_id;
        $student->academic_id   = $request->academic;
        $student->nrc           = $request->nrc;
        $student->save();
        return redirect()->action('StudentController@index',$major_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($major_id,Student $student)
    {
        //
        $student->delete();
        return redirect()->action('StudentController@index',$major_id);

    }
    public function getimportfile($major_id){
        return view('admin.student.import',compact('major_id'));
    }
    public function export()
    {
        return Excel::download(new StudentExport(), 'student.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import($major_id)
    {
        $students = Excel::toArray(new StudentImport(), request()->file('file'));


        foreach($students as $key => $data){
            foreach($data as $value){

                $insert[] = [
                    'name' => $value['name'],
                    'parent_name' => $value['parent_name'],
                    'address'     => $value['address'],
                    'phone_no'    => $value['phone'],
                    'roll_no'     => $value['roll'],
                    'major_id'    => $major_id

                ];
            }


        }
        Student::insert($insert);

        return redirect()->action('StudentController@getMajor');

    }
}
