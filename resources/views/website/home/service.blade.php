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
          <h2 class="heading-2">Our Services</h2>
          <h6 class="heading-6">
            <a href="index.html">Home</a> / <a href="#">Services</a>
          </h6>
        </div>
      </div>
    </section>
    <!-- ---------------Sub Heder Banner---------------- -->

    <main id="service">
      <!------------Exclusive-----Service Cards------------start------>
      <section>
        <div class="container">
          <div
            class="section-heading d-flex flex-column align-items-center justify-content-center"
          >
            <div class="space120"></div>
            <h2 class="heading-2">We Help People & Small Business</h2>

            <div class="paragraph">
              On the other hand denounce righteous indignation dislike mens who
              beguiled and demoralized charmso pleasure
            </div>
          </div>
        </div>

        <div class="container">
          <div class="service-cards row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/1.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Discuss project estimation</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/2.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Manage IT services</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/3.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Optimize IT system</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/4.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Software Developer</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/5.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Cloud Computing</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="service-card individual-card">
                <div class="icon-wrapper">
                  <img src="{{asset('website/assets/images/service/6.png')}}" alt="" />
                </div>

                <h5 class="heading-6">Apps Development</h5>

                <div class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                  do eiusmod tempor incididunt ut labore et dolore
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!------------Exclusive-----Service Cards------------end----->
      <!---------------subscrive -----banner-------start--------->

      <div class="space120"></div>
      <div class="container">
        <section class="subscribe position-relative">
          <div class="subscribe-area">
            <h2 class="heading-2 mb-30">SolSoft source in IT services</h2>

            <div class="paragraph mb-40">
              Sed perspiciatis unde omnis natus voluptate accusantiuy doloreue
              laudantium
            </div>

            <form action="#">
              <div
                class="d-flex flex-md-row justify-content-between align-items-center"
              >
                <input type="email" name="email" placeholder="Email Address" />

                <a href="#">
                  <span> Subscribe </span>
                </a>
              </div>
            </form>
          </div>
          <div class="overed-image position-absolute">
            <img src="{{asset('website/assets/images/service/s.png')}}" alt="" />
          </div>
          <div class="overed-image position-absolute overed-image-2">
            <img src="{{asset('website/assets/images/service/p.png')}}" alt="" />
          </div>
        </section>
      </div>
      <!---------------subscrive -----banner------------end--->

      <!-----------------Testimonials------------------->

      <div id="testimonials" class="service__testimonials">
        <div class="space120"></div>
        <div class="container">
          <div class="mobile-view">
            <h6 class="heading-6 primary-color">Our Feedbacks</h6>
            <h2 class="heading-2">What Our Clients Say About Us</h2>
            <!-- <div class="divider"></div> -->
          </div>
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="testimonial-slider-for">
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/service/testimonial/1.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/service/testimonial/2.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="testimonial-avatar">
                  <img
                    src="{{asset('website/assets/images/service/testimonial/1.png')}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
              </div>
            </div>
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
          </div>
        </div>
      </div>
      <!-----------------Testimonials------------------->

      <div class="space120"></div>
    </main>

    
	

@endsection