<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php'; ?>
</head>

<body>
    <div class="main-panel">
        <div class="content">
            <?php   
						include 'koneksi.php';
						$surat = mysqli_query($con, "SELECT * from surat_keluar WHERE id = $id");
						foreach ($surat as $data){
					?>
            <div class="container container-fluid">
            <div class="page-inner">
                <div class="page-header">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h1 class="pb-2 fw-bold">Arsip Surat >> Lihat </h1>
                            <br>
                            <h1 class="pb-2 fw-bold">Detail Surat </h1>
                            <h5 class="card-title"></h5>
                            <h5>Nomor : <?php echo $data['nomor']; ?></h5>
                            <h5>Kategori : <?php echo $data['kategori']; ?></h5>
                            <h5>Tujuan : <?php echo $data['tujuan']; ?></h5>
                            <h5>Perihal : <?php echo $data['perihal']; ?></h5>
                            <h5>Tanggal Keluar: <?php echo $data['tgl_keluar']; ?></h5>
                            <h5>Waktu Unggah : <?php echo $data['waktu']; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detail Isi Surat</h4>
                            </div>
                            <div class="card-body">
                                <iframe src="<?php echo $data['file']; ?>" width="100%" style="height:500px"></iframe>
                            </div>
                            <br>
                            <br>
                            <div class="text-left">
                                <a href="index.php"><button type="button"  class="btn btn-primary">
                                        << Kembali</button></a>
                                <a href="<?php echo $data['file']; ?>"><button class="btn btn-danger">Unduh</button></a>
                                <a href="edit.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-warning">Edit / Ganti
                                        File</button></a>
                            </div>
                            <br>
                            <?php
								}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    </div>
</body>

</html>
