@extends('adminlte::page')

@section('title', 'Dashboard | Buat User Baru')

@section('content_header')
<h1>Buat User Baru</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.user.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <x-adminlte-input name="name" label="Nama User" error-key="name" enable-old-support="true"></x-adminlte-input>
                            <x-adminlte-select name="role" label="Role">
                                <option value="">Pilih role user</option>
                                <option value="admin">Admin</option>
                                <option value="author">Author</option>
                            </x-adminlte-select>
                            <x-adminlte-input name="phone" label="No. Telepon" error-key="phone" enable-old-support="true"></x-adminlte-input>
                            <x-adminlte-textarea name="address" label="Alamat"/>
                        </div>

                        <div class="col-lg-1"></div>

                        <div class="col-lg-5">
                            <x-adminlte-input name="email" label="Email" type="email" error-key="email"></x-adminlte-input>
                            <x-adminlte-input name="password" label="Password" type="password" error-key="password"></x-adminlte-input>
                            <x-adminlte-input name="confirm" label="Konfirmasi Password" type="password" error-key="confirm"></x-adminlte-input>

                            <div class="form-group">
                                <x-adminlte-button label="Tambahkan" theme="primary" type="submit" icon="fas fa-plus mr-2">
                                </x-adminlte-button>
                                <a href="{{ route('dashboard.user.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-times mr-2"></i>
                                    Batal
                                </a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            {{-- <div class="card-footer">
                <x-adminlte-button label="Tambahkan" theme="primary" type="submit" icon="fas fa-plus mr-2">
                </x-adminlte-button>
                <a href="{{ route('dashboard.user.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-2"></i>
                    Batal
                </a>
            </div> --}}
        </div>
    </div>
</div>
@stop
