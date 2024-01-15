@extends('adminlte::page')

@section('title', 'Dashboard | Artikel')

@section('content_header')
<h1>Daftar Artikel</h1>
@stop

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <a href="{{ route('dashboard.post.create') }}" class="btn btn-primary">
            <i class="fa fa-plus mr-2"></i>
            Tambah Artikel baru
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="daftar-kategori" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Cuplikan</th>
                            <th>Autor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration.'.' }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->excerpt }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                <a href="{{ route('website.post', $post->slug) }}" class="btn btn-sm btn-secondary mb-2">
                                    <i class="fa fa-eye mr-2"></i>
                                    Lihat
                                </a>

                                <a href="{{ route('dashboard.post.edit', $post->id) }}" class="btn btn-sm btn-secondary mb-2">
                                    <i class="fa fa-pen mr-2"></i>
                                    Edit
                                </a>

                                <form action="{{ route('dashboard.post.destroy', $post->id) }}" method="post" id="form-hapus" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fa fa-trash mr-2"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

{{-- @section('plugins.Datatables', true) --}}

@section('js')
<script>
    new DataTable('#daftar-kategori', {
        responsive: true,
        autoWidht: false,
    });

    @if (request()->session()->has('alert'))
        Swal.fire({
            icon: '{{ session('alert-class') }}',
            title: '{{ session('alert')[0] }}',
            text: '{{ session('alert')[1] }}',
        });
    @endif
</script>
@endsection
