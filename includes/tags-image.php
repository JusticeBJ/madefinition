<section class="tags-image">
    <div class="container-fluid container-vw">
        <h2 class="f30b">Website Services</h2>
        <div class="row" >
            <div class="col-md-4">
                <div class="tags-image__tags">
                    <div class="tag tag--pink">Building Website</div>
                    <div class="tag tag--grey">Building Website</div>
                    <div class="tag tag--green">Building Website</div>
                    <div class="tag tag--black">Building Website</div>
                    <div class="tag tag--red">Building Website</div>
                </div> 
            </div>
            <div class="col-md-8">
                <figure class="tags-image__img">
                    <?php
                        $image = get_sub_field('image');
                        if( !empty($image) ){
                            $size = 'large';
                            $image = $image['sizes'][ $size ];
                        }
                        else{
                            $image= get_template_directory_uri().'/assets/images/Laptop.png';
                        }
                    ?>

                    <img src="<?php echo $image; ?>" alt="Laptop">
                </figure> 
            </div>
        </div>
    </div>
</section>