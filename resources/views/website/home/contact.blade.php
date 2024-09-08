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
            <h2 class="heading-2">Contact Us</h2>
            <h6 class="heading-6">
              <a href="index.html">Home</a> / <a href="#">Contact</a>
            </h6>
          </div>
        </div>
      </section>
      <!-- ---------------Sub Heder Banner---------------- -->

      <!------------ Touch section ------------>
      <section id="touch" class="container">
        <div class="space120"></div>
        <div
          class="section-heading d-flex flex-column align-items-center justify-content-center"
        >
          <div class="heading-2">Get In Touch</div>
          <div class="paragraph">
            On the other hand denounce righteous indignation dislike mens who
            beguiled and demoralized charmso pleasure
          </div>
        </div>

        <div class="touch__contact">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="touch__contact--address touch__card">
                <div class="touch__contact--address--icon icon">
                  <img src="{{asset('website/assets/images/contact/icon/address.png')}}" alt="address" />
                </div>
                <span class="touch__contact--address--header header">
                  Office Address
                </span>
                <span class="touch__contact--address--desc desc">
                  420 Love Street 133/2 Mirpur, Nevis Caribbean Dhaka
                </span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="touch__contact--phone--number touch__card active">
                <div class="touch__contact--address--icon icon">
                  <img
                    src="{{asset('website/assets/images/contact/icon/telephone.png')}}"
                    alt="telephone"
                  />
                </div>
                <span class="touch__contact--address--header header">
                  Phone Number
                </span>
                <div class="touch__contact--address--desc desc">
                  <div>+(066) 19 5017 800</div>
                  <div>+(088) 29 6027 900</div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="touch__contact--mail touch__card">
                <div class="touch__contact--address--icon icon">
                  <img src="{{asset('website/assets/images/contact/icon/mail.png')}}" alt="address" />
                </div>
                <div class="touch__contact--address--header header">
                  Send us mail
                </div>
                <div class="touch__contact--address--desc desc">
                  <div>info.contact@gmail.co</div>
                  <div>name@website.com</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!------------ Touch section ------------>
      <div class="space120"></div>
      <!---------- Contact form -------------->
      <section id="contact" class="container">
        <div class="row g-4">
          <div class="col-lg-7">
            <div class="contact__form">
              <div class="contact__form--header mb-20">
                Have any Question On Mind!
              </div>
              <div class="contact__form--desc mb-25">
                Your email address will not be published. Required fields are
                marked
              </div>

              <div>
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
                        type="text"
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
                  <!-- <div class="space120"></div> -->
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.431146149303!2d90.37833107599687!3d23.874325584006208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c53e92f19a3d%3A0x1c85b210e403a0d6!2sSolutya%20Pvt.%20Ltd.!5e0!3m2!1sen!2sbd!4v1686814639011!5m2!1sen!2sbd"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <!---------- Contact form -------------->
	  
	  
	  

@endsection