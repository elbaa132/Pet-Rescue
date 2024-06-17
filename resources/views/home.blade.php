<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
    
    <title>Home | Pet Rescue</title>
    
    <style>
      * {
        margin: 0%;
        padding: 0;
      }
      
      header{
        font-size: larger;
        letter-spacing: 2px;
        width:100%;
        background-color:hsl(0, 0%, 100%);
        color:rgb(0, 0, 0);
        border-bottom: 1px solid gray;
        padding:25px;
      }
            
      a{
        text-decoration: none;
        color: rgb(0, 0, 0);
        margin-right: 10px;
      }
      
      .about,.donation,.home,.adoption{
        float: right;
        padding-left: 10px;

      }
      
      .jumbotron{
        padding: 2rem 1rem;
        height: 150vh;
        border: 1px solid;
        background-image: url("/img/Pet3.jpeg");
        background-size: cover;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      
      .blockquote-footer {
        color: #fff;
        z-index:1;
        padding:20px 25px;
      }
      
      .carousel-contain {
        background-color: #fff;
      }
      .carousel-item img {
        width: 500px;
        height: 400px;
        object-fit: cover;
        padding: 25px 25px 25px 25px;
      }
      
      .button {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 40px 8px 40px;
        border-radius: 10rem;
        color: #fff;
        text-decoration: none;
        font-size: 1rem;
        letter-spacing: 0.15rem;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
      }
      
      .button:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        border-radius: 5rem;
        z-index: -2;
      }
      
      .button:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: rgb(77, 77, 77);
        transition: all 0.3s;
        border-radius: 5rem;
        z-index: -1;
      }
      
      .button:hover {
        color: #fff;
      }
      
      .button:hover:before {
        width: 100%;
      }
      
      
      .loc {
      padding: 1rem 1rem;
      height: 120vh;
      background-image: url("../img/catdog2.jpeg");
      background-size: cover;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    
    a {
      text-decoration: none;
    }
    
    a.one:visited {
      color: #000000;
    }
    
    a.one:hover {
      color: #0b0edf;
    }
    
    .main {
      background-image: url(img/cover.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      height: 500px;
      width: auto;
    }
    
    .partner img {
      max-width: 200px;
      max-height: 200px;
    }
    
    </style>

</head>
<body>
  @include('sweetalert::alert')
  <header class="sticky-top">
    <a class="navbar-brand" href="#">
      Pet Rescue
      <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
    </a>
    <a class="about"href="{{url('get_aboutUs')}}">About Us</a>
    <a class="adoption" href="{{'get_adoption'}}">Adoption</a>
    <a class="donation" href="{{url('get_donation')}}">Donation</a>
    <a class="home" href="#">Home</a>   
    
  </header>
  
  <div class="jumbotron text-center">
    <div class="container-fluid">
      <h1 class="text-white"><strong>Welcome to</strong> Pet Rescue</h2>
      <h1 class="display-4 text-white">Speak for the voiceless</h1>
      <figure class="text-white">
        <blockquote class="blockquote">
            <p>"</p>
            <p>Some people talk to animals.</p>
            <p>Not many listen though.</p>
            <p>That's the problem.</p>
            <p>"</p>
          </blockquote>
          <figcaption class="blockquote-footer">
              A.A. Milne, <cite title="Source Title">Winnie-the-Pooh</cite>
          </figcaption>
        </figure>
    </div>
  </div>

  <!-- Wrap -->
  <!-- Carousel Animal Slider -->
  <div class="container-fluid carousel-contain py-4">
        <div class="container">
            <h2 class="text-center mb-2">These Animals Need Your Help</h2>
            <div id="carouselExampleIndicators" class="carousel slide col-lg-6 offset-lg-3" >
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/Dog1.jpeg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/Cat1.jpeg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/Dog2.jpeg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/Cat2.jpeg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/Dog4.jpeg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/Cat4.jpeg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                </div>
            </div>
        </div>
        <center><a href="{{url('get_donation')}}" class="button">Donate</a></center>
    </div>
    <!-- End of Carousel -->

  <!-- Location -->
  <div class="loc text-center">
    <div class="container">
      <h2 class="text-white pb-5">Location</h2>
      <div class="card">
        <center>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63449.661736972776!2d106.75842538290034!3d-6.315654618114536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e69ee3e065d4f6b%3A0xe176f81a31564166!2sUniversitas%20Pembangunan%20Nasional%20Veteran%20Jakarta%2C%20MQMV%2BP94%2C%20Jalan%20RS.%20Fatmawati%20Raya%2C%20Pd.%20Labu%2C%20Kec.%20Cilandak%2C%20Depok%20City%2C%20West%20Java%2012450!3m2!1d-6.315741099999999!2d106.7934451!5e0!3m2!1sen!2sid!4v1653672758243!5m2!1sen!2sid"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="card-img-top"
            alt="loc1"
            style="width: 200px"
            style="display: block; margin: auto"
          ></iframe>
        </center>
        
        <div class="card-body">
          <p class="card-text">
            <a
              class="one"
              href="https://goo.gl/maps/DVGNqz5FzYM87bRr9"
              class="text-dark"
              ><i class="bi bi-geo-alt-fill text-danger"></i> Jl. Rs.
              Fatmawati, Pondok Labu, Jakarta Selatan, DKI Jakarta, 12450</a>
          </p>
        </div>
      </div>
    </div>
  </div>
    <!-- Partner -->
    <div class="partner">
      <div class="container">
        <div class="row text-center p-5">
          <div class="col">
            <h2>Partner</h2>
          </div>
        </div>
        <div class="row row-2 row-sm-2 row-md-3 gy-5 pb-5 text-center">
          <div class="col">
            <img src="img/vet1.jpg" class="rounded-circle">
          </div>
          <div class="col">
            <img src="img/900_(33).jpg" class="rounded-circle">
          </div>
          <div class="col">
            <img src="img/635.jpg" class="rounded-circle">
          </div>
          <div class="col">
            <img src="img/v987-11a.jpg" class="rounded-circle">
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center text-white bg-dark p-3">
      <!-- Grid container -->
      <div class="container">
        <section mb-2>
          <!-- Facebook -->
          <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" type="button">
            <i class="bi bi-facebook"></i>
          </a>
          <!-- Instagram -->
          <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" type="button">
            <i class="bi bi-instagram"></i>
          </a>
          <!-- Instagram -->
          <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" type="button">
            <i class="bi bi-envelope"></i>
          </a>
        </section>
      </div>
      <p>&copy;2022 <strong>Pet Rescue Indonesia.</strong> All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
