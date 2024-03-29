@extends('adminlte::page')

@section('title', 'Dashboard | Buat Kategori Baru')

@section('content_header')
<h1>Buat Kategori Baru</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.category.store') }}" method="POST">
                    @csrf

                    <x-adminlte-input name="name" label="Nama Kategori" error-key="name" enable-old-support="true"></x-adminlte-input>

                    <div>
                        <x-adminlte-button label="Tambahkan" theme="primary" type="submit" icon="fas fa-plus mr-2">
                        </x-adminlte-button>
                        <a href="{{ route('dashboard.category.index') }}" class="btn btn-secondary">
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
