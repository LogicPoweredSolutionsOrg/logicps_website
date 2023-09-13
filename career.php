<?php
include('db.php');

$index = "SELECT * FROM lps_career WHERE id = '1'";
$result = $conn->query($index);

if (!$result) {
    die("Query failed: " . $conn->error);
}
$open_jobs_query = "SELECT * FROM lps_availablejobs";
$result1 = mysqli_query($conn, $open_jobs_query);

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
    <title>Logic Powered Solutions | Careers</title>

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
                    <h2>Careers</h2>
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
        <div class="banner-wrap" style="background: url(images/careerbanner.jpg) center top;">
            <div class="banner-overlay"></div>
        </div>
        <div class="container-fluid">
            <div class="mainbanner-content">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_heading'] ?></h2>
                        <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['main_content'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home banner end -->

    <section id="ourstory" class="careers-topsection">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">Why<br> Logic Powered Solution</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['why_lps'] ?></p>
        </div>
    </section>

    <section id="ourstory" class="grey careers-topsection">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">Open Positions</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['opent_positions'] ?>
            </p>
            <div class="position-wrap">
                <div class="row">
                    <?php
                if ($result) {
    // Loop through the fetched records and display them in the HTML structure
    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo '<div class="col-sm-6">';
        echo '    <div class="openpostion clearfix">';
        echo '        <div class="postiontitle float-left">';
        echo '            <h4>' . $row1['position_name'] . '</h4>'; // Assuming 'job_title' is a column in your table
        echo '        </div>';
        echo '        <div class="postionnumber float-right">';
        echo '            <span>' . $row1['total_vacancies'] . '</span>'; // Assuming 'job_count' is a column in your table
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
                </div>
                <div class="recruitmentsection">
                    <h5>Recruitment</h5>
                    <p> <?= $row['recruitment_content'] ?></p>
                    <a href="mailto:<?= $row['recruitment_mail'] ?>"> <?= $row['recruitment_mail'] ?></a>
                </div>
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