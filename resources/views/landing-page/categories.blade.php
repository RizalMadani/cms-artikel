@extends('layouts.landing-page')

@section('title', 'Page Title')

@section('content')

<section class="my-5"></section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                @foreach ($categories as $category)
                    <a href="{{ route('website.category', $category->slug) }}" class="d-block mb-1">
                        <div class="card">
                            <div class="card-body">
                                <span>{{ $category->name }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
