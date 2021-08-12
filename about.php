<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Maruthi PU College</title>
    <?php require("./header.php") ?>
    <style>
        #about
        {
            color: #3E64FF;
        }

        .carousel-sec {
            width: 100%;
            max-width: 1100px;
            margin: auto;
        }

        .carousel-sec .carousel {
            width: 100%;
            max-width: 500px;
        }

        .about-sec, .carousel-sec {
            padding: 40px 0 0 0;
        }

        .about-sec .icon-boxes h3, .carousel-sec h3{
        font-size: 28px;
        font-weight: 700;
        color: #3E64FF;
        margin-bottom: 15px;
        }

        .about-sec .icon-box {
        margin-top: 40px;
        }

        .about-sec .icon-box .icon {
        float: left;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 64px;
        height: 64px;
        border: 2px solid #3E64FF;
        border-radius: 50px;
        transition: 0.5s;
        }

        .about-sec .icon-box .icon i {
        color: #3E64FF;
        font-size: 32px;
        }

        .about-sec .icon-box:hover .icon {
        background: #3E64FF;
        border-color: #3E64FF;
        }

        .about-sec .icon-box:hover .icon i {
        color: #fff;
        }

        .about-sec .icon-box .title {
        margin-left: 85px;
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 18px;
        }

        .about-sec .icon-box .title a {
        color: #343a40;
        transition: 0.3s;
        }

        .about-sec .icon-box .title a:hover {
        color: #3E64FF;
        }

        .about-sec .icon-box .description,  .carousel-sec .col p {
        margin-left: 85px;
        line-height: 24px;
        font-size: 14px;
        }

        .about-sec .video-box {
        background: url("./assets/img/about-sec.jpg") center center no-repeat;
        background-size: contain;
        min-height: 300px;
        }

        .about-sec .play-btn {
        width: 94px;
        height: 94px;
        background: radial-gradient(#3f43fd 50%, rgba(63, 67, 253, 0.4) 52%);
        border-radius: 50%;
        display: block;
        position: absolute;
        left: calc(50% - 47px);
        top: calc(50% - 47px);
        overflow: hidden;
        }

        .about-sec .play-btn::after {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 100;
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        }

        .about-sec .play-btn::before {
        content: '';
        position: absolute;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate-btn 2s;
        animation: pulsate-btn 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid rgba(63, 67, 253, 0.7);
        top: -15%;
        left: -15%;
        background: rgba(198, 16, 0, 0);
        }

        .about-sec .play-btn:hover::after {
        border-left: 15px solid #3f43fd;
        transform: scale(20);
        }

        .about-sec .play-btn:hover::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 200;
        -webkit-animation: none;
        animation: none;
        border-radius: 0;
        }

        @-webkit-keyframes pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }
        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
        }

        @keyframes pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }
        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
        }

        .why-us .why-us-content {
        padding: 60px 100px 0 100px;
        }

        .why-us .why-us-content h3 {
        font-weight: 400;
        font-size: 34px;
        color: #3E64FF;
        }

        .why-us .why-us-content h4 {
        font-size: 20px;
        font-weight: 700;
        margin-top: 5px;
        }

        .why-us .why-us-content p {
        font-size: 15px;
        color: #848484;
        }

        .why-us .img {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .why-us .accordion-list {
        padding: 0 100px 60px 100px;
        }

        .why-us .accordion-list ul {
        padding: 0;
        list-style: none;
        }

        .why-us .accordion-list li + li {
        margin-top: 15px;
        }

        .why-us .accordion-list li {
        padding: 20px;
        background: #fff;
        border-radius: 4px;
        }

        .why-us .accordion-list a {
        display: block;
        position: relative;
        font-family: "Poppins", sans-serif;
        font-size: 16px;
        line-height: 24px;
        font-weight: 500;
        padding-right: 30px;
        outline: none;
        cursor: pointer;
        }

        .why-us .accordion-list span {
        color: #3E64FF;
        font-weight: 600;
        font-size: 18px;
        padding-right: 10px;
        }

        .why-us .accordion-list i {
        font-size: 24px;
        position: absolute;
        right: 0;
        top: 0;
        }

        .why-us .accordion-list p {
        margin-bottom: 0;
        padding: 10px 0 0 0;
        }

        .why-us .accordion-list .icon-show {
        display: none;
        }

        .why-us .accordion-list a.collapsed {
        color: #343a40;
        }

        .why-us .accordion-list a.collapsed:hover {
        color: #3f43fd;
        }

        .why-us .accordion-list a.collapsed .icon-show {
        display: inline-block;
        }

        .why-us .accordion-list a.collapsed .icon-close {
        display: none;
        }

        @media (max-width: 1024px) {
        .why-us .why-us-content, .why-us .accordion-list {
            padding-left: 0;
            padding-right: 0;
        }
        }

        @media (max-width: 992px) {
        .why-us .img {
            min-height: 400px;
        }
        .why-us .why-us-content {
            padding-top: 30px;
        }
        .why-us .accordion-list {
            padding-bottom: 30px;
        }
        }

        @media (max-width: 575px) {
        .why-us .img {
            min-height: 300px;
        }
        }

    </style>
</head>
<body>
    <?php @include("./navbar.php"); ?>

    <section id="hero" style="background: url('./assets/img/about-bg.jpg') bottom center;" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>About Us</h1>
            <h3 style="color: #fff; font-size:20px; max-width:650px; margin-top:10px;">Sri Maruthi PU College Hoskote is one of the Leading <br> Pre-University colleges in Hoskote offering Premium Education</h3>
            <a href="courses.html" class="btn-get-started">Contact Us</a>
        </div>
    </section>

    <main id="main">
        <section id="about-sec" class="about-sec">
                <div class="container-fluid p-5">

                    <div class="row">
                        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                        </div>

                        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                            <h3>About OUR College</h3>
                            <p>Among the finest Colleges in the city, Sri Maruthi Pu College in Hoskote, Bangalore is known for offering excellent patient care. The clinic is located centrally in Hoskote, a prominent locality in the city. There is no dearth of public modes of transport to reach the clinic from all major areas of the city.</p>

                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-award"></i></div>
                            <h4 class="title"><a href="">Excellence</a></h4>
                            <p class="description">The Campus is a World in itself, come, Explore and march with us to sculpt your future</p>
                            </div>

                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-briefcase"></i></div>
                            <h4 class="title"><a href="">Admission</a></h4>
                            <p class="description">We have a strong Alumni and industry academic resources for placements</p>
                            </div>

                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-book"></i></div>
                            <h4 class="title"><a href="">Academics</a></h4>
                            <p class="description">We are pround to be associated with IEEE, having started a student chapter</p>
                            </div>

                        </div>
                    </div>

                </div>
        </section>

        <section class="carousel-sec">
            <div class="container-fluid">
                <div class="section-title" data-aos="fade-left">
                    <h2>Campus</h2>
                    <p>OUR Campus</p>
                </div>
                <div class="row ">
                    <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-right">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="./assets/img/course-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="./assets/img/course-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="./assets/img/course-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos="fade-left">
                        <h3>College Infrastructure</h3>
                        <p>Among the finest Colleges in the city, Sri Maruthi Pu College in Hoskote, Bangalore is known for offering excellent patient care. The clinic is located centrally in Hoskote, a prominent locality in the city. There is no dearth of public modes of transport to reach the clinic from all major areas of the city. <br> <br>
                            Sri Maruthi Pu College in Hoskote, Bangalore has a well-equipped clinic with all the modern equipment. The clinic has separate waiting and consultation areas which allow enough space for patients to wait conveniently at the clinic. Being a specialized Colleges, the doctor offers a number of medical services.
                        </p>
                    </div>
                </div>
            </div>
        </section>

            <section id="why-us" class="why-us">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="why-us-content">
                        <div class="section-title" data-aos="fade-left">
                        <h2>About Us</h2>
                        <p style="font-size: 36px; color:#343a40;">Why Choose Us</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        </div>

                        <div class="accordion-list" data-aos="fade-right">
                        <ul>
                            <li style="background-color: aliceblue;">
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Is there any coaching classes for KCET, NEET, JEE? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                            </li>

                            <li style="background-color: aliceblue;">
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Does the college provides vehicle facility? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                            </li>

                            <li style="background-color: aliceblue;">
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Does the college has good lecturers? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                            </li>

                        </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/about.jpg");' data-aos="fade-left">&nbsp;</div>
                    </div>

                </div>
            </section>

                <section id="contact" class="contact">
                    <div class="container">
                        <div class="section-title" data-aos="fade-left">
                        <h2>Campus</h2>
                        <p>Visit OUR Campus</p>
                        </div>
                    </div>

                    <div style="width: 100%; max-width:1100px; margin:auto;" data-aos="fade-right">
                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                    </div>
                </section>   
    </main>

    <?php
    include("footer.php");
    include("libs.php"); ?>

</body>
</html>