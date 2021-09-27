<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticesContoller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notices =Notice::orderBy('created_at','desc')->get();
        return view('notices.index')->with('notices',$notices);
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'notice'=>'required'
       ]);
        $notice =new Notice();
        $notice->notice=$request->input('notice');
        
        $notice->save();
        return redirect('/notices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice= Notice::find($id);
        return view('notices.show')->with('notice',$notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $notice= Notice::find($id);
        //  if(Auth()->user()->id !== $notice->user_id){
        //      return redirect('/notices');
        //  }
        return view('notices.edit')->with('notice',$notice);
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
        $notice= Notice::find($id);
        $notice->notice=$request->input('notice');
        $notice->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice= Notice::find($id);
        //  if(Auth()->user()->id !== $notice->user_id){
        //      return redirect('/noti$notices');
        //  }
        $notice->delete();
        return redirect('/home');

    }
}

