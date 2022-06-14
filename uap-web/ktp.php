
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data PermohonanKTP</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">SIAK</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            </form>
        </nav>

         <!-- Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Menu</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsData" aria-expanded="false" aria-controls="collapseLayoutsData">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
                                Kelola Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsData" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="penduduk.php">Penduduk</a>
                                    <a class="nav-link" href="kk.php">Kartu Keluarga</a>
                                    <a class="nav-link" href="ktp.php">Permohonan KTP</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsSK" aria-expanded="false" aria-controls="collapseLayoutsSK">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines"></i></div>
                                Cetak Surat Keterangan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsSK" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="kelahiran.php">Kelahiran</a>
                                    <a class="nav-link" href="kematian.php">Kematian</a>
                                    <a class="nav-link" href="kedatangan.php">Kedatangan</a>
                                    <a class="nav-link" href="perpindahan.php">Perpindahan</a>
                                </nav>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- End Sidenav-->               
                </nav>
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Permohonan KTP</h1>
                        <div class="card mb-4">
                            <div class="card-header">                              
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No. Permohonan</th>
                                                <th>Tanggal Permohonan</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                
                                            <?php
                                            include ('koneksi.php');
                                            $ambildatapermohonanktp = mysqli_query($koneksi,"select * from data_permohonanktp k, data_penduduk p where p.nik = k.nik");
                                            while($data=mysqli_fetch_array($ambildatapermohonanktp)){
                                                $idPermohonan=$data['idPermohonan'];
                                                $tanggalPermohonan=$data['tanggalPermohonan'];
                                                $nik=$data['nik'];
                                                $nama=$data['nama'];
                                                  
                                            ?>
                                            <tr>
                                                <td><?=$idPermohonan;?></td>
                                                <td><?=$tanggalPermohonan;?></td>
                                                <td><?=$nik;?></td>
                                                <td><?=$nama;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idPermohonan;?>">
                                                    Edit
                                                     </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idPermohonan;?>">
                                                    Delete
                                                    </button>
                                                </td>       
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal" id="edit<?=$idPermohonan;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Permohonan KTP</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="functionktp.php" method="POST">
                                                        <div class="modal-body">
                                                            <label for="idPermohonan"><b>Nomor Permohonan</b></label><br>
                                                            <input type="text" name="idPermohonan" value="<?=$idPermohonan;?>" class="form-control" required>
                                                            <br>
                                                            <label for="tanggalPermohonan"><b>Tanggal Permohonan</b></label><br>
                                                            <input type="date" name="tanggalPermohonan" value="<?=$tanggalPermohonan;?>" class="form-control" required>
                                                            <br>
                                                            <label for="orangnya"><b>Pemohon</b></label><br>
                                                            <select name="orangnya" class="form-control select2bs4" required>
                                                                <option selected="selected"><?=$nik;?></option>
                                                                <?php
                                                                    // ambil data dari database
                                                                    include ('koneksi.php');
                                                                    $query = "select * from data_penduduk";
                                                                    $hasil = mysqli_query($koneksi, $query);
                                                                    while ($row = mysqli_fetch_array($hasil)) {
                                                                        $namanya = $row['nama'];
                                                                        $niknya = $row['nik'];                           
                                                                    ?>
                                                                        <option value="<?=$niknya;?>">
                                                                            <?=$niknya;?>
                                                                                -
                                                                            <?=$namanya?>
                                                                        </option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            <br>
                                                            <button type="submit" class="btn btn-primary" name="updatedatapermohonanktp"> Submit </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Modal -->
                                            <div class="modal" id="delete<?=$idPermohonan;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Data Permohonan KTP</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="functionktp.php" method="POST">
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ingin Menghapus Data Permohonan KTP Ini?
                                                            <input type ="hidden" name="idPermohonan" value="<?=$idPermohonan;?>">
                                                            <br><br>
                                                            <button type="submit" class="btn btn-danger" name="deletedatapermohonanktp"> Hapus </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            }; 
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Permohonan KTP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="functionktp.php" method="POST">
                <div class="modal-body">
                    <label for="idPermohonan"><b>Nomor Permohonan</b></label><br>
                    <input type="text" name="idPermohonan" placeholder="Masukkan nomor permohonan"class="form-control">
                    <br>
                    <label for="tanggalPermohonan"><b>Tanggal Permohonan</b></label><br>
                    <input type="date" name="tanggalPermohonan" class="form-control">
                    <br>
                    <label for="orangnya"><b>Pemohon</b></label><br>
                    <select name="orangnya" class="form-control select2bs4" required>
					<option selected="selected">- Pilih Pemohon -</option>
					<?php
                        // ambil data dari database
                        include ('koneksi.php');
                        $query = "select * from data_penduduk";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                            $namanya = $row['nama'];
                            $niknya = $row['nik'];                           
                        ?>
                            <option value="<?=$niknya;?>">
                                <?=$niknya;?>
                                 -
                                <?=$namanya?>
                            </option>
                        <?php
                        }
                        ?>
					</select>
                    
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="addPermohonanKTP"> Submit </button>
                </div>
            </form>
            </div>
        </div>
    </div>

</html>
