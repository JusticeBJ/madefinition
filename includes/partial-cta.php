<?php
$image1 =  get_field('cta_magazine_image', 'option');
$size = 'cta-magazine';
$thumb1 = $image1['sizes'][ $size ];

$image2 =  get_field('cta_image_person', 'option');
$size = 'transparant';
$thumb2 = $image2['sizes'][ $size ];
?> 
<section class="cta">
    <div class="container">
        <div class="cta__content">
            <div class="row">
                <div class="col-md-5 cta__left">
                    <?php /* <img src="<?php echo $thumb1; ?>"> */ ?>
                    <a href="<?php echo get_field('cta_link_url', 'option'); ?>"><?php echo get_field('cta_link_text', 'option'); ?></a> <i class="fas fa-long-arrow-right"></i>
                </div>
                <div class="col-md-2 cta__right">
                    <div class="cta__img">
                        <img src="<?php echo $thumb2; ?>">
                    </div>
                </div>
                <div class="col-md-5 cta__contacts">
                    <div class="paragraph"><?php echo get_field('cta_person_title', 'option'); ?></div>
                    <i class="fas fa-phone fa-rotate-90"></i><a href="tel:<?php echo get_field('cta_phone', 'option'); ?>"><?php echo get_field('cta_phone', 'option'); ?></a> 
                    <span class="cta__separator">of</span>
                    <i class="fas fa-envelope"></i> <a href="mailto:<?php echo get_field('cta_email', 'option'); ?>"><?php echo get_field('cta_email', 'option'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>