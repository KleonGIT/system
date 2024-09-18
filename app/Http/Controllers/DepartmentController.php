<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public static function index() {
        return view('pages.departments.index');
    }
}
