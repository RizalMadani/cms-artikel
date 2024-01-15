<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::all(),
        ]);
    }

    public function show(User $user)
    {
        return view('dashboard.user.show', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $password = $request->password;
        $confirm  = $request->confirm;

        if ($password !== $confirm) {
            return redirect()->back();
        }

        // TODO: tambah validasi

        User::create([
            'role' => $request->role,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($password),
        ]);


        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil', 'Berhasil menambahkan user baru']);

        return redirect()->route('dashboard.user.index');
    }

    public function update(Request $request, User $user)
    {
        // TODO: tambah validasi

        $user->update([
            'role' => $request->role,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);


        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil', 'Berhashil mengedit user']);

        return redirect()->route('dashboard.user.index');
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
        ]);
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil',  'Berhasil menghapus user']);

        return redirect()->route('dashboard.user.index');
    }
}
