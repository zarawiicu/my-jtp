<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\EventModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function index():View {
        $events = EventModel::all();
        return view('event', compact('events'));
    }


    public function snk(): View {
        return view('snk');
    }
}
