<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
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
    <h2>Daftar Transaksi</h2>
    <hr>
    <a href="index.php?&transaction=AddTransaction" class = "btn btn-success">Tambah data</a>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No_Faktur</th>
                <th>Nama Pelanggan</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Bayar</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($data as $data){
                 ?>
                <tr>
                    <td><?php echo $nomor++;?></td>
                    <td><?php echo $data['No_Faktur']; ?></td>
                    <td><?php echo $data['Nm_Pelanggan']; ?></td>
                    <td><?php echo $data['Nm_Barang']; ?></td>
                    <td><?php echo $data['Jumlah']; ?></td>
                    <td><?php echo number_format($data['Bayar'],0, '.','.')?></td>
                    <td><?php echo $data['Tanggal']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcId_PelangganslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>