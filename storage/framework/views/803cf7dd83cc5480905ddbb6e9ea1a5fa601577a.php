<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <style>
      header {
        font-size: larger;
        letter-spacing: 2px;
        width:100%;
        background-color:hsl(0, 0%, 100%);
        color:rgb(0, 0, 0);
        border-bottom: 1px solid gray;
        padding:25px;
      }

      .about,
      .donation,
      .home,
      .adoption {
        float: right;
        padding-left: 10px;
      }

      a {
        text-decoration: none;
        color: rgb(0, 0, 0);
        margin-right: 10px;
      }

      .card img {
        height: 200px;
        object-fit: cover;
      }

      body {
          background-image: url('img/Desktop\ -\ 8.png');
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
      
    </style>

    <title>Adoption | Pet Rescue</title>
  </head>
  <body>
    <header class="sticky-top">
      <a class="navbar-brand" href="#">
        Pet Rescue
        <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
      </a>
      <a class="about us" href="<?php echo e(url('get_aboutUs')); ?>">About Us</a>
      <a class="adoption" href="#">Adoption</a>  
      <a class="donation" href="<?php echo e(url('get_donation')); ?>">Donation</a>
      <a class="home" href="<?php echo e(url('get_home')); ?>">Home</a> 
      </header>

    <section class="pets mb-5">
      <div class="container">
        <div class="row mt-5 text-center">
          <div class="col">
            <h2>Adoption</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="card h-100">
                <img src="img/Mama.jpeg" class="card-img-top" alt="Mama" />
                <div class="card-body">
                  <h5 class="card-title">Mama</h5>
                  <p class="card-text">
                      Betina, 1 tahun, Jakarta Timur
                  </p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                <img src="img/Lucy.jpeg" class="card-img-top" alt="Lucy" />
                <div class="card-body">
                  <h5 class="card-title">Lucy</h5>
                  <p class="card-text">
                      Betina, 8 bulan, Jakarta Selatan
                  </p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                <img src="img/vivi.jpg" class="card-img-top" alt="Vivi" />
                <div class="card-body">
                  <h5 class="card-title">Vivi</h5>
                  <p class="card-text">
                      Jantan, 4 tahun, Bekasi
                  </p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                <img src="img/Temmy.jpeg" class="card-img-top" alt="Temmy" />
                <div class="card-body">
                  <h5 class="card-title">Temmy</h5>
                  <p class="card-text">
                      Betina, 11 bulan, Jakarta Selatan
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="card h-100">
                <img src="img/kuma.jpg" class="card-img-top" alt="Kuma" />
                <div class="card-body">
                  <h5 class="card-title">Kuma</h5>
                  <p class="card-text">
                      Jantan, 4 tahun, Bogor
                  </p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                <img src="img/ghia.jpg" class="card-img-top" alt="Ghia" />
                <div class="card-body">
                  <h5 class="card-title">Ghia</h5>
                  <p class="card-text">
                      Betina, 5 bulan, Depok
                  </p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                    <img src="img/Bobby.jpg" class="card-img-top" alt="Bobby" />
                    <div class="card-body">
                      <h5 class="card-title">Bobby</h5>
                      <p class="card-text">
                          Jantan, 2 tahun, Jakarta Barat
                      </p>
                    </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                    <img src="img/baha.jpeg" class="card-img-top" alt="Baha" />
                    <div class="card-body">
                      <h5 class="card-title">Baha</h5>
                      <p class="card-text">
                          Jantan, 8 bulan, Depok
                      </p>
                    </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="card h-100">
                <img src="img/bibu.jpg" class="card-img-top" alt="Bibu" />
                <div class="card-body">
                  <h5 class="card-title">Bibu</h5>
                  <p class="card-text">
                      Jantan, 1 tahun, Jakarta Utara
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                    <img src="img/belang.jpg" class="card-img-top" alt="Belang" />
                    <div class="card-body">
                      <h5 class="card-title">Belang</h5>
                      <p class="card-text">
                          Betina, 10 bulan, Jakarta Selatan
                      </p>
                    </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                    <img src="img/zero.jpg" class="card-img-top" alt="Zero" />
                    <div class="card-body">
                      <h5 class="card-title">Zero</h5>
                      <p class="card-text">
                          Jantan, 1 tahun, Bogor
                      </p>
                    </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
                    <img src="img/ayi.jpeg" class="card-img-top" alt="Ayi" />
                    <div class="card-body">
                      <h5 class="card-title">Ayi</h5>
                      <p class="card-text">
                          Betina, 10 bulan, Bekasi
                      </p>
                    </div>
            </div>
          </div>
        </div>
        <center><a href="<?php echo e(url('get_formAdopt')); ?>" class="button mt-5">Adopsi</a></center>
      </div>
    </section>

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
            <!-- E-mail -->
            <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" type="button">
              <i class="bi bi-envelope"></i>
            </a>
          </section>
        </div>
        <p>&copy;2022 <strong>Pet Rescue Indonesia.</strong> All Rights Reserved.</p>
      </footer>
  </body>
</html>
<?php /**PATH C:\laravel\petRescue\resources\views/adoption.blade.php ENDPATH**/ ?>