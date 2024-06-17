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

    <title>About Us</title>

    <style>
      header {
        font-size: larger;
        letter-spacing: 2px;
        width: 100%;
        background-color: hsl(0, 0%, 100%);
        color: rgb(0, 0, 0);
        border-bottom: 1px solid gray;
        padding: 25px;
      }

      a {
        text-decoration: none;
        color: rgb(0, 0, 0);
        margin-right: 10px;
      }

      .about,
      .donation,
      .home,
      .adoption {
        float: right;
        padding-left: 10px;
      }

      .main {
        background-color: rgb(223, 223, 223);
        height: 300px;
      }

      .main img {
        width: 600px;
      }

      .main2 {
        height: 300px;
      }
    </style>
  </head>
  <body>
    <header class="sticky-top">
      <a class="navbar-brand" href="#">
        Pet Rescue
        <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
      </a>
      <a class="about us" href="#">About Us</a>
      <a class="adoption" href="<?php echo e('get_adoption'); ?>">Adoption</a>
      <a class="donation" href="<?php echo e(url('get_donation')); ?>">Donation</a>
      <a class="home" href="<?php echo e(url('get_home')); ?>">Home</a>
      
    </header>

    <div class="main text-center">
      <h1 class="p-5">About Us</h1>
      <img src="img/nathalie-jolie-nKzeG3iE_Qg-unsplash.jpg" alt="" class="pb-5" />
    </div>

    <div class="main2"></div>

    <div class="text text-center text-black">
      <div class="container">
        <p class="fs-5">
          Pet Rescue Indonesia merupakan suatu komunitas peduli kucing dan anjing yang didirikan pada tanggal 27 mei 2015 dan berlokasi di Jakarta Selatan. Komunitas ini memiliki tujuan untuk membantu kucing dan anjing jalanan yang
          membutuhkan bantuan akibat kurang gizi, sakit ataupun keterlantaran karena ditinggal oleh pemilik di jalanan.
        </p>
        <br />
        <h2 class="p-2">Contact</h3>
        <p class="fs-5 pb-4">
          Telepon: 081324576890 <br />
          E-mail : petrescueid@gmail.com <br />
          Instagram : petrescue.id <br />
          Facebook : Pet Rescue Indonesia
        </p>
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
  </body>
</html>
<?php /**PATH C:\laravel\petRescue\resources\views/aboutUs.blade.php ENDPATH**/ ?>