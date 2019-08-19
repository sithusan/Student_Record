<?php

namespace App\Http\Controllers;
use App\Exports\TeacherExport;
use App\Imports\TeacherImport;
use App\Teacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::get();
        return view('admin.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.teacher.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $teacher = new Teacher();
        $teacher->phone_no = $request->phone;
        $teacher->address  = $request->address;
        $teacher->name     = $request->name;
        $teacher->qualifications = $request->qualifications;
        $teacher->save();
        return redirect()->action('TeacherController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
        return view('admin.teacher.edit',compact('teacher'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
        $teacher->phone_no = $request->phone;
        $teacher->address  = $request->address;
        $teacher->name     = $request->name;
        $teacher->qualifications = $request->qualifications;
        $teacher->save();
        return redirect()->action('TeacherController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
        $teacher->delete();
        return redirect()->action('TeacherController@index');

    }
    public function getimportfile(){
        return view('admin.teacher.import');
    }
    public function export()
    {

        return Excel::download(new TeacherExport(), 'teacher.xlsx');

    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new TeacherImport(),request()->file('file'));

        return back();
    }
}
