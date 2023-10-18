<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index() {
        $schools = School::orderBy('id')->get();
        return view('home', ['schools' => $schools]);
    }

    public function show() {
        $schools = School::orderBy('id')->get();
        return view('create', ['schools' => $schools]);
    }
}
