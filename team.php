<?php
include('db.php');

$index = "SELECT * FROM lps_team WHERE id = '1';";
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
    <title>Logic Powered Solution | Team</title>

    <!-- CSS Files-->
    <link type="text/css" rel="stylesheet" href="css/all.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- JS Files-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/flip.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
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
                    <h2>Team</h2>
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
        <div class="banner-wrap" style="background: url(images/team-banner.jpg) center top;">
            <div class="banner-overlay"></div>
        </div>
        <div class="container-fluid">
            <div class="mainbanner-content">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_heading'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home banner end -->

    <section id="ourstory" class="teamceo">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000"> <?= $row['main_heading'] ?></h2>
            <div class="row">
                <!-- <div class="col-sm-3">
            <div class="ceoimg-wrap">
              <img src="images/ceo-img.jpg" alt="">
            </div>
          </div> -->
                <div class="col-sm-12">
                    <p data-aos="zoom-in" data-aos-duration="1000" style="text-align: center !important;">
                        <?= $row['main_content'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="ourstory" class="grey">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">SALES AND MARKETING</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['sales_marketing'] ?>
            </p>
        </div>
    </section>

    <section id="ourstory" class="thirdsection">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">PROJECT MANAGEMENT</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['project_management'] ?></p>
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