<?php
// form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah_order = $_POST['jumlah_order'];
    $alamat = $_POST['alamat'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $no_hp = $_POST['no_hp'];

    echo "<div class='alert alert-success mt-3'>Pesanan Anda berhasil dibuat!</div>";
    echo "<p><strong>Jumlah Pesanan:</strong> $jumlah_order</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Metode Pembayaran:</strong> $metode_pembayaran</p>";
    echo "<p><strong>Nomor HP:</strong> $no_hp</p>";

    // refresh ke halaman utama
    header("Refresh: 3; url=index.php"); 
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amanda's Closet - Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: saddlebrown;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center text-white">Checkout</h2>
      
      <!-- Form untuk Checkout -->
      <form method="POST" action="">
        <div class="mb-3">
          <label for="jumlah_order" class="form-label text-white">Jumlah Pesanan</label>
          <input type="number" class="form-control" id="jumlah_order" name="jumlah_order" required>
        </div>
        
        <div class="mb-3">
          <label for="alamat" class="form-label text-white">Alamat Pengiriman</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        
        <div class="mb-3">
          <label for="metode_pembayaran" class="form-label text-white">Metode Pembayaran</label>
          <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="">Pilih Metode Pembayaran</option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="COD">COD</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="no_hp" class="form-label text-white">Nomor HP</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
