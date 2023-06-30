@extends('layouts.guest')
@section('slot')
    <div class="container mt-5">
        <div class="row g-5">
            @foreach ($courses as $c)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="/storage/Course-image/{{ $c->image }}" alt="Card image" style="width: 100px">
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

                            <h4 class="rbt-card-title"><a href="{{ route('course_details', $c) }}">{{ $c->name }}</a>
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
                                <a class="rbt-btn-link" href="{{ route('course_details', $c) }}">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
