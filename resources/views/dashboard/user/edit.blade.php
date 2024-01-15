@extends('adminlte::page')

@section('title', 'Dashboard | Edit User')

@section('content_header')
<h1>Edit User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <x-adminlte-input name="name" label="Nama User" error-key="name" enable-old-support="true" value="{{ $user->name }}"></x-adminlte-input>
                    <x-adminlte-select name="role" label="Role" error-key="role" enable-old-support="true">
                        <option value="">Pilih role user</option>
                        <option value="admin" @selected($user->role == 'admin')>Admin</option>
                        <option value="author" @selected($user->role == 'author')>Author</option>
                    </x-adminlte-select>
                    <x-adminlte-input name="phone" label="No. Telepon" error-key="phone" enable-old-support="true" value="{{ $user->phone }}"></x-adminlte-input>
                    <x-adminlte-textarea name="address" label="Alamat">
                        {{ $user->address }}
                    </x-adminlte-textarea>
                    <x-adminlte-input name="email" label="Email" type="email" error-key="email" enable-old-support="true" value="{{ $user->email }}"></x-adminlte-input>

                    <div>
                        <x-adminlte-button label="Edit" theme="primary" type="submit" icon="fas fa-pen mr-2">
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
