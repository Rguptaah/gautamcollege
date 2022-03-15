<?php require_once("temp/header.php") ?>
<style>
    .our-strength li {
        padding: 10px;
    }

    .our-strength li:hover {
        box-shadow: 0px 5px 10px #ff960070;
        border-radius: 15px;
        background-color: #fff;
        /* transition-delay: 2s; */
    }
</style>
<!-- ==============================================
    ** Inner Banner **
    =================================================== -->
<div class="inner-banner blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <h1>About Us</h1>
                    <p><span>Home</span>/<span>About</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==============================================
    ** About **
    =================================================== -->
<section class="about inner padding-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 left-block">
                <h2>Who we are</h2>
                <p><?php echo $full_name; ?>work with a mission to become the leading academic institution in the world of education. Training is becoming imperative for the aspiring teachers as well as for the teachers who are already working in the field of education. The courses carefully designed by <?php echo $full_name; ?> will not only equip you with the current methodologies and the latest skills but helps to bring in the creativity and innovation in your teaching which will shape the tender minds in a stimulating environment. </p>
                <p>The goal of college is to provide you with an insight into the modern teaching practices with the knowledge and capability so that you are confident enough to engage the internet generation learners in a positive manner. Moreover implementing the skills learned in the courses will improve your teaching abilities and career growth opportunities. </p>
            </div>
            <div class="col-md-5 about-right"> <img src="images/gce-about.jpg" class="img-responsive" alt="" style="border:5px solid #ff9600;border-top-right-radius:15px;border-bottom-left-radius:15px;"> </div>
        </div>
    </div>
</section>

<!-- ==============================================
    ** Why Choose **
    =================================================== -->
<section class="why-choose grey-bg padding-lg">
    <div class="container">
        <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
        <ul class="our-strength opt2">
            <li>
                <div class="icon"><span class="icon-certification-icon"> </span></div>
                <span class="counter">5</span>
                <div class="title">Certified Courses</div>
            </li>
            <li>
                <div class="icon"><span class="icon-student-icon"></span></div>
                <span class="counter">3000</span>
                <div class="title">Students Enrolled </div>
            </li>
            <li>
                <div class="icon"><span class="icon-book-icon"></span></div>
                <div class="couter-outer"><span class="counter">95</span><span>%</span></div>
                <div class="title">Passing to Universities</div>
            </li>
            <li>
                <div class="icon"><span class="icon-parents-icon"></span></div>
                <div class="couter-outer"><span class="counter">100</span><span>%</span></div>
                <div class="title">Satisfied Parents</div>
            </li>
        </ul>
    </div>
</section>


<!-- ==============================================
    **Testimonial**
    =================================================== -->
<section class="testimonial padding-lg">
    <div class="container">
        <div class="wrapper">
            <h2>Alumini Testimonials</h2>
            <ul class="testimonial-slide">
                <li>
                    <p><q>A beautiful and historic campus, classmates from many different cultures and backgrounds, lecturers with interesting insights and academic excellence, a focus on individual personal development, a team-based approach to assignments so essential in today’s time , all of these have truly been one of the most profound experiences of my life till date. It has given me the confidence to move ahead in my career.</q></p>
                    <span> By <span> Arun Singh </span></span>
                </li>
                <li>
                    <p><q>A beautiful and historic campus, classmates from many different cultures and backgrounds, lecturers with interesting insights and academic excellence, a focus on individual personal development, a team-based approach to assignments so essential in today’s time , all of these have truly been one of the most profound experiences of my life till date. It has given me the confidence to move ahead in my career.</q></p>
                    <span> By <span> Ramesh Sinha </span></span>
                </li>
                <li>
                    <p><q>Doing B.Ed provides an opportunity to learn in three different areas, which is essential for success. You learn from lecturers, you learn how to interact with people and the most important that you learn about yourself.</q></p>
                    <span> By <span> Vijay Singh </span></span>
                </li>
            </ul>
            <div id="bx-pager">
                <a data-slide-index="0" href="#"><img src="images/no_image.jpg" class="img-circle" alt="" width="50" /></a>
                <a data-slide-index="1" href="#"><img src="images/no_image.jpg" class="img-circle" alt="" width="50" /></a>
                <a data-slide-index="2" href="#"><img src="images/no_image.jpg" class="img-circle" alt="" width="50" /></a>
            </div>
        </div>
    </div>
</section>



<?php require_once("temp/footer.php") ?>