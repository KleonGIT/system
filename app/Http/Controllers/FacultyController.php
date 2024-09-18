<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public static function index() {
        return view('pages.faculty.index');
    }
}
