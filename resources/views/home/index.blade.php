@extends('layouts.frontend')

@section('title') {{ 'Home' }} @endsection

@section('content')

<!-- BEGIN: Banner section -->
@if($banner == null)
    

@else

<section class="hero" id="hero" style="background-image: url('{{ asset('/uploads/' . $banner->image) }}')">
    <div class="heroText">
        <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
            {{$banner->title}}
        </h1>

        <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
            {{$banner->subtitle}} {{-- <strong class="custom-underline">market research & analysis</strong> --}}
        </p>
    </div>

    <div class="imgWrapper">
        <img src="images/rasha_banner.jpg" alt="Rasha Eldeeb" class="img-fluid">
    </div>

    <div class="overlay"></div>
</section>

@endif
<!-- END: Banner section -->

<!-- BEGIN: Header section -->
<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <strong>Rasha aldeeb</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                </li>
                            
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END: Header section -->

<!-- BEGIN: Text of block & slider section -->
<section class="section-padding pb-0" id="about">
    <div class="container mb-5 pb-lg-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3" data-aos="fade-up">I am Rasha Aldeeb...</h2>
            </div>

            <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                    a five-year-experience podcast consultant and seven-year-experience audio producer. 
                    Throughout these years, I have produced 11 podcasts.
                    I have learned the professional flow of building a podcast project from A to Z.<br><br>
                                
                    Thus, I have had the capacity to establish four international podcasts from scratch to a number of international
                    organizations, as a part & member of supportive teams
                    </p>
            </div>

            <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                <p data-aos="fade-up" data-aos-delay="500">
                    The skills which I share with every team I work with are, my solid experience in podcasting according to what 
                    I constantly do and what I reflect on completed and running podcast projects from building the vision & identity
                </p>
                 <a data-aos="fade-up" data-aos-delay="700" href="about.html"><p class="text-warning">Know more about me</p></a>
            </div>

        </div>
    </div> 

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-12 p-0">      
                <img src="images/side_image.jpg" class="img-fluid about-image" alt="">
            </div>

            <div class="col-lg-3 col-12 bg-dark">  
                <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                    <h3 class="text-white mb-3" data-aos="fade-up">Podcast consultant</h3>

                    <p class="text-secondary-white-color" data-aos="fade-up">a five-year-experience</p>

                    <div class="mt-3 custom-links">
                                        
                        <a href="#news" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="100">Read News & Events</a>

                        <a href="contact.html" class="text-white custom-link" data-aos="zoom-in" data-aos-delay="300">Work with Me</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-12 p-0">  
                <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="images/slider/first_pic.jpg" class="img-fluid team-image" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="images/slider/second_pic.jpg" class="img-fluid team-image" alt="">
                        </div>
                                        
                        <div class="carousel-item">
                            <img src="images/slider/last_pic.jpg" class="img-fluid team-image" alt="">
                        </div>

                                        
                        <div class="carousel-item">
                            <img src="images/slider/third_pic.jpg" class="img-fluid team-image" alt="">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="visually-hidden">Next</span>
                    </button>
                </section>

            </div>
        </div>
    </div>
</section>

<!-- END: Text of block & slider section -->

<!-- BEGIN: Portfolio section -->
<section class="section-padding" id="portfolio">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">Portfolio</h2>
            </div>
            @foreach($portfolio as $i => $portfolio)
                <div class="col-lg-6 col-12">
                    <div class="portfolio-thumb mb-5" data-aos="fade-up">
                        @if($portfolio->image != null)
                            <a href="{{ asset('uploads/portfolio/' . $portfolio->image) }}" class="image-popup">
                                <img src="{{ asset('uploads/portfolio/' . $portfolio->image) }}" class="img-fluid portfolio-image" alt="">
                            </a>
                        @else
                            <img class="img-fluid portfolio-image" src="{{ asset('uploads/post_placeholder.jpeg') }}">
                        @endif

                        <div class="portfolio-info">                     
                            <h4 class="portfolio-title mb-0">{{$portfolio->title}}</h4>   
                            
                            @if ($i == 0)
                                <p class="text-danger">{{ $portfolio->categoryp ? $portfolio->categoryp->name : 'Uncategorized' }}</p>
                            @elseif ($i == 1)
                                <p class="text-warning">{{ $portfolio->categoryp ? $portfolio->categoryp->name : 'Uncategorized' }}</p>
                            @elseif ($i == 2)
                                <p class="text-info">{{ $portfolio->categoryp ? $portfolio->categoryp->name : 'Uncategorized' }}</p>
                            @elseif ($i == 3)
                                <p class="text-success">{{ $portfolio->categoryp ? $portfolio->categoryp->name : 'Uncategorized' }}</p>
                            @else
                                <p class="text-danger">{{ $portfolio->categoryp ? $portfolio->categoryp->name : 'Uncategorized' }}</p>
                            @endif 
                           
                        </div>
                    </div> 
                </div>
            @endforeach

         </div>
    </div>
</section>
<!-- END: Portfolio section -->


<!-- BEGIN: News section -->
<section class="news section-padding" id="news">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
            </div>
            @foreach($posts as $post)
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        @if($post->image != null)
                            <a href="{{ route('blog.view' , ['slug' => $post->slug])}}" class="image-popup">
                                <img src="{{ asset('uploads/posts/' . $post->image) }}" class="img-fluid portfolio-image" alt="">
                            </a>
                        @else
                            <img class="img-fluid portfolio-image" src="{{ asset('uploads/post_placeholder.jpeg') }}">
                        @endif

                        <div class="news-category bg-warning text-white">{{ $post->category ? $post->category->name : 'Uncategorized' }}</div>
                                    
                        <div class="news-text-info">
                            <h5 class="news-title arabic-text">
                                <a href="{{ route('blog.view' , ['slug' => $post->slug])}}">{{$post->title}}</a>
                            </h5>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END: News section -->
@endsection
