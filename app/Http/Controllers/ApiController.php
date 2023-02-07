<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function getAllStudents()
  {
    $students = Student::get()->toJson(JSON_PRETTY_PRINT);
    return response($students, 200);
  }

  public function createStudent(Request $request)
  {
    $student = new Student;
    $student->name = $request->name;
    $student->course = $request->course;
    $student->save();
    return response()->json([
      "Message" => "Student created successfully!",
      "Student ID: " => $student->id
    ], 201);
  }

  public function getStudent($id)
  {
    // logic to get a student record goes here
    $student = Student::find($id);
    return response($student, 200);
  }

  public function updateStudent(Request $request, $id)
  {
    // logic to update a student record goes here
    $student = Student::find($id);
    $student->name = $request->name;
    $student->course = $request->course;
    $student->save();
    return response()->json([
      "Message" => "Student updated successfully!",
    ]);
  }

  public function deleteStudent($id)
  {
    // logic to delete a student record goes here
    $student = Student::find($id);
    $student->delete();
    return response()->json([
      "Message" => "Student deleted successfully!",
      "Student ID: " => $student->id
    ], 200);
  }
}
