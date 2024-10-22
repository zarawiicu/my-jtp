<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\EventModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = EventModel::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $filename = NULL;
    $path = NULL;

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'public/storage/event';
            $file->move($path, $filename);
        }

        EventModel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path.$filename,
        ]);

    return redirect()->route('events.index')->with('status', 'Event created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $events = EventModel::find($id);
        return view('a.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $events = EventModel::findOrFail($id);
        return view('admin.event.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
{
   
    $request->validate([
        'name' => 'required|max:255|string',
        'description' => 'required|max:255|string',
        'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        'is_active' => 'sometimes'
    ]);

    $events = EventModel::findOrFail($id);

    if($request->has('image')){

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $filename = time().'.'.$extension;

        $path = 'public/storage/event';
        $file->move($path, $filename);

        if(Storage::exists($events->gambar)){
            Storage::delete($events->gambar);
        }
    }

    $events->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'gambar' => $path.$filename,
    ]);

    return redirect()->back()->with('status','Event Update');
}

public function destroy($id)
{
    $events = EventMOdel::findOrFail($id);
    if(Storage::exists($events->gambar)){
        Storage::delete($events->gambar);
    }

    $events->delete();

    return redirect()->back()->with('status','Event Deleted');
}
}
