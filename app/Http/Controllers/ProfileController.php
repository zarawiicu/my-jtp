<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('profile-group');
    }

    public function snk() {
        return view('snk');
    }
}
