@extends('adminlte::page')

@section('title', 'Dashboard | User')

@section('content_header')
<h1>Daftar User</h1>
@stop

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <a href="{{ route('dashboard.user.create') }}" class="btn btn-primary">
            <i class="fa fa-plus mr-2"></i>
            Tambah User baru
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="daftar-user" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration.'.' }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('dashboard.user.show', $user->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-eye mr-2"></i>
                                    Lihat
                                </a>

                                <a href="{{ route('dashboard.user.edit', $user->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-pen mr-2"></i>
                                    Edit
                                </a>

                                <form action="{{ route('dashboard.user.destroy', $user->id) }}" method="post" id="form-hapus" class="d-inline-block">
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
    new DataTable('#daftar-user', {
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
