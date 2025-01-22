
@extends('layouts.pages')

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options">
                                <div class="option-item">
                                    <i class="search-btn flaticon-search"></i>
                                    <i class="close-btn bx bx-x"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" placeholder="Search..." type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="bx bx-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    
                                <a href="my-account.html" class="common-btn">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nnd Navbar Area -->

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-color-f8f8f8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="page-banner-heading">
                            <h1>Contact</h1>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="page-banner-img">
                            <img class="page-banner-img" src="assets/images/page-banner-img-2.png" alt="page-banner-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- shape images -->
            <img class="page-shape-1" src="assets/images/shape/page-shape-6.png" alt="shape-image">
            <img class="page-shape-2" src="assets/images/shape/page-shape-5.png" alt="shape-image">
            <img class="page-shape-3" src="assets/images/shape/page-shape-3.png" alt="shape-image">
            <img class="page-shape-4" src="assets/images/shape/page-shape-4.png" alt="shape-image">
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Contact Us Area -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">Get in Touch</span>
                    <h2>We’re Happy To Talk To You</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pel-address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-phone-call-1"></i>
                                    </div>
                                    <p>Phone:</p>
                                    <a href="tel:+1 (416)-8234-708">+1 416 8234 708</a>                                    
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pel-address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <p>Email:</p>
                                    <a href="mail:askus@owujupe.com">askus@owujupe.com</span></a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pel-address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <p>Location:</p>
                                    <span>Toronto, ON</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form id="contactForm" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="" data-error="Please enter your name" placeholder="Name">
        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                    <div class="form-group">
                                        <input type="phone" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                                    <div class="form-group">
                                        <input type="text" required="" data-error="Please enter your subject" class="form-control" placeholder="Subject">
        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control textarea" cols="30" rows="8" required="" data-error="Write your message" placeholder="Message"></textarea>
        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button class="book-btn" type="submit" style="pointer-events: all; cursor: pointer;">Send Message</button>
                                    
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Us Area -->

       