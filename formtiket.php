
<?php

if (isset($_POST["saveArtikel"])) {

    if (addArtikel($_POST) > 0) {
        echo "
      <script>
        alert('Data berhasil disimpan');
        document.location.href = 'index.php';
      </script>
      ";
    } else {
        echo "
      <script>
        alert('Data gagal disimpan. Cek Primary key tidak boleh sama atau unik');
        document.location.href = 'index.php';
      </script>
      ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Webpariwisata/assets/fontawesome-free/css/all.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/jquery/jquery-3.4.1.min.js"></script>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark mb-5 fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger text-tebal" href="index.php">Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?#artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buatArtikel.php">Buat Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="page-section mt-5">
<div class="modal fade" id="artikelAddModal">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Tiket Wisata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <input type="text" name="tempat" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="tempat" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="jadwal" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="jadwal" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="pemesan" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="pemesan" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="jumlah_tiket" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="jumlah tiket" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="total_harga" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="Total" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="harga_booking" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="tanggal booking" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="status_bayar" id="nama" class="form-control" autofocus="true" autocomplete="off" placeholder="status bayar" required>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="saveArtikel" class="btn btn-success">
                        <i class="fas fa-save" style="margin-right: 10px;"></i>Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</section>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="text-center">
                <span class="copyright text-white">Copyright &copy; @ <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <script src="assets/js/agency.min.js"></script>

</body>

</html>