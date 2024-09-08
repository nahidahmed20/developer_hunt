@extends('master')

@section('content')

    
      <!-- ---------------Hero section Start---------------- -->
      <section id="hero">

        <div class="hero-1-slide ">
          <div class="slide-wrapper">
            <div
              style="
                background-image: linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.55)
                  ),
                  url(images/home1/slider/s1.png);
              "
              class="slide-card"
            >
              <div class="slide__card--wrapper">
                <h4 class="heading-4 mb-25">Next Level Automation System</h4>

                <h2 class="heading-1">For Tech</h2>
                <h2 class="heading-1 mb-25">IT Solutions</h2>

                <div class="heading-7 mb-30">
                  We provide Website Design, Website Development, Cheap Domain &
                  Hosting, Reliable Hosting Server, Software Development.
                </div>

                <a href="#" class="button-primary-1">
                  <span> Read More </span>
                </a>
              </div>
              <!-- <img src="images/home1/r-1.png" alt="" class="shape-left" />
              <img src="images/home1/r-2.png" alt="" class="shape-right" /> -->
            </div>
            <div
              style="
                background-image: linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.55)
                  ),
                  url(images/home1/slider/s2.png);
              "
              class="slide-card"
            >
              <div class="slide__card--wrapper">
                <h4 class="heading-4 mb-25">Next Level Automation System</h4>

                <h2 class="heading-1">For Tech</h2>
                <h2 class="heading-1 mb-25 text-moving">IT Solutions</h2>

                <div class="heading-7 mb-30">
                  We provide Website Design, Website Development, Cheap Domain &
                  Hosting, Reliable Hosting Server, Software Development.
                </div>

                <a href="#" class="button-primary-1">
                  <span> Read More </span>
                </a>
              </div>
              <!-- <img src="images/home1/r-1.png" alt="" class="shape-left" />
              <img src="images/home1/r-2.png" alt="" class="shape-right" /> -->
            </div>
            <div
              style="
                background-image: linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.55)
                  ),
                  url(images/home1/slider/s3.png);
              "
              class="slide-card"
            >
              <div class="slide__card--wrapper">
                <h4 class="heading-4 mb-25">Next Level Automation System</h4>

                <h2 class="heading-1">For Tech</h2>
                <h2 class="heading-1 mb-25">IT Solutions</h2>

                <div class="heading-7 mb-30">
                  We provide Website Design, Website Development, Cheap Domain &
                  Hosting, Reliable Hosting Server, Software Development.
                </div>

                <a href="#" class="button-primary-1">
                  <span> Read More </span>
                </a>
              </div>
              <!-- <img src="images/home1/r-1.png" alt="" class="shape-left" />
              <img src="images/home1/r-2.png" alt="" class="shape-right" /> -->
            </div>
          </div>
          <img class="curve-overlay" src="{{asset('website/assets/images/home1/c1.png')}}" alt="" />
          <div class="overlay-wrapper">
            <div class="left-overlay"></div>
            <div class="right-overlay"></div>
          </div>
        </div>

        <!-- Social Information -->
        <div class="hero-contact d-flex">
          <ul class="d-flex phone-email">
            <li class="paragraph-3">
              <span>
                <i class="fa-solid fa-phone"></i>
              </span>
              +88094252580
            </li>
            <li class="paragraph-3">
              <span>
                <i class="fa-solid fa-envelope"></i>
              </span>
              <a href="mailto:example@gmail.com">example@gmail.com</a>
            </li>
            <li class="paragraph-3">Follow Us</li>
          </ul>

          <ul class="d-flex social">
            <li>
              <a href="https://solutya.com/" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://solutya.com/" target="_blank">
                <i class="fa-brands fa-pinterest-p"></i>
              </a>
            </li>
            <li>
              <a href="https://themeforest.net/user/solutya/portfolio" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://themeforest.net/user/solutya/portfolio" target="_blank">
                <i class="fa-brands fa-dribbble"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- Social Information -->

        <!-- ---------------Services section  Start------------------>
        <section id="service" class="service">
          <div class="container">
            <div class="service-cards row g-4">
              <div class="col-md-6 col-lg-4">
                <div class="service-card">
                  <div class="img_wrapper mb-25">
                    <img src="{{asset('website/assets/images/home1/service/1.png')}}" alt="" />
                  </div>
                  <h5 class="heading-5 mb-15">Discoery & Assesment</h5>
                  <div class="paragraph mb-30">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore
                  </div>
                  <a href="#" class="button-primary-1">
                    <span> Read More </span>
                  </a>

                  <div class="circle"></div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="service-card active">
                  <div class="img_wrapper mb-25">
                    <img src="{{asset('website/assets/images/home1/service/2.png')}}" alt="" />
                  </div>
                  <h5 class="heading-5 mb-15">Future State Planning</h5>
                  <div class="paragraph mb-30">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore
                  </div>
                  <a href="#" class="button-primary-1">
                    <span> Read More </span>
                  </a>
                  <div class="circle"></div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 hideOnMd">
                <div class="service-card">
                  <div class="img_wrapper mb-25">
                    <img src="{{asset('website/assets/images/home1/service/3.png')}}" alt="" />
                  </div>
                  <h5 class="heading-5 mb-15">Consulting Services</h5>
                  <div class="paragraph mb-30">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore
                  </div>
                  <a href="#" class="button-primary-1">
                    <span> Read More </span>
                  </a>
                  <div class="circle"></div>
                </div>
              </div>
            </div>
            <div class="space120"></div>
          </div>
        </section>
        <!-- ---------------Services section  End---------------- -->

        <!-- ---------------About company---------------- -->
        <div class="container">
          <div class="hero-about">
            <div class="row g-4">
              <div class="col-lg-6 position-relative">
                <div class="row g-1">
                  <div class="col-5">
                    <img
                      data-value="2"
                      src="{{asset('website/assets/images/home2/about/3.png')}}"
                      class="img-fluid img-object"
                      alt=""
                    />
                  </div>
                  <div class="col-7">
                    <img
                      data-value="6"
                      src="{{asset('website/assets/images/home2/about/1.png')}}"
                      class="img-fluid img-object"
                      alt=""
                    />
                  </div>
                </div>

                <div class="img_wrapper_3">
                  <img
                    data-value="1"
                    src="{{asset('website/assets/images/home2/about/2.png')}}"
                    alt=""
                    class="img-fluid img-object"
                  />
                </div>

                <div
                  data-value="-3"
                  style="background-image: url(images/home2/about/bg.png)"
                  class="img_wrapper_logo position-absolute d-flex flex-column align-items-center justify-content-center img-object"
                >
                  <img src="images/logo2.png" alt="" class="img-fluid" />

                  <div class="text-center heading-3 mt-15">SolSoft</div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="pl-45">
                  <h6 class="heading-6 primary-color mb-15">
                    About Our Company
                  </h6>
                  <h2 class="heading-2 dark-color mb-20">
                    We Execute Our ideas From The Start to
                    <span class="primary-color">Finish</span>
                  </h2>
                  <div class="paragraph-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris
                  </div>

                  <ul>
                    <li>
                      <span
                        ><i class="fa-sharp fa-regular fa-square-check"></i
                      ></span>
                      Development of Financial Models
                    </li>
                    <li>
                      <span
                        ><i class="fa-sharp fa-regular fa-square-check"></i
                      ></span>
                      Nifty team is a diverse network of consultants
                    </li>
                    <li>
                      <span
                        ><i class="fa-sharp fa-regular fa-square-check"></i
                      ></span>
                      Industry professionals with a global mindset
                    </li>
                  </ul>

                  <div class="creativity">
                    <div class="d-flex aign-items-center creativity-info">
                      <div
                        class="circle d-flex align-items-center justify-content-center"
                      >
                        <i class="fa-regular fa-lightbulb"></i>
                      </div>

                      <div class="heading-7">
                        We combine strategy with creativity to build brand
                      </div>
                    </div>
                  </div>

                  <div
                    class="d-flex justify-content-between justify-content-md-start flex-col-reverse flex-sm-row mt-50"
                  >
                    <a href="#" class="button-primary-1">
                      <span> Get Started </span>
                    </a>

                    <div class="call-phone d-flex align-items-center">
                      <div
                        class="phone-icon d-flex align-items-center justify-content-center"
                      >
                        <i class="fa-solid fa-phone"></i>
                      </div>

                      <div class="text">
                        <span> Call Everybody</span>
                        <div class="paragraph-2">1-888-452-1505</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="space120"></div>
          </div>
        </div>
      </section>

      <!-- ---------------Hero section End---------------- -->
      <div class="space120"></div>
      <!-- ---------------Exclusive Service Start------------------>
       
      <section id="exclusive-service" class="homeOne__ExclusiveService">
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
            <h2 class="heading-2">We Provide Exclusive Service</h2>

            <div class="paragraph">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div
          style="background-image: url(images/home1/exclusive-service/bg.png)"
          class="ex-service-cards"
        >
          <div class="container">
            <div class="row g-4">
              @foreach ($services as $service)
              <div class="col-md-6 col-lg-4">
                <a href="service-details.html">
                <div class="ex-service-card position-relative">
                  <div class="img-wrapper mb-30 position-relative">
                    <img
                      src="{{asset('storage/'.$service->image)}}" alt="" class="img-fluid" height="500" width="450"
                    />
                    <div class="icon position-absolute">
                      <img
                        src="{{asset('website/assets/images/home1/exclusive-service/icons/1.svg')}}"
                        alt=""
                      />
                    </div>
                  </div>

                  <div class="content">
                    <p class="heading-4 mb-20">{{$service->title}}t</p>

                    <div class="paragraph mb-30">
                      {{Str::limit(strip_tags($service->short_description, 40))}}
                    </div>

                    <a href="#" class="button-primary-1">
                      <span> Read More </span>
                    </a>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
               </a>
              </div>
            
              @endforeach
             
            </div>
          </div>
          <div class="space120"></div>
        </div>

        <div class="container">
          <div class="message position-relative">
            <div class="row g-4 align-items-center">
              <div class="col-4">
                <h2 class="heading-2">SolSoft source in IT services</h2>
              </div>
              <div class="col-4">
                <a
                  href="#"
                  class="d-flex align-items-center justify-content-center"
                >
                  <div class="icon">
                    <i class="fa-regular fa-comments"></i>
                  </div>
                </a>
              </div>
              <div class="col-4">
                <div class="question d-flex flex-column align-items-end "">
                <div>
                  <h4 class="heading-4">Have any question?</h4>

                  <div class="heading-7">Free +87 (000)-5851</div>
                </div>
              </div>
            </div>
          </div>

          <div class="circle-1 position-absolute"></div>
          <div class="circle-2 position-absolute"></div>
        </div>
        </div>
        
        <div class="plan">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="position-relative img-wrapper">
                <img
                  src="{{asset('website/assets/images/home1/exclusive-service/4.png')}}"
                  alt=""
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div
                style="
                  background-image: url(images/home1/exclusive-service/pt.png);
                "
              >
                <div class="space120"></div>
                <div class="content">
                  <h6 class="heading-6">Buisness Process</h6>

                  <h2 class="heading-2 mb-30">
                    Easy Way Build Success your Buisness Plan
                  </h2>

                  <div class="paragraph mb-30">
                    On the other hand denounce righteous indignation dislike
                    mens who beguiled and demoralized charmso pleasure
                  </div>
                  <div>
                    
                    <!-- skill range progressive bar -->
                    
                    <div class="skill-box">
                      <span class="skill-title">Productivity</span>
                      <div class="skill-bar">
                        <span class="skill-per skill-per1 Productivity">
                          <span class="skill-tooltip">75%</span>
                        </span>
                      </div>
                    </div>
                    <div class="skill-box">
                      <span class="skill-title">Digital Marketing</span>
                      <div class="skill-bar">
                        <span class="skill-per skill-per2 digiMarket">
                          <span class="skill-tooltip">85%</span>
                        </span>
                      </div>
                    </div>
                    <div class="skill-box">
                      <span class="skill-title">Technology</span>
                      <div class="skill-bar">
                        <span class="skill-per skill-per3 technology">
                          <span class="skill-tooltip">65%</span>
                        </span>
                      </div>
                    </div>
                    <!-- skill range progressive bar -->
                  </div>
                </div>
                <div class="space120"></div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- ---------------Exclusive Service End ------------------->

      <!-----------------FAQ Start------------------->
      <section id="faq" class="homeOne__faq">
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
            <div class="space120"></div>
            <h2 class="heading-2">Frequently Asked Questions</h2>

            <div class="paragraph mb-30">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row g-4">
            <div class="col-lg-6">
              <div class="accordion">
                <div class="accordion-item">
                  <button id="accordion-button-1" aria-expanded="true">
                    <span class="accordion-title"
                      >Can I create ads for different platforms using ABQ
                      only?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-2" aria-expanded="false">
                    <span class="accordion-title"
                      >How does creating ads with ABQ help me in my advertising
                      processes?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-3" aria-expanded="false">
                    <span class="accordion-title"
                      >Is it any limit on the number of publishing ads in
                      ABQ?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-4" aria-expanded="false">
                    <span class="accordion-title"
                      >Can I use my own images in my designs?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-5" aria-expanded="false">
                    <span class="accordion-title"
                      >How can I cancel my subscription?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-6" aria-expanded="false">
                    <span class="accordion-title"
                      >How can I manage my inefficient ads that I have
                      identified with A/B testing?</span
                    ><span class="icon" aria-hidden="true"></span>
                  </button>
                  <div class="accordion-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                      pretium viverra suspendisse potenti.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-none d-md-block">
              <div class="img-wrapper">
                <img src="{{asset('website/assets/images/home1/faq.gif')}}" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-----------------FAQ End------------------->
      <div class="space120"></div>
      <!-----------------Technology section Start------------------->
      <section id="home__Page--technology" class="homeOne__technology">
        <div
          style="
            background-image: url(images/home1/technology-expert-form/bg.png);
          "
          class="technology_banner"
        >
          <div id="overlay-video">
            <div class="container">
              <div class="video-payler">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/0fYi8SGA20k"
                  title="Build and Deploy an Amazing 3D Web Developer Portfolio in React JS | Beginner Three.js Tutorial"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
          <div id="close-video-overlay">
            <span>
              <i class="fa-solid fa-xmark"></i>
            </span>
          </div>
          <div
            class="video_icon_wrapper d-flex align-items-center justify-content-center"
          >
            <i class="fa-solid fa-play"></i>
          </div>
        </div>

        <div class="container">
          <div
            style="
              background-image: url(images/home1/technology-expert-form/bg2.png);
            "
            class="contact_form"
          >
            <div class="space120"></div>
            <div class="row">
              <div class="col-lg-12 col-xl-5">
                <div class="img_wrapper">
                  <img
                    src="{{asset('website/assets/images/home1/technology-expert-form/1.png')}}"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="col-xl-7">
                <div class="heading-3 mb-20">Our Tecnology Experts</div>

                <div class="paragraph mb-30">
                  Your email address will not be published. Required fields are
                  marked
                </div>

                <form action="#">
                  <div class="row g-4 mb-25">
                    <div class="col-sm-6">
                      <input
                        type="text"
                        name="name"
                        id=""
                        placeholder="Your Name"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="email"
                        name="email"
                        id=""
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="row g-4 mb-25">
                    <div class="col-sm-6">
                      <input
                        type="number"
                        name="phone"
                        id=""
                        placeholder="Your Phone"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="text"
                        name="sub"
                        id=""
                        placeholder="Your Subject"
                      />
                    </div>
                  </div>

                  <textarea name="" id="" placeholder="Your Comment"></textarea>

                  <a href="#" class="button-primary-1 mt-25">
                    <span> Send Message </span>
                  </a>
                  <div class="space120"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-----------------Technology section End------------------->
      <div class="space120"></div>
      <!-----------------Team Members Section Start ------------------->
     

      <div id="team" class="homeOne__team">
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
           
            <h2 class="heading-2">Professional Team Members</h2>

            <div class="paragraph">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div class="container">
          <div class="team-slider">
            <div>
                <a href="team-details.html">
                <div class="team-card position-relative">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/1.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                        
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
              
            </div>
            <div>
              <a href="team-details.html">
                <div class="team-card position-relative active">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/2.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                        
                        
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
               
              
            </div>
            <div>
               <a href="team-details.html">
                <div class="team-card position-relative">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/3.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                       
                       
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
              
            </div>
            <div>
                 <a href="team-details.html">
                <div class="team-card position-relative">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/1.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                       
                       
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
               </a>
             
            </div>
            <div>
              <a href="team-details.html">
                <div class="team-card position-relative">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/2.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                       
                       
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
             
            </div>
            <div>
                <a href="team-details.html">
                <div class="team-card position-relative">
                  <div class="img-wrapper">
                    <img src="{{asset('website/assets/images/home1/team/3.png')}}" alt="" />
                  </div>
                  <div
                    class="content d-flex flex-column align-items-center justify-content-center"
                  >
                    <h6 class="heading-6 mb-10">Zachary M. Hammel</h6>
                    <div class="paragraph mb-15">CEO & Founder</div>
                    <div class="divider"></div>
                    <div class="paragraph-2 mt-10">
                      <span>
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      +88094252580
                    </div>
                  </div>

                  <div class="socials position-absolute">
                    <div class="icons position-relative">
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="Share"
                        class="icon fixed-icon"
                        href="#team"
                       
                      >
                        <i class="fa-solid fa-share-nodes"></i>
                      </a>

                      <div class="popup-icon position-absolute">
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Facebook"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Instagram"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a
                          data-bs-toggle="tooltip"
                          data-bs-placement="left"
                          title="Twitter"
                          class="icon"
                          href="#"
                          target="_blank"
                        >
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-----------------Team Members Section End------------------->
      <div class="space120"></div>
      <!-----------------Global Projects Section Start ------------------->
     
      <div id="projects" class="home__projects">
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
            <h2 class="heading-2">Let’s Looks Our Global Projects</h2>

            <div class="paragraph">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div class="project-slider">
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/1.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Tech Solutions</h6>
              <div class="paragraph">Web Development</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative active">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/2.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Platform Integration</h6>
              <div class="paragraph">Marketing Agency</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/3.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Working Process</h6>
              <div class="paragraph">Creative Advisor</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/4.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Innovative Ideas</h6>
              <div class="paragraph">Digital Wallet</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/5.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Our Mission</h6>
              <div class="paragraph">Web Development</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/1.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Tech Solutions</h6>
              <div class="paragraph">Web Development</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
          <div class="project-card position-relative">
            <div class="img-wrapper">
              <img src="{{asset('website/assets/images/home1/projects/2.png')}}" alt="" />
            </div>

            <div
              class="info d-flex flex-column align-items-center justify-content-center"
            >
              <h6 class="heading-6">Platform Integration</h6>
              <div class="paragraph">Marketing Agency</div>
            </div>

            <a href="#" class="icon position-absolute">
              <span>
                <i class="fa-solid fa-arrow-turn-down"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="container section-heading">
          <p class="more">
            If you want to see more Project
            <span class="link"> <a href="#"> click here now</a> </span>
          </p>
        </div>
      </div>
      <!-----------------Global Projects Section End------------------->
      <div class="space120"></div>
      <!-----------------Testimonials Section Start------------------->
      
      <div id="testimonials" class="home__testimonials">
        <div class="container">
          <div class="mobile-view">
            <h6 class="heading-6 primary-color">Our Feedbacks</h6>
            <h2 class="heading-2">What Our Clients Say About Us</h2>
            <!-- <div class="divider"></div> -->
          </div>
          <div class="row align-items-center reverse-columns-sm">
            <div class="col-md-7">
              <div class="testimonial-slider-nav">
                <div class="testimonial-card">
                  <div class="large-screen">
                    <h6 class="heading-6 primary-color">Our Feedbacks</h6>
                    <h2 class="heading-2">What Our Clients Say About Us</h2>
                    <div class="divider"></div>
                  </div>
                  <div class="paragraph">
                    “ I have been a keen observer of how the digital realm has
                    been flourishing in our neighbour countries and BD has s
                    some amazing progress over the years. I had previously made
                    a list of the Digital Marketing agencies. ”
                  </div>

                  <div
                    class="d-flex align-items-center justify-content-between mb-15"
                  >
                    <h5 class="heading-5">Andrew Robertson</h5>

                    <div class="d-flex align-items-center">
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    </div>
                  </div>

                  <h6 class="heading-7">Marketing2</h6>
                </div>
                <div class="testimonial-card">
                  <div class="large-screen">
                    <h6 class="heading-6 primary-color">Our Feedbacks</h6>
                    <h2 class="heading-2">What Our Clients Say About Us</h2>
                    <div class="divider"></div>
                  </div>

                  <div class="paragraph">
                    “ I have been a keen observer of how the digital realm has
                    been flourishing in our neighbour countries and BD has s
                    some amazing progress over the years. I had previously made
                    a list of the Digital Marketing agencies. ”
                  </div>

                  <div
                    class="d-flex align-items-center justify-content-between mb-15"
                  >
                    <h5 class="heading-5">Andrew Robertson</h5>

                    <div class="d-flex">
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    </div>
                  </div>

                  <h6 class="heading-7">Marketing3</h6>
                </div>
                <div class="testimonial-card">
                  <div class="large-screen">
                    <h6 class="heading-6 primary-color">Our Feedbacks</h6>
                    <h2 class="heading-2">What Our Clients Say About Us</h2>
                    <div class="divider"></div>
                  </div>

                  <div class="paragraph">
                    “ I have been a keen observer of how the digital realm has
                    been flourishing in our neighbour countries and BD has s
                    some amazing progress over the years. I had previously made
                    a list of the Digital Marketing agencies. ”
                  </div>

                  <div
                    class="d-flex align-items-center justify-content-between mb-15"
                  >
                    <h5 class="heading-5">Andrew Robertson</h5>

                    <div class="d-flex">
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                      <span><i class="fa-sharp fa-solid fa-star"></i></span>
                    </div>
                  </div>

                  <h6 class="heading-7">Marketing</h6>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="testimonial-slider-for">
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/home1/testimonial/1.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/home1/testimonial/2.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/home1/testimonial/1.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-----------------Testimonials Section End------------------->
      <div class="space120"></div>
      <!-----------------Latest News & Articles Section Start------------------->
      <section id="latest-news" class="home__latest--news">
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
            <h2 class="heading-2">Latest News & Articles</h2>

            <div class="paragraph">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <a href="blog-details.html">
                <div class="news-card position-relative">
                  <div class="img-wrapper mb-30">
                    <img src="{{asset('website/assets/images/home1/news/1.png')}}" alt="" />
                  </div>
                  <div class="content">
                    <div class="paragraph date">February 15, 2023</div>
                    <hh5 class="heading-5 mb-15">
                      Data Security With Multiple
                    </hh5>
                    <div class="paragraph mb-25">
                      There or are many the variations of passages of Lorem
                      Ipsum or available, but the majority have but the majority
                    </div>

                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <img src="{{asset('website/assets/images/home1/news/p1.png')}}" alt="" />
                      </div>
                      <div class="info">
                        <h6 class="heading-7">Mr. Onsequat</h6>
                        <div class="paragraph">Vesoz Admin</div>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4">
              <a href="blog-details.html">
                <div class="news-card position-relative active">
                  <div class="img-wrapper mb-30">
                    <img src="{{asset('website/assets/images/home1/news/2.png')}}" alt="" />
                  </div>
                  <div class="content">
                    <div class="paragraph date">February 15, 2023</div>
                    <hh5 class="heading-5 mb-15">
                      Data Security With Multiple
                    </hh5>
                    <div class="paragraph mb-25">
                      There or are many the variations of passages of Lorem
                      Ipsum or available, but the majority have but the majority
                    </div>

                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <img src="{{asset('website/assets/images/home1/news/p2.png')}}" alt="" />
                      </div>
                      <div class="info">
                        <h6 class="heading-7">Mr. Onsequat</h6>
                        <div class="paragraph">Vesoz Admin</div>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 hideOnMd">
              <a href="blog-details.html">
                <div class="news-card position-relative">
                  <div class="img-wrapper mb-30">
                    <img src="{{asset('website/assets/images/home1/news/3.png')}}" alt="" />
                  </div>
                  <div class="content">
                    <div class="paragraph date">February 15, 2023</div>
                    <hh5 class="heading-5 mb-15">
                      Data Security With Multiple
                    </hh5>
                    <div class="paragraph mb-25">
                      There or are many the variations of passages of Lorem
                      Ipsum or available, but the majority have but the majority
                    </div>

                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <img src="{{asset('website/assets/images/home1/news/p3.png')}}" alt="" />
                      </div>
                      <div class="info">
                        <h6 class="heading-7">Mr. Onsequat</h6>
                        <div class="paragraph">Vesoz Admin</div>
                      </div>
                    </div>
                  </div>
                  <div class="circle-1 position-absolute"></div>
                  <div class="circle-2 position-absolute"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-----------------Latest News & Articles Section ENd------------------->
      <div class="space120"></div>


      

@endsection