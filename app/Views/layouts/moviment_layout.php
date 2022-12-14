<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashbook</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap.min.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('public/assets/images/cifrao.png') ?>" style="width:3rem" class="d-inline-block align-text-top"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= site_url('dashboard') ?>/">Home</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" href="<?= site_url('moviment') ?>">Moviment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('')?>">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= site_url('')?>" >Users</a>
        </li>
      </ul>
    </div>
    <div class="text-end">
            <a href="<?= site_url('logout') ?>">Log out</a>
    </div>
  </div>
</nav>

    <?= $this->renderSection('table') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>