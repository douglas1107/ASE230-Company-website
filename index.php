<?php
include 'lib/read_csv.php';
include 'lib/read_json.php';
include 'lib/read_plain_text.php';



$awards = readAwards('data/awards.csv');
$team = readTeam ('data/team.csv');

//Read JSON
$products = readProducts('data/products.json');

$overview = readPlainTxt('data/overview.txt');
$mission_statement = readPlainTxt('data/mission_statement.txt');
$overview = implode("\n", $overview);
$mission_statement = implode("\n", $mission_statement);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Orion Aerospace Dynamics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Orion" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation"
        id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <i class="mdi mdi-alien"></i>Orion Aerospace
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    </li>
                </ul>
                <div class="nav-button ms-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button"
                                class="btn btn-primary navbar-btn btn-rounded waves-effect waves-light">Contact Us</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h4 class="home-small-title">The Sky is Not the Limit</h4>
                    <h1 class="home-title">Orion Aerospace Dynamics</h1>
                    <p class="pt-3 home-desc mx-auto">Pushing the boundaries of human reach, making the vast expanse of space a familiar terrain,
                    and ensuring Earth's skies are traveled sustainably.</p>
                    <p class="play-shadow mt-4" data-bs-toggle="modal" data-bs-target="#watchvideomodal"><a
                            href="javascript: void(0);" class="play-btn video-play-icon"><i
                                class="mdi mdi-play text-center"></i></a></p>

                    <!-- Modal -->
                    <div class="modal fade" id="watchvideomodal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-body p-0" style="margin-bottom: -8px;">
                                    <video id="VisaChipCardVideo" class="video-box" controls  width="800" >
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" >
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!-- CLIENT LOGO -->
    <section class="section-sm bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="client-images my-3 my-md-0">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT LOGO -->

    <!--START FEATURES-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3>About Orion Aerospace Dynamicse</h3>
                        <p class="text-muted web-desc"><?php echo $overview; ?></p>
                        <p class="text-muted"><?php echo $mission_statement; ?></p>
                        <ul class="text-muted list-unstyled mt-4 features-item-list">
                            <li class="">Galactic Cruiser™ for deep space exploration.</li>
                            <li class="">SkySailor Drones™ for sustainable aerial surveillance.</li>
                            <li class="">Nebula Stations™ for modular space habitats.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-4 waves-effect waves-light">Learn More <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="features-img mx-auto me-lg-0">
                        <img src="images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END FEATURES-->

    <!--START SERVICES-->
    <section class="section bg-light" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="section-title text-center">Our Services</h1>
                <div class="section-title-border mt-3"></div>
                <p class="section-subtitle text-muted text-center pt-4 font-secondary">
                    Orion Aerospace Dynamics, headquartered in Denver, Colorado, is at the forefront of aerospace innovation, offering products that push the boundaries of space exploration, sustainable aviation, and immersive aerospace training.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <div class="ms-4">
                                <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                                <p class="pt-2 text-muted"><?php echo htmlspecialchars($product['description']); ?></p>
                                <ul>
                                    <?php foreach ($product['applications'] as $application): ?>
                                        <li class="pt-2 text-muted"><?php echo htmlspecialchars($application); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </section>

    <!--START SERVICES-->

    <!--START AWARDS-->
    <section class="section bg-web-desc">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-white">Awards</h2>
                        <?php foreach ($awards as $award): ?>
                            <p class="pt-3 home-desc mx-auto"><li><?php echo htmlspecialchars($award['Year'] . ': ' . $award['Award']); ?></li></p>
                        <?php endforeach; ?>
                    <a href="#" class="btn btn-light mt-5 waves-effect waves-light">Discover Our Technologies</a>
                </div>
            </div>
        </div>
    </section>
    <!--END AWARDS-->

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2>About Us</h2>
                        <p class="text-muted pt-4">Founded in 2021, Orion Aerospace Dynamics is redefining aerospace technology. From deep space exploration vehicles to eco-friendly drones and modular space habitats, we push the boundaries of what’s possible.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
            <?php foreach ($team as $member): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="<?php echo htmlspecialchars($member['name']); ?>" src="<?php echo htmlspecialchars($member['image']); ?>" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name"><?php echo htmlspecialchars($member['name']); ?></h4>
                        <p class="text-uppercase team-designation"><?php echo htmlspecialchars($member['title']); ?></p>
                        <p class="text-muted"><?php echo htmlspecialchars($member['bio']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--END ABOUT-US-->

    <!--START PRICING-->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Solutions</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle font-secondary text-muted text-center pt-4">Explore our range of aerospace solutions tailored for both private and commercial sectors.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center pricing-box">
                        <h4 class="text-uppercase">Galactic Cruiser™</h4>
                        <h1>$500M</h1>
                        <h6 class="text-uppercase text-muted">Per Mission</h6>
                        <div class="plan-features mt-5">
                            <p>Propulsion: <b class="text-primary">Stellar Drive</b></p>
                            <p>Life Support: <b class="text-primary">Advanced</b></p>
                            <p>Entertainment: <b class="text-primary">Holodeck VR</b></p>
                            <p><b class="text-primary">Interplanetary Travel</b></p>
                        </div>
                        <a href="#" class="btn btn-primary waves-effect waves-light mt-5">Book a Mission</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ENd PRICING-->

    <!--START TESTIMONIAL-->
    <section class="section" id="testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">What they've said</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">The Big Oxmox advised her not
                        to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-1.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Dennis Williams - <span
                                        class="text-muted text-capitalize">Charleston</span></h5>
                                <p class="text-muted text-center mb-0">“I feel confident imposing change on myself. It's
                                    a lot more fun progressing than
                                    looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to
                                    throw curve balls.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-2.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Laurie Bell - <span
                                        class="text-muted text-capitalize">Worcester</span></h5>
                                <p class="text-muted text-center mb-0">“Our task must be to free ourselves by widening
                                    our circle of compassion to embrace
                                    all living creatures and the whole of quis consectetur nunc sit amet semper justo.
                                    nature and its beauty.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-3.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Howard Kelley - <span
                                        class="text-muted text-capitalize">Lynchburg</span></h5>
                                <p class="text-muted text-center mb-0">“I've learned that people will forget what you
                                    said, people will forget what you did,
                                    but people will never forget how donec in efficitur lectus, nec lobortis metus you
                                    made them feel.” </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END TESTIMONIAL-->

    <!-- START BLOG -->
    <section class="section " id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Latest News</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large language ocean class at a euismod
                        mus luctus quam.</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-1.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">UI & UX Design</h5>
                            <h4 class="mt-3"><a href="" class="blog-title"> Doing a cross country road trip </a></h4>
                            <p class="text-muted">She packed her seven versalia, put her initial into the belt and made
                                herself on the way..</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-2.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">Digital Marketing</h5>
                            <h4 class="mt-3"><a href="" class="blog-title">New exhibition at our Museum</a></h4>
                            <p class="text-muted">Pityful a rethoric question ran over her cheek, then she continued her
                                way.</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box mt-4">
                        <img src="images/blog/img-3.jpg" class="img-fluid rounded" alt="">
                        <div>
                            <h5 class="mt-4 text-muted">Travelling</h5>
                            <h4 class="mt-3"><a href="" class="blog-title">Why are so many people..</a></h4>
                            <p class="text-muted">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia.</p>
                            <div class="mt-3">
                                <a href="" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END BLOG -->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                        innovative ideas but also understand that a smart concept should be supported with faucibus
                        sapien odio measurable
                        results.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                                class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                                class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                                class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a class="footer-logo text-uppercase" href="#">Orion Aerospace Dynamics
                        <i class="mdi mdi-alien"></i>
                    </a>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Information</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Support</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Disscusion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!--START FOOTER ALTER-->
    <div class="footer-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-sm-start pull-none">
                        <p class="copy-rights  mb-3 mb-sm-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Orion Aerospace Dynamics
                        </p>
                    </div>
                    <div class="float-sm-end pull-none copyright">
                        <ul class="list-inline d-flex flex-wrap social m-0">
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-microsoft-xbox"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER ALTER-->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div>
            <h3 class="">Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('red')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('pink')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color7" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color8" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-weather-sunny bx-spin mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i
                    class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>