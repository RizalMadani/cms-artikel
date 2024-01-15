@extends('adminlte::page')

@section('title', 'Dashboard | User')

@section('content_header')
<h1>Lihat Detail User</h1>
@stop

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <a href="{{ route('dashboard.user.index') }}" class="btn btn-sm btn-secondary mr-4">
            <i class="fa fa-arrow-left mr-2"></i>
            Kembali
        </a>

        <a href="{{ route('dashboard.user.edit', $user->id) }}" class="btn btn-sm btn-secondary mr-1">
            <i class="fa fa-pen mr-2"></i>
            Edit User
        </a>

        <a href="{{ route('dashboard.user.destroy', $user->id) }}" class="btn btn-sm btn-outline-danger">
            <i class="fa fa-trash mr-2"></i>
            Hapus User
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div>
                    <strong>Nama</strong>
                    <p>{{ $user->name }}</p>
                </div>

                <div>
                    <strong>Role</strong>
                    <p>{{ $user->role }}</p>
                </div>

                <div>
                    <strong>Email</strong>
                    <p>{{ $user->email }}</p>
                </div>

                <div>
                    <strong>Phone</strong>
                    <p>{{ $user->phone }}</p>
                </div>

                <div>
                    <strong>Alamat</strong>
                    <p>{{ $user->address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
