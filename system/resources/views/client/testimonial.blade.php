<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{{url('public')}}/images/favicon.png" type="image/x-icon">

  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GymFen</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->
  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    @include('client.section.header')
    <!-- end header section -->
  <!-- client section -->
    <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      Barangnya sesuai dengan pemesanan, bakalan langganan disini deh. &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('public')}}/images/client.jpg " alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Kev febriano
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      saya pesan barangnya hari senin dan ga butuh waktu lama hari jumat barangnya udah datang aja nih, pokoknya best la. &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('public')}}/images/client.jpg " alt="">
                  </div>
                  <div class="name">
                    <h5>
                      alexander
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      Adminnya fastrespon terus kalo ditanya pasti dijawab dengan ramah banget ga emosian hehe. &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('public')}}/images/client.jpg " alt="">
                  </div>
                  <div class="name">
                    <h5>
                      johnsand
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

  @include('client.section.info')

  <!-- end info section -->
  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->
  <!-- jQery -->
  <script src="{{url('public')}}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{url('public')}}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{url('public')}}/js/custom.js"></script>
</body>

</html>