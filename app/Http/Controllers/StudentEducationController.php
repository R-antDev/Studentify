<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentEducation;
use Illuminate\Http\Request;

class StudentEducationController extends Controller
{
    //
    public function add_education(Request $request , $studentId)
    {
        $edu = new StudentEducation();
        $edu->student_id = $studentId;
        $edu->degree = $request->degree;
        $edu->passingYear = $request->passingYear;
        $edu->institution = $request->institution;
        $edu->save();
        // redirect on the same page
        return redirect()->back()->with('success', 'Education added successfully');
    }
    public function education_list($studentId)
    {
        $student = Student::findOrFail($studentId);
        $educations = StudentEducation::where('student_id', $studentId)->get();
        return view('student.student_education', compact('student','educations'));
    }
    public function education_delete($id)
    {
        $edu = StudentEducation::findOrFail($id);
        $edu->delete();
        return redirect()->back()->with('success', 'Education deleted successfully');
    }
    public function education_edit($id)
    {
        $edu = StudentEducation::findOrFail($id);
        return view('student.education_edit', compact('edu'));
    }
    public function education_update(Request $request, $id)
    {
        $edu = StudentEducation::findOrFail($id);
        $edu->degree = $request->degree;
        $edu->passingYear = $request->passingYear;
        $edu->institution = $request->institution;
        $edu->save();
        return redirect()->back()->with('success', 'Education updated successfully');
    }
}
