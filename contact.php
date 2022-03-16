<?php require_once("temp/header.php") ?>
<!-- ==============================================
    ** Inner Banner **
    =================================================== -->
<div class="inner-banner blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>Contact</h1>
                    <p><span>Home</span>/<span>Contact</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==============================================
    ** Contact Us **
    =================================================== -->
<section class="form-wrapper padding-lg">
    <div class="container">
        <form name="contact-form" id="ContactForm">
            <div class="row input-row">
                <div class="col-sm-6">
                    <input name="first_name" type="text" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input name="last_name" type="text" placeholder="Last Name">
                </div>
            </div>
            <div class="row input-row">
                <div class="col-sm-6">
                    <input name="subject" type="text" placeholder="Subject">
                </div>
                <div class="col-sm-6">
                    <input name="phone" type="text" placeholder="Phone Number">
                </div>
            </div>
            <div class="row input-row">
                <div class="col-sm-6">
                    <input name="email" type="text" placeholder="Your Email">
                </div>
                <div class="col-sm-6">
                    <input name="message" type="text" placeholder="Your Message">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn" id="update_btn">Submit </button>
                    <div class="msg"></div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- ==============================================
    ** Google Map **
    =================================================== -->
<section class="google-map">
    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.467625084701!2d84.81706461447858!3d25.821132012441176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992b14005b155d1%3A0x13f967516465c2a!2sGautam%20College%20Of%20Education!5e0!3m2!1sen!2sin!4v1647406048217!5m2!1sen!2sin" style="border:0;"></iframe></div>
    <div class="container">
        <div class="contact-detail">
            <div class="address">
                <div class="inner">
                    <h3><?php echo $full_name; ?></h3>
                    <address><?php echo $inst_address1; ?><br><?php echo $inst_address2; ?></address>
                </div>
                <div class="inner">
                    <h3><a href="tel:<?php echo $inst_contact; ?>"><?php echo $inst_contact; ?></a></h3>
                </div>
                <div class="inner"> <a href="mailto:<?php echo $inst_email; ?>"><?php echo $inst_email; ?></a> </div>
            </div>
            <div class="contact-bottom">
                <ul class="follow-us clearfix">
                    <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
    ** Have Questions? **
    =================================================== -->
<section class="our-impotance have-question padding-lg">
    <div class="container">
        <h2>Still have questions?</h2>
        <ul class="row">
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <img src="images/help-center-ico.jpg" alt="Malleable Study Time">
                    <h3>Help Center</h3>
                    <p>We are always available to help you for any type of query regarding college.</p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <img src="images/faq-ico.jpg" alt="Placement Assistance">
                    <h3>Faq’s</h3>
                    <p><?php echo $full_name; ?> has access to all of Gautam Group’s placement resources and alumni network, through which thousands of job opportunities are generated.</p>
                </div>
            </li>
            <li class="col-sm-4 equal-hight">
                <div class="inner"> <img src="images/document-ico.jpg" alt="Easy To Access">
                    <h3>Technical Documents</h3>
                    <p>There is easy accessibility to online help in terms of online teachers and online forums. Teachers can be contacted with the help of video chats and e-mails.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<?php require_once("temp/footer.php") ?>