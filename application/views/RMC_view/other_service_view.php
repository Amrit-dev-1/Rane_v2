    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .owl-stage-outer {
            height: 100px !important;
        }
    </style>

    <div class="container">
        <h4 class="heading about_headings"> <span class="decoration">Oth</span>er Services</h4>
        <div class="row">
            <div class="text-center">
                <div class="owl-carousel owl-theme service-slider" id="slider-container">
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Top_land_acquisition_consultants_in_Mumbai">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services2/Group 35.png" alt="img1" class="other-service-icon">
                                    <div class="target">Land Acquisition</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Land_Record_Village_Map">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services/Group 126.png" alt="img1" class="other-service-icon">
                                    <div class="target">Land Record Verification & Modification</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Master_planning_in_city_survey">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services/Group 21.png" alt="img1" class="other-service-icon">
                                    <div class="target">Master Planning</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Construction_Project_management_company">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services/Group 23.png" alt="img1" class="other-service-icon">
                                    <div class="target">DPR & Feasibility Studies</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Environmental_and_crz_Clearance">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services2/Group 26.png" alt="img1" class="other-service-icon">
                                    <div class="target">Project Clearance</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Building_plan_approval">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services2/Group 29.png" alt="img1" class="other-service-icon project-clearance">
                                    <div class="target">Architecture</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Top_land_survey">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services/Group 123.png" alt="img1" class="other-service-icon">
                                    <div class="target">Engineering Survey</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                    <div class="item-service">
                        <div class="text-center">
                            <a href="<?php echo base_url(); ?>Service/Land_report_advisory">
                                <h4 class="slider-title-head">
                                    <img src="<?php echo base_url(); ?>assets/image/services2/Group 33.png" alt="img1" class="other-service-icon">
                                    <div class="target">Land & Building Valuation</div>
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>