@extends('adminlte::page')

@section('title', 'Dashboard | Profile')

@section('content_header')
<h1>Lihat Profil</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                Profil data diri
            </div>
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

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                Ubah password
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.update_password') }}" method="post">
                    @method('PUT')
                    @csrf

                    <x-adminlte-input name="old" label="Password lama" type="password" error-key="old"></x-adminlte-input>
                    <x-adminlte-input name="new" label="Password lama" type="password" error-key="new"></x-adminlte-input>
                    <x-adminlte-input name="confirm" label="Konfirmasi Password" type="password" error-key="confirm"></x-adminlte-input>

                    <div class="form-group">
                        <x-adminlte-button label="Tambahkan" theme="primary" type="submit" icon="fas fa-plus mr-2">
                        </x-adminlte-button>
                        <a href="{{ route('dashboard.user.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times mr-2"></i>
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
