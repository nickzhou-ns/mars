<?php
if (!isset($the_page)) {
    include '../common/inc_common_the_page.php';
}
?>
<!-- process area -->
<div class="process-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                    <span class="site-title-tagline"><i class="far fa-passport"></i> How It Works</span>
                    <h2 class="site-title">Easy step to get your visa</h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay=".25s">
            <?php
            // Define process steps array
            $process_steps = array(
                array(
                    'count' => '01',
                    'icon_path' => 'assets/img/icon/visa-2.svg',
                    'title' => 'Choose Your Visa Type',
                    'description' => 'Explore options like student or skilled migration to pick the visa that fits your goals.',
                    'has_mt_class' => false
                ),
                array(
                    'count' => '02',
                    'icon_path' => 'assets/img/icon/agent.svg',
                    'title' => 'Meet With Our Agent',
                    'description' => 'Connect with our expert to discuss your needs and map out a clear application roadmap.',
                    'has_mt_class' => true
                ),
                array(
                    'count' => '03',
                    'icon_path' => 'assets/img/icon/document.svg',
                    'title' => 'Submit Your Documents',
                    'description' => 'Gather and share required papers; we’ll review to ensure they meet official standards.',
                    'has_mt_class' => false
                ),
                array(
                    'count' => '04',
                    'icon_path' => 'assets/img/icon/visa-3.svg',
                    'title' => 'Get Your Dream Visa',
                    'description' => 'Wait for approval—once granted, celebrate your visa and start your new journey!',
                    'has_mt_class' => true
                )
            );
            
            // Loop through process steps
            foreach ($process_steps as $step) {
                $mt_class = $step['has_mt_class'] ? ' mt-lg-5' : '';
                ?>
                <div class="col-md-6 col-lg-3">
                    <div class="process-item<?php echo $mt_class; ?>">
                        <span class="count"><?php echo $step['count']; ?></span>
                        <div class="process-icon">
                            <img src="<?php echo $step['icon_path']; ?>" alt="<?php echo $step['title']; ?>">
                        </div>
                        <div class="process-content">
                            <h4><?php echo $step['title']; ?></h4>
                            <p><?php echo $step['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- process area end -->