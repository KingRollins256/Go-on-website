<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentTable;

class StudentController extends Controller
{
    //
    public function addStudent($name, $class){
        $student = new StudentTable();


        $student->name = $name;
        $student->class = $class;
        $student->save();


    }


}
