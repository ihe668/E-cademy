<x-app-layout>
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                         <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="/e-cademy_assets/images/team/avatar.jpg" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{ Auth::user()->name }}</h5>
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
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="create-course.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create a New Course</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">

                                        <div class="rbt-default-sidebar-wrapper">
                                            <div class="section-title mb--20">
                                                <h6 class="rbt-title-style-2">Welcome, {{ Auth::user()->name }}</h6>
                                            </div>
                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="{{ route('dashboard') }}"><i
                                                                class="feather-home"></i><span>Dashboard</span></a></li>
                                                    <li><a href="instructor-profile.html"><i
                                                                class="feather-user"></i><span>My Profile</span></a>
                                                    </li>
                                                    <li><a href="instructor-enrolled-courses.html"><i
                                                                class="feather-book-open"></i><span>Enrolled
                                                                Courses</span></a></li>
                                                    <li><a href="instructor-wishlist.html"><i
                                                                class="feather-bookmark"></i><span>Wishlist</span></a>
                                                    </li>
                                                    <li><a href="instructor-reviews.html"><i
                                                                class="feather-star"></i><span>Reviews</span></a></li>
                                                    <li><a href="instructor-my-quiz-attempts.html"><i
                                                                class="feather-help-circle"></i><span>My Quiz
                                                                Attempts</span></a></li>
                                                    <li><a href="instructor-order-history.html"><i
                                                                class="feather-shopping-bag"></i><span>Order
                                                                History</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">Instructor</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="instructor-course.html"><i
                                                                class="feather-monitor"></i><span>My Courses</span></a>
                                                    </li>
                                                    <li><a href="instructor-announcements.html"><i
                                                                class="feather-volume-2"></i><span>Announcements</span></a>
                                                    </li>
                                                    <li><a href="instructor-quiz-attempts.html"><i
                                                                class="feather-message-square"></i><span>Quiz
                                                                Attempts</span></a></li>
                                                    <li><a href="instructor-assignments.html"><i
                                                                class="feather-list"></i><span>Assignments</span></a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">User</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="instructor-settings.html"><i
                                                                class="feather-settings"></i><span>Settings</span></a>
                                                    </li>
                                                    <li><a href="index-2.html"><i
                                                                class="feather-log-out"></i><span>Logout</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Dashboard</h4>
                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-primary-opacity">
                                                        <i class="feather-book-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-primary"><span
                                                                class="odometer" data-count="30">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Enrolled Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-secondary-opacity">
                                                        <i class="feather-monitor"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-secondary"><span
                                                                class="odometer" data-count="10">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">ACTIVE COURSES</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-violet-opacity">
                                                        <i class="feather-award"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-violet"><span
                                                                class="odometer" data-count="7">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Completed
                                                            Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-pink-opacity">
                                                        <i class="feather-users"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-pink"><span
                                                                class="odometer" data-count="160">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Students</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-coral-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-coral-opacity">
                                                        <i class="feather-gift"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-coral"><span
                                                                class="odometer" data-count="20">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div
                                                class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-warning-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-warning-opacity">
                                                        <i class="feather-dollar-sign"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter color-warning"><span class="odometer"
                                                                data-count="25000">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Total Earnings</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                    </div>
                                </div>
                            </div>
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title">
                                                <h4 class="rbt-title-style-3">My Courses</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <div class="rbt-dashboard-table table-responsive">
                                                <table class="rbt-table table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Name</th>
                                                            <th>Enrolled</th>
                                                            <th>Rating</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th><a href="#">Accounting</a></th>
                                                            <td>50</td>
                                                            <td>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><a href="#">Marketing</a></th>
                                                            <td>40</td>
                                                            <td>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><a href="#">Web Design</a></th>
                                                            <td>75</td>
                                                            <td>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><a href="#">Graphic</a></th>
                                                            <td>20</td>
                                                            <td>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="off fas fa-star"></i>
                                                                    <i class="off fas fa-star"></i>
                                                                    <i class="off fas fa-star"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="load-more-btn text-center">
                                                <a class="rbt-btn-link" href="#">Browse All Course<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
</x-app-layout>
