<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function profile() {
        return view('dashboard.profile', [
            'user' => auth()->user(),
        ]);
    }

    public function updatePassword(Request $request) {
        $user = User::where('id', auth()->user()->id)->first();

        $oldPassword = $user->password;

        if (! Hash::check($request->old, $oldPassword) && $request->new !== $request->confirm)
        {
            return redirect()->back();
        }

        $user->update([
            'password' => Hash::make($request->new),
        ]);

        Session::flash('alert-class', 'success');
        Session::flash('alert', ['Berhasil', 'Berhasil mengubah password']);

        return redirect()->route('dashboard.profile');
    }
}
