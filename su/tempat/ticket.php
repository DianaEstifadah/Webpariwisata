<?php
$title = "Wisata Kota Kediri | Tempat Wisata";
session_start();
require '../function.php';
if (!isset($_SESSION["login"])) {
    header("location: ../../login.php");
    exit;
}
if (isset($_POST["artikelEditModal"])) {
    var_dump("Tombol edit ditekan");
    die;
}
$jumdatph = 10;
$jumalldat = count(data("SELECT * FROM artikel"));
$jumhal = ceil($jumalldat / $jumdatph);
$aktpage = (isset($_GET["page"])) ? $_GET["page"] : 1;
$dtawl = ($jumdatph * $aktpage) - $jumdatph;

$artikel = data("SELECT * FROM artikel ORDER BY date_update DESC LIMIT $dtawl, $jumdatph");
$ticketing = data("SELECT * FROM ticketing LEFT JOIN artikel on artikel.id = ticketing.id ORDER BY tanggal_booking ");
include '../templateAdmin/header.php';
?>
<script src="http://localhost/Webpariwisata/assets/ckeditor/ckeditor.js"></script>
<?php
include '../templateAdmin/sidebar.php';
include '../templateAdmin/navigation.php';
//include 'formtiket.php';

?>
<div class=" container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengelolaan Ticket Wisata</h6>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            
            <a class="btn" href="" style="border-color: black; margin-bottom: 1px;">
                <i class="fas fa-fw fa-retweet"></i> Refresh
            </a>

            </button>
            <div class="float-right">

            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>No </th>
                            <th>Tempat</th>
                            <th>Nomor booking</th>
                            <!-- <th>Jadwal</th> -->
                            <th>Pemesan</th>
                            <th>Jumlah Tiket</th>
                            <th>Total</th>
                            <th>Tanggal booking</th>
                            <th>Status booking</th>
                            <th>Status bayar</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($ticketing as $brs) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $brs["tempat"]; ?></td>
                                <td><?= $brs["nomor_booking"]; ?></td>
                                <td><?= $brs["pemesan"]; ?></td>
                                <td><?= $brs["jumlah_tiket"]; ?></td>
                                <td><?= $brs["total_harga"]; ?></td>
                                <td><?= $brs["tanggal_booking"]; ?></td>
                                <td><?= $brs["status_booking"]; ?></td>
                                <td><?= $brs["status_bayar"]; ?></td>
                                <td>
                                     
                                    <a type="button" title="Hapus" class='btn m-1 btn-danger' href="deletetick.php?nomor_booking=<?= $brs["nomor_booking"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini');"><i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="text-center">
                    <span class="btn btn-primary">Halaman</span>
                    <div class="btn-group">
                        <?php if ($aktpage > 1) : ?>
                            <a href="?page=<?= $aktpage - 1; ?>" class="btn" style="border-color: black;"><i class="fas fa-angle-left"></i></a>
                        <?php endif; ?>
                        <?php for ($a = 1; $a <= $jumhal; $a++) : ?>
                            <?php if ($a == $aktpage) : ?>
                                <a href="?page=<?= $a; ?>" class="btn btn-success" style="font-weight: bold; border-color: black;"><?= $a; ?>
                                </a>
                            <?php else : ?>
                                <a href="?page=<?= $a; ?>" class="btn" style="border-color: black;"><?= $a; ?></a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($aktpage < $jumhal) : ?>
                            <a href="?page=<?= $aktpage + 1; ?>" class="btn" style="border-color: black;"><i class="fas fa-angle-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../templateAdmin/footer2.php';
?>
<script>
    // Replace the <textarea id="isiBerita"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('isiArtikel');
</script>

<?php
include '../templateAdmin/footer.php';
?>