@extends('layouts.user')
@section('slot')
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Assignments
                </h4>
            </div>
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

                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignment as $as)
                            <tr>
                                <th>
                                    <span class="h6 mb--5">{{ $as->name }}</span>
                                    <p class="b3">Course: <a href="#">{{ $as->course->name }}</a></p>
                                </th>
                                <td>
                                    <p class="b3">{{ $as->total_marks }}</p>
                                </td>


                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->
@endsection
