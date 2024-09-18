<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public static function index() {
        return view('pages.semesters.index');
    }
}
