<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Bootstrap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />

  
    <style>
      body{
        background-image:url("/img/Desktop - 9.jpg");

      }
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
        background-color: rgb(255, 255, 255);
        height: 300px;
      }
      .spacer {
        padding-bottom: 80px;
      }
      
      .cont {
        background-color: rgb(223, 223, 223);
        height: fit-content;
        padding: 50px;
        width: fit-content;
        margin: auto;
        margin-bottom: 50px;
        border-radius: 20px;
      }

      form {
        width:500px;
      }

     .kolom{
        display: inline-block;
        margin-top: 15px;
        padding: 8px 40px 8px 40px;
        /* border-radius: 10rem; */
       
        text-decoration: none;
        font-size: 1rem;
        /* letter-spacing: 0.15rem; */
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
     }
      
      .button {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 40px 8px 40px;
        border-radius: 10rem;
        background-color: black;
        color: white;
        text-decoration: none;
        font-size: 1rem;
        letter-spacing: 0.15rem;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        z-index: 1;
        border: none;
      }

      .button:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
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
        color: white;
      }
      
      .button:hover:before {
        width: 100%;
      }

    </style>
    </head>
    <body>
    @include('sweetalert::alert')
    <header class="sticky-top">
      <a class="navbar-brand" href="#">
        Pet Rescue
        <img
          src="img/logo.png"
          alt=""
          width="30"
          height="24"
          class="d-inline-block align-text-top"
        />
      </a>
      <a class="about us" href="{{url('get_aboutUs')}}">About Us</a>
      <a class="adoption" href="{{'get_adoption'}}">Adoption</a>
      <a class="donation" href="#">Donation</a>
      <a class="home" href="{{url('get_home')}}">Home</a>
      
    </header>

<!-- DONATION -->
      <!-- DONATION -->
      <section class="main text-center">
        <h3 class="text-dark p-2"><b>Donations</b></h3>
        <p>(Berdonasi untuk hewan yang membutuhkan pertolongan)</p> 
        <div class="cont">
          <h5><b>Silakan isi form dibawah ini</b></h5>
         <div class="kolom">
         <form action="/store_donation" method="POST" enctype="multipart/form-data" class="row text-center">
          {{ csrf_field() }}
          <table align="center">
              <tr>
                <td align="left" class="pb-3">
                  <label class="form-label">Nama Lengkap:</label>
                  <input id="nama"  name="nama" type="text" class="form-control"/>
                </td>
              </tr>
              <tr>
                <td align="left" class="pb-3">
                  <label class="form-label">E-mail:</label>
                  <input id="email" name="email" type="text" class="form-control"  />
                </td>
              </tr>
              <tr>
                <td align="left" class="pb-3">
                  <label class="form-label">Nominal Donasi:</label>
                  <input id="donate" name="donate" type="text" class="form-control" placeholder="Contoh: 10000" />
                </td>
              </tr>
          </table><br>
            <p>
              Uang donasi dikirimkan ke nomor rekening: <br> Bank BCA <br> 11383057264 atas nama Pet Rescue Indonesia</p>

            <table align="center">
              <tr colspan="3">
                <td>
                  <br>
                <label for="formFile" class="form-label">Upload bukti transfer</label>
                <input type="file" name="file" class="form-control">
                </td>
              </tr>
             </table>

          <table align="center">
              <tr colspan="3" id="subbtn" >
                <td><input type="submit" class="button"></td><br>
              </tr>
          </table><br><br><br>
         </form>
         </div>
          
           
        </div>
    </div>
<!-- footer -->
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
           
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous">
    </script>
      
    
  </body>
</html>
