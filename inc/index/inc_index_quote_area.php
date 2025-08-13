<?php
if (!isset($the_page)) {
    include '../common/inc_common_the_page.php';
} ?>
<!-- quote area -->
<div class="quote-area mb-100">
    <div class="quote-bg" style="background-image: url(resources/images/australia_scenic_landscapes_1920x1280.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ms-auto">
                <div class="quote-form">
                    <div class="quote-header">
                        <h4>Leave a Message</h4>
                        <p>Have questions about Australian immigration or education services? Feel free to leave us a message here. Our team will get back to you promptly to assist with your inquiries and provide professional guidance.
                        </p>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="far fa-user-tie"></i>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="far fa-pencil"></i>
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="far fa-passport"></i>
                                        <select class="select" name="service">
                                            <option value="">Choose Service</option>
                                            <option value="1">Student Visa</option>
                                            <option value="2">Tourist Visa</option>
                                            <option value="3">Commercial Visa</option>
                                            <option value="4">Residence Visa</option>
                                            <option value="5">Working Visa</option>
                                            <option value="6">Migrate Visa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-icon">
                                        <i class="far fa-comment-lines"></i>
                                        <textarea name="message" cols="30" rows="3" class="form-control"
                                            placeholder="Write Your Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button type="submit" class="theme-btn"><span
                                        class="far fa-paper-plane"></span> Request A Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quote area end -->