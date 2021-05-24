<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentData = Student::all();

        return view('student.index',compact('studentData'));
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
        $data= request()->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile_no' => 'required|min:11|numeric',
            'email' => 'email:rfc,dns',
            'gender' => 'required',
            'education' => 'required',
        ]);

        // dd($data);

        $data = Student::create([
           
               'name' => $data['name'],
               'address' => $data['address'],
               'mobile_no' => $data['mobile_no'],
               'email' => $data['email'],
               'gender' => $data['gender'],
               'education' => $data['education'],

        ]);

        // dd($data['email']);

       

        return redirect()->route('student.index')->with('status','Student Created.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Responpse
     */
    public function update(Request $request, Student $student)
    {
        $data= request()->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile_no' => 'required|min:11|numeric',
            'email' => 'email:rfc,dns',
            'gender' => 'required',
            'education' => 'required',
        ]);

        // dd($data);

        $student->fill([
           
               'name' => $data['name'],
               'address' => $data['address'],
               'mobile_no' => $data['mobile_no'],
               'email' => $data['email'],
               'gender' => $data['gender'],
               'education' => $data['education'],

        ])->update();

        return redirect()->route('student.index')->with('status','Student Updated.');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('status','Student Deleted.');

    }
}
