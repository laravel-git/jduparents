<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::select(
            DB::raw("sum(lessonCount) as lessonCount"),
            DB::raw("sum(unexcused) as unexcused"),
            DB::raw('sum(absence) as absence'),
            DB::raw('sum(late) as late'),
            'studentID','studentName','id'
        )
        ->groupBy('studentId')
        ->get();

        return view('admin.students',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $subjects = Student::get()->where('studentId' , $student->studentId);
       return view('admin.show' , ['subjects' => $subjects , 'student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
