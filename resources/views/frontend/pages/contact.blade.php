@extends('frontend.layouts.app')
@section('content')
    <section class="contact--us-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Contact Us Thumb -->
                    <div class="col-12 col-lg-6">
                        <div class="contact-us-thumb mb-100">
                            <img src="/frontend/img/bg-img/2.jpg" alt="">
                        </div>
                    </div>
    
                    <!-- Contact Form -->
                    <div class="col-12 col-lg-6">
                        <div class="contact_from_area mb-100 clearfix">
                            <!-- Contact Heading -->
                            <div class="contact-heading">
                                <h4>Contact us</h4>
                                <p>feedbacks highly appreciated</p>
                            </div>
                            <div class="contact_form">
                                <form action="mail.php" method="post">
                                    <div class="contact_input_area">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-12">
                                                <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8521.851236327686!2d-74.6724533513314!3d40.961125464236446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c371b215154515%3A0xb2dc3766c77b480b!2sHopatcong%2C+NJ%2C+USA!5e0!3m2!1sen!2sbd!4v1552471083596" allowfullscreen></iframe>
        </div>
@endsection
