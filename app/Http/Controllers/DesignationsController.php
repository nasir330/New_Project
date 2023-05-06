<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;

class DesignationsController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $designations = Designation::all();
        return view('pages.designations.index',['designations' => $designations, 'departments' => $departments]);
    }
    //add department
    public function store(Request $request)
    {
        $data = $request->all();
        Department::create($data);
        session()->flash('success','Department successfully created !!');
        return redirect()->back();
    }
    //edit department
    public function edit($id)
    {
        $department = Department::find($id);
        return view('pages.departments.edit',['department' => $department]);
    }
    //update department
    public function update(Request $request)
    {        
        Department::where('id',$request->departmentId)->update([
            'department'=>$request->department,
        ]);
        session()->flash('success','Department successfully updated !!');
        return redirect()->route('departments');
    }
}
