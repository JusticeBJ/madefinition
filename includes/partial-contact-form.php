<?php  $image = get_template_directory_uri().'/assets/images/wood.png'; ?>
<section class="contact-form" style="background-image:url(<?php echo $image;?>)">

<div class="contact-form__frame"> 
    <div class="container-fluid gutter8">  
        <div class="row">
            <div class="col-md-11 col-xl-8">
                <h3>Leave a Message</h3>
                <div class="contact-form__content">
                    <?php echo do_shortcode('[wpforms id="331" title="false" description="false"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>