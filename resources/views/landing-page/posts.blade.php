@extends('layouts.landing-page')

@section('title', $heading)

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight">
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="height: 320px;">
        <div class="col-md-9 pb-5 text-center">
            <h1 class="mb-0 bread" style="color: inherit;">{{ $heading }}</h1>
        </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">

            @foreach ($posts as $post)
                <div class="col-md-4 d-flex">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('website.post', $post->slug) }}" class="block-20" style="background-image: url('{{
                            $post->banner ? asset('storage/post_banner/'.$post->banner) : '/landing-page/images/gambar_bebas.png'
                        }}');"></a>

                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">{{ date('d', strtotime($post->updated_at)) }}</span>
                                </div>
                                <div class="two">
                                    <span class="yr">{{ date('Y', strtotime($post->updated_at)) }}</span>
                                    <span class="mos">{{ date('F', strtotime($post->updated_at)) }}</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ route('website.post', $post->slug) }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->excerpt }}</p>
                            <p><a href="{{ route('website.post', $post->slug) }}" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
