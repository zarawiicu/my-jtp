<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $users = UserModel::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        'password' => ['required'],
        'is_admin' => ['required', 'boolean']
    ]);

    $user = UserModel::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $user->save();
    return redirect()->route('users.index')->with('success', 'User created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $users = UserModel::find($id);
        return view('admin.user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = UserModel::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id):RedirectResponse
    {
        // Temukan user berdasarkan ID
    $user = UserModel::findOrFail($id);

    // Update data user
    $user->name = $request->name;
    $user->email = $request->email;

    // Hanya mengupdate password jika ada input baru
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Update is_admin
    $user->is_admin = $request->is_admin;

    // Simpan perubahan
    $user->save();
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id):RedirectResponse
    {
        UserModel::findOrFail($id)->delete();
        return redirect()->back()->with('status','User Deleted');
    }
}
