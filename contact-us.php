<?php include("header.php") ?>

<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <p class="mb-4">If you have any questions or need assistance, feel free to reach out to us. Our team is here to help you with any queries you may have. Contact us today for prompt and friendly support!</p>
                            <form id='contact-form' action="connection.php" method="post">
                                <input type="text" autocomplete="off" name="fullname" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                                <input type="text" autocomplete="off" name="phone" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Phone Number">
                                <input type="email" autocomplete="off" name="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                                <textarea name="comment" autocomplete="off" class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                                <button name="submit" class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                            <div id="form-messages"></div>
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

<?php include("footer.php") ?>