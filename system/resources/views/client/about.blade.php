<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

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
      <img src="{{url('public')}}/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    @include('client.section.header')
    <!-- end header section -->
  </div>

  <!-- about section -->

   <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              <h3>"Semua Orang Disambut Di Gyments Favorit Kalbar"</h3>
            Gyments Terbaik Kalbar, Gyments Terdekat Saya, Gyments 24/7 Dekat Saya. Dengan keanggotaan fleksibel yang terjangkau dan waktu buka 24 jam, termasuk peralatan dan kelas gym berkualitas, inilah beberapa alasan mengapa THE GYMENTS adalah gym favorit kalbar.

            Misi kami adalah membantu orang di mana saja untuk menjalani hidup yang sehat dan bahagia setiap hari.

            Kami berusaha untuk menyediakan fasilitas yang jauh dari mengintimidasi, tetapi yang terasa memotivasi, menyenangkan dan energik, apa pun rutinitas latihan Anda.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{url('public')}}/images/about-img.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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