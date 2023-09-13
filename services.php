<?php
include('db.php');

$index = "SELECT * FROM lps_services WHERE id = '1';";
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
    <title>Logic Powered Solution | Services</title>

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
                    <h2>Services</h2>
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
        <div class="banner-wrap" style="background: url(images/services-banner.jpg) center top;">
            <div class="banner-overlay"></div>
        </div>
        <div class="container-fluid">
            <div class="mainbanner-content">
                <div class="row">
                    <div class="col-sm-7">
                        <h2 data-aos="fade-down" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_heading'] ?>
                        </h2>
                        <p data-aos="fade-right" data-aos-offset="150" data-aos-duration="1500">
                            <?= $row['main_content'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home banner end -->

    <section id="ourstory">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">Services</h2>
            <p data-aos="zoom-in" data-aos-duration="1000"> <?= $row['service_content'] ?></p>
        </div>
    </section>

    <section id="ourstory" class="grey">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">App Solutions</h2>
            <div class="row">
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/appsolution-img1.png" alt="">
                        </div>
                        <h3>WEB APPLICATIONS</h3>
                        <ul>
                            <li>Web Applications</li>
                            <li>E commerce Solutions Development</li>
                            <li>Websites Development</li>
                            <li>Scripting</li>
                            <li>Third Party Integration</li>
                            <li>API Development</li>
                        </ul>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/appsolution-img2.png" alt="">
                        </div>
                        <h3>MOBILE APP DEVELOPMENT</h3>
                        <ul>
                            <li>iOS Apps</li>
                            <li>Android Apps</li>
                            <li>Cross Platform Development</li>
                        </ul>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/appsolution-img3.png" alt="">
                        </div>
                        <h3>MACHINE LEARNING</h3>
                        <ul>
                            <li>Machine Learning</li>
                            <li>Natural Language Processing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ourstory" class="thirdsection">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">SOFTWARE DEVELOPMENT FRAMEWORK</h2>
            <p data-aos="zoom-in" data-aos-duration="1000">Scrum is a framework for effective team collaboration on
                complex
                products. It includes daily scrum meetings, tools and roles that work in collaboration to help teams
                structure
                and manage their work accordingly.</p>
            <div data-aos="fade-up" data-aos-duration="1000" class="frameworkimg-wrap">
                <img src="images/framework-img.png" alt="">
            </div>
        </div>
    </section>

    <section id="ourstory" class="grey forthsection">
        <div class="container-fluid">
            <h2 data-aos="fade-down" data-aos-duration="1000">Grow your Business</h2>
            <div class="row">
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/grow-img1.png" alt="">
                        </div>
                        <h3>MICROSOFT SHAREPOINT</h3>
                        <p>SharePoint is a web-based collaborative platform that integrates with Microsoft Office.
                            Launched in 2001,
                            SharePoint is primarily sold as a document management and storage system, but the product is
                            highly
                            configurable and usage varies substantially among organizations.</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/grow-img2.png" alt="">
                        </div>
                        <h3>MICROSOFT AZURE</h3>
                        <p>Azure is an open cloud platform that enables you to rapidly build, deploy and manage
                            applications. It
                            further supports various kinds of development frameworks and languages, for maximum
                            compatibility. You can
                            readily integrate your cloud applications with your pre-existing IT environment for easy
                            management.</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4">
                    <div class="appsolutions-content">
                        <div class="solutions-img">
                            <img src="images/grow-img3.png" alt="">
                        </div>
                        <h3>OFFICE 365</h3>
                        <p>Office 365 means Cloud productivity for your business, delivering seamless Office experiences
                            across
                            multiple devices and operating systems - all integrated with Microsoft Dynamics through
                            Active Directory
                            single sign-on capability.

                            Logic Powered Solutions can also integrate your Office 365 into Cloud Dynamics demo and
                            production
                            environments. Logic Powered Solutions can help you with the license administration and
                            management for your
                            customers.</p>
                    </div>
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