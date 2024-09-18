<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public static function index()
    {
        $students = StudentModel::get();
        return view('pages.students.index')->with(['students' => $students]);
    }

    public static function store(Request $request)
    {
        // validate the request
        $request->validate([
            'inp_fn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_email' => 'required|email|unique:t_students,stud_email',
            'inp_age' => 'nullable|string|max:20',
            'inp_strand' => 'nullable|string|max:255',
            'inp_grade_level' => 'nullable|string|max:255',
            'inp_section' => 'nullable|string|max:255',
        ]);

        // save student record
        StudentModel::create([
            'stud_first_name' => $request->inp_fn,
            'stud_last_name' => $request->inp_ln,
            'stud_email' => $request->inp_email,
            'stud_age' => $request->inp_age,
            'stud_strand' => $request->inp_strand,
            'stud_grade_level' => $request->inp_grade_level,
            'stud_section' => $request->inp_section,
        ]);

        // redirect back with success message
        return redirect()->back()->with('success', 'Student addedd successfuly!');
    }

    public function edit($id)
    {
        $students = StudentModel::findOrFail($id);
        return view('pages.students.edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'stud_first_name' => 'required',
            'stud_last_name' => 'required',
            'stud_email' => 'required|email',
            'stud_age' => 'required',
            'stud_strand' => 'required',
            'stud_grade_level' => 'required',
            'stud_section' => 'required',
        ]);

        $students = StudentModel::findOrFail($id);
        $students->update([
            'stud_first_name' => $request->stud_first_name,
            'stud_last_name' => $request->stud_last_name,
            'stud_email' => $request->stud_email,
            'stud_age' => $request->stud_age,
            'stud_strand' => $request->stud_strand,
            'stud_grade_level' => $request->stud_grade_level,
            'stud_section' => $request->stud_section,
        ]);

        return redirect()->route('pages.students.index')->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $students = StudentModel::findOrFail($id);
        $students->delete();

        return redirect()->route('pages.students.index')->with('success', 'Student deleted successfully');
    }

}
