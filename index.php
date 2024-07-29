<?php include("header.php"); ?>
<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to T2Caterers</small>
                        <h1 class="display-1 mb-4 animated bounceInDown">Book <span class="text-primary">T2</span>Caterers For Your Dream Event</h1>
                        <a href="#book-now" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book T2Cateres Now</a>
                        <a href="about-us.php" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img src="img/hero.png" class="img-fluid rounded animated zoomIn" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Satrt -->
        <div class="container-fluid py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/t2cat.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                        <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                        <p class="mb-4">
                        At T2Caterers, we are proud to be trusted by over 200 happy clients who love our catering services. We are dedicated to providing high-quality food and excellent service, which has made us a top choice for catering. 
                        Whether you’re planning a small gathering or a big event, our team works hard to make sure everything is perfect. We offer a wide range of menu options to suit all tastes and dietary needs, ensuring everyone has a great dining experience. 
                        Join our satisfied clients and let T2Caterers make your next event special. Contact us today to find out how we can help you.
                        </p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Expert Catering Services
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Customizable Events Themes
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                            </div>
                        </div>
                        <a href="about-us.php" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Start-->
        <div class="container-fluid bg-light faqt py-6">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                       <div class="row g-4">
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-users fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">689</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">107</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">Expert Chefs</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                                <div class="faqt-item bg-primary rounded p-4 text-center">
                                    <i class="fas fa-check fa-4x mb-4 text-white"></i>
                                    <h1 class="display-4 fw-bold" data-toggle="counter-up">253</h1>
                                    <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="video">
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="img/video-1.mp4" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                            <!-- <img src="img/t2cat.jpg" class="img-fluid rounded" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Our Catering Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <!-- <iframe class="embed-responsive-item" src="img/video-1.mp4" id="video" allowfullscreen allowscriptaccess="always"
                                allow=""></iframe> -->
                                <video controls>
                                    <source src="img/video-1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- Service Start -->
 <div class="container-fluid service py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                    <h1 class="display-5 mb-5">What We Offer</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Wedding Party Catering</h4>
                                    <p class="mb-4">Tailored menus and exquisite dishes to create unforgettable weddings, ensuring every detail makes your special day perfect.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Corporate Events Catering</h4>
                                    <p class="mb-4">Professional and delicious catering for business meetings, conferences, and company parties, impressing clients and colleagues with diverse menu options.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Cocktail Party Catering</h4>
                                    <p class="mb-4">Elegant and creative cocktail menus featuring delicious appetizers and drinks, perfect for sophisticated and fun gatherings.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Bento Catering</h4>
                                    <p class="mb-4">Convenient, balanced, and tasty bento boxes for office lunches, picnics, and casual gatherings, prepared with fresh ingredients.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-birthday-cake fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Birthday Party Catering</h4>
                                    <p class="mb-4">Fun, flavorful dishes to delight guests and make birthdays memorable, catering to all ages with a variety of treats.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">-->
                    <!--    <div class="bg-light rounded service-item">-->
                    <!--        <div class="service-content d-flex align-items-center justify-content-center p-4">-->
                    <!--            <div class="service-content-icon text-center">-->
                    <!--                <i class="fas fa-walking fa-7x text-primary mb-4"></i>-->
                    <!--                <h4 class="mb-3">Home Delivery</h4>-->
                    <!--                <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>-->
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">-->
                    <!--    <div class="bg-light rounded service-item">-->
                    <!--        <div class="service-content d-flex align-items-center justify-content-center p-4">-->
                    <!--            <div class="service-content-icon text-center">-->
                    <!--                <i class="fas fa-wheelchair fa-7x text-primary mb-4"></i>-->
                    <!--                <h4 class="mb-3">Sit-down Catering</h4>-->
                    <!--                <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>-->
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-4 col-md-8 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-utensils fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Buffet Catering</h4>
                                    <p class="mb-4">A wide variety of fresh, delicious dishes beautifully presented for any occasion, catering to all tastes and dietary needs.</p>
                                    <!-- <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Events Start -->
        <div class="container-fluid event py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
                    <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Events</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Wedding</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Corporate</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Cocktail</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Buffet</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-1.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-3.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/event-7.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/event-8.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-1.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-3.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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
        <!-- Events End -->


         <!-- Contact Start -->
         <div class="container-fluid contact bg-light py-6 wow bounceInUp" id='book-now' data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <p class="mb-4">If you have any questions or need assistance, feel free to reach out to us. Our team is here to help you with any queries you may have. Contact us today for prompt and friendly support!</p>
                            <form action="connection.php" method="post">
                                <input type="text" autocomplete="off" name="fullname" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                                <input type="text" autocomplete="off" name="phone" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Phone Number">
                                <input type="email" autocomplete="off" name="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                                <textarea name="comment" autocomplete="off" class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                                <button name="submit" class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>57/1, Gali No 4, Than Singh Nagar, Anand Parbat, Near Kamal Hotel, New Delhi - 110005, India</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Mail Us</h4>
                                        <p class="mb-2">T2caterers@gmail.com</p>
                                        <p class="mb-2">info@t2caterers.com</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Phone Number</h4>
                                        <p class="mb-2">Titu : <a href="tel:+91 98107 09274">+91 98107 09274</a>, <a href="tel:+91 98107 19274">+91 98107 19274</a></p>
                                        <p class="mb-0">Kartik : <a href="tel:+91 88825 20743">+91 88825 20743</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
                    <h1 class="display-5 mb-5">What Our Customers says!</h1>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/rajesh.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Rajesh Kumar</h4>
                                <p class="m-0">Software Engineer</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3"> 
                            T2Caterers made our wedding reception unforgettable with delicious food and exquisite presentation. Highly recommended!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/priya.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Priya Sharma</h4>
                                <p class="m-0">Teacher</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers impressed us at my daughter’s birthday party with perfect menu and amazing food. They made the event stress-free and enjoyable.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/sunil.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0"> Sunil Desai </h4>
                                <p class="m-0">Architect</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers made our family reunion special with fresh, tasty food and efficient, friendly service. We were beyond satisfied with their catering.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/vikram.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Vikram Singh</h4>
                                <p class="m-0">Business Analyst</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers provided exceptional service at our corporate event. Every dish showed their attention to detail and quality. Our clients were very impressed.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/anjali.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Anjali Patel</h4>
                                <p class="m-0">Doctor</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers exceeded our expectations with flavorful food and courteous staff. They made our event memorable from start to finish. Highly recommended!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/rajesh.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0"> Ritu Verma </h4>
                                <p class="m-0">Marketing Manager</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers catered our office party, and everyone loved the food. The team was professional and the service was top-notch. Highly recommended!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/anjali.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0"> Amit Gupta </h4>
                                <p class="m-0">Event Planner</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                Working with T2Caterers was a delight. They offered great menu options, and the food was fantastic. They helped make the event a big success.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/neha.png" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Neha Joshi</h4>
                                <p class="m-0">HR Manager</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">
                                T2Caterers provided exceptional service for our annual company gathering. The food was delicious, and the staff was attentive. We couldn’t have asked for more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
<?php include("footer.php"); ?>