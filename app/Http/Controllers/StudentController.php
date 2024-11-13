<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;



class StudentController extends Controller
{



    public function index()
    {
        // Get all students
        $students = Student::all();
        return view('backend.students.index', compact('students'));
    }


    public function create()
    {
        // Return the view to create a new student
        return view('backend.students.create');
    }


    public function store(StoreStudentRequest $request)

    {
        // $this->authorize('create', Student::class);

        // Validate and create a new student
        $validated = $request->validate([
        'name' =>'required|string|max:255',
        'email' =>'required|string|max:255',
        'reg_number'=>'required|string|max:255',
        'grade'=>'required|string|max:255',
        'course_enrolled'=>'required|string|max:255'
    ]);
        Student::create($validated);

        // Redirect with success message
        return redirect()->route('backend.students.index')->with('success', 'Student created successfully.');
    }

        public function show($id)
    {
        // Show the student details
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.


     */
    public function edit($id)
    {
        // Show the form to edit the student
        $student::findOrFail($id);
        return view('backend.students.edit', compact('student'));
    }

    /**
     * Update the specified student in the database.
     *

     */
    public function update(Request $request,  $id)
    {
        // Validate and update the student
        $validated = $request->validate([
            'name' =>'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'reg_number'=>'required|string|max:255',
            'grade'=>'required|string|max:255',
            'course_enrolled'=>'required|string|max:255'
        ]);
        $student->update($validated);

        // Redirect with success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from the database.

     */
    public function destroy($id)
    {
        // Delete the student
        $student->delete();
       // Redirect with success message
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
