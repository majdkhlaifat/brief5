<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonDashboardController extends Controller
{
    public function index(Type $var = null)
    {
        return view('lesson.dashboard');
    }
}
