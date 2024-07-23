@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap');

body {
	background-color: white !important;
	font-family: 'Manrope', sans-serif !important;
}


.header-list {
	/*margin: 5px 0; */
	border-top: 0.2px solid #273D71;
	/*border-bottom: 0.2px solid #273D71; */
	padding: 10px;
	list-style-type: none;
}

.banner-button {
    position: absolute;
    bottom: 21%;
    left: 13.5%;
    transform: translateX(-50%);
    padding: 10px 20px;
    background-color: #273D71;
    color: white;
    border: none;
    CONTAIN-INTRINSIC-BLOCK-SIZE: AUTO 100PX;
    text-decoration: none;
    font-weight: 700;
    font-size: 21px;
    border-radius: 10px;
    opacity: 0.9;
    z-index: 0;
}

.banner-button:hover {
	color: white;
}


.read-about-us-btn {
	padding: 10px;
	height: 20px;
	width: 200px;
	background-color: white;
	color: #243d71;
	border: 0px solid white;
	border-radius: 5px;
	margin: 0 0 0 0;
	font-size: 18px;
	font-weight: 600;
}

.all-sectios {
	padding: 0px 24px;
}

.grp-1 {
	padding: 20px;
	padding: 20px;
	margin-top: 91px;
}

.abt-title {
	font-weight: 800 !important;
	font-size: 60px;
	text-align: left;
	color: white;
}

.carousel {
	position: relative;
	border-bottom: 0.1px solid #243d71;
	/* box-shadow: 0 -6px 19px #243d71, 0 0 0px rgba(0,0,0,0); */
	box-shadow: 0px 15px 10px -15px #243d71;
	/* margin-top: 72px; */
	top: 66px;
}


.about-description {
	position: absolute;
	top: 10%;
	width: 500px;
	color: white;
	left: 47px;
	font-size: 15px;
	text-align: left;
}

.under_logo {
	position: relative;
}

.under_logo::before {
	content: "";
	position: absolute;
	width: 90%;
	height: 2px;
	border-radius: 3px;
	background-color: #e07000;
	bottom: 0;
	left: 0;
	transform-origin: right;
	transform: scaleX(0);
	transition: transform 0.3s ease-in-out;
}

.under_logo:hover::before {
	transform-origin: left;
	transform: scaleX(1);
}

.ser {
	width: 624px;
	height: 99px;
	text-align: center;
	font: normal normal bold 60px/40px Open Sans;
	letter-spacing: 0px;
	color: #243d71;
	opacity: 1;
	margin-left: 450px;
	font-size: 50px;
}

.aline {
	min-width: 115px;
	max-width: 115px;
	margin: 1rem;
	cursor: pointer;

	width: 64px;
	height: 64px;
	border-radius: var(--radius-pill);
	transition: var(--transitions-ease-quick) var(--transitions-duration-rapid);
	z-index: 0;
	background-color: var(--color-primary-20);
}

.homeabout {
	height: auto;
	width: 1300px;
	margin-right: auto;
}

.top-class {
	position: absolute;
	top: 8px;
	left: 16px;
	font-size: 50px;
	font-weight: bold;
	margin-left: 40px;
	margin-top: 5%;
}

.aboutsection {
	position: relative;
	text-align: center;
	color: white;
	margin-right: 20px;
}

.bottom-left {
	position: absolute;
	bottom: 60%;
	margin-left: 40px;
}

.bottom {
	text-indent: 30px;
	margin-left: 10px;
}

.img1 {
	width: 70px;
	height: 60px;
}

/*.font {*/
/*	font-size: small;*/
/*}*/

.row1 {
	margin-right: 20px;
	left: 303px;
	align-items: center;
}

.row2 {
	margin-left: 90px;
}

.row3 {
	margin-left: 40px;
}

.row4 {
	margin-left: 120px;
}

.row-container {
	display: flex;
	margin-left: 100px;
	color: #2b3f49;
}

.services-label {
	text-align: center;
	font-size: 20px;
	font: normal normal 600 25px/30px Montserrat;
	letter-spacing: 0px;
	color: #2b3f49;
	opacity: 1;
}

.row-container2 {
	top: 0px;
	left: 0px;
	width: 1920px;
	height: 8144px;
	display: flex;
}

.row3-1 {
	margin-left: 10%;
}

.logo {
	height: 55px;
	width: 303px;
	margin-left: 27px;
}

.navbar {
	position: fixed;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	-ms-flex-align: center;
	align-items: center;
	padding: 0.5rem 2rem;
	margin-top: 0px !important;
	z-index: 999;
	transition: 0.5s ease-in-out;
}

.nav-item {
    padding: 0 10px;
}
.form-style-select {
	border-radius: 14px;
	box-shadow: inset 0px 1px 8px rgba(0, 0, 0, 0.2);
}

.nav-link {
	font-size: 17px;
	color: #243d71;
}

.navbar {
	color: #243d71;
	border-bottom: 0.1px solid #243d71;
	width: 100%;

	/* box-shadow: 0px 15px 10px -15px #243d71; */
}

@media (min-width: 992px) {
	.navbar-expand-lg .navbar-collapse {
		display: -ms-flexbox !important;
		display: flex !important;
		-ms-flex-preferred-size: auto;
		flex-basis: auto;
		word-spacing: 10px;
	}
}

@keyframes slide {
	0% {
		left: 0%;
	}

	9% {
		left: 0%;
	}

	18% {
		left: -100%;
	}

	27% {
		left: -100%;
	}

	36% {
		left: -200%;
	}

	45% {
		left: -200%;
	}

	54% {
		left: -300%;
	}

	63% {
		left: -300%;
	}

	72% {
		left: -400%;
	}

	81% {
		left: -400%;
	}

	90% {
		left: -500%;
	}

	100% {
		left: -500%;
	}
}

#slider {
	overflow: hidden;
}

#slider figure {
	position: relative;
	width: 600%;
	margin: 0px;
	left: 0px;
	text-align: left;
	animation: 30s slide infinite;
}

#slider figure img {
	float: left;
	width: 16.6666%;
	height: 15%;
}

.slidy {
	height: 500px;
}

.tem {
	height: 500px;
}

.rev-d {
	width: 52px;
	height: 49px;
	margin-top: 10px;
}

.rev {

	width: 80px;
	height: 68px;
	margin-top: 0px;
}

.rev2 {
	width: 53px;
	height: 50px;
	margin-top: 3px;
}

.rev3 {
	height: 60px;
	width: 52px;
}

.rev4 {
	height: 55px;
	width: 69px;
}

.ban2 {
	width: 200%;
	height: 50%;
}

.head2 {
	/*font-family: OpenSans;*/
	font-weight: 700;
	color: #243d71;
	letter-spacing: 1px;
}

.under {
	text-decoration: underline;
	-webkit-text-decoration-color: red;
	/* Safari */
	text-decoration-color: red;
}

.fon {
	/*font-family: Montserrat, SemiBold;*/
	text-align: center;
	font-size: 14px;
	padding: 6px;
}

.sub-container-2 {
	text-align: center;
	padding: 0 50px 0 50px;
}

.text-center-logo {
	/*font-family: Montserrat;*/
	border-radius: 84px;
	border: none;
	height: 150px;
	position: relative;
	background-color: transparent;
	transition: all 0.3s;
	text-align: center;

	&:hover {
		transition: all 0.3s;
		border-radius: 10px;
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 6px 15px #243d71;
		height: 145px;
		position: relative;
	}

	.yellow-underline {
		border-bottom: solid;
	}



	.btn-1 {
		border: none;
	}

	.bg1 {
		background-color: #cfcfcf;
	}
}

.btn-2 {
	/*height: 43px;*/
	/*width: 161px;*/
	border: none;
	background-color: #243d71;
	color: white;
	border-radius: 6px;
	padding: 13px 23px;
	font-size: 22px;
	font-weight: 500;
}

.btn-2:hover {
	background-color: white;
	color: #243d71;
	border: 1px solid #243d71;
	transition: 0.3s ease-in-out;
}

.wrapper {
	display: flex;
	width: 300px;
	height: 500px;
	background: white;
	margin: auto;
	position: relative;
	overflow: hidden;
	border-radius: 10px 10px 10px 10px;
	box-shadow: 0;
	transform: scale(0.95);
	transition: box-shadow 0.5s, transform 0.5s;

	&:hover {
		transform: scale(1);
		box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
	}

	.container {
		width: 100%;
		height: 100%;

		.top {
			height: 80%;
			width: 100%;
			background: url("/assets/image/properties/For Sale.png") no-repeat center center;
			-webkit-background-size: 100%;
			-moz-background-size: 100%;
			-o-background-size: 100%;
			background-size: 100%;
		}

		.bottom {
			width: 200%;
			height: 20%;
			transition: transform 0.5s;

			&.clicked {
				transform: translateX(-50%);
			}

			h1 {
				margin: 0;
				padding: 0;
			}

			p {
				margin: 0;
				padding: 0;
			}

			.left {
				height: 100%;
				width: 50%;
				background: #f4f4f4;
				position: relative;
				float: left;

				.details {
					padding: 20px;
					float: left;
					width: calc(70% - 40px);
				}

				.buy {
					float: right;
					width: calc(30% - 2px);
					height: 100%;
					background: #f1f1f1;
					transition: background 0.5s;
					border-left: solid thin rgba(0, 0, 0, 0.1);

					i {
						font-size: 30px;
						padding: 30px;
						color: #254053;
						transition: transform 0.5s;
					}

					&:hover {
						background: #a6cdde;
					}

					&:hover i {
						transform: translateY(5px);
						color: #00394b;
					}
				}
			}

			.right {
				width: 50%;
				background: #a6cdde;
				color: white;
				float: right;
				height: 200%;
				overflow: hidden;

				.details {
					padding: 20px;
					float: right;
					width: calc(70% - 40px);
				}

				.done {
					width: calc(30% - 2px);
					float: left;
					transition: transform 0.5s;
					border-right: solid thin rgba(255, 255, 255, 0.3);
					height: 50%;

					i {
						font-size: 30px;
						padding: 30px;
						color: white;
					}
				}

				.remove {
					width: calc(30% - 1px);
					clear: both;
					border-right: solid thin rgba(255, 255, 255, 0.3);
					height: 50%;
					background: #bc3b59;
					transition: transform 0.5s, background 0.5s;

					&:hover {
						background: #9b2847;
					}

					&:hover i {
						transform: translateY(5px);
					}

					i {
						transition: transform 0.5s;
						font-size: 30px;
						padding: 30px;
						color: white;
					}
				}

				&:hover {

					.remove,
					.done {
						transform: translateY(-100%);
					}
				}
			}
		}
	}

	.inside {
		z-index: 9;
		background: #92879b;
		width: 140px;
		height: 140px;
		position: absolute;
		top: -70px;
		right: -70px;
		border-radius: 0px 0px 200px 200px;
		transition: all 0.5s, border-radius 2s, top 1s;
		overflow: hidden;

		.icon {
			position: absolute;
			right: 85px;
			top: 85px;
			color: white;
			opacity: 1;
		}

		&:hover {
			width: 100%;
			right: 0;
			top: 0;
			border-radius: 0;
			height: 80%;

			.icon {
				opacity: 0;
				right: 15px;
				top: 15px;
			}

			.contents {
				opacity: 1;
				transform: scale(1);
				transform: translateY(0);
			}
		}

		.contents {
			padding: 5%;
			opacity: 0;
			transform: scale(0.5);
			transform: translateY(-200%);
			transition: opacity 0.2s, transform 0.8s;

			table {
				text-align: left;
				width: 100%;
			}

			h1,
			p,
			table {
				color: white;
			}

			p {
				font-size: 13px;
			}
		}
	}
}

.lease {
	width: 301px;
	height: 95%;
	margin-left: -10px;
}

.container-proP {
	display: flex;
}

.product-card {
	position: relative;
	width: 300px;
	border: 1px solid #ccc;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	transition: box-shadow 0.3s;
	cursor: pointer;
}

.product-card:hover {
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.product-image img {
	width: 100%;
	height: auto;
}

.product-details {
	padding: 10px;
}

.buy-button {
	display: none;
	background-color: #007bff;
	color: #fff;
	border: none;
	padding: 10px 20px;
	cursor: pointer;
}

.hover-details {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(255, 255, 255, 0.9);
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	text-align: center;
	opacity: 0;
	transition: opacity 0.3s;
}

.hover-details p {
	margin: 0;
}

.hover-details a {
	display: inline-block;
	margin-top: 10px;
	background-color: #007bff;
	color: black;
	text-decoration: none;
	padding: 10px 20px;
}

.product-card:hover .buy-button {
	display: block;
}

.product-card:hover .hover-details {
	opacity: 1;
}

.pro-img {
	height: auto;
	width: 300px;
}

.header3 {
	justify-content: center;
}

.image-9 {
	height: 35%;
	width: 80%;
}

/* new  */

.btn {
	padding: 0.5em 1.5em;
	border-radius: 2em;
}

.ban {
	width: 1404px;
	height: 1404px;
}



.second-banner {
	text-align: center;
}



.plot {
	width: 100%;
	background-color: transparent;
}

.container-connect {
	display: flex;
	align-items: center;
	justify-content: center;
}

.container-connect img {
	display: block;
	margin: 0 auto;
	background-image: url("<?php base_url('/assets/image/Image 10/Image 10.png'); ?>");
	background-position: center center;
	width: 80%;
	height: 400px;
}

.container-connect .text-overlay {
	/* margin-top: 33%; */
	transform: translate(-0%, -50%);
	text-align: center;
	color: white;
	font-size: 24px;
	margin: 35% 0 0 0;
}

.text-overlay h3 {
	font-size: 2.25rem;
}



.connect {
	width: 80%;
}

.btn-3 {
	background-color: white;
	color: #2b3f49;
	border-radius: 9px;
	border: none;
	padding: 10px 35px 10px 35px;
}

.btn-3:hover {
	background-color: #243d71;
	color: white;
	transition: 0.5s ease-in-out;
	border: 1px solid white;
}

.cli {
	height: 51px;
	width: 110px;
}

.cli2 {
	height: 70px;
	width: 90px;
	justify-content: center;
}



.str {
	font-size: 34px;
	font-weight: 700;
	color: #243d71;
}



.btn-5 {
	width: 350px;
	font-size: 20px;
	font: normal normal 600 23px/44px Open Sans;
	letter-spacing: 0px;
	color: white;
	background-color: #243d71;
	justify-content: center;
	border-radius: 25px;
	border: none;
	margin: 0 auto;
	display: flex;
	padding: 10px;
}

.btn-5:hover {
	color: #243d71;
	background-color: White;
	transition: 0.5s ease-in-out;
	border: 1px solid white;
}

.icon2 {
	margin-top: 5px;
	margin-left: 8px;
}

.container01 {
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	margin-top: 10%;
	border: 0px solid #243d71;
	justify-content: center;
	width: 48%;
	height: auto;
	padding: 26px;
	margin: 170px 27% 0 27%;
	border-radius: 10px;
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}

.centered-content {
	text-align: center;
}

.new-ban {
	text-align: right;
	max-width: 100%;
}

img.scope {
	max-width: 100%;
	/* Make the image responsive */
	height: 500px;
	margin-left: 113%;
	margin-top: -255px;
}

.footer {
	color: white;
	height: 200px;
	max-width: 100%;
}

.container05 {
	width: 100%;
	background-color: #edeced;
}



.container05 {
	background-color: #edeced;
	/* Set the background color to white */
	color: #000;
	/* Set text color to black */
	border: 0px solid rgb(117, 117, 117);
}

.foot-logo {
	height: 66px;
}

/* Style for social media buttons */
.btn i {
	font-size: 24px;
	margin: 5px;
	color: #000;
	/* Social media icon color */
	/*font-family: Montserrat;*/
}

/* Input and Subscribe button styles */
.footer-input {
	width: 100%;
	border: none;
	padding: 10px;
	background-color: #444;
	color: #fff;
}

.input1 {
	color: #fff;
	border: none;
	padding: 10px 20px;
	cursor: pointer;
}

/* List item styles */
.list-group-item {
	background-color: transparent;
	border: none;
	padding: 0;
}

/* Map marker and phone icon styles */
.list-group-item {
	background-color: transparent;
	border: none;
	/* Remove the border */
	padding: 0;
}

@media (min-width: 992px) {

	.container,
	.container-lg,
	.container-md,
	.container-sm {
		max-width: 100%;
	}
}

/* Add this CSS in your stylesheet or in a <style> element within the HTML document */
/* Default styles for larger screens */
.head3 {
	background-size: 99% 113%;

	background-image: url("<?php base_url(); ?>/assets/image/banner-3/unnamed.png");
}

.col {
	width: 20%;
	/* Each column takes up 20% of the container width */
	float: left;
	/* Float the columns to create a horizontal layout */
	padding: 10px;
	background-color: transparent;
}



.ban_sec {
	width: 100%;
}

.ban_img {
	width: 100%;
	position: relative;
	margin: 0 0 0 0px;
}



.ban_text {
	position: absolute;
	top: 50%;
	left: 3%;
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}

.ban_text strong {
	color: #fff;
	text-transform: uppercase;
}

.ban_text strong span {
	font: 400 "Montserrat", sans-serif;
	letter-spacing: 0px;
}

.ban_text p {
	font: 400 25px/30px "Montserrat", sans-serif;
	margin: -5px -5px 10px;
}

.ban_text a {
	display: inline-block;
	font: 800 19.39px/24px "Montserrat", sans-serif;

	border-radius: 26px;
	color: #fff;
	padding: 12px 28px;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	text-decoration: none;
}

.ban_text a:hover {
	background: #50af47;
}

/* @media (min-width: 1200px) and (max-width: 1399px) {
	.ban_text p {
		font-size: 21px;
	}
} */

/* @media (min-width: 992px) and (max-width: 1199px) {
	.ban_text p {
		font-size: 17px;
	}

	.ban_text strong {
		font-size: 50px;
		line-height: 60px;
	}

	.ban_text strong span {
		font-size: 37px;
	}

	.ban_text a {
		font-size: 16px;
		line-height: 19px;
	}
} */

/* @media only screen and (max-width: 991px) {
	.ban_text strong {
		font-size: 35px;
		line-height: 40px;
	}

	.ban_text strong span {
		font-size: 28px;
		line-height: 35px;
		letter-spacing: 2px;
	}

	.ban_text p {
		font-size: 14px;
		line-height: 20px;
	}

	.ban_text a {
		font-size: 13.39px;
		line-height: 15px;
	}
}

@media only screen and (max-width: 767px) {
	.ban_img img {
		min-height: 290px;
		object-fit: cover;
	}
}

@media only screen and (max-width: 575px) {
	.ban_text strong {
		padding: 10px;
		width: 100%;
		display: block;
	}
}

@media only screen and (max-width: 480px) {
	.ban_text strong span {
		font-size: 22px;
		line-height: 31px;
		letter-spacing: 1px;
	}

	.ban_text {
		left: 2%;
	}
} */

.font2 {
	font-size: 16px;
	color: #2b3f49;
	width: 500px;
	padding: 10px;
	margin-left: -20px;

}

.about-para {
	color: white;
	margin-top: 20px;
}

.head4 {
	font-size: 23px;
	margin-left: -10px;
	word-spacing: 3px;
	font-weight: 700;
	color: #243D71
}

.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl {
	width: 100%;
	padding-right: 0px;
	padding-left: 0px;
	margin-right: auto;
	margin-left: auto;
}

/* About page section  */

.about_bannner {
	height: 500px;
	width: 100%;
	position: relative;
}

.About_image1 {
	width: 100%;
	height: 600px;
	position: relative;
}

.banner {
	position: relative;
}

/* .banner img {
  width: 101%;
  height: auto;
} */

/* .text-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
} */

.text-overlay h1 {
	/* font-size: 27px; */
	color: WHITE;
}

.text-overlay p {
	font-size: 17px;
	height: max-content;
	width: 98%;
	margin-left: 40%;
}

.text-overlay p {
	font-size: 17px;
	height: max-content;
	width: 100%;
	margin-left: 2%;
	color: white;
}

.blog-head {
	text-align: center;
	font-size: 48px;
	font-weight: 700;
	letter-spacing: 0px;
	color: #243d71;
	opacity: 1;
}

textarea {
	width: 100%;
	height: 300px;
	/* Set the desired height */
	overflow-y: scroll;
	/* Enable vertical scrollbar */
	resize: none;
	/* Disable textarea resizing */
}

.con {
	padding: 13px;
}

.text-center-logo1 {
	padding: 5px 0px;
}

.font-2 {
	font-size: 25px;
	color: #2b3f49;
}

.read {
	margin-top: 2%;
	line-height: normal;
}

.fon-text {
	margin: auto;
	font-size: 15px;
	text-align: center;
	justify-content: normal;
	padding: 10px;
}

.fon-head {
	font-size: 20px;
	text-align: center;
	letter-spacing: 0px;
	color: #123463;
	opacity: 1;
	font-weight: 600;
	height: 40px;
}

.a-text {
	width: 400px;
	line-height: normal;
}

.choose {
	color: #243d71;
	text-align: center;
	margin: 0 0 0 0;
}

.text {
	text-align: center;
	margin: -12px 0px 55px 105%;
	width: 100%;
}




.custom {
	flex: 0 0 calc(25% - 20px);
	/* Adjust as needed */
	max-width: calc(25% - 20px);
	/* Adjust as needed */
	margin: 10px;
	/* Adjust as needed */
	text-align: center;
	height: 83px;
}

.mybtn {
	height: 34px;
	width: 142px;
	color: black;
	background-color: white;
	text-align: center;
	border: none;
	border-radius: 4px;
	margin-left: -1%;
}

.mybtn:hover {
	background-color: rgb(35, 61, 113);
	color: white;
	border: solid white 1px;
}

.container02 {
	padding: 3px 0 0 40px;
}

.mytop {
	margin-top: 10px;
}

.details {
	position: relative;
}

.detail:hover {
	position: relative;
	top: 100px;
	transition: 0.3s ease-in-out;
}

details summary {
	display: block;
	cursor: pointer;
	color: red;
}

details summary:focus {
	outline: none;
}

details[open] {
	display: block;
	padding-bottom: 25px;
	padding-top: 10px;
	animation: open 0.2s linear;
}

details[open] summary {
	position: absolute;
	bottom: 0;
	left: 0;
}

details #open {
	padding-left: 5px;
	text-align: middle;
}

details #open:after {
	display: inline-block;
	position: relative;
	top: -3px;
	padding-left: 8px;
	content: "/00bb";
	transform: rotate(90deg);
}

details[open] #open {
	display: none;
}

details #close {
	display: none;
}

details[open] #close {
	display: block;
}

::-webkit-details-marker {
	display: none;
}

@keyframes open {
	0% {
		opacity: 0;
		transform: translateY(-10px);
	}

	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

/* Add your custom styles here */

/* Style for the footer description */
/* .footer-description {
	font-size: 14px;
	color: #7b7b7b;
} */

/* Style for social icons */
.social-icons {
	display: flex;
	justify-content: space-evenly;
}

.social-btn {
	/* background-color: #243d71;  */
	/* changed by aishwarya */
	/* color: white;
	border: none;
	border-radius: 50%;
	margin-right: 8px;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 24px; */
}

/* Style for the subscribe form */
.subscribe-form {
	margin-top: 20px;
}

.input1 {
	border: 1px solid #243d71;
	border-radius: 20px;
	padding: 10px;
}

.submit-button {
	background-color: #243d71;
	color: white;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
	margin-top: 10px;
}

/* Style for the contact info */
.list-group-item {
	justify-content: center;
}

/* Additional responsive styles for smaller screens */
/* @media (max-width: 767px) {
	.foot-logo {
		width: 100%;
	}

	.social-btn {
		width: 25px;
		height: 25px;
		font-size: 16px;
	}

	.input1 {
		padding: 8px;
	}

	.submit-button {
		padding: 8px 16px;
	}
} */

.btn:not(:disabled):not(.disabled) {
	cursor: pointer;
	height: 54px;
}


.decoration {
	border-bottom: 3px solid orange;
}


.original-icon,
.new-icon {
	position: absolute;
	top: 0;
	left: 0;
	width: 100px;
	height: 100px;
	transition: opacity 0.3s ease-in-out;
}

.new-icon {
	opacity: 0;
}

.icon-container:hover .new-icon {
	opacity: 1;
}

.icon-container:hover .original-icon {
	opacity: 0;
}

/* @media only screen and (max-width: 375px) {
	.home2 {
		margin-left: 10px;
	}
} */

.ready {
	font-size: 15px;
}

.ready2 {
	font-size: 200px;
}

.about-banner-1 {
	height: 500px;
	width: 76%;
	margin: 0px 0px 0px -12px;
}

.about-img {
	position: relative;
	height: auto;
	width: 70%;
	margin: 0 0 0 -75px;
	color: #000;
}

.abt-text {
	right: 9%;
	position: relative;
	color: white;
	padding: 10px;
	top: -51%;
	text-align: justify;
}

.about-img2 {
	height: 522px;
	width: 56%;
}

.about-img2 {
	height: 522px;
	width: auto;
	margin: 0 0 0 -346px;
}

.about-grid {
	display: grid;
}

.about-banner_img_1 {
	display: flex;
}

.abt-text1 {
	color: white;
	font-weight: 800;
	font-size: 50px;
	margin: 0 0 0 -115px;
}

.ban_text {
	width: 30%;
}

.dropdown-hover-button {
	transition: 0.5s ease-in-out;
}

.carousel-control-next,
.carousel-control-prev

/*, .carousel-indicators */
	{
	filter: invert(100%);
}

.text-uppercase {
	color: #243d71;
	font-size: 25px;
	font-weight: 700;
	text-align: center;
}

a:hover {

	text-decoration: none;
}

.list-group-item p i {
	margin-right: 10px;
	color: #484e4f;
	/* Adjust as needed */
}

.footer-link {
	text-decoration: none;
	color: #212529;
	cursor: pointer;
}

.footer-link:hover {
	color: #243d71;
	font-weight: 500;
	transition: 0.3s ease-in-out;
}

.decoration-1 {
	font-size: 20px;
}

.banner-container3 {
	position: relative;
	width: 100%;
	max-width: 800px;
	margin: 0 0 0 0;
	padding: 0 0 0 0;
}

.mobile-container {
	max-width: 1200px;
	width: 100%;
	display: grid;

	gap: 2rem;
}

.btn-6 {
	padding: 10px;
	color: #39507f;
	background-color: #fff;
	border: none;
	border-radius: 25px;
	width: 30%;
	font-size: 21px;
	margin: 23px !important;
}

.let-get-started {
	background-color: #243D71;
	/* width: 80%; */
	padding: 30px;
	color: white;
	opacity: 0.9;
	margin: 60px 150px;
	text-align: center;
}

.home_headings {
	text-align: center;
	padding: 30px 0;
	font-size: 3rem;
	color: #fff;
}

.btn-6:hover {
	color: white;
	background-color: gray !important;
}

.container-colab {
	display: flex;
	justify-content: center;
}

.abt-img-1 {
	width: 800px;
	height: 591px;
	position: relative;
	margin: 0 0 0 -29%;
}

.abt-img-2 {
	width: 764px;
	height: 600px;
	position: relative;
	margin: 0 0 0 -187px;
}

.container-about {
	display: flex;
	padding: 57px 0 0 0;
}

/* .client-logo {
	width: 64%;
	height: auto;
	transition: all 0.7s ease;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
} */
.container-cards {
	padding-top: 24px;
}

/*.project {*/
/*	height: 420px;*/
/*}*/

.banner {
	position: relative;
	width: 100%;
	height: auto;
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.heading {
	padding-top: 30px;
}

/* Aishwarya Code start 26-12-2023 */
/* footer */
.footer-list {
	text-align: left;
	padding-left: 125px;
}

.subscribe-form {
	position: relative;
}

.subscribe-form .submit-button {
	position: absolute;
	margin: -38px 0 0px 55%;
	padding: 7px 20px;
}

.input1 {
	padding: 18px 10px;
}

.social-icons img {
	width: 75%;
}

.footer-description {
	font-size: 14px;
	color: #7b7b7b;
	text-align: left;
	padding: 20px;
}

/* About us */



/* .our-story p {
	margin: 1% 15%;
	text-align: justify;
	height: 300px;
	overflow-y: scroll;
	padding: 10px;
} */

/* width */
.our-story p::-webkit-scrollbar {
	width: 5px;
	padding: 3px;
}

/* Track */
::-webkit-scrollbar-track {
	box-shadow: inset 0 0 5px grey;
	border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
	background: red;
	border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
	background: #b30000;
}

button:focus {
	outline: none !important;
}

.our-story {
	text-align: justify;
	margin-top: 25px;
}

/* Aishwarya Code end 26-12-2023*/

.read-btn {
	margin: 12px 25px 0 2px;
}

.car-submit {
	width: 45% !important;
}

.overlay h2 {
	font-size: 20px !important;
	border-bottom: 2px solid white;
	margin-bottom: 100%;
	width: 220px;
	text-align: left;
}

.mobile-view {
	display: none !important;
}




.list-group-item {
	color: #000;
	font-weight: 500;
}

.sub-class {
	width: 300px !important;
}

.mega-menu-1 {
	width: 100%;
	text-align: center;
	/* line-height: ; */
}



.mega-menu-list {
	font-size: 16px;
}

.banner-back {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.banner-back-service-4,
.banner-back-service-9 {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.text-center-logo1:hover {
	transition: 0.6s ease-in-out;
	box-shadow: 0 0 80px rgb(255 255 255), 0 3px 6px rgba(0, 0, 0, 0.23);
	height: auto;
	padding: 5px 0px;
}

.h4-getstarted {
	font-size: 32px;
	margin-top: -47px;
}



.midc {
	margin: -10px -6px -9px -14px;
	width: 141px !important;
}

.reliance {
	margin: -45px 0 0 38px;
	width: 58% !important;
}

.about-banner {
	position: relative;
	width: 100%;
	height: 582px;
	background-image: url('//assets/image/abt-banner.png');
	background-size: 100% 90%;
	background-repeat: no-repeat;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px 0 0 0;
	box-sizing: border-box;
}

.bg-img-micrscope {
	position: relative
}

.child-bg-img {
	display: none !important;
}


.owl-stage-outer {
	height: 300px;
}

.owl-nav {
	text-align: center;
	font-size: 4rem;
	margin-top: -10px;
}

.banner-about-page {
	position: relative;
	width: 100%;
	height: 532px;
	/* Adjust the height of the banner */
	background-image: url('/assets/new-img/All-Website-Images/about-us/about-us-banner-desktop.webp');
	background-size: cover;
	background-position: center;
	color: white;
	padding: 30px;
	box-sizing: border-box;
}

.banner-about-mobile {
	position: relative;
	width: 100%;
	height: 532px;
	/* Adjust the height of the banner */
	background-image: url('/assets/new-img/All-Website-Images/about-us/about-us-banner-mobile.webp');
	background-size: cover;
	background-position: center;
	color: white;
	padding: 30px;
	box-sizing: border-box;
}

.about-banner {
	position: relative;
	width: 100%;
	height: 582px;
	background-image: url('/assets/new-img/All-Website-Images/about-us/About-Us-Section-website-01.webp');
	background-size: 100% 90%;
	background-repeat: no-repeat;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px 0 0 0;
	box-sizing: border-box;
}

.about-banner-2 {
	position: relative;
	width: 100%;
	height: 472px;
	background-image: url('/assets/new-img/All-Website-Images/about-us/About-Section-for-Mobile-01.webp');
	background-size: 100% 90%;
	background-repeat: no-repeat;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px 0 0 0;
	box-sizing: border-box;
}

.banner {
	background-image: url('/assets/new-img/All-Website-Images/home-page-whychooseus/Highway.webp');
}

.container-connect {
	position: relative;
	width: 75%;
	height: auto;
	background-image: url('/assets/new-img/All-Website-Images/start-project/CTAImageNew.webp');
	background-size: cover;
	background-position: center;
	color: white;
	border-radius: 7px;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
	height: 316px;
}

.connect-project {
	margin-top: 5%;
}

.banner-service-1 {
	position: relative;
	width: 100%;
	height: 500px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Engineering%20Survey-02.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-service-2 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Land-Acquisition-Banner-New.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-service-3 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Land-Record-new/Land-Record-&-Verification-Banner-copy.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-service-4 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Master-Planning-Banner-New.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-service-9 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Geospatial-IT-Banner-copy.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-back-service-5,
.banner-back-service-2 {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.banner-back-service-8 {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.banner-back-service-9 {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.banner-service-5 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/PPM-Web-banner.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-service-6 {
	position: relative;
	width: 100%;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Project-Clearance-Banner-003.webp');
	/* Replace with your image URL */
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
	height: 560px;
}

.banner-service-7 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Architecture-Web-BannerNew.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}


.banner-service-8 {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/Service-Page-images-for-both-side/Land-Valuation-Banner-New-copy.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}



.own-experience {
	display: flex;
	justify-content: center;
}

.drone {
	height: 72px;
	width: 109px;
}

.client-carousel {
	/*width: 45%;*/
	/*justify-content: center;*/
	/*margin: -3% 27%;*/
	/*height: 90px;*/
	/*padding:5% 0 13% 0 ;*/

	width: 45%;
	justify-content: center;
	margin: auto;
	/* border: 1px solid black; */
	height: 140px;


}

.owl-dots {
	display: none !important;
}



/* contact update start */

.banner-back-careers {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}

.banner-back-Advisory {
	background-color: #243D71;
	width: 427px;
	padding: 10px;
	color: white;
	opacity: 0.9;
	margin: 9% 0px 0px 5%;
}


.banner-advisory-mobile {
	position: relative;
	width: 100%;
	height: 544px;
	background-image: url('/assets/new-img/All-Website-Images/Land-Advisory/LandAdvisoryMobileBannernew.webp');
	/* background-size: cover; */
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
	background-repeat: no-repeat;
}

.email-1 {
	margin-left: 5px;
}

.email-2 {
	margin-left: 31px;
}

.email-3 {
	position: relative;
	left: 31px;
}

.other-service-icon-hp {
	height: auto;
	width: 40%;
}

.other-service-icon-dpr {
	height: auto;
	width: 40%;
}

.nav-detail p {
	text-align: left;
	margin-left: -18%;
	padding: 6px;
	width: 400px;
}

.nav-detail-head {
	margin-left: -20px;
}

.list-group-item-mail {
	margin: -9px 0;
}


.under-b {
	border-bottom: 0.2px solid #273d71;
	border-radius: 141px 0px/0px 0px;
	width: 343px;
	word-spacing: 3px;
}



.for-border {
	padding: 20px 0;
}

.for-mega-menu {
	padding: 0 0;
}

.service-para {
	line-height: normal;
	text-align: left;
	word-spacing: 1px;
}

.nav-read-more {
	padding: 10px;
	color: #fff;
	background-color: #273d71;
	border: none;
	border-radius: 35px;
	width: 45%;
	font-size: 18px;
	float: left;
	margin: 3px 30px;
}



.year-para {
	word-spacing: 1px;
}


.overlay1 {
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.7);
	z-index: 1;
}

.popup {
	display: none;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: #fff;
	padding: 20px;
	border-radius: 8px;
	z-index: 999;
	text-align: center;
	transition: 0.3s ease-in-out;
}

.popup h2 {
	color: #273D71;
	font-weight: 700;
	font-size: 28px;
}

.popup p {
	color: #666;
}



.pop-up-img {
	height: auto;
	width: 300px;
	border-radius: 10px;
	box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.pop-up-btn {
	background-color: #273D71;
	color: white;
	padding: 10px;
	margin: 15px;
	border-radius: 6px;
	cursor: pointer;
}

.pop-up-btn:hover {
	background: white;
	color: #273D71;
	border: 1px solid #273D71;
	transition: 0.3s ease-in-out;
}

.content h4 {
	font-size: 20px;
}



.banner-listing {
	position: relative;
	width: 100%;
	height: 600px;
	background-image: url('/assets/new-img/All-Website-Images/property-page-img/PropertiespageBannerWebsite%20copy.webp');
	background-size: cover;
	background-position: center;
	color: white;
	text-align: left;
	padding: 20px;
	box-sizing: border-box;
}

.banner-back-service-8 h1 {
	font-weight: 700;
}

.card-icon {
	margin: auto;
	/* border:1px solid black ; */
	padding: 20px;
	text-align: center;
}

.card-icon img {
	height: auto;
	width: 40%;
}

.card-icon p {
	color: #243D71;
}

.sub-title {
	font-weight: 700;
}


.card-icon h3 {
	font-weight: 700;
	color: #243d71;
}

.title-pro {
	padding: 20px;
	font-weight: 700;
	color: #243d71;
	text-align: center;
}

.Explore {
	background-color: #243D71;
	color: white;
	padding: 11px 30px;
	border-radius: 5px;
}

.pop-up-btns {

	margin: 35px auto;

}

.Dream_btn_container {
	margin: auto;
	text-align: center;
}

.button-row {
	padding: 10px;
	margin: 20px 25px;
	width: 175px;
	border: 1px solid transparent;
	border-radius: 5px;
	color: white;
	background-color: #243d71;

}

.button-row:hover {
	color: #243D71;
	background-color: white;
	border: 1px solid #273d71;
	transition: 0.3s ease-in-out;
}


.card-property {
	border: 1px solid transparent;
	margin: 30px auto;
	width: 95% !important;
	border-radius: 15px;
	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.btn-prop-card {
    padding: 7px 20%;
    margin: 20px 23%;
    border: 1px solid transparent;
    border-radius: 5px;
    color: white;
    background-color: #243d71;
}



.card-img-prop {
	height: auto;
	width: 100%;
	border-radius: 15px;
	padding: 10px;
}

.why-choose-us-container {
    margin: 5% auto;
    text-align: center;
    box-shadow: 0 3px 6px rgba(189, 189, 189, 0.24), 0 3px 6px rgba(189, 189, 189, 0.24);
    border-radius: 10px;
    -webkit-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    padding: 0;
    height: 302px;
}

.img-why-choose-us {
	height: auto;
	width: 30%;
	border-radius: 64%;
	border: 1px solid white;
	padding: 0px;
	background-color: white;
}

.card-why {
	padding: 10px;
}

.list-para-conatainer p {
	padding: 0 50px;
}

.icon-cards {
	border-radius: 50%;
	text-align: center;
	margin: 30px auto;
}

.icon-cards img {
	height: auto;
	width: 30%;
	border-radius: 50%;
	background-color: rgba(128, 128, 128, 0.116);
}

.container-icons button {
	text-align: center;
}

.list-btn {
	color: white;
	background-color: #243D71;
	border: none;
	padding: 10px;
	width: 10%;
	margin: 2% auto;
	border-radius: 5px;
}

.list-btn:hover {
	color: #243D71;
	border: 1px solid #273D71;
	background-color: white;
	transition: 0.3s ease-in-out;

}

.section-blogs {
	margin-top: -60px;
	padding: 35px;
}
.icon-cards p {
    margin: 10px auto;
    font-size: 17px;
    font-weight: 700;
    color: #273d71;
}

.advertisement-card {
    position: fixed;
    bottom: 20px;
    left: 1%;
    opacity: 0;
    transition: opacity 0.5s, left 0.5s ease-in-out;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 50%;
    background-color: ghostwhite;
    z-index: 10;
}

.show {
    /* left: 20px;  */
    opacity: 1; /* Show with fade animation */
}

.close-btn {
    position: absolute;
    top: 5px;
    right: 10px;
    cursor: pointer;
    font-size: 20px;
    color: #333;
    background-color: transparent;
    border: none;
    outline: none;
}

.close-btn:hover {
    color: #ff0000;
    border: none;
}

.content h2{
	font-size: 20px;
	text-align: center;
}

.content {
    margin: 20% 0;
}

.container-scroller{
	margin: 0 0;
}


.card-why h4{
	font-size: 1.3rem;
}

.active-header-link{
	
    background-color: #034EA1;
    color: white !important;
    word-spacing: 3px;
    border-radius: 3px;
}



.dropdown {
	position: relative;
	display: inline-block;
}

/* Styling for the dropdown button */
.dropdown-button {
    color: #273d71;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    background-color: white;
}

/* Styling for the dropdown content */
.dropdown-content {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	z-index: 1;
	
}

/* Styling for dropdown options */
.dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}

/* Styling for dropdown options on hover */
.dropdown-content a:hover {
	background-color: #f1f1f1;
}

/* Show the dropdown content when dropdown button is hovered */
.dropdown:hover .dropdown-content {
	display: block;
}

.my-properties-drop-btn {
border: none;
color: #273d71;
background-color: white;
padding: 9px;
}

.word-link{
	word-spacing: 3px;
}