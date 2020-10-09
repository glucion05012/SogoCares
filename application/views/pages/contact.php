<div class="banner">
    <img src="./assets/banners/contact_us.jpg" alt="Banner">
</div>
<div class="content-wrapper">
    <div class="row contact">
        <div class="col-sm-6 left">
            <img class="img-fluid" src="./assets/image_here.png" alt="See More">
            <h5>Company Address:<br>629 EDSA Cubao, Quezon City.<br>1111 Metro Manila</h5>
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