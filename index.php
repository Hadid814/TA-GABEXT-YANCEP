<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <!-- pesan kesalahan -->
  <?php
  session_start();
  if(isset($_SESSION['error'])) {
  ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <center><?-$_SESSION['error']; ?></center>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php } unset($_SESSION['error']); ?>

    <div class="card col-sm-4 mx-auto mt-5">
    <div class="card-header">
        Form Login
    </div>
    <div class="card-body">
        <form method="POST" action="prose/login_proses.php" autocomplete="off">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" autofocus>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" autofocus>
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select name="level" id="level" class="form-control">
                <option value="">-- Masuk sebagai --</option>
                <option value="2">Operator</option>
                <option value="1">Admin</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2">Masuk</button>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>