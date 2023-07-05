@extends('layouts.guest')
@section('slot')
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <span class="subtitle bg-secondary-opacity">Contact Us</span>
                        <h2 class="title">E-cademy Course Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 col-lg">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:+234 08069676894678">+(234){{ $profile->phone_number }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a href="mailto:ebenezer32@gmail.com">{{ $profile->email }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
