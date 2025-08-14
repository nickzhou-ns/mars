<?php
if (!isset($the_page)) {
    include '../common/inc_common_the_page.php';
} ?>
<!-- sidebar-popup -->
<div class="sidebar-popup offcanvas offcanvas-end" tabindex="-1" id="sidebarPopup">
    <div class="offcanvas-header">
        <a href="javascript:void(0);" class="sidebar-popup-logo">
            <img src="resources/images/Mars Migration Logo.png" alt="">

        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="far fa-xmark"></i>
        </button>
    </div>
    <div class="sidebar-popup-wrap offcanvas-body">
        <div class="sidebar-popup-content">
            <div class="sidebar-popup-about">
                <h4>About Us</h4>
                <p><?php echo $base_about; ?></p>
            </div>
            <div class="sidebar-popup-contact">
                <h4>Contact Info</h4>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h6>Email</h6>
                            <a href="mailto:<?php echo $base_email; ?>"><?php echo $base_email; ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="far fa-phone"></i>
                        </div>
                        <div class="content">
                            <h6>Phone</h6>
                            <a href="tel:<?php echo $base_phone; ?>"><?php echo $base_phone; ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="far fa-location-dot"></i>
                        </div>
                        <div class="content">
                            <h6>Address</h6>
                            <a href="javascript:void(0);"><?php echo $base_address; ?></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-popup-social">
                <h4>Follow Us</h4>
                <a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
                <a href="javascript:void(0);"><i class="fab fa-x-twitter"></i></a>
                <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0);"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-popup end -->