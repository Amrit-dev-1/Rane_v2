<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

    <title>
        Blogs on Land Surveying, Land Acquisition for Infrastructure Projects
    </title>
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/blog-font.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/Blog_detail.css">


<body>
    <!-- carousel start -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!--<img class="d-block w-100" src="<?php base_url(); ?>assets/image/slider/Website Banner (08-11)/1stbannerImage(08-11- 2023)NewBanner.jpg" alt="First slide">-->
                </div>
            </div>

        </div>

        <?php if (isset($blog_item)) : ?>
    <div class="blog-main-container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <!-- Main blog content -->
                <div class="blog-detail-1">
                    <h1 class="blog-title"><?php echo $blog_item->Blog_title; ?></h1>
                    <img class="d-block w-100" src="<?php echo base_url('uploads/blog_images/' . $blog_item->Blog_Img); ?>" alt="Blog Image">
                    <p><?php echo $blog_item->Blog_detail_content; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- Suggested blogs -->
                <div class="blog-detail">
                    <h2><u>Popular Post</u></h2>
                    <?php if (!empty($suggested_blogs)) : ?>
                        <?php foreach ($suggested_blogs as $suggested_blog) : ?>
                            <div class="row suggested-blogs">
                                <div class="col-4">
                                    <img class="d-block w-100 suggested-blogs-img" src="<?php echo base_url('uploads/blog_images/' . $suggested_blog->Blog_Img); ?>" alt="Suggested Blog Image">
                                </div>
                                <div class="col-8">
                                    <a href="<?php echo base_url('Blogdetail?id=' . $suggested_blog->id); ?>">
                                        <p><?php echo $suggested_blog->Blog_title; ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>No suggested blogs found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



    </section>
    <!-- carousel end -->

</body>
<!-- footer area  -->

<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>