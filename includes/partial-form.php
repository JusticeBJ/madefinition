<?php  $image = get_template_directory_uri().'/assets/images/wood.png'; ?>
<section class="form" style="background-image:url(<?php echo $image;?>)">

<div class="form__frame"> 
    <div class="container">  
   
        <div class="row">
            <div class="col-md-11 col-xl-8">
                <h3>Leave a Message</h3>
                <div class="form__content">
                    <div class="form__subfield required_field"> 
                        <label>Name:</label>
                        <input id="form__name" type="text" name="name" class="subfield-input">
                    </div>
                    <div class="form__subfield"> 
                        <label>Phone Number:</label>
                        <input id="form__phone" type="text" name="phone" class="subfield-input">
                    </div>
                    <div class="form__subfield required_field"> 
                        <label>Email:</label>
                        <input id="form__email" type="text" name="email" class="subfield-input">
                    </div>
                    <div class="form__subfield required_field"> 
                        <label>Name:</label>
                        <textarea id="form__message" name="message" class="subfield-input"></textarea>
                    </div>
                    <button class="form__btn">Send Message</button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>