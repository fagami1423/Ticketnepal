@extends('frontend.layouts.app')
@section('content')
    <section class="welcome-area">
            <div class="welcome-slides owl-carousel">
                <!-- Single Slide -->
                <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(/frontend/img/bg-img/1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-right">
                                    <h2 data-animation="fadeInUp" data-delay="300ms">NepalTicket</h2>
                                    <h6 data-animation="fadeInUp" data-delay="500ms">Buy Online Tickets Here</h6>
                                    <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                        <a href="/about" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Single Slide -->
                <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(/frontend/img/bg-img/2.jpg);">
                </div>
                <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(/frontend/img/bg-img/3.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text-two text-center">
                                    <h5 data-animation="fadeInUp" data-delay="100ms">TicketNepal</h5>
                                    <h2 data-animation="fadeInUp" data-delay="300ms">Reserve or Hire the vehicles here</h2>
                                    <!-- Event Meta -->
                                   
                                    <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                        <a href="#" class="btn confer-btn m-2">Reserve<i class="zmdi zmdi-long-arrow-right"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Scroll Icon -->
            <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <section class="search-countdown-area section-padding-100-0" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <!-- About Content -->
                    <div class="col-12 col-md-6">
                        <div class="search-content-text mb-80">
                            
                            <h3 class="wow fadeInUp" data-wow-delay="300ms">Search Travels</h3>
                        <form action="{{route('buses.show')}}" method="GET" >
                                {{ csrf_field() }}
                                    <h6 for="" class="wow fadeInUp"  data-wow-delay="300ms">From</h6><br>
                                    <input type="text" name="from" placeholder="From"><br><br>
                                    <h6 for="" class="wow fadeInUp"  data-wow-delay="300ms">To</h6><br>
                                    <input type="text" name="to" placeholder="To"><br><br>
                                    <h6 for="" class="wow fadeInUp"  data-wow-delay="300ms">Travel Date</h6><br>
                                    <input type="date" name="departure_date" placeholder="Travel date"><br><br>
                                    <h6 for="" class="wow fadeInUp"  data-wow-delay="300ms">Shift</h6><br>
                                    <input type="radio" name="shift" value="Day"><h6>Day</h6>
                                    <input type="radio" name="shift" value="Night"><h6>Night</h6>
                                    <input type="radio" name="shift" value="Both" checked><h6>Both</h6><br>
                                    <input type="submit" class="btn confer-btn mt-50 wow fadeInUp" value="SEARCH">
        
                            </form>
                          
                        </div>
                    </div>
    
                    <!-- About Thumb -->
                    <div class="col-12 col-md-6">
                        <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                            <img src="/frontend/img/bg-img/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    
         
    </section>
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax">
            <div class="container">
                <div class="row">
                    <!-- Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                            <p>Choose a packet</p>
                            <h4>tour Packages</h4>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <!-- Single Ticket Pricing Table -->
                    <div class="col-12 col-lg-4">
                        <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6 class="ticket-plan">Lumbini</h6>
                            <!-- Ticket Icon -->
                            <div class="ticket-icon">
                                <img src="/frontend/img/core-img/p1.png" alt="">
                            </div>
                            <h2 class="ticket-price"><span>$</span>400</h2>
                            <a href="#" class="btn confer-btn w-100 mb-30">Book <i class="zmdi zmdi-long-arrow-right"></i></a>
                            <!-- Ticket Pricing Table Details -->
                            <div class="ticket-pricing-table-details">
                                <p><i class="zmdi zmdi-check"></i>3 days Lumbini tour</p>
                                <p><i class="zmdi zmdi-check"></i> 30% discount</p>
                                <p><i class="zmdi zmdi-check"></i>family visit</p>
                                <p><i class="zmdi zmdi-check"></i>Micro </p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Single Ticket Pricing Table -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6 class="ticket-plan">Manakamana tour</h6>
                            <!-- Ticket Icon -->
                            <div class="ticket-icon">
                                <img src="/frontend/img/core-img/p2.png" alt="">
                            </div>
                            <h2 class="ticket-price"><span>$</span>99</h2>
                            <a href="#" class="btn confer-btn w-100 mb-30">Book <i class="zmdi zmdi-long-arrow-right"></i></a>
                            <!-- Ticket Pricing Table Details -->
                            <div class="ticket-pricing-table-details">
                                <p><i class="zmdi zmdi-check"></i> 1 day Manakamana tour</p>
                                <p><i class="zmdi zmdi-check"></i> 40% discount</p>
                                <p><i class="zmdi zmdi-check"></i> Micro</p>
                                <p><i class="zmdi zmdi-check"></i> Family tour</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Single Ticket Pricing Table -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6 class="ticket-plan">Pokhara tour</h6>
                            <!-- Ticket Icon -->
                            <div class="ticket-icon">
                                <img src="/frontend/img/core-img/p3.png" alt="">
                            </div>
                            <h2 class="ticket-price"><span>$</span>200</h2>
                            <a href="#" class="btn confer-btn w-100 mb-30">Book <i class="zmdi zmdi-long-arrow-right"></i></a>
                            <!-- Ticket Pricing Table Details -->
                            <div class="ticket-pricing-table-details">
                                <p><i class="zmdi zmdi-check"></i> 3 days pokhara tour</p>
                                <p><i class="zmdi zmdi-check"></i> 50% discount</p>
                                <p><i class="zmdi zmdi-check"></i>AC Bus</p>
                                <p><i class="zmdi zmdi-check"></i>For College Students</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection