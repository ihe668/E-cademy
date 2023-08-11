@extends('layouts.guest')
@section('slot')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-750">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                            </div>
                            <h1 class="title">The Largest <span class="color-primary">Online Learning</span> Platform
                                to Drive Your Career.</h1>
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('view_course') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">
                                @foreach ($courses as $c)
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.html">
                                                    <img src="/storage/Course-image/{{ $c->image }}" alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>-40%</span>
                                                        <span>Off</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="course-details.html">{{ $c->name }}</a>
                                                </h4>
                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be distracted.</p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        @if ($c->discounted_price > 0)
                                                        @if ($c->discounted_price > 0)
                                                            <span
                                                                class="current-price">₦{{ number_format($c->discounted_price, 2) }}</span>
                                                        @endif
                                                        <span class="off-price ">₦{{ number_format($c->price, 2) }}</span>
                                                    @else
                                                        <span class="current-price ">₦{{ number_format($c->price, 2) }}</span>
                                                    @endif

                                                    </div>
                                                    <a class="rbt-btn-link" href="course-details.html">Learn More<i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach


                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Service Area -->
    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title">Popular Categories.</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity btn-sm" href="archive.html">
                            <span data-text="View All">View All</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($category as $cat)
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 list-style" href="{{ route('home.course',$cat) }}">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="/e-cademy_assets/images/category/image/web-design.jpg" alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">{{ $cat->name }}</h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">{{ $cat->courses->count() }} Course(s)<i
                                                class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->
                @endforeach
            </div>

        </div>
    </div>
    <!-- End Service Area -->

    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="inner">
                        <div class="section-title text-center text-lg-start">
                            <h4 class="title"><strong>Subscribe</strong> <br /> <span class="w-400">Our
                                    Newsletter</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 text-start text-sm-end">
                    <form action="#" class="newsletter-form-1 me-0">
                        <input type="email" placeholder="Enter Your E-Email">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Subscribe</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Top Popular Course</span>
                        <h2 class="title">Most Popular <span class="color-primary">Courses</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="{{ route('view_course') }}">
                            <span data-text="View All Course">View All Course</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($courses as $c)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('course_details', $c) }}">
                                    <img src="/storage/Course-image/{{ $c->image }}" alt="Card image"
                                        style="width: 100px">
                                    <div class="rbt-badge-3 bg-white">
                                        <span>-40%</span>
                                        <span>Off</span>
                                    </div>
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-bookmark-btn">
                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                class="feather-bookmark"></i></a>
                                    </div>
                                </div>

                                <h4 class="rbt-card-title"><a
                                        href="{{ route('course_details', $c) }}">{{ $c->name }}</a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>12 Lessons</li>
                                    <li><i class="feather-users"></i>50 Students</li>
                                </ul>

                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="/storage/Course-image/{{ $c->image }}" alt="Sophia Jaymes"
                                                style="width: 200px">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">₦{{ number_format($c->price) }}</span>
                                        <span class="off-price">₦{{ number_format($c->discounted_price) }}</span>
                                    </div>
                                    <a class="rbt-btn-link" href="{{ route('course_details', $c) }}">Details
                                        <i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="rbt-testimonial-area bg-color-extra2 rbt-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title">Student's <span class="color-primary">Feedback</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="/e-cademy_assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Martha Maldonado</h5>
                                        <span>Executive Chairman <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">
                                        E-cademy is the best online learning platform and i think with this we can be able
                                        to achieve our goals.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="/e-cademy_assets/images/testimonial/client-02.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Michael D. Lovelady</h5>
                                        <span>CEO <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="/e-cademy_assets/images/testimonial/client-03.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Valerie J. Creasman</h5>
                                        <span>Executive Designer <i>@ Google</i></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                        auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                    <div class="rating mt--20">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start Blog Style -->
        <div class="rbt-rbt-blog-area rbt-section-gapTop bg-color-white">
            <div class="container">
                <div class="row mb--55 g-5 align-items-end">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="section-title text-start">
                            <span class="subtitle bg-pink-opacity">Top News</span>
                            <h2 class="title">Have a look on <span class="color-primary">our News</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="load-more-btn text-start text-md-end">
                            <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="blog.html">
                                <span data-text="View All News">View All News</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="/e-cademy_assets/images/blog/blog-grid-01.jpg" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Is lms The Most Trending
                                        Thing Now?</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.html">Learn
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="/e-cademy_assets/images/blog/blog-grid-02.jpg" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With
                                        lms.</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.html">Learn
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="/e-cademy_assets/images/blog/blog-grid-03.jpg" alt="Card image"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of
                                        lms.</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="course-details.html">Learn
                                        More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
                <!-- End Card Area -->
            </div>
        </div>
        <!-- End Blog Style -->

        <div class="rbt-instagram-area bg-color-white rbt-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <span class="subtitle bg-secondary-opacity">Instagram</span>
                            <h2 class="title">Follow E-cademy On <span class="color-primary">Instagram</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-01.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@E_cademy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-02.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@E_cademy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-03.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@E_cademy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-04.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@E_cademy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-05.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name">@E_cademy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="/e-cademy_assets/images/instagram/instagram-06.jpg" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                    <span class="user-name"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
