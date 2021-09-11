@extends('layouts.staticIndex')
<!-- end Header -->

<!-- Hero section -->
@section('content')

<div class="section-xl bg-image parallax" data-bg-src="https://images.unsplash.com/photo-1587560699334-bea93391dcef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80">
    <div class="bg-black-06">
        <div class="container text-center">
            <h1 class="font-weight-normal margin-0">Contact Us</h1>
        </div><!-- end container -->
    </div>
</div>

<div class="section-lg">
    <div class="container">
        <div class="margin-bottom-70">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="font-weight-light">Say Hello!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center">
                <!-- Contact Form -->
                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                    @method('POST')
                <div class="contact-form">
                    <form method="post" id="contactform">
                        <div class="form-row">
                            <div class="col-12 col-sm-6">

                                <input type="text" id="name" name="name" autocomplete="off" placeholder="Name" required>
                                @error('name')
                                <span style="float:left; margin-bottom: 10px; margin-top: -10px; color:red ">{{$message}}</span>
                                @enderror

                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" name="email" autocomplete="off" placeholder="E-Mail" required>
                                @error('email')
                                <span style="float:left; margin-bottom: 10px; margin-top: -10px; color:red ">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="text" id="subject" name="subject" autocomplete="off" placeholder="Subject" required>
                        @error('subject')
                        <span style="float:left; margin-bottom: 10px; margin-top: -10px; color:red ">{{$message}}</span>
                        @enderror
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        @error('message')
                        <span style="float:left; margin-bottom: 10px; margin-top: -10px; color:red ">{{$message}}</span>
                        @enderror
                        <button class="button button-lg button-rounded button-outline-dark-2" type="submit">Send Message</button>
                    </form>
                    <!-- Submit result -->


                </div><!-- end contact-form -->
                </form>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- Contact Info section -->
<div class="section padding-top-0">
    <div class="container">
        <div class="row text-center icon-5xl">
            <div class="col-12 col-sm-6 col-md-4">
                <i class="ti ti-email text-dark margin-bottom-20"></i>
                <h6 class="font-weight-normal margin-0">Email</h6>
                <p>contact@email.com</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <i class="ti ti-mobile text-dark margin-bottom-20"></i>
                <h6 class="font-weight-normal margin-0">Phone</h6>
                <p>+(987) 654 321 01</p>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <i class="ti ti-location-pin text-dark margin-bottom-20"></i>
                <h6 class="font-weight-normal margin-0">Address</h6>
                <p>121 King St, Melbourne VIC 3000</p>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact Info section -->

@endsection
