@extends('layouts.guest')
@section('slot')
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-overlay-page-wrapper">

        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <img src="/e-cademy_assets/images/bg/bg-image-10.jpg" alt="Education Images">
            </div>
            <div class="breadcrumb-content-top text-center">
                <h1 class="title">Privacy Policy</h1>
                <p class="mb--20">E-cademy Course Privacy Policy Here.</p>
                <ul class="page-list">
                    <li class="rbt-breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                    <li>
                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                    </li>
                    <li class="rbt-breadcrumb-item active">Purchase Guide</li>
                </ul>
            </div>
        </div>


        <div class="rbt-putchase-guide-area breadcrumb-style-max-width rbt-section-gapBottom">
            <div class="rbt-article-content-wrapper">
                <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                    <img class="w-100" src="/e-cademy_assets/images/blog/blog-card-01.jpg" alt="Blog Images">
                </div>
                <div class="content">
                    <h4>Welcome to E-cademy Privacy Policy</h4>
                    <ol>
                        <li>we are committed to protecting your privacy and ensuring the security of your personal
                            information. This Privacy Policy outlines how we collect, use, disclose, and protect the
                            information you provide while using our online learning platform. By accessing or using our
                            website and services, you agree to the terms of this Privacy Policy.</li>
                    </ol>

                    <h4>The type of personal information we collect</h4>

                    <ol>
                        <li>Personal Information: When you sign up for an account or use our services, we may collect
                            personal information such as your name, email address, username, password, and other details
                            necessary for registration and account management.</li><br>

                        <li>Payment Information: To process payments for premium services or products, we may collect
                            billing information, including credit card details, billing address, and other payment-related
                            information. This data is securely processed through trusted payment service providers, and we
                            do not store credit card information on our servers.</li><br>

                        <li>Usage Data: We collect information about how you interact with our website and services,
                            including your IP address, browser type, device information, pages visited, and actions taken
                            within the platform. This data is used to improve our services, enhance user experience, and
                            optimize content delivery.</li>
                    </ol>

                    <h4>How we collect personal information</h4>

                    <ol>
                        <li>Provide and Improve Services: We use the information collected to provide and maintain our
                            online learning platform, deliver course content, and improve our services based on user
                            feedback.
                        </li><br>

                        <li> Communication: We may use your contact information to send you important updates,
                            notifications, and promotional materials related to our services. You can opt-out of marketing
                            communications at any time.</li><br>

                        <li>Payment Processing: Your payment information is used solely for processing transactions and
                            preventing fraudulent activities.</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
@endsection
