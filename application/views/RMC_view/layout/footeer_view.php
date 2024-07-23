<!-- Floating Icon Section -->
<div class="floating-icon" id="floatingIcon">
    <a href="<?php echo base_url() ?>Home" class="icon-item">
        <i class="fas fa-home"></i>
    </a>
    <a href="mailto:ranemanagementconsultant@gmail.com" class="icon-item">
        <i class="fas fa-envelope"></i>
    </a>
    <a href="tel:9820536562" class="icon-item">
        <i class="fas fa-phone"></i>
    </a>
</div>

<!-- WhatsApp Section -->
<a href="https://api.whatsapp.com/send?phone=9820536562&text=Rane Management." class="float-rane" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Coming Soon Modal -->
<div class="modal fade" id="comingSoonModal" tabindex="-1" role="dialog" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comingSoonModalLabel">Coming Soon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Stay tuned for updates!</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Contact us</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>Mail_demo" method="post">
                    <!-- New Form Fields -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" required>
                    </div>
                    <div class="form-group">
                        <label for="selected_service">Select Service:</label>
                        <select id="selected_service" class="form-control" name="selected_service" required>
                            <option value="0">Select Service</option>
                            <option value="Land Acquisition">Land Acquisition</option>
                            <option value="Land Record Verification & Modification">Land Record Verification & Modification</option>
                            <option value="Master Planning">Master Planning</option>
                            <option value="Geospatial & IT Solutions">Geospatial & IT Solutions</option>
                            <option value="Project Planning & Management">Project Planning & Management</option>
                            <option value="Project Clearance">Project Clearance</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Land & Building Valuations">Land & Building Valuations</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact No:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Message:</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your message" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="service-form" value="Submit Service Form">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="container05">
    <footer class="text-white text-lg-start bg1">
        <div class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <a href="<?php echo base_url(); ?>Home">
                        <img src="<?php echo base_url(); ?>assets/new-img/Rane-Logo-WebsiteTopHead-01.png" class="foot-logo" alt="Company Logo">
                    </a>
                    <p class="footer-description">
                        The Most Reliable & Experienced Constructors For Your Next Project
                    </p>
                    <div class="subscribe-form mt-4">
                        <input type="text" id="formControlLg" class="form-control input1" placeholder="Enter your email">
                        <input type="submit" value="Subscribe" class="car-submit input1 submit-button">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Useful Links</h5>
                    <ul class="list-group footer-list">
                        <li class="list-group-item">
                            <p><i class="fa fa-chevron-right"></i> <a href="<?php echo base_url(); ?>About_us" class="footer-link">About Us</a></p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa fa-chevron-right"></i> <a href="<?php echo base_url(); ?>Land_advisory_services" class="footer-link">Land-Advisory</a></p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa fa-chevron-right"></i> <a href="<?php echo base_url(); ?>Careers_at_Rane_management_consultant" class="footer-link">Careers</a></p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa fa-chevron-right"></i> <a href="<?php echo base_url(); ?>Blog" class="footer-link">Blog</a></p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa fa-chevron-right"></i> <a href="<?php echo base_url(); ?>Contact_us" class="footer-link">Contact Us</a></p>
                        </li>
                    </ul>
                </div>
                <div class="for-desktop col-lg-4 col-md-12 col-sm-12">
                    <h5 class="text-uppercase mb-4">Contact Info</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Shubhangi Niwas, Row House No. C - 17,</p>
                            <p style="padding-left: 22px;">Sector - 4, Airoli, Navi Mumbai - 400708.</p>
                        </li>
                        <li class="list-group-item">
                            <p><a href="tel:8104280569"><i class="fa fa-phone" aria-hidden="true"></i> Mob. (+91) 8104280569/9820536562</a></p>
                        </li>
                        <li class="list-group-item-mail">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:rmcpl_ltd@yahoo.com" class="email-1"> rmcpl_ltd@yahoo.com</a></p>
                        </li>
                        <li class="list-group-item-mail">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:ranemanagementconsultant@gmail.com" class="email-1"> ranemanagementconsultant@gmail.com</a></p>
                        </li>
                        <li class="list-group-item">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Working Hours: 09:00 - 18:00 Mon - Sat</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Lazy Load Images Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var images = document.querySelectorAll('img');
        images.forEach(function(img) {
            img.setAttribute('loading', 'lazy');
        });
    });
</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/GSDevTools.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/MotionPathPlugin.min.js"></script>

<!-- Include jQuery first -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Include Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Include AOS Animation JavaScript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- Include MDB JavaScript -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
<!-- Include Custom JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>

</body>

</html>