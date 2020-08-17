<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $courses = Course::all(); 
    //      return view('home', [
    //          'courses', $courses 
    //      ]);

    // }
    
    public function index()
    {
        $courseCount = Course::count();
        $userCount = User::count();
        $courses = Course::All();
        return view('home', [
            'courses' => $courses,
            'courseCount' => $courseCount,
            'userCount' => $userCount,
        ]);
        // return view('home', [
        //     'courses' => $courses
        // ]);
        
    }
}

