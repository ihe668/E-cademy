@extends('layouts.app')
@section('slot')
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">


                <form action="{{ route('admin.addcategory') }}" enctype="multipart/form-data" method="POST">
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">
                            {{ $err }}
                        </p>
                    @endforeach
                    @csrf
                    <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                        <div class="accordion" id="tutionaccordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="accOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accCollapseOne" aria-expanded="true"
                                        aria-controls="accCollapseOne">Add Category
                                    </button>
                                </h2>
                                <div id="accCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accOne"
                                    data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <!-- Start Course Field Wrapper  -->
                                        <div class="rbt-course-field-wrapper rbt-default-form">
                                            <div class="course-field mb--15">
                                                <label for="field-1">Category name</label>
                                                <input id="field-1" type="text" placeholder="New Category"
                                                    name="name" required>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Title should
                                                    be 30 charecter.</small>
                                            </div>
                                        </div>
                                        <!-- End Course Field Wrapper  -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="create"
                                class="rbt-btn btn-gradient hover-icon-reverse w-20 text-center">
                                <i>Add category</i>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">

            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Categories</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Categories</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> Categories
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view" title="Grid Layout"><i
                                                    class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view active"
                                                title="List Layout"><i class="feather-list"></i> <span
                                                    class="text">List</span></button></li>
                                    </ul>
                                </div>
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing all results</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div
                                class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <form action="{{ route('search.category') }}" class="rbt-search-style me-0"
                                        method="POST">@csrf
                                        <input type="text" placeholder="Search Your Category.." name="q">
                                        <button type="submit" class="rbt-search-btn rbt-round-btn">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>


    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <!-- Start Card Area -->
            <div class="rbt-course-grid-column list-column-half active-list-view">

                <!-- Start Single Card  -->
                @foreach ($categories as $cat)
                    <div class="course-grid-4" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover card-list-2 bg-transparent">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="/e-cademy_assets/images/course/course-list-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h4 class="rbt-card-title"><a href="{{ route('app.course.view') }}">{{ $cat->name }}</a>
                                </h4>
                                <div class="rbt-card-bottom">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse w-4 text-center"
                                        href="{{ route('admin.editcategory', $cat) }}">Edit
                                        <i></i></a><br><br><br>
                                    <a class="rbt-btn btn-gradient hover-icon-reverse w-4 text-center"
                                        href="{{ route('delete.category', $cat->id) }}">Delete
                                        <i></i></a>
                                </div><br><br>
                                <span class="rbt-btn-link">{{ $cat->courses->count() }} Course(s)</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
