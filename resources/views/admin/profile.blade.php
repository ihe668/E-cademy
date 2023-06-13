@extends('layouts.app')
@section('slot')
 <!-- Start Instructor Profile  -->
 <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">
        <div class="section-title">
            <h4 class="rbt-title-style-3">My Profile</h4>
        </div>
        <!-- Start Profile Row  -->
        <div class="rbt-profile-row row row--15">
            <div class="col-lg-4 col-md-4">
                <div class="rbt-profile-content b2">Registration Date</div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="rbt-profile-content b2">{{$profile->created_at}}</div>
            </div>
        </div>
        <!-- End Profile Row  -->

        <!-- Start Profile Row  -->
        <div class="rbt-profile-row row row--15 mt--15">
            <div class="col-lg-4 col-md-4">
                <div class="rbt-profile-content b2">UserName</div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="rbt-profile-content b2">{{$profile->name}}</div>
            </div>
        </div>
        <!-- End Profile Row  -->

        <!-- Start Profile Row  -->
        <div class="rbt-profile-row row row--15 mt--15">
            <div class="col-lg-4 col-md-4">
                <div class="rbt-profile-content b2">Email</div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="rbt-profile-content b2">{{$profile->email}}</div>
            </div>
        </div>
        <!-- End Profile Row  -->

        <!-- Start Profile Row  -->
        <div class="rbt-profile-row row row--15 mt--15">
            <div class="col-lg-4 col-md-4">
                <div class="rbt-profile-content b2">Phone Number</div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="rbt-profile-content b2">+1-202-555-0174</div>
            </div>
        </div>
        <!-- End Profile Row  -->

    </div>
</div>
<!-- End Instructor Profile  -->
@endsection
