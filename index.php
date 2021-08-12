<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Maruthi PU College</title>
    <?php require("./header.php") ?>
    <style>
        #home 
        {
            color: #3E64FF;
        }
    </style>
</head>
<body>
    <?php 
        include("./navbar.php");
    ?>

    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <span>Sri Maruthi PU College</span>
            <h1>Moulding Better Tomorrow<br>through Education & Excellence</h1>
            <h2>Empowering students to create solutions for tomorrow's challenges</h2>
            <a href="courses.html" class="btn-get-started">Contact Us</a>
        </div>
    </section>

    <main id="main">
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="./assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 content">
              <h3 style="color:#3E64FF;">OUR MISSION</h3>
              <p class="fst-italic">
                To provide an effective and caring academic environment that nurtures original thinking and creates young, confident
                individuals with a sense of responsibility towards society.
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i>Qualified across various Colleges</li>
                <li><i class="bi bi-check-circle"></i>Delivering the Quality Education</li>
                <li><i class="bi bi-check-circle"></i>Best Faculties</li>
              </ul>
              <p>
                The Mission Statement was not a deliberate coinage but was the very expression of the core purpose of establishing the organization
                – that of serving the society, through an army of young, confident individuals with a sense of responsibility towards
                society.
              </p>

            </div>
          </div>

        </div>
      </section>

      <section id="counts" class="counts section-bg">
        <div class="container">
          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Achievements</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Years</p>
            </div>

          </div>

        </div>
      </section>

      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Choose US?</h3>
                <p>
                  Our College recognizes that human talent flourishes most readily in facilities where the most effective tools
                  exist. We believe that it is the teacher that makes the difference, not just the classroom. We pride ourselves with a
                  perfect blend of curriculum, co-curricular and pro-academic activities. Our teachers are motivated and our students
                  inspired. At Mahesh it is not just about mentoring but motivating.
                </p>
                <div class="text-center">
                  <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-award"></i>
                      <h4>Excellence</h4>
                      <p>The Campus is a World in itself, come, Explore and march with us to sculpt your future</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-briefcase"></i>
                      <h4>Admission</h4>
                      <p>We have a strong Alumni and industry academic resources for placements</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-book"></i>
                      <h4>Academics</h4>
                      <p>We are pround to be associated with IEEE, having started a student chapter</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section>

      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Courses</h2>
            <p>Courses Offered</p>
          </div>

            <!-- <div class="container px-4">
              <div class="row gx-5">
                <div class="col">
                    <div class="course-item p-5">
                      <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                      <div class="course-content">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web Development</h4>
                            <p class="price">$169</p>
                          </div>

                        <h3><a href="./courses">Website Design</a></h3>
                        <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                              <span>Antonio</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                              <i class="bx bx-user"></i>&nbsp;50
                              &nbsp;&nbsp;
                              <i class="bx bx-heart"></i>&nbsp;65
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="course-item p-5">
                      <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                      <div class="course-content">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web Development</h4>
                            <p class="price">$169</p>
                          </div>

                        <h3><a href="./courses">Website Design</a></h3>
                        <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                              <span>Antonio</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                              <i class="bx bx-user"></i>&nbsp;50
                              &nbsp;&nbsp;
                              <i class="bx bx-heart"></i>&nbsp;65
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div> -->
          <div class="row"  data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>PCMCs & PCMB</h4>
                  </div>

                  <h3><a href="./courses">Science</a></h3>
                  <p>
                    The curriculum structure is designed to offer intensive stress-free preparation to any of the combinations listed below so that students excel in both the Pre-University (PU) Board Exam.
                  </p>
                  <!-- <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Antonio</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;50
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                  </div> -->
                </div>
              </div>
            </div> 

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="course-item">
                <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>EBACS</h4>
                  </div>

                  <h3><a href="./courses">Commerce</a></h3>
                  <p>The college offers a strong foundation, in Commerce in Pre University College, for students aspiring to study professional courses and/or pursue bachelor’s 
                    degree programs in Commerce and business management.</p>
                  <!-- <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                      <span>Lana</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;35
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;42
                    </div>
                  </div> -->
                </div>
              </div>
            </div> 

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Degree & B.com</h4>
                  </div>

                  <h3><a href="./courses">Degree & B.com</a></h3>
                  <p>Commerce graduates can look forward to exciting careers as Investment Bankers, Financial Controllers, Analysts, International Trade Advisors and Product Leaders.</p>
                  <!-- <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                      <span>Brandon</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bx bx-user"></i>&nbsp;20
                      &nbsp;&nbsp;
                      <i class="bx bx-heart"></i>&nbsp;85
                    </div>
                  </div> -->
                </div>
              </div>
            </div> 

          </div>

        </div>
      </section>

      
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
            <h2>Faculty</h2>
            <p>Our Faculties</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Naveen Gowda</h4>
                <span>Science Department</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Suchitra</h4>
                <span>Commerce Department</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Lakshmipathi</h4>
                <span>B.com Department</span>
              </div>
            </div>
          </div>

        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Naveen Gowda</h4>
                <span>Science Department</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Suchitra</h4>
                <span>Commerce Department</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Prof. Lakshmipathi</h4>
                <span>B.com Department</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

        <section id="testimonials" class="testimonials">
            <div class="container position-relative">

              <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                    </div>
                  </div>

                </div>
                <div class="swiper-pagination"></div>
              </div>

            </div>
        </section>


  </main>

  <?php include("./footer.php") ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include("libs.php"); ?>

</body>
</html>