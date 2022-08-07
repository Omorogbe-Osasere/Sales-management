<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addproject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->Validate($request,[
            'projectname'=>'required|max:255',
            'projectdescription'=>'required',
            'startdate'=>'required|max:255',
            'enddate'=>'required|max:255',
            'deadline'=>'required|max:255',
            'assignedto'=>'required|max:255',
        ]);

        Project::Create([
              'projectname'=>$request->projectname,
              'projectdescription'=>$request->projectdescription,
              'startdate'=>$request->startdate,
              'enddate'=>$request->enddate,
              'deadline'=>$request->deadline,
              'assignedto'=>$request->assignedto


        ]);

        return redirect('admin/viewprojects')->with('message','Project added successfully');
        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = Project::paginate(5);
        return view ('admin.viewprojects',compact('data'));
      

    
    }

     public function edit2($id){
        $data = Project::find($id);
        return view ('admin.projectdetails',compact('data'));
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
        $data= Project::find($id);
        return view('admin.editproject',compact('data'));
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
        $data = Project::find($id);
        $data -> projectname= $request->input('projectname');
        $data -> projectdescription= $request->input('projectdescription');
        $data -> startdate= $request->input('startdate');
        $data -> enddate= $request->input('enddate');
        $data -> deadline= $request->input('deadline');
        $data -> assignedto= $request->input('assignedto');
        $data->update();
        return redirect('admin/viewprojects')->with('message','Updated Successfully');
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
        $data = Project::find($id);
        $data->delete();
        return redirect('admin/viewprojects')->with('message','Project Deleted Successfully');
    }
}
