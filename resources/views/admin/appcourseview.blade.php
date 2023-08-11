@extends('layouts.app')
@section('slot')
    <div class="row row--15">
        @foreach ($courses as $c)
            <!-- Start Single Card  -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                data-sal-duration="800">
                <div class="rbt-card variation-01 rbt-hover card-list-2 bg-transparent">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="/storage/Course-image/{{ $c->image }}" alt="Card image">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <h4 class="rbt-card-title"><a href="course-details.html">{{ $c->name }}</a>
                        </h4>
                        <div class="rbt-card-bottom">
                            <a class="rbt-btn btn-gradient hover-icon-reverse w-4 text-center" href="{{ route('admin.edit.course',$c) }}">Edit
                                <i></i></a><br><br>
                            <a class="rbt-btn btn-gradient hover-icon-reverse w-4 text-center" href="{{ route('admin.delete.course',$c) }}">Delete
                                <i></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
        @endforeach
    </div>
@endsection
