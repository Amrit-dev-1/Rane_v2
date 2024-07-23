<?php
// Load the header view
$this->load->view('RMC_view/layout/header_view.php');
?>

<?php foreach ($seo as $meta) : ?>
	<!-- Set the meta title and description dynamically based on the $seo array -->
	<title><?php echo $meta->meta_title; ?></title>
	<meta name="description" content="<?php echo $meta->meta_description; ?>">
<?php endforeach; ?>

<!-- Link to the external CSS file -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/external.css">

<div class="banner-service-1">
	<!-- Banner background with animation -->
	<div class="banner-back banner-back-service-1" data-aos="fade-right" data-aos-duration="2000">
		<h1 class="banner-title">Engineering <span class="decoration"> Survey </span></h1>
		<br>
		<p class="banner-para">Crafting Tomorrow's Infrastructure with Premier Civil Engineering Consulting, Surveying, and Design Excellence.</p>
	</div>
	<button class="cta-btn" data-aos="fade-right" data-aos-duration="3000" data-toggle="modal" data-target="#myModal">Contact Us <i class="fa-solid fa-chevron-right"></i></button>
</div>
<br>

<div class="container-para">
	<!-- Company description -->
	<p>At our company, we have licensed surveyors who are certified experts in providing a wide range of engineering surveying solutions. We also boast a team of qualified engineers, GIS experts, and retired staff from the Revenue Department of Maharashtra, bringing a wealth of experience to our services. With proficiency in utilizing the latest technologies such as DGPS, ETS, and drones, we deliver precise and efficient surveying services for land surveying, topographic mapping, and alignment surveys. Whether for government, semi-government, or private infrastructure projects, our team is equipped to meet your surveying needs with professionalism and expertise. Our comprehensive suite of services includes topographic land surveys, contour surveys, and CAD deliverables, which can be offered separately or in combination to best suit your project requirements.</p>
</div>

<div class="container-1">
	<?php if (!empty($services)) : ?>
		<?php foreach ($services as $item) : ?>
			<div class="row">
				<?php if ($item->id % 2 == 1) : ?>
					<!-- Display content for odd numbered services -->
					<div class="col-md-12 col-lg-6 col-xl-6">
						<h2 class="survey-head for-mobile"><span class="decoration"><?php echo $item->title; ?></span></h2>
						<img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
					</div>
					<div class="col-md-12 col-lg-6 col-xl-6">
						<h4 class="survey-head for-desktop"><span class="decoration"><?php echo $item->title; ?></span></h4>
						<p class="survey-para"><?php echo $item->content; ?></p>
						<h4 class="survey-head2 client-project">Client Projects</h4>
						<div class="container">
							<div class="row">
								<!-- Loop through client images and descriptions -->
								<div class="col-md-12 col-lg-6 col-xl-6">
									<div class="row">
										<div class="col-6 mb-4">
											<div class="project-logo text-center">
												<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_1); ?>" class="proj-logo img-fluid">
												<p class="logo-dis text-center mb-0"><?php echo $item->client_des_1; ?></p>
											</div>
										</div>
										<div class="col-6 mb-4">
											<div class="project-logo text-center">
												<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_2); ?>" class="proj-logo img-fluid">
												<p class="logo-dis text-center mb-0"><?php echo $item->client_des_2; ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<div class="row">
										<div class="col-6 mb-4">
											<div class="project-logo text-center">
												<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_3); ?>" class="proj-logo img-fluid">
												<p class="logo-dis text-center mb-0"><?php echo $item->client_des_3; ?></p>
											</div>
										</div>
										<div class="col-6 mb-4">
											<div class="project-logo text-center">
												<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_4); ?>" class="proj-logo img-fluid">
												<p class="logo-dis text-center mb-0"><?php echo $item->client_des_4; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<h4 class="Key">Key Features</h4>
						<div class="row">
							<!-- Display key features -->
							<div class="col-sm-6 col-md-6" style="display: flex;">
								<i class="fa-solid fa-circle dot-1"></i>
								<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
							</div>
							<div class="col-sm-6 col-md-6" style="display: flex;">
								<i class="fa-solid fa-circle dot-1"></i>
								<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
							</div>
						</div>
					</div>
				<?php else : ?>
					<!-- Display content for even numbered services -->
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6 order-lg-2 service-custom-position">
							<h2 class="survey-head for-mobile"><span class="decoration"><?php echo $item->title; ?></span></h2>
							<img src="<?php echo base_url('uploads/Main-img/' . $item->main_img); ?>" class="contout img-fluid">
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6 service-custom-position">
							<h4 class="survey-head for-desktop"><span class="decoration"><?php echo $item->title; ?></span></h4>
							<p class="survey-para"><?php echo $item->content; ?></p>
							<h4 class="survey-head2 client-project">Client Projects</h4>
							<div class="container">
								<div class="row">
									<!-- Loop through client images and descriptions -->
									<div class="col-md-12 col-lg-6 col-xl-6">
										<div class="row">
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_1); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_1; ?></p>
												</div>
											</div>
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_2); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_2; ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-6">
										<div class="row">
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_3); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_3; ?></p>
												</div>
											</div>
											<div class="col-6 mb-4">
												<div class="project-logo text-center">
													<img src="<?php echo base_url('uploads/Logo/' . $item->client_image_4); ?>" class="proj-logo img-fluid">
													<p class="logo-dis text-center mb-0"><?php echo $item->client_des_4; ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h4 class="Key">Key Features</h4>
							<div class="row">
								<!-- Display key features -->
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i>
									<p><span class="decor"><?php echo $item->key_feature_1; ?></span></p>
								</div>
								<div class="col-sm-6 col-md-6" style="display: flex;">
									<i class="fa-solid fa-circle dot-1"></i>
									<p><span class="decor"><?php echo $item->key_feature_2; ?></span></p>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>

<!-- Load the other services view -->
<?php
$this->load->view('RMC_view/other_service_view.php');
?>

<div class="container-8">
	<div class="row01">
		<br>
		<h4 style="margin-top: 10%; font-size: 30px;">There's a lot more to us, Let's get Started</h4>
		<br><br>
		<!-- Button to open the modal for collaboration -->
		<button class="btns active-collaborate" data-toggle="modal" data-target="#myModal">Collaborate With Us <i class="fas fa-arrow-circle-right"></i></button>
	</div>
</div>

<!-- Load the footer view -->
<?php
$this->load->view('RMC_view/layout/footeer_view.php');
?>

<!-- End of JavaScript -->