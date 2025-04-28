<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-success">
    <div class="container mt-3">
    <nav class="navbar navbar-expand-lg bg-success">
        <a class="navbar-brand text-light" href="index.php"><h4><strong>Home</strong></h4></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ms-5" >
              <a class="nav-link active text-light " href="index.php?navbar=Product"><h4>Barang</h4></a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link active text-light"  href="index.php?navbar=Customer"><h4>Pelanggan</h4></a>
            </li>
            <li class="nav-item ms-5">
              <a class="nav-link active text-light"  href="index.php?navbar=Transaction"><h4>Transaksi</h4></a>
            </li>
          </ul>
        </div>
        </div>
    </nav>  
  </div>
</div>
    <div class="container mt-3">
        <h2>Edit Pelanggan</h2>
    <form method="POST">
        <div class="mb-3">
        <label for="Id_Pelanggan" class="form-label">Kode Pelanggan:</label>
        <input type="text" name="Id_Pelanggan" class="form-control" id="Id_Pelanggan" value="<?php echo ($data ["Id_Pelanggan"]); ?>" readonly>
        </div>
        <div class="mb-3">
        <label for="Nm_Pelanggan" class="form-label">Nama Pelanggan:</label>
        <input type="text" name="Nm_Pelanggan" class="form-control" id="Nm_Pelanggan" value="<?php echo ($data['Nm_Pelanggan']);?>">
        </div>
        <div class="mb-3">
        <label for="Alamat" class="form-label">Alamat:</label>
        <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?php echo $data['Alamat'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Pelanggan</button>
        <a href="Pelanggan.php" class="btn btn-danger"> kembali</a>
    </form>
    </div>
</body>
</html>