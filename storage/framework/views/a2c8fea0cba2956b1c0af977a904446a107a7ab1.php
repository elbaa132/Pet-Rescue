<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

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
          <?php $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <th scope="col"><?php echo e($p->name); ?></th>
              <th scope="col"><?php echo e($p->email); ?></th>
              <th scope="col"><?php echo e($p->nominal); ?></th>
              <th scope="col"><?php echo e($p->file_upload); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
          <?php $__currentLoopData = $adopsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <th scope="col"><?php echo e($p->name); ?></th>
              <th scope="col"><?php echo e($p->alamat); ?></th>
              <th scope="col"><?php echo e($p->email); ?></th>
              <th scope="col"><?php echo e($p->jenis_hewan); ?></th>
              <th scope="col"><?php echo e($p->nama_hewan); ?></th>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
      </table>
    </div>
  </body>
</html>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laravel\petRescue\resources\views/dashboard.blade.php ENDPATH**/ ?>