<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::orderBy('coursename','desc')->get();
        $departments = Department::all()->pluck('department');
        if (count($departments) > 0) {
            return view('admin.courses.index')->with([
                'courses' => $courses,
                'departments' => $departments
            ]);
        } else {
            return redirect('/departments/create');
        }
        
            
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()

    // {
    //     $departments=Department::all()->pluck('department');
    //     if(count($departments)>0){
    //     return view('admin.courses.create')->with('departments',$departments);
    //     }else{
    //         return redirect('/departments/create');
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
        $departments=Department::all()->pluck('department'); 
        $course= new Course();
        $course->coursecode=$request->input('coursecode');
        $course->coursename=$request->input('coursename');
        $course->department=$departments[$request->input('department')];
        $course->save();
        return redirect('/courses');
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
        $course=Course::find($id);
        return view('admin.courses.edit')->with('course',$course);
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
        $course=Course::find($id);
        $course->coursecode=$request->input('coursecode');
        $course->coursename=$request->input('coursename');
        $course->department=$request->input('department');
        $course->save();
        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $course=  Course::find($id);
        $course->delete();
        return redirect('/courses');
    }
}
