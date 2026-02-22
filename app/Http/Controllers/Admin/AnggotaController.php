<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = User::where('role', 'siswa')->get();
        return view('admin.user.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username',
            'nis' => 'required|integer|unique:users,nis',
            'class' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'nis' => $request->nis,
            'class' => $request->class,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = User::findOrFail($id);
        return view('admin.user.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = User::findOrFail($id);
        return view('admin.user.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username,' . $anggota->id,
            'nis' => 'required|integer|unique:users,nis,' . $anggota->id,
            'class' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,' . $anggota->id,
            'password' => 'nullable|string|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'nis' => $request->nis,
            'class' => $request->class,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $anggota->update($data);

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = User::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')
            ->with('success', 'Anggota berhasil dihapus');
    }
}