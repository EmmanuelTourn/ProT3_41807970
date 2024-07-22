<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Inicio de Sesión</title>
  <link rel="stylesheet" href="assets/css/miestilo.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .login-container {
      margin-top: 100px;
    }

    .login-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
      margin-bottom: 20px;
    }

    .login-form a {
      display: block;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>

<!-- mensaje de error--> 

<?php if(session()->getFlashdata('msg')):?>
  <div class="alert alert-warning">
    <?= session()->getFlashdata('msg')?>
  </div>
<?php endif;?>

<!-- Inicio formulario Login--> 
<body>
  <div class="container login-container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="login-form">
          <h2 class="text-center">Iniciar Sesión</h2>
          <form method="post" action="<?= base_url('auth'); ?>">
            <?= csrf_field(); ?>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Ingresa tu email" required>
            </div>
            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" id="pass" name="pass" class="form-control" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </form>
          <a href="<?= base_url('Registro') ?>" class="btn btn-link">¿No tienes una cuenta? Regístrate</a>
        </div>
        <?php if (session()->getFlashdata('errors') !== null) : ?>
          <div class="alert alert-danger my-3" role="alert">
            <?= session()->getFlashdata('errors'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>