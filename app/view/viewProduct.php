<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
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
    <h2>Daftar Barang</h2>
    <hr>
    <a href="index.php?&product=AddProduct" class = "btn btn-success">Tambah data <i class="bi bi-plus-square"></i></a>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($datap as $data){
                 ?>
                <tr>
                    <td><?php echo $nomor++;?></td>
                    <td><?php echo $data['Kd_Barang']; ?></td>
                    <td><?php echo $data['Nm_Barang']; ?></td>
                    <td><?php echo $data['Harga']; ?></td>
                    <td><?php echo $data['Stok']; ?></td>
                    <td>
                        <a href="index.php?&Kd_Barang=<?php echo $data['Kd_Barang']; ?>&product=UpdateProduct" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="index.php?&Kd_Barang=<?php echo $data['Kd_Barang']; ?>&product=DeleteProduct" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"><i class="bi bi-trash3"></i> Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcKd_BarangslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>