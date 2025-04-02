<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Carbon\Carbon;

class AdminController extends Controller
{
    // Show Add Teacher Form
    public function addTeacher()
    {
        return view('admin.add-teacher');
    }

    // Store Teacher Data
    public function storeTeacher(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:15',
            'national_id' => 'required|string|max:20|unique:teachers,national_id',
            'tsc_number' => 'required|string|max:20|unique:teachers,tsc_number',
            'gender' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date',
            'qualification' => 'required|string|max:255',
            'subject_specialization' => 'required|string|max:255',
            'employment_type' => 'required|in:Permanent,Contract',
            'date_of_employment' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        Teacher::create($request->all());

        return redirect('/allteachers')->with('success', 'Teacher added successfully!');
    }
// Show Admin Dashboard or Default Page
public function index()
{
    $teachers = Teacher::latest()->take(5)->get(); 
    
    // Debugging
    dd($teachers);

    return view('admin.index', compact('teachers'));
}


public function allTeachers()
{
    $teachers = Teacher::all();
    return view('admin.all-teachers', compact('teachers')); // Ensure this view exists
}


    // Show a single teacher
    public function show($id) {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.show', compact('teacher'));
    }

    // Show edit form
    public function edit($id) {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    // Update teacher
    public function update(Request $request, $id) {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    // Delete teacher
    public function destroy($id) {
        Teacher::findOrFail($id)->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    } 
}
