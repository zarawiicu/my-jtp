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
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // File harus berupa gambar
        ]);

        // Simpan data portofolio baru
        $event = new EventModel();
        $event->judul = $request->judul;
        $event->deskripsi = $request->deskripsi;

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $event->gambar = $filename;
        }

        $event->save();

        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $events = EventModel::find($id);
        return view('admin.event.show', compact('events'));
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

    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // File harus berupa gambar
    ]);

    // Temukan data yang akan diupdate berdasarkan ID
    $event = EventModel::findOrFail($id);

    // Update data
    $event->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
    ]);

    // Upload gambar jika ada
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($event->gambar) {
            Storage::delete('public/images/' . $event->gambar);
        }

        // Upload gambar baru
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $event->gambar = $filename;
        $event->save();
    }

    return redirect()->route('events.index')->with('success', 'Event berhasil diubah!');
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
