<?php
$this->load->view('RMC_view/layout/header_view.php');
?>



<title>
    Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
</title>
<meta name="description" content="Land survey, Revenue Survey, GPS, GIS, Drone Survey, SRA Plot survey, Licensed Surveyor, location survey, Demarcation of plot, earthwork calculation, Estimation, Top Surveyor in Maharashtra  ">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/blog.css">

<body>
    <!-- carousel start -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        </div>

        <div class="blog-main-container">
            <h1 class="blog-title-1">Blogs </h1>
            <div class="row">
                <?php foreach ($service as $blog_item) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 custom-margin">
                        <div class="blog-col">
                            <img class="d-block w-100" src="<?php echo base_url('uploads/blog_images/' . $blog_item->Blog_Img); ?>" alt="First slide">
                            <h3><?php echo $blog_item->Blog_title; ?></h3>
                            <p><?php echo $blog_item->Blog_main_content; ?></p>
                            <a href="<?php echo base_url('Blogdetail?id=' . $blog_item->id); ?>"><button class="read-more-btn">Read More </button></a>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>
        </div>
    </section>
    <!-- carousel end -->

</body>
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>