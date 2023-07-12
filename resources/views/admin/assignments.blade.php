@extends('layouts.app')
@section('slot')
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Assignments
                </h4>
            </div>
            <!-- Start Call To Action  -->
            <div class="rbt-callto-action rbt-cta-default style-2">
                <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-8">
                            <div class="inner">
                                <div class="content text-left">
                                    <h5 class="mb--5">Occupy all your students.</h5>
                                    <p class="b3">Add Assiginment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y"
                                    href="{{ route('admin.addassignment.view') }}">
                                    <span data-text="Add New Announcement">Add New Assignment</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action  -->


            <!-- Start Filter -->
            <div class="rbt-dashboard-filter-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Courses</span>
                            <select class="w-100" data-live-search="true" title="All" multiple data-size="7"
                                data-actions-box="true" data-selected-text-format="count > 2">
                                <option data-subtext="HTML">Web Design</option>
                                <option data-subtext="Photoshop">Graphic</option>
                                <option data-subtext="Career">English</option>
                                <option data-subtext="Career">Spoken English</option>
                                <option data-subtext="Experts">Art Painting</option>
                                <option data-subtext="Experts">App Development</option>
                                <option data-subtext="Experts">Web Application</option>
                                <option data-subtext="Experts">Php Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By</span>
                            <select class="w-100">
                                <option>Default</option>
                                <option>Latest</option>
                                <option>Popularity</option>
                                <option>Trending</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Short By Offer</span>
                            <select class="w-100">
                                <option>Free</option>
                                <option>Paid</option>
                                <option>Premium</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Filter -->

            <hr class="mt--30">

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Assignment Name</th>
                            <th>Total Marks</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <span class="h6 mb--5">Write a short essay on yourself using the 5</span>
                                <p class="b3">Course: <a href="#">Fundamentals 101</a></p>
                            </th>
                            <td>
                                <p class="b3">80</p>
                            </td>

                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#"
                                        title="Edit"><i class="feather-edit pl--0"></i> Edit</a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger"
                                        href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>


                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->
@endsection
