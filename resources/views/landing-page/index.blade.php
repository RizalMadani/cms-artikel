@extends('layouts.landing-page')

@section('title', 'Page Title')

@section('content')

<section class="my-5"></section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">

            @foreach ($posts as $post)
                <div class="col-md-4 d-flex">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('website.post', $post->slug) }}" class="block-20" style="background-image: url('{{
                            $post->banner ? asset('storage/'.$post->banner) : '/landing-page/images/gambar_bebas.png'
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
