<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view("pages.home");
    }
    public function test() {
        return view("pages.test");
    }
}