<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index() {
        return view("pages.about");
    }
    public function test() {
        return view("pages.test");
    }
}