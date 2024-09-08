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
            <h2 class="heading-2">Blog</h2>
            <h6 class="heading-6">
              <a href="index.html">Home</a> / <a href="#">Blog</a>
            </h6>
          </div>
        </div>
      </section>
      <!-----------------Sub Heder Banner------------------>

      <section id="blog" class="container">
        <div
          class="section-heading d-flex flex-column align-items-center justify-content-center"
        >
          <div class="space120"></div>
          <h2 class="heading-2">Latest News & Articles</h2>

          <div class="paragraph">
            On the other hand denounce righteous indignation dislike mens who
            beguiled and demoralized charmso pleasure
          </div>
          <!-- <div class="space120"></div> -->
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <a href="blog-details.html">
              <div class="blog__ex--service--card position-relative">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
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
              <div class="blog__ex--service--card position-relative active">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/2.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
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
              <div class="blog__ex--service--card position-relative">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/3.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
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
              <div class="blog__ex--service--card position-relative">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
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
              <div class="blog__ex--service--card position-relative">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/2.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
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
              <div class="blog__ex--service--card position-relative">
                <div class="blog__img--wrapper mb-30">
                  <img src="{{asset('website/assets/images/blog-grid/3.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="blog__content">
                  <div class="blog__content--date">February 15,2023</div>
                  <a href="blog-details.html" class="heading">
                    Data Security With Multiple
                  </a>

                  <div class="blog__paragraph mb-25">
                    Sed quis sagittis turpis, dignissim ultrices sem. Ut
                    fermentum velit eget justo fringillabibe ndum integer rutrum
                    condi
                  </div>
                  <div class="blog__author">
                    <img src="{{asset('website/assets/images/blog/author/1.png')}}" alt="author" />
                    <div class="blog__author--details">
                      <div class="blog__author--details--name">Mr.Onsequat</div>
                      <div class="blog__author--details--work">Vesoz Admin</div>
                    </div>
                  </div>
                </div>
                <div class="circle-1 position-absolute"></div>
                <div class="circle-2 position-absolute"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="space120"></div>
      </section>

      
	  

@endsection