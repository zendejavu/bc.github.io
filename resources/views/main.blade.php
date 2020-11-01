<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>PT. Balla Cerdas Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="PT. Balla Cerdas Technology" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css">

    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page one-page-style">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content clearfix">
          <div class="my-photo">
            <img src="{{ asset('assets/images/tes.png') }}" alt="image">
          </div>

          <div class="site-title-block">
            <div class="site-title">Balla Cerdas</div>
          </div>

          <!-- Navigation -->
          <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <li>
                <a class="pt-trigger" href="#home">Home</a><!-- href value = data-id without # of .pt-page. -->
              </li>
              <li>
                <a class="pt-trigger" href="#about-me">About Me</a>
              </li>
              <li>
                <a class="pt-trigger" href="#resume">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="#management">Management</a>
              </li>
              <!-- <li>
                <a class="pt-trigger" href="#blog">Blog</a>
              </li> -->
              <li>
                <a class="pt-trigger" href="#contact">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->
          </div>
          <!-- Navigation -->

          <!-- Social Links -->
          <div class="social-links">
            <!-- <a href="#" target="_blank"><i class="fab fa-twitter"></i></a> -->
            <!-- <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a> -->
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>
          <!-- / Social Links -->

          <!-- Copyrights -->
          <div class="copyrights">© 2018 All rights reserved.</div>
          <!-- / Copyrights -->
        </div>
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-header-image">
            <a href="#">
                <img src="{{ asset('assets/images/tes.png') }}" alt="image">
            </a>
          </div>
          <div class="mobile-site-title"><a href="#">Balla Cerdas</a></div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Arrows Nav -->
      <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
      <!-- /Arrows Nav -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section id="home" class="pt-page pt-page-home start-page">
              <div class="section-inner vcentered">
                <div class="mask"></div>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="title-block">
                      <h2>PT. Balla Cerdas Technology</h2>
                      <div class="owl-carousel text-rotation">                                    
                        <div class="item">
                          <div class="sp-subtitle">Web Designer</div>
                        </div>
                        
                        <div class="item">
                          <div class="sp-subtitle">Frontend-developer</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <section class="pt-page" id="about-me">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">About Me</h2>
                  <h5 class="section-description">Artist, Thinker, Creative Doer</h5>
                </div>

                <div class="section-content">
                  <div class="row bs-30">
                    <div class="col-xs-6 col-sm-6">
                      <h3>I am Web Designer @ Company.com</h3>
                      <p>Lorem Epsum Praesent ut tortor consectetur, semper sapien non, lacinia augue. Aenean arcu libero, facilisis et nisi non, tempus faucibus tortor. Mauris vel nulla aliquam, pellentesque enim ac, faucibus tortor. Nulla odio nibh, cursus sit amet urna id, dignissim euismod augue.</p>
                      <p>Duis sollicitudin, libero porttitor rutrum ultrices, turpis lorem fermentum justo, quis ornare augue tortor non est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                      <ul class="info-list">
                        <li><span class="title">Age</span><span class="value">29</span></li>
                        <li><span class="title">Residence</span><span class="value">USA</span></li>
                        <li><span class="title">Address</span><span class="value">88 Some Street, Some Town</span></li>
                        <li><span class="title">e-mail</span><span class="value"><a href="mailto:email@example.com">email@example.com</a></span></li>
                        <li><span class="title">Phone</span><span class="value">+0123 123 456 789</span></li>
                        <li><span class="title">Skype</span><span class="value">alex.smith</span></li>
                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Services Block -->    
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="col-inner">
                        <div class="block-title">
                            <h3>What I Do</h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <!-- Service Item 1 -->
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-store"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Ecommerce</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                            </div>
                          </div>
                          <!-- /Service Item 1 -->

                          <!-- Service Item 2 -->
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Web Design</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                            </div>
                          </div>
                          <!-- Service Item 2 -->
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <!-- Service Item 3 -->
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Copywriter</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                            </div>
                          </div>
                          <!-- Service Item 3 -->

                          <!-- Service Item 4 -->
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-flag"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Management</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales odio.</p>
                            </div>
                          </div>
                          <!-- Service Item 4 -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Services Block -->

                  <!-- Testimonials Block -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="col-inner ts-25 bs-50">
                        <!-- Testimonials Block Title -->
                        <div class="block-title">
                            <h3>Testimonials<span></span></h3>
                        </div>
                        <!-- /Testimonials Block Title -->

                        <!-- Testimonials Carousel Block -->
                        <div class="testimonials owl-carousel">
                          <!-- Testimonial 1 -->
                          <div class="testimonial-item">

                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                              <div class="testimonial-text">
                                <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.</p>
                              </div>
                            </div>            
                            <!-- /Testimonial Content -->

                            <!-- Testimonial Author -->
                            <div class="testimonial-credits">
                              <!-- Picture -->
                              <div class="testimonial-picture">
                                <img src="{{ asset('assets/images/testimonials/testimonial-2.jpg') }}" alt="Gary Johnson"/>
                              </div>              
                              <!-- /Picture -->
                              <!-- Testimonial author information -->
                              <div class="testimonial-author-info">
                                <p class="testimonial-author">Gary Johnson</p>
                                <p class="testimonial-firm">Locost Accessories</p>
                              </div>
                            </div>
                            <!-- /Testimonial author information -->  

                          </div>
                          <!-- End of Testimonial 1 -->

                          <!-- Testimonial 2 -->
                          <div class="testimonial-item">

                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                              <div class="testimonial-text">
                                <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                              </div>
                            </div>            
                            <!-- /Testimonial Content -->

                            <!-- Testimonial Author -->
                            <div class="testimonial-credits">
                              <!-- Picture -->
                              <div class="testimonial-picture">
                                <img src="{{ asset('assets/images/testimonials/testimonial-1.jpg') }}" alt="Daniel Pringle"/>
                              </div>              
                              <!-- /Picture -->
                              <!-- Testimonial author information -->
                              <div class="testimonial-author-info">
                                <p class="testimonial-author">Daniel Pringle</p>
                                <p class="testimonial-firm">Rolling Thunder</p>
                              </div>
                            </div>
                            <!-- /Testimonial author information -->  
                          </div>
                          <!-- End of Testimonial 2 -->

                          <!-- Testimonial 3 -->
                          <div class="testimonial-item">

                            <!-- Testimonial Content -->
                            <div class="testimonial-content">
                              <div class="testimonial-text">
                                <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas odio a velit scelerisque, imperdiet elementum lorem aliquet.</p>
                              </div>
                            </div>            
                            <!-- /Testimonial Content -->

                            <!-- Testimonial Author -->
                            <div class="testimonial-credits">
                              <!-- Picture -->
                              <div class="testimonial-picture">
                                <img src="{{ asset('assets/images/testimonials/testimonial-3.jpg') }}" alt="Billy Adams"/>
                              </div>              
                              <!-- /Picture -->
                              <!-- Testimonial author information -->
                              <div class="testimonial-author-info">
                                <p class="testimonial-author">Billy Adams</p>
                                <p class="testimonial-firm">Sagebrush</p>
                              </div>
                            </div>
                            <!-- /Testimonial author information -->  
                          </div>
                          <!-- End of Testimonial 3 -->
                        </div>
                        <!-- /Testimonials Carousel Block -->
                      </div>
                    </div>
                  </div>
                  <!-- /Testimonials Block -->

                  <!-- Clients Block -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="col-inner">
                        <!-- Clients Block Title -->
                        <div class="block-title">
                          <h3>Clients<span></span></h3>
                        </div>
                        <!-- /Clients Block Title -->

                        <!-- Clients Carousel Block -->
                        <div class="clients owl-carousel">
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-7.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-6.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-5.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-4.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-3.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-2.png') }}" alt="Logo">
                            </a>
                          </div>
                          <div class="client-block">
                            <a href="#" target="_blank" title="Logo">
                              <img src="{{ asset('assets/images/clients/client-1.png') }}" alt="Logo">
                            </a>
                          </div>  
                        </div>
                        <!-- /Clients Carousel Block -->
                      </div>
                    </div>
                  </div>
                  <!-- /Clients Block -->

                  <!-- Fun Facts Block -->
                  <!-- <div class="row"> -->
                    <!-- <div class="col-xs-12 col-sm-12"> -->
                      <!-- Fun Facts Block Title -->
                      <!-- <div class="block-title">
                        <h3>Fun Facts</h3>
                      </div> -->
                      <!-- /Fun Facts Block Title -->
                    <!-- </div> -->

                    <!-- Fun Fact 1 -->
                    <!-- <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block">
                          <i class="lnr lnr-smile"></i>
                          <h4>Happy Clients</h4>
                          <span class="lm-info-block-value">2,325</span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div> -->
                    <!-- /Fun Fact 1 -->

                    <!-- Fun Fact 2 -->
                    <!-- <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-bg">
                          <i class="lnr lnr-clock"></i>
                          <h4>Working Hours</h4>
                          <span class="lm-info-block-value">7,582</span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div> -->
                    <!-- /Fun Fact 2 -->

                    <!-- Fun Fact 3 -->
                    <!-- <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block">
                          <i class="lnr lnr-checkmark-circle"></i>
                          <h4>Awards Won</h4>
                          <span class="lm-info-block-value">12</span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div> -->
                    <!-- /Fun Fact 3 -->

                    <!-- Fun Fact 4 -->
                    <!-- <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-bg">
                          <i class="lnr lnr-coffee-cup"></i>
                          <h4>Coffee Consumed</h4>
                          <span class="lm-info-block-value">2,000</span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div> -->
                    <!-- /Fun Fact 4 -->
                  <!-- </div> -->
                  <!-- /Fun Facts -->
                </div>
              </div>
            </section>
            <!-- About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page" id="resume">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Resume</h2>
                  <h5 class="section-description">7 Years of Experience</h5>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-8">
                      <div class="col-inner bs-30">
                        <div class="block-title">
                            <h3>Education</h3>
                        </div>

                        <div class="timeline timeline-second-style bs-30 clearfix">
                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period">2008</h5>
                              <span class="item-company">University of Studies</span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title">Fronted Development</h4>
                              <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>
                            </div>
                          </div>

                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period">2007</h5>
                              <span class="item-company">University of Studies</span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title">Graphic Design</h4>
                              <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                            </div>
                          </div>
                        </div>

                        <div class="block-title">
                            <h3>Experience<span></span></h3>
                        </div>


                        <div class="timeline timeline-second-style clearfix">
                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period">2016 - Current</h5>
                              <span class="item-company">Google</span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title">Lead Ui/Ux Designer</h4>
                              <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis. Phasellus eleifend tristique posuere. Sed vitae dui nec magna.</p>
                            </div>
                          </div>

                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period">2013 - 2016</h5>
                              <span class="item-company">Adobe</span>
                                    </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title">Senior Ui/Ux Designer</h4>
                              <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare felis id, congue libero. Nam volutpat euismod quam.</p>
                            </div>
                          </div>

                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period">2011 - 2013</h5>
                              <span class="item-company">Google</span>
                                    </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title">Junior Ui/Ux Designer</h4>
                              <p>Duis mollis nunc quis quam viverra venenatis. Nulla nulla arcu, congue vitae nunc ac, sodales ultricies diam. Nullam justo leo, tincidunt sit amet.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="col-xs-12 col-sm-4"> -->
                      <!-- <div class="col-inner"> -->

                        <!-- <div class="block-title">
                          <h3>Design Skills<span></span></h3>
                        </div> -->

                        <!-- <div class="skills-info skills-second-style"> -->
                          <!-- Skill 1 -->
                          <!-- <div class="clearfix">
                            <h4>Web Design</h4>
                            <div class="skill-value">95%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-1"></div>
                          </div> -->
                          <!-- /Skill 1 -->

                          <!-- Skill 2 -->
                          <!-- <div class="clearfix">
                            <h4>Print Design</h4>
                            <div class="skill-value">65%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-2"></div>
                          </div> -->
                          <!-- /Skill 2 -->

                          <!-- Skill 3 -->
                          <!-- <div class="clearfix">
                            <h4>Logo Design</h4>
                            <div class="skill-value">80%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-3"></div>
                          </div> -->
                          <!-- /Skill 3 -->
                          
                          <!-- Skill 4 -->
                          <!-- <div class="clearfix">
                            <h4>Graphic Design</h4>
                            <div class="skill-value">90%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-4"></div>
                          </div> -->
                          <!-- /Skill 4 -->
                        <!-- </div> -->

                        <!-- <div class="block-title ts-10">
                          <h3>Coding Skills<span></span></h3>
                        </div> -->


                        <!-- <div class="skills-info skills-second-style"> -->
                          <!-- Skill 5 -->
                          <!-- <div class="clearfix">
                            <h4>JavaScript</h4>
                            <div class="skill-value">85%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-5"></div>
                          </div> -->
                          <!-- /Skill 5 -->

                          <!-- Skill 6 -->
                          <!-- <div class="clearfix">
                            <h4>PHP</h4>
                            <div class="skill-value">70%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-6"></div>
                          </div> -->
                          <!-- /Skill 6 -->

                          <!-- Skill 7 -->
                          <!-- <div class="clearfix">
                            <h4>Python</h4>
                            <div class="skill-value">60%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-7"></div>
                          </div> -->
                          <!-- /Skill 7 -->

                          <!-- Skill 8 -->
                          <!-- <div class="clearfix">
                            <h4>Perl</h4>
                            <div class="skill-value">75%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-8"></div>
                          </div> -->
                          <!-- /Skill 8 -->

                          <!-- Skill 9 -->
                          <!-- <div class="clearfix">
                            <h4>HTML / CSS</h4>
                            <div class="skill-value">100%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-9"></div>
                          </div> -->
                          <!-- /Skill 9 -->

                          <!-- Skill 10 -->
                          <!-- <div class="clearfix">
                            <h4>Smarty / Twig</h4>
                            <div class="skill-value">80%</div>
                          </div>
                          <div class="skill-container">
                            <div class="skill-percentage skill-10"></div>
                          </div> -->
                          <!-- /Skill 10 -->
                        <!-- </div> -->
                      <!-- </div> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="col-inner ts-30">
                        <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Resume Subpage -->


            <!-- Portfolio Subpage -->
            <!-- <section class="pt-page" id="portfolio2">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Portfolio</h2>
                  <h5 class="section-description">My Works</h5>
                </div>
          
                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12"> -->
                      <!-- Portfolio Content -->
                      <!-- <div class="portfolio-content"> -->

                        <!-- <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_media">Media</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li>
                        </ul> -->

                        <!-- Portfolio Grid -->
                        <!-- <div class="portfolio-grid four-columns"> -->
                          <!-- Portfolio Project 1 -->
                          <!-- <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="SoundCloud Audio" title="" />
                              <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">SoundCloud Audio</h4>
                            <span class="category">SoundCloud</span>
                          </figure> -->
                          <!-- /Portfolio Project 1 -->

                          <!-- Portfolio Project 2 -->
                          <!-- <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/2.jpg') }}" alt="Media Project 2" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 2</h4>
                            <span class="category">Media</span>
                          </figure> -->
                          <!-- /Portfolio Project 2 -->

                          <!-- Portfolio Project 3 -->
                          <!-- <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure> -->
                          <!-- Portfolio Project 3 -->

                          <!-- Portfolio Project 4 -->
                          <!-- <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 1</h4>
                            <span class="category">Media</span>
                          </figure> -->
                          <!-- Portfolio Project 4 -->

                          <!-- Portfolio Project 5 -->
                          <!-- <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="{{ asset('assets/images/portfolio/5.jpg') }}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure> -->
                          <!-- /Portfolio Project 5 -->

                          <!-- Portfolio Project 6 -->
                          <!-- <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure> -->
                          <!-- /Portfolio Project 6 -->

                          <!-- Portfolio Project 7 -->
                          <!-- <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 3</h4>
                            <span class="category">Media</span>
                          </figure> -->
                          <!-- /Portfolio Project 7 -->

                          <!-- Portfolio Project 8 -->
                          <!-- <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="{{ asset('assets/images/portfolio/6.jpg') }}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 2</h4>
                            <span class="category">Mockups</span>
                          </figure> -->
                          <!-- /Portfolio Project 8 -->

                        <!-- </div> -->
                      <!-- </div> -->
                      <!-- /Portfolio Content -->
                    <!-- </div>
                  </div>
                </div>
              </div>
            </section> -->
            <!-- /Portfolio Subpage -->
            
            <!-- Portfolio Subpage -->
            <section class="pt-page" id="portfolio">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Portfolio</h2>
                  <h5 class="section-description">My Works</h5>
                </div>
          
                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_test">Test</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_test2">Test 2</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <!-- <div class="portfolio-grid four-columns"> -->
                        <div class="blog-masonry three-columns clearfix">
                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                          <!-- Blog Post 1 -->
                            <div class="item post-1" data-groups='["category_all", "category_test"]'>
                                <div class="blog-card">
                                    <div class="media-block">
                                    <div class="category">
                                        <a href="#" title="View all posts in UI">UI</a>
                                    </div>
                                    <a href="blog-post-1.html">
                                        <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                        <div class="mask"></div>
                                    </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">06 Apr 2018</div>
                                        <a href="blog-post-1.html">
                                            <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                                        </a>
                                        <div class="row mt-3">
                                            <div class="col-8 post-date">Client</div>
                                            <div class="col-4 post-date">Tahun</div>                                        
                                            <div class="col-8">Universitas Hasanuddin</div>
                                            <div class="col-4">2019</div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                        </div>
                      </div>
                      <!-- /Portfolio Content -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Management from Portfolio Subpage -->
            <section class="pt-page" id="management">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Management</h2>
                  <h5 class="section-description">The Founders</h5>
                </div>
          
                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_media">Media</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid four-columns">
                          <!-- Portfolio Project 1 -->
                          <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="SoundCloud Audio" title="" />
                              <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">SoundCloud Audio</h4>
                            <span class="category">SoundCloud</span>
                          </figure>
                          <!-- /Portfolio Project 1 -->

                          <!-- Portfolio Project 2 -->
                          <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/2.jpg') }}" alt="Media Project 2" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 2</h4>
                            <span class="category">Media</span>
                          </figure>
                          <!-- /Portfolio Project 2 -->

                          <!-- Portfolio Project 3 -->
                          <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure>
                          <!-- Portfolio Project 3 -->

                          <!-- Portfolio Project 4 -->
                          <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 1</h4>
                            <span class="category">Media</span>
                          </figure>
                          <!-- Portfolio Project 4 -->

                          <!-- Portfolio Project 5 -->
                          <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="{{ asset('assets/images/portfolio/5.jpg') }}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure>
                          <!-- /Portfolio Project 5 -->

                          <!-- Portfolio Project 6 -->
                          <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure>
                          <!-- /Portfolio Project 6 -->

                          <!-- Portfolio Project 7 -->
                          <figure class="item standard" data-groups='["category_all", "category_media"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Media Project 3</h4>
                            <span class="category">Media</span>
                          </figure>
                          <!-- /Portfolio Project 7 -->

                          <!-- Portfolio Project 8 -->
                          <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="{{ asset('assets/images/portfolio/6.jpg') }}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 2</h4>
                            <span class="category">Mockups</span>
                          </figure>
                          <!-- /Portfolio Project 8 -->

                        </div>
                      </div>
                      <!-- /Portfolio Content -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <!-- <section class="pt-page" id="blog">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Blog</h2>
                  <h5 class="section-description">My Diary</h5>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix"> -->
                        
                        <!-- Blog Post 1 -->
                        <!-- <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_6.jpg') }}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Apr 2018</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <!-- <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">E-Commerce</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_5.jpg') }}" class="size-blog-masonry-image-two-c " alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Apr 2018</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <!-- <div class="item post-3">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">E-Commerce</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_4.jpg') }}" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title=""/>
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Apr 2018</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <!-- <div class="item post-4">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_3.jpg') }}" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                                </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Apr 2018</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 4 -->
                        
                        <!-- Blog Post 5 -->
                        <!-- <div class="item post-5">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_2.jpg') }}" class="size-blog-masonry-image-two-c" alt="Creative and Innovative Navigation Designs" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                                <div class="post-date">06 Apr 2018</div>
                                <a href="blog-post-1.html">
                                  <h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4>
                                </a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 5 -->
                        
                        <!-- Blog Post 6 -->
                        <!-- <div class="item post-6">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('assets/images/blog/blog_post_1.jpg') }}" class="size-blog-masonry-image-two-c" alt="6 Easy Steps to Better Icon Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Apr 2018</div>
                              <a href="blog-post-1.html"><h4 class="blog-item-title">6 Easy Steps to Better Icon Design</h4></a>
                            </div>
                          </div>
                        </div> -->
                        <!-- End of Blog Post 6 -->
                      <!-- </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
            <!-- /Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page" id="contact">
              <div class="section-inner custom-page-content">
                <div class="section-title-block second-style">
                  <h2 class="section-title">Contact</h2>
                  <h5 class="section-description">Get in Touch</h5>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div id="map" class="map"></div>
                      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248.3440802340574!2d119.4321095788403!3d-5.182944522450576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1604212458630!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-default">
                          <i class="lnr lnr-phone-handset"></i>
                          <h4>415-832-2000</h4>
                          <span class="lm-info-block-value"></span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-default">
                          <i class="lnr lnr-map-marker"></i>
                          <h4>San Francisco</h4>
                          <span class="lm-info-block-value"></span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-default">
                          <i class="lnr lnr-envelope"></i>
                          <h4>alex@example.com</h4>
                          <span class="lm-info-block-value"></span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                      <div class="col-inner bs-30">
                        <div class="lm-info-block gray-default">
                          <i class="lnr lnr-checkmark-circle"></i>
                          <h4>Freelance Available</h4>
                          <span class="lm-info-block-value"></span>
                          <span class="lm-info-block-text"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class=" col-xs-12 col-sm-8 offset-sm-1 offset-sm-2">
                    <div class="col-inner ts-20">
                      <div class="block-title">
                        <h3>How Can I Help You?</h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.malihu.PageScroll2id.min.js') }}"></script>
    <script src="{{ asset('assets/js/validator.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1xrEzvDnuPZmFoLyTcYPGFYdGLd5vjrU"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('assets/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
