<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function getStudents()
    {
        return DataTables::of(Student::query())->make(true);
    }
}
