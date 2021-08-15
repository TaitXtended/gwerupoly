<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students =Student::orderBy('created_at','desc')->get();
        return view('admin.students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        if ($request->hasFile('pic')) {
            $fileNameWithExt=$request->file('pic')->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('pic')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('pic')->storeAs('public/stdentprofilephotos',$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpeg';
        }
        $student =new Student();
        $student->fname=$request->input('fname');
        $student->surname=$request->input('surname');
        $student->email=$request->input('email');
        $student->regnum=$request->input('regnum');
        $student->coursename=$request->input('cname');
        $student->level=$request->input('level');
        $student->studymode=$request->input('smode');
        $student->pass=$request->input('pass');
        $student->profilephoto=$fileNameToStore;
        $student->save();
        return redirect('/students');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $student =Student::find($id);
        return view('admin.students.show')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $student= Student::find($id);
        //  if(Auth()->user()->id !== $student->user_id){
        //      return redirect('/st$students');
        //  }
        return view('admin.students.edit')->with('student',$student);
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
         $student =Student::find($id);
       
        if ($request->hasFile('pic')) {
            $fileNameWithExt=$request->file('pic')->getClientOriginalName();
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('pic')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('pic')->storeAs('public/stdentprofilephotos',$fileNameToStore);
        }else{
            $fileNameToStore='noimage.jpeg';
        }
        
        $student->fname=$request->input('fname');
        $student->surname=$request->input('surname');
        $student->email=$request->input('email');
        $student->regnum=$request->input('regnum');
        $student->coursename=$request->input('cname');
        $student->level=$request->input('level');
        $student->studymode=$request->input('smode');
        $student->pass=$request->input('pass');
        $student->profilephoto=$fileNameToStore;
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student= Student::find($id);
        //  if(Auth()->user()->id !== $student->user_id){
        //      return redirect('/noti$students');
        //  }
        $student->delete();
        return redirect('/students');

    }
}

