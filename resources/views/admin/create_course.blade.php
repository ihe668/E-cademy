@extends('layouts.app')
@section('slot')
    <main class="rbt-main-wrapper">

        <div class="rbt-create-course-area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-12">
                        <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                            <div class="accordion" id="tutionaccordionExamplea1">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="accOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#accCollapseOne" aria-expanded="true"
                                            aria-controls="accCollapseOne">Course Info
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <!-- Start Course Field Wrapper  -->
                                            <form action="{{ route('course.store') }}" enctype="multipart/form-data"
                                                method="post">@csrf

                                                @foreach ($errors->all() as $err)
                                                    <p class="alert alert-danger">
                                                        {{ $err }}
                                                    </p>
                                                @endforeach
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="">Course Title</label>
                                                        <input type="text" name="name" placeholder="New Course">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                            Title should be 30 charecter.</small>
                                                    </div>


                                                    <div class="course-field mb--15">
                                                        <label for="aboutCourse">About Course</label>
                                                        <input type="description" name="description">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML
                                                            or plain text allowed, no emoji This field is used for search,
                                                            so please be descriptive!</small>
                                                    </div>
                                                    <div class="course-field mb--15 edu-bg-gray">
                                                        <h6>Course Price</h6>
                                                        <div class="rbt-course-settings-content">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="advance-tab-button advance-tab-button-1">
                                                                        <ul class="rbt-default-tab-button nav nav-tabs" id="coursePrice" role="tablist">
                                                                            <li class="nav-item w-100" role="presentation">
                                                                                <a href="#" class="active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" role="tab" aria-controls="paid" aria-selected="true">
                                                                                    <span>Paid</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nav-item w-100" role="presentation">
                                                                                <a href="#" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" role="tab" aria-controls="free" aria-selected="false">
                                                                                    <span>Free</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8">
                                                                    <div class="tab-content">

                                                                        <div class="tab-pane fade advance-tab-content-1 active show" id="paid" role="tabpanel" aria-labelledby="paid-tab">

                                                                            <div class="course-field mb--15">
                                                                                <label for="regularPrice-1">Regular Price (₦)</label>
                                                                                <input id="regularPrice-1" type="number" placeholder="₦ Regular Price" name="price">
                                                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                            </div>

                                                                            <div class="course-field mb--15">
                                                                                <label for="discountedPrice-1">Discounted Price (₦)</label>
                                                                                <input id="discountedPrice-1" type="number" placeholder="₦ Discounted Price" name="discounted_price">
                                                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> The Course Price Includes Your Author Fee.</small>
                                                                            </div>

                                                                        </div>


                                                                        <div class="tab-pane fade advance-tab-content-1" id="free" role="tabpanel" aria-labelledby="free-tab">
                                                                            <div class="course-field">
                                                                                <p class="b3">This Course is free for everyone.</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="course-field mb--20">
                                                        <h6>Choose Categories</h6>
                                                        <div
                                                            class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                            <select name="category_id" class="w-100"
                                                                data-live-search="true"
                                                                title="Search Course Category. ex. Design, Development, Business"
                                                                multiple data-size="7" data-actions-box="true"
                                                                data-selected-text-format="count > 2">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" class="form-control" required
                                                            placeholder="">
                                                    </div>



                                                    <button type="submit" value="create"
                                                        class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                                        <i>create course</i>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 row g-5">
                            {{-- <div class="col-lg-4">
                                <button class="rbt-btn hover-icon-reverse bg-primary-opacity w-100 text-center"
                                    href="course-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Preview</span>
                                        <span class="btn-icon"><i class="feather-eye"></i></span>
                                        <span class="btn-icon"><i class="feather-eye"></i></span>
                                    </span>
                                </button>
                            </div> --}}
                            <div class="col-lg-8">


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- <!-- Start Modal Area  -->
        <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="inner rbt-default-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="modal-title mb--20" id="exampleModalLabel">Add Topic</h5>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-1">Topic Name</label>
                                        <input id="modal-field-1" type="text">
                                        <small><i class="feather-info"></i> Topic titles are displayed publicly
                                            wherever required. Each topic may contain one or more lessons, quiz and
                                            assignments.</small>
                                    </div>
                                    <div class="course-field mb--20">
                                        <label for="modal-field-2">Topic Summary</label>
                                        <textarea id="modal-field-2"></textarea>
                                        <small><i class="feather-info"></i> Add a summary of short text to prepare
                                            students for the activities for the topic. The text is shown on the course
                                            page beside the tooltip beside the topic name.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-circle-shape"></div>
                    <div class="modal-footer pt--30">
                        <button type="button" class="rbt-btn btn-border btn-md radius-round-10"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Area  -->


        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <div class="footer-style-2 ptb--60 bg-color-white">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <div class="inner text-center">

                            <div class="logo">
                                <a href="index-2.html">
                                    <img src="/e-cademy_assets/images/logo/logo.png" alt="Logo images">
                                </a>
                            </div>
                            <!-- Social icone Area -->
                            <ul class="social-icon social-default">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <!-- End -->
                            <div class="text mt--20">
                                <p>© 2023 <a target="_blank"
                                        href="https://themeforest.net/user/rbt-themes/portfolio">Rainbow-Themes</a>.
                                    All
                                    Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>
@endsection
