@extends('app')

@section('content')

<!-- ======= Hero Section ======= --><br><br><br>
<section id="hero" style="background-color: #C70A7D;">
    <div class="hero-container" data-aos="fade-in" >
      <h1 style="color:white">Welcome to Invent45</h1>
      <h2 style="color:white;">Online Inventory Control and Sales Manegement system for your business.</h2>

      
     
      <img src="assets/img/slide4.png"  style="height:400px;"alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>

    
  </section><!-- End Hero Section -->

  <main id="main">
    <div class="row justify-content-center">
      <div class="col-md-9 col-lg-6"><br><br>
        <form class="d-flex" method="POST" action="#">
          <input type="text" class="form-control " placeholder="Find Businesses Online" name="email">
          <button type="submit" class="btn btn-default"style="background-color:#C70A7D;color:white;border-radius:5px;"><i class="bi bi-location-arrow"></i>Search</button>
        </form>
      </div>
    </div>
    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Save yourself time and money </h2>
          <p class="separator">Save yourself the time and money in developing a custom management system for your company<br>
            as <span style="color:#C70A7D"><strong>Invent45</strong></span> helps you automate all of your business processs, from sales management, inventory control down to employee management</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="assets/img/svg/cloud.svg" alt="img">
              <h4>Sales Manager</h4>
              <p>Sales Management System</p>
              <a href="#">Sign Up Now</a>
              

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="assets/img/svg/planet.svg" alt="img">
              <h4>Employee Manager</h4>
              <p>Employee Management System</p>
              <a href="#">Sign Up Now</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="assets/img/svg/asteroid.svg" alt="img">
              <h4>Account Manager</h4>
              <p>Accounting Management System</p>
              <a href="#">Sign Up Now</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us padd-section" style="background-color: #C70A7D;">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-5 col-lg-3">
            <img src="assets/img/about-img.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100" >

              <h2 style="color:white;"><span>eStartup</span>UI Design Mobile </h2>
              <p style="color:white;">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
              </p>

              <ul class="list-unstyled" > 
                <li style="color:white;"><i class="vi bi-chevron-right"></i>Creative Design</li>
                <li style="color:white;"><i class="vi bi-chevron-right"></i>Retina Ready</li>
                <li style="color:white;"><i class="vi bi-chevron-right"></i>Easy to Use</li>
                <li style="color:white;"><i class="vi bi-chevron-right"></i>Unlimited Features</li>
                <li style="color:white;"><i class="vi bi-chevron-right"></i>Unlimited Features</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Get Started</h2>
         
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/paint-palette.svg" alt="img">
              <h4>Choose a Plan</h4>
            
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/vector.svg" alt="img">
              <h4>Sign Up</h4>
            
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/design-tool.svg" alt="img">
              <h4>Configure your account</h4>
            
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/asteroid.svg" alt="img">
              <h4>Start Using</h4>
             
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Screenshots Section ======= -->
    <section id="screenshots" class="padd-section text-center" style="background-color: #C70A7D;">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>App Gallery</h2>
          
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/screen/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/screen/8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Screenshots Section -->

    <!-- ======= Video Section ======= -->
    <section id="video" class="text-center">
      <div class="overlay">
        <div class="container-fluid container-full" data-aos="zoom-in">

          <div class="row">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q&feature=emb_title" class="glightbox play-btn"></a>
          </div>

        </div>
      </div>
    </section><!-- End Video Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="padd-section text-center">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-8">

            <div class="testimonials-content">
              <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item  active">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>Kimberly Tran<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>Henderson<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>David Spark<span>manager</span></h4>

                    </div>
                  </div>

                </div>

                <div class="btm-btm">

                  <ul class="list-unstyled carousel-indicators">
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                  </ul>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-cente">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Meet With Price</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>basic</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>PERSONAL</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>BUSINESS</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>profeesional</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Buy Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-sectio">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Businesses</h2>
          <p class="separator">Find Businesses that sells product or offers the services you want</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-1.jpg" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">Airomatic Airfreshners</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">Apple Cooporation</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="assets/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">Amazon Group</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="d-flex" method="POST" action="#">
                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribe</button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contact Us</h2>
          <h2 class="separator">Send a Message to support@invest45.com</h2>
        </div>

       
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


@endsection