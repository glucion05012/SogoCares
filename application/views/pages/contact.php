<div class="banner">
    <img src="./assets/banners/contact_us.jpg" alt="Banner">
</div>
<div class="content-wrapper">
    <div class="row contact">
        <div class="col-sm-6 left">
            <img class="img-fluid" src="./assets/contact/map_contactus.jpg" alt="See More">
        </div>
        <div class="col-sm-6">
            <form action="<?php echo base_url(); ?>sendEmail" method="post" accept-charset="utf-8">
                <h2>Get in Touch</h2>
                <input type="text" placeholder="Name" name="senderName"></input>
                <input type="email" placeholder="Email Address" name="senderEmail"></input>
                <textarea name="senderMessage" cols="30" rows="5" placeholder="Message"></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>