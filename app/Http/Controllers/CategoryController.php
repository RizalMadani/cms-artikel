<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index() {
        return view('dashboard.category.index', [
            'categories' => Category::all(),
        ]);
    }

    public function create() {
        return view('dashboard.category.create');
    }

    public function store(Request $request) {
        $alertClass = 'success';
        $alert      = ['Berhasil', 'Berhasil menambah kategori baru'];

        try {
            Category::create([
                'name' => $request->name,
            ]);
        } catch (\Throwable $th) {
            $alertClass = 'warning';
            $alert      = ['Gagal', 'Gagal menambah kategori baru'];
        }

        Session::flash('alert-class', $alertClass);
        Session::flash('alert', $alert);

        return redirect()->route('dashboard.category.index');

    }

    public function edit(string $id) {
        return view('dashboard.category.edit', [
            'category' => Category::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, string $id) {
        $alertClass = 'success';
        $alert      = ['Berhasil', 'Berhasil mengedit kategori'];

        $category   = Category::where('id', $id)->first();

        $category->slug = null;
        $category->update([
            'name' => $request->name,
        ]);

        Session::flash('alert-class', $alertClass);
        Session::flash('alert', $alert);

        return redirect()->route('dashboard.category.index');
    }

    public function destroy(string $id) {
        $alertClass = 'success';
        $alert      = ['Berhasil', 'Berhasil menghapus kategori'];

        Category::where('id', $id)->delete();

        Session::flash('alert-class', $alertClass);
        Session::flash('alert', $alert);

        return redirect()->route('dashboard.category.index');
    }
}
