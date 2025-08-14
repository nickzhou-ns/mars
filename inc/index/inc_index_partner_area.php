
<!-- partner-area -->
<div class="partner-area py-100" id="partner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                    <span class="site-title-tagline"><i class="far fa-passport"></i> Let's Talk</span>
                    <h2 class="site-title">Chat With The <span>Awesome</span> Expert</h2>
                </div>
            </div>
        </div>
        <?php
        // 定义合作伙伴图片数组
        $partner_images = [
            ['src' => 'resources/images/wechat.png', 'alt' => 'WeChat'],
            ['src' => 'resources/images/whatsapp.png', 'alt' => 'WhatsApp']
        ];
        ?>
        <div class="row g-4 justify-content-center wow fadeInUp" data-wow-delay=".25s">
            <?php foreach ($partner_images as $image): ?>
                <div class="col-6">
                    <div class="partner-img">
                        <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- partner-area end -->