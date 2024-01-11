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
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2020</span>
                                    <span class="mos">September</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
                            <p>{{ Str::limit($post->body, 50, '...') }}</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
