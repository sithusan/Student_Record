<?php

namespace App\Http\Controllers;

use App\Major;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMajor(){
        $majors = Major::get();
        return view('admin.subject.getmajor',compact('majors'));
    }
    public function index($major_id)
    {
        //

        $subjects = Subject::where('major_id',$major_id)->get();
        return view('admin.subject.index',compact('subjects','major_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($major_id)
    {
        //
        return view('admin.subject.create',compact('major_id'));

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
        $subject = new Subject();
        $subject->subject = $request->subject;
        $subject->major_id= $major_id;
        $subject->save();
        return redirect()->action('SubjectController@index',$major_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($major_id,Subject $subject)
    {
        //
        return view('admin.subject.edit',compact('subject','major_id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $major_id,Subject $subject)
    {
        //
        $subject->subject = $request->subject;
        $subject->major_id= $major_id;
        $subject->save();
        return redirect()->action('SubjectController@index',$major_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($major_id,Subject $subject)
    {
        //

        $subject->delete();
        return redirect()->action('SubjectController@index',$major_id);


    }
}
