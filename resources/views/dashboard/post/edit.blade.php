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

                    <x-adminlte-input name="title" label="Judul Artikel" error-key="title" enable-old-support="true" value="{{ $post->title }}"></x-adminlte-input>

                    <x-adminlte-select2 name="category_id" label="Kategori" id="select-kategori" data-placeholder="Pilih kategori">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($category->id == old('category_id', $post->category_id))>{{ $category->name }}</option>
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
                        {{ $post->body }}
                    </x-adminlte-text-editor>

                    @if ($post->banner)
                        <img src="{{ asset('storage/'.$post->banner) }}" class="image-preview image-fluid d-block">
                    @endif

                    <x-adminlte-input-file name="banner" label="Banner" placeholder="Pilih banner artikel">
                    </x-adminlte-input-file>

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

@section('plugins.Summernote', true)
@section('plugins.bsCustomFileInput', true)

@section('js')
    <script>
        $(document).ready(function() {
            $('#select-kategori').select2();
        })
    </script>
@endsection
