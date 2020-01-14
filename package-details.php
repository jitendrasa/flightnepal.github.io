<!-- header section -->
<?php include ('includes/header.php') ?>

<!-- top-header section -->
<?php include ('includes/top-header.php') ?>

<!-- menu section -->
<section id="main-menu" class="page-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/flight-logo.png" alt="flight-logo" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about-page.php">about us</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            flights
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="domestic.php">Domestic flights</a>
                            <a class="dropdown-item" href="international.php">International flights</a>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="packages.php">packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hotel-booking.php">hotel booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="travel.php">traveller info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">contact us</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- about section -->
<section id="about_section" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Choose your packages</h2>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="hotel-item">
                    <img src="assets/images/travel.jpg" alt="travel" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="hotel-item">
                    <img src="assets/images/travel1.jpg" alt="travel1" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="hotel-item">
                    <img src="assets/images/travel2.jpg" alt="travel2" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="hotel-item">
                    <img src="assets/images/travel3.jpg" alt="travel3" class="img-fluid">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Add your informations</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="contact-form">
                    <form role="form">
                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="address" class="form-control" id="mobile" name="mobile" placeholder="Address" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" required="">          
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="ZIP" name="ZIP" placeholder="ZIP" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Coupon" name="Coupon" placeholder="Coupon" required="">          
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-12">
                                <div class="input-group">
                                    <select id="inputState" class="form-control">
                                        <option selected>Arrival</option>
                                        <option value="">12:00 - 01:00 am</option>
                                        <option value="">01:00 - 02:00 am</option>
                                        <option value="">02:00 - 03:00 am</option>
                                        <option value="">12:00 - 01:00 am</option>
                                        <option value="">01:00 - 02:00 am</option>
                                        <option value="">02:00 - 03:00 am</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" rows="6"></textarea>          
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                <input type="checkbox" name="vehicle3" value="Boat">Terms and Conditions<br><br>       
                                </div>
                            </div>
                        </div>
                        <button type="button" id="submit" name="submit" class="btn text-center">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer section -->
<?php include ('includes/footer.php') ?>