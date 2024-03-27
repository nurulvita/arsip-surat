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
            <div class="page-inner">
                <div class="page-header">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h1 class="pb-2 fw-bold">Arsip Surat >> Edit Surat </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Surt</h4>
                            </div>
                            <div class="card-body">
                                <!-- Horizontal Form -->
                                <?php   
                                include 'koneksi.php';
                                $surat = mysqli_query($con, "SELECT * from surat_keluar WHERE id = $id");
                                foreach ($surat as $data){
                            ?>
                                <form action="prosesedit.php" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="hidden" name="filelama" value="<?php echo $data['file']; ?>">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Surat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nomor"
                                                value="<?php echo $data['nomor']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                        <select id="inputState" class="form-control form-control" name="kategori">
                                            <option <?php echo ($data['kategori'] == 'Undangan') ? 'selected' : ''; ?>>Undangan</option>
                                            <option <?php echo ($data['kategori'] == 'Peminjaman') ? 'selected' : ''; ?>>Peminjaman</option>
                                            <option <?php echo ($data['kategori'] == 'Permohonan') ? 'selected' : ''; ?>>Permohonan</option>
                                            <option <?php echo ($data['kategori'] == 'Pemberitahuan') ? 'selected' : ''; ?>>Pemberitahuan</option>
                                            <option <?php echo ($data['kategori'] == 'Peringatan') ? 'selected' : ''; ?>>Peringatan</option>
                                            <option <?php echo ($data['kategori'] == 'Mandat') ? 'selected' : ''; ?>>Mandat</option>
                                            <option <?php echo ($data['kategori'] == 'Keputusan') ? 'selected' : ''; ?>>Keputusan</option>
                                            <option <?php echo ($data['kategori'] == 'Rekomendasi') ? 'selected' : ''; ?>>Rekomendasi</option>
                                            
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tujuan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tujuan"
                                                value="<?php echo $data['tujuan']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Perihal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="perihal"
                                                value="<?php echo $data['perihal']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tgl_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tgl_keluar"
                                                value="<?php echo $data['tgl_keluar']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">File Surat
                                            (PDF)</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="file" class="form-control"
                                                value="<?php echo $data['file']; ?>">
                                        </div>
                                    </div>
                                    <div class="text-left"><?php echo $data['file']; ?></div>
                                    <iframe src="<?php echo $data['file']; ?>" width="100%" style="height:100%"></iframe>
                                    <div class="text-left">
                                        <a href="index.php"><button type="button" class="btn btn-secondary">
                                                << Kembali</button></a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form><!-- End Horizontal Form -->
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
