<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Tramo 2</title>
  <link rel="stylesheet" href="assets/css/miestilo.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-2 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">

      <?php if (session()->getFlashdata('success')) : ?>
        <div class='alert alert-success alert-dismissible'>
          <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          <?= session()->getFlashdata('success'); ?>
        </div>
      <?php endif; ?>

      <div class="card-header text-center">
        <h2>Registrarse</h2>
      </div>
      <div class="card-body">



        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="registrar">
          <?= csrf_field(); ?>

          <div class="card-body justify-content-center">
            <div class="form">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input name="nombre" type="text" class="form-control" placeholder="nombre">

              <?php if ($validation->getError('nombre')) : ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('nombre'); ?>
                </div>
              <?php endif ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
              <input type="text" name="apellido" class="form-control" placeholder="apellido">

              <?php if ($validation->getError('apellido')) : ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('apellido'); ?>
                </div>
              <?php endif ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" placeholder="correo@algo.com">

              <?php if ($validation->getError('email')) : ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('email'); ?>
                </div>
              <?php endif ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Usuario</label>
              <input type="text" name="usuario" class="form-control" placeholder="usuario">

              <?php if ($validation->getError('usuario')) : ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('usuario'); ?>
                </div>
              <?php endif ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input name="pass" type="password" class="form-control" placeholder="password">

              <?php if ($validation->getError('pass')) : ?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('pass'); ?>
                </div>
              <?php endif ?>
            </div>
            <input type="submit" value="Guardar" class="btn btn-success">
            <input type="reset" value="Cancelar" class="btn btn-danger">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>