<?php  $image = get_template_directory_uri().'/assets/images/services-bg.jpg'; ?>
<section class="services" style="background-image:url(<?php echo $image;?>)">

<?php 
  $print= get_field('services');
  if($print){ ?>
    <div class="services__content">
        <div class="container-fluid gutter8">
            <h1 class="heading-font">Services</h1>
            <p>We offer the following services: </p> 
            <div class="row services__row">
                <div class="col-md-4 services__column"> 
                    <div class="services__box">
                        <h4>Hardware Maintenance <br>& Repair</h4> 
                        <div class="services__image img-full">
                            <?php
                            $image = $print['image_h'];
                            $imageID = $image['id'];
                            if( !empty($image) ){
                                $size= 'service-box';
                                $image = wp_get_attachment_image_url( $imageID, $size );
                            }
                            else{
                                $image = get_template_directory_uri().'/assets/images/hardware.png';
                            }
                            ?>
                            <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
                        </div>
                        <ul>
                            <li>Computer Maintenance</li>
                            <li>Spares Replacement <br>(e.g. Screen, Keyboard, Battery...)</li>
                            <li>Computer Repair</li>
                        </ul>
                        <div class="btn-general">
                            <a href="<?php echo $print['link_hardware']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 services__column">
                    <div class="services__box">
                        <h4>Software Maintenance<br>& Assistance</h4> 
                        <div class="services__image img-full">
                            <?php
                            $image = $print['image_s'];
                            $imageID = $image['id'];
                            if( !empty($image) ){
                                $size= 'service-box';
                                $image = wp_get_attachment_image_url( $imageID, $size );
                            }
                            else{
                                $image = get_template_directory_uri().'/assets/images/software.png';
                            }
                            ?>
                            <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
                        </div>
                        <ul>
                            <li>Install Operating System <br>(Genuine & Activated)</li>
                            <li>Fasten a Slow or Freezing Computer</li>
                            <li>Virus and Malware Removal</li>
                        </ul>
                        <div class="btn-general">
                            <a href="<?php echo $print['link_software']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 services__column">
                    <div class="services__box">
                        <h4>Software Development <br>& Programming</h4>
                        <div class="services__image img-full">
                            <?php
                            $image = $print['image_p'];
                            $imageID = $image['id'];
                            if( !empty($image) ){
                                $size= 'service-box';
                                $image = wp_get_attachment_image_url( $imageID, $size );
                            }
                            else{
                                $image = get_template_directory_uri().'/assets/images/programming.png';
                            }
                            ?>
                            <img src="<?php echo $image;?>" alt="<?php echo $print['title']; ?>">
                        </div>
                        <ul>
                        <li>Website</li>
                        <li>Web Application (System)</li>
                        <li>Desktop Application</li>
                        <li>Mobile Application</li>
                        </ul>
                        <div class="btn-general">
                            <a href="<?php echo $print['link_programming']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
  } ?>
</section>