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
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>contact us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                <div class="contact-form">
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>          
                    </div> 
                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                </form>
                </div>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14126.597768022179!2d85.3242884!3d27.728108!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x470c076fbbcfcf0a!2sDiligent%20Travels%20and%20Tours%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1576129563738!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="contact-content">
                    <div class="contact-list">
                        <ul>
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i><span>Panipokhari Lazimpat</span></a></li>
                            <li><a href="tel:01-4435383" title="01-4435383"><i class="fas fa-mobile"></i><span>01-4435383</span></a></li>
                            <li><a href="tel:4425975, 4425975" title="01-4425975, 4425975"><i class="fas fa-mobile"></i><span>01-4425975, 9801054405</span></a></li>
                            <li><a href="mailto:info@diligenttravels.com" title="info@diligenttravels.com"><i class="far fa-envelope"></i><span> info@diligenttravels.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<?php include ('includes/footer.php') ?>