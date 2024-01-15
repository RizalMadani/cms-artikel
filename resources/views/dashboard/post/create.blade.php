@extends('adminlte::page')

@section('title', 'Dashboard | Buat Artikel Baru')

@section('content_header')
<h1>Buat Artikel Baru</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-adminlte-input name="title" label="Judul Artikel" error-key="title" enable-old-support="true"></x-adminlte-input>

                    <x-adminlte-select2 name="category_id" label="Kategori" id="select-kategori" data-placeholder="Pilih kategori">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-adminlte-select2>

                    @php
                        $config = [
                            'height' => '100',
                            'toolbar' => [
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                            ]
                        ]
                    @endphp
                    <x-adminlte-text-editor name="body" label="Konten" :config="$config">
                    </x-adminlte-text-editor>

                    <x-adminlte-input-file name="banner" label="Banner" placeholder="Pilih banner artikel">
                    </x-adminlte-input-file>

                    <div>
                        <x-adminlte-button label="Tambahkan" theme="primary" type="submit" icon="fas fa-plus mr-2"></x-adminlte-button>

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

@section('plugins.Summernote', true)
@section('plugins.bsCustomFileInput', true)

@section('js')
    <script>
        $(document).ready(function() {
            $('#select-kategori').select2();
        })
    </script>
@endsection
