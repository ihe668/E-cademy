@extends('layouts.user')
@section('slot')
    <div class="checkout_area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 checkout-form">
                <form action="{{route('pay',$course->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 mb--60">

                        <h4 class="checkout-title">Checkout</h4>

                        <div class="checkout-cart-total">

                            <h4>Course<span>Total</span></h4>

                            <ul>
                                <li>{{ $course->name }} <span>
                                        <div class="rbt-price">
                                            @if ($course->discounted_price > 0)
                                                @if ($course->discounted_price > 0)
                                                    <span
                                                        class="current-price">₦{{ number_format($course->discounted_price, 2) }}</span>
                                                @endif
                                                <span class="off-price ">₦{{ number_format($course->price, 2) }}</span>
                                            @else
                                                <span class="current-price ">₦{{ number_format($course->price, 2) }}</span>
                                            @endif
                                        </div>
                                    </span></li>
                            </ul>
                            <h4 class="mt--30">Grand Total <span>
                                    @if ($course->discounted_price > 0)
                                        ₦{{ number_format($course->discounted_price, 2) }}
                                    @else
                                        ₦{{ number_format($course->price, 2) }}
                                    @endif
                                </span></h4>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="checkout-content-wrapper">
                            <!-- Billing Address -->
                            <div id="billing-form">
                                <h4 class="checkout-title">Billing Address</h4>

                                <div class="row">

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="First Name" name="first_name" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Last Name" name="last_name" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Phone number" name="phone" required>
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Address line 1" name="address" required>

                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Town/City*</label>
                                        <input type="text" placeholder="Town/City" name="city" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>State*</label>
                                        <input type="text" placeholder="State" name="state" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Zip Code*</label>
                                        <input type="text" placeholder="Zip Code" name="zip">
                                    </div>
                                    @if ($course->discounted_price > 0)
                                        <div class="col-md-12 my-3">
                                            <input type="hidden" placeholder="amount*" value="{{ $course->discounted_price * 100 }}"
                                                name="amount">
                                        </div>
                                    @else
                                        <div class="col-md-12 my-3">
                                            <input type="hidden" placeholder="amount*" value="{{ $course->price * 100 }}"
                                                name="amount">
                                        </div>
                                    @endif


                                    <div class="col-md-12 my-3">
                                        <input type="hidden" placeholder="course_id*" value="{{ $course->id }}"
                                            name="course_id">
                                    </div>
                                    <div class="col-md-12 my-3">
                                        <input type="hidden" placeholder="user_id*" value="{{Auth::user()->id}}"
                                            name="user_id">
                                    </div>

                                    <div class="col-md-12 my-3">
                                        <input type="hidden" placeholder="currency*" name="currency" value="NGN">
                                    </div>
                                    <div class="col-md-12 my-3">
                                        <input type="hidden" placeholder="reference*" value="{{' Paystack::genTranxRef()' }}"
                                            name="reference">
                                    </div>
                                    <div class="col-md-12 my-3">
                                        <input type="hidden" placeholder="status*" value="pending" name="status">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <div class="check-box">
                                            <input type="checkbox" id="create_account">
                                            <label for="create_account">Create an Acount?</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="shiping_address" data-shipping>
                                            <label for="shiping_address">Ship to Different Address</label>
                                        </div>
                                    </div>
                                    <div class="plceholder-button mt--50 ">
                                        <input type="hidden" name="callback_url" value="{{ route('payfor', $course->id) }}">
                                        <button class="rbt-btn btn-gradient hover-icon-reverse" type="submit">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Get Enrolled</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

                {{-- <div class="col-lg-5">
                <div class="row pl--50 pl_md--0 pl_sm--0">
                    <!-- Cart Total -->
                    <div class="col-12 mb--60">

                        <h4 class="checkout-title">Cart Total</h4>

                        <div class="checkout-cart-total">

                            <h4>Product <span>Total</span></h4>

                            <ul>
                                <li>Samsome Notebook Pro 5 X 01 <span>$295.00</span></li>
                                <li>Aquet Drone D 420 X 02 <span>$550.00</span></li>
                                <li>Play Station X 22 X 01 <span>$295.00</span></li>
                                <li>Roxxe Headphone Z 75 X 01 <span>$110.00</span></li>
                            </ul>

                            <p>Sub Total <span>$1250.00</span></p>
                            <p>Shipping Fee <span>$00.00</span></p>

                            <h4 class="mt--30">Grand Total <span>$1250.00</span></h4>

                        </div>

                    </div>

                    <!-- Payment Method -->
                    <div class="col-12 mb--60">
                        <h4 class="checkout-title">Payment Method</h4>
                        <div class="checkout-payment-method">

                            <div class="single-method">
                                <input type="radio" id="payment_check" name="payment-method" value="check">
                                <label for="payment_check">Check Payment</label>
                                <p data-method="check">Please send a Check to Store name with
                                    Store Street, Store Town, Store State, Store Postcode,
                                    Store Country.</p>
                            </div>

                            <div class="single-method">
                                <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                <label for="payment_bank">Direct Bank Transfer</label>
                                <p data-method="bank">Please send a Check to Store name with
                                    Store Street, Store Town, Store State, Store Postcode,
                                    Store Country.</p>
                            </div>

                            <div class="single-method">
                                <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                <label for="payment_cash">Cash on Delivery</label>
                                <p data-method="cash">Please send a Check to Store name with
                                    Store Street, Store Town, Store State, Store Postcode,
                                    Store Country.</p>
                            </div>

                            <div class="single-method">
                                <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                <label for="payment_paypal">Paypal</label>
                                <p data-method="paypal">Please send a Check to Store name with
                                    Store Street, Store Town, Store State, Store Postcode,
                                    Store Country.</p>
                            </div>

                            <div class="single-method">
                                <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                <label for="payment_payoneer">Payoneer</label>
                                <p data-method="payoneer">Please send a Check to Store name
                                    with Store Street, Store Town, Store State, Store Postcode,
                                    Store Country.</p>
                            </div>

                            <div class="single-method">
                                <input type="checkbox" id="accept_terms">
                                <label for="accept_terms">I’ve read and accept the terms &
                                    conditions</label>
                            </div>
                        </div>
                        <div class="plceholder-button mt--50">
                            <button class="rbt-btn btn-gradient hover-icon-reverse">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Place order</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection
