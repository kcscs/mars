<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function registerCourse(Request $request) {
        //TODO
        return redirect()->route('courses');
    }
}
