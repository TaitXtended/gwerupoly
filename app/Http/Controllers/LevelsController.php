<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Course;
class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels=Level::orderBy('course','desc')->get();
      
        $courses = Course::all()->pluck('coursename');
        if (count($courses) > 0) {
            return view('admin.levels.index')->with(['levels'=> $levels,
            'courses'=> $courses]);
        } else {
            return redirect('/courses/create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //      $courses=Course::all()->pluck('coursename');
    //     if(count($courses)>0){
    //     return view('admin.levels.create')->with('courses',$courses);
    //     }else{
    //         return redirect('/courses/create');
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $level=new Level();
        $courses=Course::all()->pluck('coursename');
        $level->course=$courses[$request->input('course')];
        $level->level=$request->input('level');
        $level->qualifications=$request->input('qualifications');
        $level->modules=$request->input('modules');
        $level->save();
        return redirect('/levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
