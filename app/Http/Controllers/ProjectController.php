<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('front.home.home');
    }

    public function test() {
        return view('front.home.test');
    }
}
