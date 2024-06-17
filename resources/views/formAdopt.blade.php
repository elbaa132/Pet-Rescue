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
      .container {
        width: 700px;
        /* background-color: lightblue;
        border-radius: 25px;
        padding: 20px; */
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
      <a class="about" href="{{url('get_aboutUs')}}">About Us</a>
      <a class="adoption" href="{{url('get_adoption')}}">Adoption</a>
      <a class="donation" href="{{url('get_donation')}}">Donation</a>
      <a class="home" href="{{url('get_home')}}">Home</a>
    </header>

    <div class="container">
      <h3 class="m-5 text-center">Adoption Form</h3>

      <!-- Data Calon Adopter -->
      <h5 class="text-start">Data Calon Adopter</h5>
      <form class="row g-3" action="/store_formAdopt" method="post">
            {{ csrf_field() }}
                <div class="col-12">
                <label for="inputName4" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputName4"  name="nama"  />
                </div>
                <div class="col-12">
                <label for="inputAddress4" class="form-label">Alamat</label>
                <input type="text"
                    class="form-control"
                    placeholder="Nama jalan, RT, RW, dan nomor rumah"
                    id="inputAddress4"
                    name="alamat"
                />
                </div>
                <div class="col-sm-5">
                <label for="inputKelurahan4" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="inputKelurahan4" name="kelurahan" />
                </div>
                <div class="col-sm-5">
                <label for="inputuKecamatam4" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="inputKecamatan4" name="kecamatan" />
                </div>
                <div class="col-sm-2">
                <label for="inputKodePos4" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="inputKodePos4" name="kode_pos" />
                </div>
                <div class="col-md-6">
                <label for="inputPhone4" class="form-label">Nomor Telepon/HP</label>
                <input type="text" class="form-control" id="inputProfesi4" name="no_telepon"/>
                </div>
                <div class="col-md-6">
                <label for="inputProfesi4" class="form-label">Profesi/Pekerjaan</label>
                <input type="text" class="form-control" id="inputProfesi4" name="profesi"/>
                </div>
                <div class="col-12">
                <label for="inputEmail4" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="inputEmail4"  name="email"/>
                </div>
            <!-- Data Hewan yang Akan Diadopsi -->
            <h5 class="text-start mt-5">Data Hewan yang Akan Diadopsi</h5>
            <form class="row g-3">
                <div class="col-md-4">
                <label for="inputHewan" class="form-label">Jenis Hewan</label>
                <select id="inputHewan" class="form-select" name="jenis_hewan">
                    @foreach($hewan as $h)
                        <option value="{{$h->id_hewan}}">{{$h->jenis_hewan}} - {{$h->nama_hewan}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-12">
                <label for="inputAlasan4" class="form-label">Alasan Adopsi </label>
                <input type="text" class="form-control" name="alasan"/>
                </div>
                <!-- <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" />
                    <label class="form-check-label mb-3" for="gridCheck">
                    Dengan ini saya menyatakan ketersediaan saya untuk mengadopsi hewan dari Pet Rescue Indonesia dan saya bersedia untuk dihubungi lebih lanjut oleh pihak Pet Rescue Indonesia untuk melengkapi dokumen-dokumen yang diperlukan.
                    </label>
                </div>
                </div> -->
                <div class="col-12 mb-5 text-center">
                <button type="submit" class="button">Submit</button>
                </div>
      </form>
    </div>

    <footer class="text-center text-white bg-dark p-3">
      <!-- Grid container -->
      <div class="container">
        <section mb-2>
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            type="button"
          >
            <i class="bi bi-facebook"></i>
          </a>
          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            type="button"
          >
            <i class="bi bi-instagram"></i>
          </a>
          <!-- E-mail -->
          <a
            class="btn btn-link btn-floating btn-lg text-white m-1"
            href="#!"
            type="button"
          >
            <i class="bi bi-envelope"></i>
          </a>
        </section>
      </div>
      <p>
        &copy;2022 <strong>Pet Rescue Indonesia.</strong> All Rights Reserved.
      </p>
    </footer>
  </body>
</html>

