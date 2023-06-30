@extends('layouts.user')
@section('slot')
 <!-- Start Instructor Profile  -->
 <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">

        <div class="section-title">
            <h4 class="rbt-title-style-3">Settings</h4>
        </div>

        <div class="advance-tab-button mb--30">
            <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                <li role="presentation">
                    <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                        <span class="title">Password</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                        <span class="title">Social Share</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="rbt-dashboard-content-wrapper">
                    <div class="tutor-bg-photo bg_image bg_image--23 height-245"></div>
                    <!-- Start Tutor Information  -->
                    <div class="rbt-tutor-information">
                        <div class="rbt-tutor-information-left">
                            <div class="thumbnail rbt-avatars size-lg position-relative">
                                <img src="/e-cademy_assets/images/team/avatar-2.jpg" alt="Instructor">
                                <div class="rbt-edit-photo-inner">
                                    <button class="rbt-edit-photo" title="Upload Photo">
                                        <i class="feather-camera"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-tutor-information-right">
                            <div class="tutor-btn">
                                <a class="rbt-btn btn-sm btn-border color-white radius-round-10" href="#">Edit Cover Photo</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tutor Information  -->
                </div>
                <!-- Start Profile Row  -->
                <form action="{{route('user.update.profile')}}" class="rbt-profile-row rbt-default-form row row--15" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-form-group">
                            <label for="firstname">Name</label>
                            <input id="firstname" name="name" type="text" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-form-group">
                            <label for="firstname">Email</label>
                            <input id="firstname" name="email" type="email" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input id="phonenumber" name="phone_number" type="tel" value="{{$user->phone_number}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-form-group">
                            <label for="skill">Skill/Occupation</label>
                            <input id="skill" type="text" name="skill" value="{{$user->skill}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="bio">Bio</label>
                            <textarea id="bio" cols="20" name="bio" rows="5">{{$user->bio}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 mt--20">
                        <div class="rbt-form-group">
                            <button class="rbt-btn btn-gradient" type="submit">
                                Update Info
                            </button>
                        </div>
                    </div>
                </form>
                <!-- End Profile Row  -->
            </div>

            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                <!-- Start Profile Row  -->
                <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="currentpassword">Current Password</label>
                            <input id="currentpassword" type="password" placeholder="Current Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="newpassword">New Password</label>
                            <input id="newpassword" type="password" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="retypenewpassword">Re-type New Password</label>
                            <input id="retypenewpassword" type="password" placeholder="Re-type New Password">
                        </div>
                    </div>
                    <div class="col-12 mt--10">
                        <div class="rbt-form-group">
                            <a class="rbt-btn btn-gradient" href="#">Update Password</a>
                        </div>
                    </div>
                </form>
                <!-- End Profile Row  -->
            </div>

            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                <!-- Start Profile Row  -->
                <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                            <input id="facebook" type="text" placeholder="https://facebook.com/">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                            <input id="twitter" type="text" placeholder="https://twitter.com/">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                            <input id="linkedin" type="text" placeholder="https://linkedin.com/">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="website"><i class="feather-globe"></i> Website</label>
                            <input id="website" type="text" placeholder="https://website.com/">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rbt-form-group">
                            <label for="github"><i class="feather-github"></i> Github</label>
                            <input id="github" type="text" placeholder="https://github.com/">
                        </div>
                    </div>
                    <div class="col-12 mt--10">
                        <div class="rbt-form-group">
                            <a class="rbt-btn btn-gradient" href="#">Update Profile</a>
                        </div>
                    </div>
                </form>
                <!-- End Profile Row  -->
            </div>

        </div>





    </div>
</div>
<!-- End Instructor Profile  -->
@endsection
