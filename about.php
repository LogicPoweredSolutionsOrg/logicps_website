<?php
include('db.php');

$index = "SELECT * FROM lps_about WHERE id = '1';";
$result = $conn->query($index);

if (!$result) {
    die("Query failed: " . $conn->error);
}
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
    <title>Logic Powered Solutions | About</title>

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
    <script type="text/javascript" src="js/jquery.counterup.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
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
                <div class="col-4 text-center white-heading">
                    <h2>About Us</h2>
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
    <section id="home-banner" class="innerbanner">
        <div class="banner-wrap" style="background: url(images/building-img.jpg) center top;">
            <div class="banner-overlay"></div>
        </div>
        <div class="container-fluid">
            <div class="mainbanner-content">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_heading'] ?></h2>
                        <p data-aos="fade-right" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_content'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home banner end -->

    <section id="ourstory">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">Our Story</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['our_story'] ?></p>
            <div class="otherdetail">
                <ul>
                    <li>
                        <div class="number"> <?= $row['websites'] ?></div>
                        <div class="number-detail">+</div>
                        <br />
                        <span>Websites</span>
                    </li>
                    <li>
                        <div class="number"> <?= $row['dashboards'] ?></div>
                        <div class="number-detail">+</div>
                        <br />
                        <span>Dashboards</span>
                    </li>
                    <li>
                        <div class="number"> <?= $row['apps'] ?></div>
                        <div class="number-detail">+</div>
                        <br />
                        <span>Apps</span>
                    </li>
                    <li>
                        <div class="number"> <?= $row['clients'] ?></div>
                        <div class="number-detail">+</div>
                        <br />
                        <span>Clients</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <?php
include('footer.php');
?>
</body>

</html>
<?php
}
?>