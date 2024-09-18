<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public static function index() {
        return view('pages.subjects.index');
    }
}
