@extends('master')

@section('content')

<section
style="
  background-image: url(images/sub-banner.png);
  background-color: rgb(255, 255, 255);
"
class="sub-header position-relative"
>
<div class="container">
  <div class="page-info position-absolute">
    <h2 class="heading-2">About Us</h2>
    <h6 class="heading-6">
      <a href="index.html">Home</a> / <a href="#">About</a>
    </h6>
  </div>
</div>
</section>
<!-- ---------------Sub Heder Banner---------------- -->

<main id="about">
<div class="space120"></div>
<div class="container">
  <!-- ---------------About---------------- -->
  <div class="hero-about">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="pl-45">
          <h6 class="heading-6 primary-color mb-15">About Our Company</h6>
          <h2 class="heading-2 dark-color mb-20">
            We Execute Our ideas From The Start to
            <span class="primary-color">Finish</span>
          </h2>
          <div class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris
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
              <span> Read More </span>
            </a>

            <div class="call-phone d-flex lign-items-center">
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

      <div class="col-lg-6 position-relative right">
        <div class="row g-4">
          <div class="col-md-9">
            <img
              data-value="6"
              src="{{asset('website/assets/images/about/1.png')}}"
              class="img-fluid img-object"
              alt=""
            />
          </div>
          <div class="col-4 col-md-3">
            <div class="experience">
              <h6 class="heading-6">
                2017 from our <br />
                experience
              </h6>

              <a href="#" class="since"> Since </a>
            </div>
          </div>
        </div>

        <div class="savings position-absolute">
          <div class="icon_wrapper">
            <i class="fa-solid fa-bullseye"></i>
          </div>

          <h5 class="heading-5">Data Analysis</h5>

          <h2 class="heading-2">$48,662.44</h2>
          <h6 class="heading-7 mb-30">Your monthly saving</h6>
          <h2 class="heading-2">2563+1024</h2>
          <h6 class="heading-7">World wide clients</h6>
        </div>
      </div>
    </div>
  </div>

  <!-- ---------------About---------------- -->
</div>
<div class="space120 mb-20 mb-md-0"></div>
<!-----------------Fan area------------------>
<section
  style="background-image: url(images/about/pattern.png)"
  class="fan-area d-flex align-items-center justify-content-center"
>
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-6 col-xl-3">
        <div class="count-card">
          <div class="d-flex">
            <div class="icon_wrapper">
              <i class="fa-regular fa-thumbs-up"></i>
            </div>

            <div class="content">
              <h2 class="heading-2 count-card-counter">5420</h2>

              <h6 class="heading-7">Work Reviews</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="count-card">
          <div class="d-flex">
            <div class="icon_wrapper">
              <i class="fa-solid fa-people-group"></i>
            </div>

            <div class="content">
              <h2 class="heading-2  count-card-counter">540000 </h2>
             

              <h6 class="heading-7">Happy Customers</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="count-card">
          <div class="d-flex">
            <div class="icon_wrapper">
              <i class="fa-solid fa-trophy"></i>
            </div>

            <div class="content">
              <h2 class="heading-2 count-card-counter">420</h2>

              <h6 class="heading-7">Win Of Awards</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="count-card">
          <div class="d-flex">
            <div class="icon_wrapper">
              <i class="fa-solid fa-receipt"></i>
            </div>

            <div class="content">
              <h2 class="heading-2 count-card-counter">1320</h2>

              <h6 class="heading-7">Project Complete</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----------------Fan area------------------>

<!-- ---------------Exclusive Service Start------------------>

<section id="exclusive-service" class="about__ExclusiveService">
  <div class="container">
    <div
      class="section-heading d-flex flex-column align-items-center justify-content-center"
    >
      <div class="space120"></div>
      <h2 class="heading-2">We Provide Exclusive Service</h2>

      <div class="paragraph">
        On the other hand denounce righteous indignation dislike mens who
        beguiled and demoralized charmso pleasure
      </div>
    </div>
  </div>

  <div
    style="background-image: url(images/about/exclusive-service/bg.png)"
    class="ex-service-cards"
  >
  <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <a href="service-details.html">
          <div class="ex-service-card position-relative">
            <div class="img-wrapper mb-30 position-relative">
              <img
                src="{{asset('website/assets/images/about/exclusive-service/1.png')}}"
                alt=""
                class="img-fluid"
              />
              <div class="icon position-absolute">
                <img
                  src="{{asset('website/assets/images/about/exclusive-service/icons/1.svg')}}"
                  alt=""
                />
              </div>
            </div>

            <div class="content">
              <p class="heading-4 mb-20">App Development</p>

              <div class="paragraph mb-30">
                Sed quis sagittis turpis, dignissim ultrices sem. Ut
                fermentum velit eget justo fringillabibe ndum integer
                rutrum condi
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
        <div class="col-md-6 col-lg-4">
          <a  href="service-details.html">
          <div class="ex-service-card active position-relative">
            <div class="img-wrapper mb-30 position-relative">
              <img
                src="{{asset('website/assets/images/about/exclusive-service/2.png')}}"
                alt=""
                class="img-fluid"
              />
              <div class="icon position-absolute">
                <img
                  src="{{asset('website/assets/images/about/exclusive-service/icons/2.svg')}}"
                  alt=""
                />
              </div>
            </div>

            <div class="content">
              <p class="heading-4 mb-20">Data Analysis</p>

              <div class="paragraph mb-30">
                Sed quis sagittis turpis, dignissim ultrices sem. Ut
                fermentum velit eget justo fringillabibe ndum integer
                rutrum condi
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
       
        <div class="col-md-6 col-lg-4 hideOnMd">
          <a href="service-details.html">
          <div class="ex-service-card position-relative">
            <div class="img-wrapper mb-30 position-relative">
              <img
                src="{{asset('website/assets/images/about/exclusive-service/3.png')}}"
                alt=""
                class="img-fluid"
              />
              <div class="icon position-absolute">
                <img
                  src="{{asset('website/assets/images/about/exclusive-service/icons/3.svg')}}"
                  alt=""
                />
              </div>
            </div>

            <div class="content">
              <p class="heading-4 mb-20">Software Development</p>

              <div class="paragraph mb-30">
                Sed quis sagittis turpis, dignissim ultrices sem. Ut
                fermentum velit eget justo fringillabibe ndum integer
                rutrum condi
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
            src="{{asset('website/assets/images/about/exclusive-service/4.png')}}"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
      <div class="col-lg-6">
        <div
          style="
            background-image: url(images/about/exclusive-service/pt.png);
          "
        >
          <div class="space120"></div>
          <div class="content">
            <h6 class="heading-6">Business Process</h6>

            <h2 class="heading-2 mb-30">
              Easy Way Build Success your Business Plan
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
<!-----------------Team Members------------------->
<div id="team" class="about__team">
  <div class="container">
    <div
      class="section-heading d-flex flex-column align-items-center justify-content-center"
    >
      <div class="space120"></div>
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
                <img src="{{asset('website/assets/images/about/team/1.png')}}" alt="" />
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
                <img src="{{asset('website/assets/images/about/team/2.png')}}" alt="" />
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
                <img src="{{asset('website/assets/images/about/team/3.png')}}" alt="" />
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
                <img src="{{asset('website/assets/images/about/team/1.png')}}" alt="" />
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
                <img src="{{asset('website/assets/images/about/team/2.png')}}" alt="" />
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
                <img src="{{asset('website/assets/images/about/team/3.png')}}" alt="" />
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
<!-----------------Team Members------------------->
<div class="space120"></div>

<!-----------------Testimonials Section Start------------------->

<div id="testimonials" class="about__testimonials">
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
              src="{{asset('website/assets/images/home2/testimonial/1.png')}}"
              class="img-fluid"
              alt=""
            />
          </div>
          <div class="testimonial-avatar">
            <img
              src="{{asset('website/assets/images/home2/testimonial/2.png')}}"
              class="img-fluid"
              alt=""
            />
          </div>
          <div class="testimonial-avatar">
            <img
              src="{{asset('website/assets/images/home2/testimonial/1.png')}}"
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





@endsection