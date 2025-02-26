<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student; //how we declare

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('student');

        //Tinker - Retrieve all students using Eloquent
        $students = Student::orderBy('matric_id','asc')->get();

        return view ('student',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */  public function create()
     {
        //
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student(); //biru tu model yg we just created
        $student->matric_id=$request->matric_id;
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->email=$request->email;
        $student->phone_no=$request->phone_no;
        $student->created_at=today();
        $student->updated_at=today();
        $student->save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
