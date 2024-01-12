@extends('layouts.landing-page')

@section('title', $post->title)

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{
    $post->banner ? asset('storage/post_banner/'.$post->banner) : '/landing-page/images/gambar_bebas.png'
}}');">
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center" style="min-height: 480px; max-height: 640px;">
            <div class="col-md-9 pb-5 text-center">
                {{-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Blog Details</h1> --}}
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-md-5 mt-md-5">
                <h2 class="mb-3">{{ $post->title }}</h2>

                {!! $post->body !!}

                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="{{ route('website.category', $post->category->slug) }}" class="tag-cloud-link">{{ $post->category->name }}</a>
                    </div>
                </div>

                {{-- <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                    <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                    <h3>George Washington</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div> --}}
            </div> <!-- .col-md-8 -->

            <div class="col-lg-4 sidebar bg-light py-md-5">
            {{-- <div class="sidebar-box ftco-animate">
                <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Travel <span>(12)</span></a></li>
                <li><a href="#">Tour <span>(22)</span></a></li>
                <li><a href="#">Destination <span>(37)</span></a></li>
                <li><a href="#">Drinks <span>(42)</span></a></li>
                <li><a href="#">Foods <span>(14)</span></a></li>
                <li><a href="#">Travel <span>(140)</span></a></li>
                </div>
            </div> --}}
        </div>
    </div>
  </section> <!-- .section -->
@endsection
