<?php
// Load the header view
$this->load->view('RMC_view/layout/header_view.php');
?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/external.css">

<?php foreach ($seo as $meta) : ?>
    <?php if ($meta->id == 6) : ?>
        <!-- Dynamically set the page title and meta description based on the $seo array -->
        <title><?php echo $meta->meta_title; ?></title>
        <meta name="description" content="<?php echo $meta->meta_description; ?>">
    <?php endif; ?>
<?php endforeach; ?>

<body>
    <!-- Banner section for Project Planning & Management -->
    <div class="banner-service-5">
        <div class="banner-back-service-5" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="banner-title">Project Planning & <span class="decoration"> Management</span></h1>
            <p class="banner-para">From Concept to Completion, Your Project, Our Expertise.</p>
        </div>
        <button class="cta-btn" data-aos="fade-right" data-aos-duration="3000" data-toggle="modal" data-target="#myModal">Contact Us <i class="fa-solid fa-chevron-right"></i></button>


    </div>

    <!-- Main content section -->
    <div class="container-para">
        <p>Infrastructure Planning, Feasibility Studies, and Project Management. Our expert team simplifies the process of understanding and executing infrastructure projects. We carefully assess and analyze the viability and sustainability of your project during the planning phase. What sets us apart is that we don't just stop at the planning stage. We also offer project management consulting services to ensure your project is carried out smoothly during construction. Whether you're working on transportation networks, utilities, or other vital infrastructure projects, we're here to simplify the journey and deliver results that contribute to progress and sustainability.</p>
    </div>

    <div class="container-1">
        <?php if (!empty($services)) : ?>
            <?php foreach ($services as $item) : ?>
                <div class="row">
                    <?php if ($item->id % 2 == 1) : ?>
                        <!-- Content for odd-numbered services -->
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <h2 class="survey-head for-mobile">
                                <span class="decoration"><?php echo $item->title; ?></span>
                            </h2>
                            <img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <h4 class="survey-head for-desktop">
                                <span class="decoration"><?php echo $item->title; ?></span>
                            </h4>
                            <p class="survey-para"><?php echo $item->content; ?></p>
                            <!-- Client projects and key features sections are commented out -->
                        </div>
                    <?php else : ?>
                        <!-- Content for even-numbered services -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-6 order-lg-2 service-custom-position">
                                <h2 class="survey-head for-mobile">
                                    <span class="decoration"><?php echo $item->title; ?></span>
                                </h2>
                                <img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6 service-custom-position">
                                <h4 class="survey-head for-desktop">
                                    <span class="decoration"><?php echo $item->title; ?></span>
                                </h4>
                                <p class="survey-para"><?php echo $item->content; ?></p>
                                <!-- Client projects and key features sections are commented out -->
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Load the view for other services -->
    <?php
    $this->load->view('RMC_view/other_service_view.php');
    ?>

    <!-- Call-to-action section -->
    <div class="container-8">
        <div class="row01">
            <h4 class="about_headings" style="margin-top: 10%; font-size: 30px;">There's a lot more to us, Let's get Started</h4>
            <button class="btns active-collaborate" data-toggle="modal" data-target="#myModal">Collaborate With Us <i class="fas fa-arrow-circle-right"></i></button>
        </div>
    </div>

    <!-- External JavaScript files -->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

    <!-- Load the footer view -->
    <?php
    $this->load->view('RMC_view/layout/footeer_view.php');
    ?>