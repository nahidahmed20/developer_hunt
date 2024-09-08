<!DOCTYPE html>
<html lang="en">
  

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('website/assets/images/favicon.ico')}}" type="image/x-icon" />
    <title>SolSoft | Home - 1</title>

    <!-- ---------------Default CSS---------------- -->
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('website/assets/css/common.css')}}" />
    <!-- ---------------Default CSS---------------- -->

    <!-- ---------------Bootstrap---------------- -->
    <link rel="stylesheet" href="{{asset('website/assets/css/vendor/bootstrap.min.css')}}" />
    <script src="{{asset('website/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <!-- ---------------Bootstrap---------------- -->

    <!-- ---------------Slick---------------- -->
    <link rel="stylesheet" href="{{asset('website/assets/css/vendor/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('website/assets/css/vendor/slick.css')}}" />
    <!-- ---------------Slick---------------- -->

   
    <!-- ---------------JQuery---------------- -->

    <!-- ---------------Font-Awesome CDN---------------- -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- ---------------Font-Awesome CDN---------------- -->
  </head>

  <body>
    <main id="home">
      <!-- -------------Nav section Start ----------- -->
      <nav>
        <section id="navbar-1">
          <div class="nav-wrapper container"> 
            <div class="d-flex align-items-center justify-content-between ">
              <!-- logo start -->
              <div class="logo-wrapper">
                <div class="logo">
                  <a href="index.html">
                    <img src="{{asset('website/assets/images/logo1.png')}}" alt="" />
                  </a>
                </div>
              </div>
              <!-- logo end -->
              <div class="nav-content">
                <div class="clip-border">
                  <div class="options">
                    <div class="each-optins-list d-flex align-items-center">
                      <ul class="menus d-flex align-items-center">
                        <li class="menu dropdown">
                          <a href="{{route('home')}}">HOME </a>
                        </li>
                        <li class="menu">
                          <a href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="menu">
                          <a href="{{route('services')}}">SERVICES</a>
                        </li>
                        <li class="menu">
                          <a href="{{route('blog')}}">BLOG</a>
                        </li>

                        <li class="menu dropdown">
                          <a>PAGES</a>
                          <div
                            class="dropdown__menu submenu bigger-width"
                            aria-label="submenu"
                          >
                            <a href="service-details.html">SERVICE DETAILS</a>
                            <a href="blog-details.html">BLOG DETAILS</a>

                            <a href="team.html">TEAM</a>
                            <a href="team-details.html">TEAM DETAILS</a>
                            <a href="portfolio.html">PORTFOLIO</a>
                            <a href="portfolio-details.html"
                              >PORTFOLIO DETAILS</a
                            >
                            <a href="faqs.html">FAQS</a>
                            <a href="pricing.html">PRICE</a>
                          </div>
                        </li>
                        <li class="menu">
                          <a href="{{route('contact')}}">CONTACT</a>
                        </li>
                      </ul>

                      <div class="search-option">
                        <div class="d-flex align-items-center">
                          <div
                            class="search" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            <i class="fa-solid fa-magnifying-glass demo"></i>
                          </div>
                          <div
                            class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                            <div
                              class="modal-dialog modal-dialog modal-dialog-centered"
                            >
                              <div class="modal-content">
                                <div class="modal-form">
                                  <input class="modal-input" type="text" placeholder="Search"/>
                                  <div
                                    class="modalRightArrow" id="modalRightArrowBtn">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          

                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- mobile navbar start -->
          <div class="mobile-nav">
            <div
              class="close-nav d-flex align-items-center justify-content-between mb-20"
            >
              <div class="logo">
                <a href="index.html">
                  <img src="{{asset('website/assets/images/logo2.png')}}" alt="" />
                </a>
              </div>
              <i class="fa-solid fa-arrow-right-long"></i>
            </div>

            <div class="d-flex justify-content-end align-items-center">
              <div
                class="search mr-20"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#modal"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
                <div
                  class="modal fade"
                  id="modal"
                  tabindex="-1"
                  aria-labelledby="modalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <form class="modal-form">
                        <input
                          class="modal-input"
                          id="modal-input"
                          type="text"
                          placeholder="Search"
                        />
                        <div class="modalRightArrow">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <a class="get-start-button" href="#"> Get Started </a>
            </div>

            <div class="space120"></div>

            <ul class="mobile-menus">
              <li class="mobile-menu has-dropdown">
                <a class="dropdown-arrow" href="#">HOME </a>

                <ul class="submenu">
                  <li><a href="index.html">Home 1</a></li>
                  <li><a href="index2.html">Home 2</a></li>
                  <li><a href="index3.html">Home 3</a></li>
                </ul>
              </li>
              <li class="mobile-menu">
                <a href="about.html">ABOUT</a>
              </li>
              <li class="mobile-menu">
                <a href="services.html">SERVICES</a>
              </li>
              <li class="mobile-menu">
                <a href="blog.html">BLOG</a>
              </li>
              <li class="mobile-menu has-dropdown">
                <a class="dropdown-arrow" href="#">PAGES</a>
                <ul class="submenu">
                  <li><a href="service-details.html">SERVICE DETAILS</a></li>
                  <li><a href="blog-details.html">BLOG DETAILS</a></li>
                  <li><a href="team.html">TEAM</a></li>
                  <li><a href="team-details.html">TEAM DETAILS</a></li>
                  <li><a href="portfolio.html">PORTFOLIO</a></li>
                  <li>
                    <a href="portfolio-details.html">PORTFOLIO DETAILS</a>
                  </li>
                  <li><a href="faqs.html">FAQS</a></li>
                  <li><a href="pricing.html">PRICE</a></li>
                </ul>
              </li>
              <li class="mobile-menu">
                <a href="contact-us.html">CONTACT</a>
              </li>
             
            </ul>
          </div>
        </section>
      </nav>
     
      @yield('content')
      <!-----------------Footer-----Start-------------->
      <section
        style="
          background-image: url(images/footer/bg.png),
            linear-gradient(0deg, #03041c, #03041c);
        "
        id="footer"
      >
        <div class="footer-top">
          <div class="container">
            <div
              class="d-flex flex-column flex-md-row align-items-center justify-content-end"
            >
              <h2 class="heading-2 mr-50">NewsLetter</h2>
              <form
                class="d-flex flex-column flex-md-row align-items-center"
                action="#"
              >
                <div class="email-wrapper">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                  />
                </div>

                <a href="#" type="submit" class="subscribe-btn">
                  <span> Read More </span>
                </a>
              </form>
            </div>
          </div>
        </div>

        <div class="footer-body">
          <div class="container">
            <div class="row g-4">
              <div class="col-md-6 col-xl-4">
                <div class="about-company">
                  <div class="logo-wrapper">
                    <img src="{{asset('website/assets/images/logo1.png')}}" alt="" />
                  </div>

                  <div class="content">
                    <h2 class="heading-3">About Company</h2>

                    <div class="paragraph">
                      Professionally monetize timely paradigms for team driven
                      action items. Seamlessly expedite superior meta-services
                      via cooperative.
                    </div>

                    <div class="socials">
                      <ul>
                        <li>
                          <a href="#"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
                        </li>
                        <li class="active">
                          <a href="#"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-2">
                <div class="wrapper">
                  <h4 class="heading-4">Quick Links</h4>
                  <ul>
                    <li><a href="#">Business Consulting</a></li>
                    <li class="active"><a href="#">Financial Investment</a></li>
                    <li><a href="#">Corporate Business</a></li>
                    <li><a href="#">IT Consulting</a></li>
                    <li><a href="#">Web Strategy</a></li>
                    <li><a href="#">Business Development</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="wrapper">
                  <h4 class="heading-4">Popular Posts</h4>

                  <a href="#">
                    <div class="d-flex news">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('website/assets/images/footer/1.png')}}"
                          alt=""
                          class="img-fluid"
                        />
                      </div>

                      <div class="info">
                        <div class="paragraph">
                          Technology Is A Great Turning
                        </div>
                        <div class="date">10 May, 2023</div>
                      </div>
                    </div>
                  </a>

                  <a href="#">
                    <div class="d-flex news">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('website/assets/images/footer/2.png')}}"
                          alt=""
                          class="img-fluid"
                        />
                      </div>

                      <div class="info">
                        <div class="paragraph">
                          Technology Is A Great Turning
                        </div>
                        <div class="date">10 May, 2023</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="wrapper">
                  <h4 class="heading-4">Contact Us</h4>
                  <div class="d-flex contact">
                    <div class="icon-wrapper">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                    </div>

                    <div class="info">
                      <div class="paragraph">{{$frontMenu->number}}</div>
                    </div>
                  </div>
                  <div class="d-flex contact">
                    <div class="icon-wrapper active">
                      <span>
                        <i class="fa-solid fa-envelope"></i>
                      </span>
                    </div>

                    <div class="info">
                      <div>
                        <a href="mailto:example@gmail.com" class="paragraph">
                          {{$frontMenu->gmail}}
                        </a>
                      </div>

                    </div>
                  </div>
                  <div class="d-flex contact">
                    <div class="icon-wrapper">
                      <span>
                        <i class="fa-solid fa-location-dot"></i>
                      </span>
                    </div>

                    <div class="info">
                      <div class="paragraph">{{$frontMenu->location}}</div>
                    </div>
                  </div>

                  <div class="wrapper d-block d-md-none">
                    <h4 class="heading-4">Policy</h4>
                    <ul>
                      <li><a href="#">Sitemap </a></li>
                      <li><a href="#"> Privacy Policy </a></li>
                      <li><a href="#"> Cookie Policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="divider"></div>

            <div class="footer-bottom">
              <div
                class="d-flex justify-content-center justify-content-md-between align-items-center"
              >
                <div class="paragraph">
                  <span>Copyright ©</span>
                  <span id="current-year"></span>
                  <span
                    ><a href="https://solutya.com/">Solutya Pvt. Ltd.</a>
                  </span>
                  All Rights Reserved
                </div>
                <div class="infos">
                  <ul class="d-none d-md-flex">
                    <li><a href="#">Sitemap </a></li>
                    <li><a href="#"> Privacy Policy </a></li>
                    <li><a href="#"> Cookie Policy</a></li>
                  </ul>
                </div>
              </div>
              <button id="scroll-to-top">
                <i class="fa-solid fa-arrow-up"></i>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-----------------Footer----End--------------->
    </main>

     <!-- ---------------JQuery---------------- -->
     <script src="{{asset('website/assets/js/vendor/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('website/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('website/assets/js/main.js')}}"></script>
    <script>
       
      // -------------------- check main.js file if not available there-----------------

      
      // ------------------Parallax----Start-------------
      document
        .getElementById("service")
        .addEventListener("mousemove", parallax);
      function parallax(e) {
        if (window.innerWidth > 767) {
          document.querySelectorAll(".img-object").forEach(function (move) {
            var moving_value = move.getAttribute("data-value");
            var x = (e.clientX * moving_value) / 160;
            var y = (e.clientY * moving_value) / 160;
            move.style.transform =
              "translateX(" + x + "px) translateY(" + y + "px)";
          });
        }
      }
      // ------------------Parallax--------End---------

      //    -------------------service card ---------Start--------
      const serviceCard = document.querySelectorAll(".service-card");
      serviceCard.forEach((item) => {
        item.addEventListener("mouseover", () => {
          // Remove active class from the second child
          serviceCard[1].classList.remove("active");
        });
      });
      //    -------------------service card ----------End-------

      // -----------------------skill range progressive bar---------------start----
       // Select the plan div
       const planElement = document.querySelector(".plan");
       // Select all skill-per elements
       const skillPerElements = document.querySelectorAll(".skill-per");

      // Create a new Intersection Observer
      const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Add the skill-poacity class to each skill-per element
      skillPerElements.forEach((skillPerElement) => {
        skillPerElement.classList.add("skill-poacity");
      });
    } else {
      // Remove the skill-poacity class from each skill-per element
      skillPerElements.forEach((skillPerElement) => {
        skillPerElement.classList.remove("skill-poacity");
      });
    }
  });
});
      // Start observing the plan div
       observer.observe(planElement);
     
        // -------------------------skill range progressive bar -------------end
      //    -------------------Exclusive Service----------Start-------
      const exclusiveServiceCard = document.querySelectorAll(
        ".ex-service-cards .ex-service-card"
      );
      exclusiveServiceCard.forEach((item) => {
        item.addEventListener("mouseover", () => {
          // Remove active class from the second child
          exclusiveServiceCard[1].classList.remove("active");
        });
      });
      //    -------------------Exclusive Service ---------End--------
      //-----------------Team Members-------------------

      const teamCard = document.querySelectorAll("#team .team-card ");
      teamCard.forEach((item) => {
        item.addEventListener("mouseover", () => {
          // Remove active class from the second child
          teamCard[1].classList.remove("active");
        });
      });
      //-----------------Team Members------End-------------

      // --------------Gloval---- project card ------------Start-----
      const projects = document.querySelectorAll("#projects .project-card");
      console.log(projects);

      projects.forEach((item) => {
        item.addEventListener("mouseover", () => {
          // Remove active class from the second child
          projects[1].classList.remove("active");
        });
      });
      // ----------Gloval-------- project card ------------ENd-----
      // ------------------FAQ-----------------
      const items = document.querySelectorAll(".accordion button");
      function toggleAccordion() {
        const itemToggle = this.getAttribute("aria-expanded");
        for (i = 0; i < items.length; i++) {
          items[i].setAttribute("aria-expanded", "false");
        }
        if (itemToggle == "false") {
          this.setAttribute("aria-expanded", "true");
        }
      }
      items.forEach((item) => item.addEventListener("click", toggleAccordion));
      // ------------------FAQ---------End--------

      //    -------------------News ----------Start-------
      const news = document.querySelectorAll(".news-card");
      news.forEach((item) => {
        item.addEventListener("mouseover", () => {
          // Remove active class from the second child
          news[1].classList.remove("active");
        });
      });
      //    -------------------News -------------End----

      
    </script>
  </body>

</html>
