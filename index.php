<?php
include('db.php');

$index = "SELECT * FROM lps__homes WHERE id = '1';";
$result = $conn->query($index);

if (!$result) {
    die("Query failed: " . $conn->error);
}
$sql = "SELECT * FROM lps_solutions";

// Execute the query
$solutions = mysqli_query($conn, $sql);


// Execute the query
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
<!DOCTYPE html>
<html>
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Logic Powered Solutions | Home</title>

    <!-- CSS Files-->
    <link type="text/css" rel="stylesheet" href="css/all.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- JS Files-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/flip.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <style>
    /* styles.css */
    </style>
</head>

<body class="bodyclass">
    <!-- Header start -->
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="mainlogo">
                        <a href="index.php" class="main"></a>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <!-- <h2>Our Work</h2> -->
                </div>
                <div class="col-sm-4 text-right">
                    <label for="checkbox3">
                        <div class="hamburger hamburger3">
                            <span class="bar bar1"></span>
                            <span class="bar bar2"></span>
                            <span class="bar bar3"></span>
                            <span class="bar bar4"></span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->

    <!-- home banner start -->
    <section id="home-banner">
        <div class="overlay-home"></div>
        <div class="video-wrap">
            <div class="overlap">
                <video onloadeddata="this.play();" loop muted>
                    <source src="images/introvideo.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="container-fluid">
            <div class="mainbanner-content">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_heading'] ?>
                        </h2>
                        <p data-aos="fade-right" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_content'] ?></p>
                        <a data-aos="fade-up" data-aos-offset="150" data-aos-duration="1500" href="contactus.php"
                            class="green-btn">Let's get Started</a>
                    </div>
                    <div class="col-sm-2 offset-2">
                        <a href="#" class="playbtn"></a>
                    </div>
                </div>
            </div>
            <section id="clients-slider">
                <div class="footer-top">
                    <div class="container">
                        <div class="socialmedia-nav">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/LogicPoweredSolutions/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/LogicPowered"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/company/logicpowered-solutions"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h3>SOLUTIONS WE BUILT FOR ...</h3>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="slider">
                            <div class="slide-track">
                                <?php
                               if ($solutions) {
    // Loop through the records and display them
    while ($solution = mysqli_fetch_assoc($solutions)) {
        // Extract data from the current row
        $imageSrc = $solution['logo']; // Replace 'image_column' with the actual column name where image URLs are stored

        // Output the HTML for each record
        echo '<div class="slide">';
        echo '<img class="filter" src="https://lpsapps.com:4499/LPS-CMS/public/assets/images/solutions/' . $imageSrc . '" height="148" width="250" alt="" />';
        echo '</div>';
        
    }

    // Free the result set
    mysqli_free_result($result);
} 
?>
                            </div>

                        </div>
                    </div>
            </section>
        </div>
    </section>
    <!-- home banner end -->

    <!-- second section start -->
    <section id="second-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
                    <!-- <div class="mobile-img">
              <img src="images/mobile-img.png" alt="">
            </div> -->
                    <div data-aos="fade-up" data-aos-duration="3000" class="mobileslider-wrap">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="image-wrapper">
                                    <img src="images/mobileslieder-1.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-wrapper">
                                    <img src="images/mobileslieder-2.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-wrapper">
                                    <img src="images/mobileslieder-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h3 data-aos="fade-right" data-aos-offset="150" data-aos-duration="500">
                        <?= $row['choose_heading'] ?></h3>
                    <p data-aos="fade-right" data-aos-offset="150" data-aos-duration="500">
                        <?= $row['choose_content'] ?>
                    </p>
                    <a data-aos="fade-right" data-aos-offset="150" data-aos-duration="500" href="about.php"
                        class="border-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- second section end -->

    <!-- white section start -->
    <section id="white-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                    <h3 data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" class="mt-5">
                        Software
                        Development Framework</h3>
                    <p data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000">High degree of
                        specialization
                        may be rendering us unable to see the connections between the things we design and their
                        consequences as they ripple out into the biosphere.</p>
                    <a data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000" href="services.php"
                        class="border-btngreen">Learn More</a>
                </div>
                <!-- <div class="col-sm-5 offset-1">
            <div class="mobile-img">
              <img src="images/framework-img.png" alt="">
            </div>
          </div> -->
            </div>
        </div>
    </section>
    <!-- white section end -->

    <!-- home banner start -->
    <section id="expertise-section">
        <div class="container-fluid">
            <h3 data-aos="fade-down" data-aos-duration="1500">Our Competencies</h3>
            <p data-aos="fade-up" data-aos-duration="1500">We are committed to assist our clients reaching their
                aims &
                objectives, <br>to recognizing their event practices and to provide an innovative atmosphere.
            </p>
            <p data-aos="fade-up" data-aos-duration="1500">We provide helping hand in the following domains:</p>
            <div class="row">
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon1.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>web applications</h5>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon10.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>mobile app development</h5>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon9.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>microsoft azure</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon3.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>machine learning</h5>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon7.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>microsoft sharepoint</h5>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-4">
                    <div class="expertise-img">
                        <img src="images/icon8.png" alt="">
                    </div>
                    <div class="expertise-content">
                        <h5>office 365</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home banner end -->
    <!-- logo section start -->
    <section id="logo-section">
        <div class="container-fluid">
            <div class="technologies-wrap">
                <h3 data-aos="fade-down" data-aos-duration="1500">Technologies we use</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <?php
                        $tech = "SELECT * FROM lps_technologies";
                        $technologies = mysqli_query($conn, $tech);
                        if ($technologies) {
                            // Loop through the records and display them
                            while ($techno = mysqli_fetch_assoc($technologies)) {
                                // Extract data from the current row
                                $image = $techno['logo'];
                                ?>
                        <div class="image-wrapper">
                            <img src="https://lpsapps.com:4499/LPS-CMS/public/assets/images/technologies/<?php echo $image; ?>"
                                alt="">
                        </div>

                    </div>
                    <?php 
                            }
                        }
                            ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- logo section end -->
    <!-- Contact Us start -->
    <?php include('contact_form.php');?>
    <!-- Contact Us Ends -->
    <footer id="footer" class="footer">
        <div class="footer-nav">
            <ul>
                <li class="active m-flip js-flip filter">
                    <a class="m-flip_item" href="index.php">Home</a>
                    <a class="m-flip_item" href="index.php">Home</a>
                </li>
                <li class="m-flip js-flip filter">
                    <a class="m-flip_item" href="about.html">ABOUT</a>
                    <a class="m-flip_item" href="about.html">ABOUT</a>
                </li>
                <li class="m-flip js-flip filter">
                    <a class="m-flip_item" href="services.html">SERVICES</a>
                    <a class="m-flip_item" href="services.html">SERVICES</a>
                </li>
                <li class="m-flip js-flip filter">
                    <a class="m-flip_item" href="team.html">Team</a>
                    <a class="m-flip_item" href="team.html">Team</a>
                </li>
                <li class="m-flip js-flip filter">
                    <a class="m-flip_item" href="career.html">Careers</a>
                    <a class="m-flip_item" href="career.html">Careers</a>
                </li>
                <li class="m-flip js-flip filter">
                    <a class="m-flip_item" href="contactus.php">CONTACT US</a>
                    <a class="m-flip_item" href="contactus.php">CONTACT US</a>
                </li>
            </ul>
        </div>
    </footer>
    <?php
include('footer.php');
?>
</body>

</html>
<?php
}