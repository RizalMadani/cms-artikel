@extends('adminlte::page')

@section('title', 'Dashboard | Edit Artikel')

@section('content_header')
<h1>Edit Artikel</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <x-adminlte-input name="name" label="Nama Kategori" error-key="name" enable-old-support="true" value="{{ $post->name }}"></x-adminlte-input>

                    <div>
                        <x-adminlte-button label="Edit" theme="primary" type="submit" icon="fas fa-pen mr-2">
                        </x-adminlte-button>
                        <a href="{{ route('dashboard.post.index') }}" class="btn btn-secondary">
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
