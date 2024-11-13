<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all(); // Use plural variable name for consistency
        return view('backend.courses.index', compact('courses')); // Pass 'courses' to the view
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new instance of Course model
        $course = new Course();

        // Fill the course properties
        $course->name = $request->input('name');
        $course->description = $request->input('description');

        // Save the course to the database
        $course->save();

        // Redirect back with a success message
        return redirect()->route('courses.create')->with('success', 'Course created successfully');
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
        $course = course::findOrfail($id);
        return view('backend.courses.edit', compact('course'));
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
        $validate = $reques->validate([
            'name' => 'required|string|max:255',
            'description' =>'nullable|string',
             ]);

             $course = course::findOrfail($id);
             return redirect()->route('courses.index')->width('success', 'Course updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::findOrfail($id);
             $course->delete($validate);
             return redirect()->route('courses.index')->width('success', 'Course deleted successfully');
    }
}
