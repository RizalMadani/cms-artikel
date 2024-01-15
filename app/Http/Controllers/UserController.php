<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::all(),
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
