<div class="banner">
    <img src="./assets/banners/contact_us.jpg" alt="Banner">
</div>
<div class="content-wrapper">
    <div class="row contact">
        <div class="col-sm-6 left">
            <a href="https://www.google.com/maps/place/629+Epifanio+de+los+Santos+Ave,+Cubao,+Quezon+City,+1111+Metro+Manila/@14.620851,121.0479843,17z/data=!3m1!4b1!4m5!3m4!1s0x3397b7c751278afd:0xa87dba2f4edd3817!8m2!3d14.620851!4d121.050173?hl=en" target="_blank">
                <img class="img-fluid" src="./assets/contact/map_contactus.jpg" alt="See More">
            </a>
        </div>
        <div class="col-sm-6">
            <form action="<?php echo base_url(); ?>sendEmail" method="post" accept-charset="utf-8">
                <h2>Get in Touch</h2>
                <input type="text" placeholder="Name" name="senderName"></input>
                <input type="email" placeholder="Email Address" name="senderEmail"></input>
                <input type="number" placeholder="Contact Number" name="senderNumber"></input>
                <textarea name="senderMessage" cols="30" rows="5" placeholder="Message"></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>