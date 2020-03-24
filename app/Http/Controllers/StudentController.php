<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student as Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = DB::select('select * from students');
        //return view('student.index',['students'=>$students]);
       // $students = Student::all();
        $students = Student::where('status', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();
        return view('student.index')
            ->with('student_objects', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //die('student store');
        $name = $request->input('name');
        $college_id = $request->input('college_id');
        ///DB::insert('insert into students (name) values(?,?)', [$name,$college_id]);
      // Create //Insert new student
        $student = new Student;
        $student->name = $name;
        $student->college_id = $college_id;
        $student->save();
        //echo "Record inserted successfully.<br/>";
        //echo '<a href="/student/create">Click Here</a> to go back.';
        return redirect()->route('student.index');
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
