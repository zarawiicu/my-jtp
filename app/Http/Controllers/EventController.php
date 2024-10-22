<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = EventModel::all();
        return view('event', compact('events'));
    }

    public function snk() {
        return view('snk');
    }
}
