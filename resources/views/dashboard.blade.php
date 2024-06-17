<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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

    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Pet Rescue - Administrator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="create.html">Create</a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>

    <!-- Tabel Donasi -->
    <div class="container mt-5">
      <h3>Data Donasi</h3>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nominal</th>
            <th scope="col">Bukti Transfer</th>
             
          </tr>
          @foreach($donasi as $p)
          <tr>
              <th scope="col">{{$p->name}}</th>
              <th scope="col">{{$p->email}}</th>
              <th scope="col">{{$p->nominal }}</th>
              <th scope="col">{{$p->file_upload}}</th>
          </tr>
          @endforeach

        </thead>
       
      </table>
    </div>

    <!-- Tabel Adopsi -->
    <div class="container mt-5">
      <h3>Data Adopsi</h3>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">E-mail</th>
            <th scope="col">Jenis Hewan</th>
            <th scope="col">Nama Hewan</th>
          </tr>
          @foreach($adopsi as $p)
          <tr>
              <th scope="col">{{$p->name}}</th>
              <th scope="col">{{$p->alamat}}</th>
              <th scope="col">{{$p->email}}</th>
              <th scope="col">{{$p->jenis_hewan}}</th>
              <th scope="col">{{$p->nama_hewan}}</th>
          </tr>
          @endforeach
        </thead>
      </table>
    </div>
  </body>
</html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
