
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Kartu Keluarga</title>
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

                            <!-- Menu-->
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
                        <h1 class="mt-4">Data Kartu Keluarga</h1>
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
                                                <th>No. KK</th>
                                                <th>Kepala Keluarga</th>
                                                <th>NIK</th>
                                                <th>Alamat</th>
                                                <th>Kecamatan</th>
                                                <th>Kabupaten</th>
                                                <th>Provinsi</th>
                                                <th>Nik Anggota 1</th>
                                                <th>Nama Anggota 1</th>
                                                <th>Nik Anggota 2</th>
                                                <th>Nama Anggota 2</th>
                                                <th>Nik Anggota 3</th>
                                                <th>Nama Anggota 3</th>
                                                <th>Nik Anggota 4</th>
                                                <th>Nama Anggota 4</th>
                                                <th>Nik Anggota 5</th>
                                                <th>Nama Anggota 5</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
				                        </thead>
                                        <tbody>
                                
                                            <?php
                                            include ('koneksi.php');
                                            $ambildatakk = mysqli_query($koneksi,"select * from data_kk k, data_penduduk p where p.nik = k.nik");
                                            while($data=mysqli_fetch_array($ambildatakk)){
                                                $no_kk=$data['no_kk'];
                                                $nama=$data['nama'];
                                                $nik=$data['nik'];
                                                $desa=$data['desa'];
                                                $rt=$data['rt'];
                                                $rw=$data['rw'];
                                                $kec=$data['kec'];
                                                $kab=$data['kab'];
                                                $prov=$data['prov'];
                                                $nik_anggota1=$data['nik_anggota1'];     
                                                $nama_anggota1=$data['nama_anggota1'];
                                                $nik_anggota2=$data['nik_anggota2'];     
                                                $nama_anggota2=$data['nama_anggota2'];
                                                $nik_anggota3=$data['nik_anggota3'];     
                                                $nama_anggota3=$data['nama_anggota3'];
                                                $nik_anggota4=$data['nik_anggota4'];     
                                                $nama_anggota4=$data['nama_anggota4'];
                                                $nik_anggota5=$data['nik_anggota5'];     
                                                $nama_anggota5=$data['nama_anggota5'];

                                            ?>
                                            <tr>
                                                <td><?=$no_kk;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$nik;?></td>
                                                <td><?= $desa;?>, RT
                                                <?=$rt;?>/ RW
                                                <?=$rw;?></td>
                                                <td><?=$kec;?></td>
                                                <td><?=$kab;?></td>
                                                <td><?=$prov;?></td>
                                                <td><?=$nik_anggota1;?></td>
                                                <td><?=$nama_anggota1;?></td>
                                                <td><?=$nik_anggota2;?></td>
                                                <td><?=$nama_anggota2;?></td>
                                                <td><?=$nik_anggota3;?></td>
                                                <td><?=$nama_anggota3;?></td>
                                                <td><?=$nik_anggota4;?></td>
                                                <td><?=$nama_anggota4;?></td>
                                                <td><?=$nik_anggota5;?></td>
                                                <td><?=$nama_anggota5;?></td>
                                          
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$no_kk;?>">
                                                Edit
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?=$no_kk;?>">
                                                Delete
                                                </button>
                                            </td> 
                                        </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal" id="edit<?=$no_kk;?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Kartu Keluarga</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <form action="functionkk.php" method="POST">
                                                    <div class="modal-body">
                                                        <label for="no_kk"><b>Nomor KK</b></label><br>
                                                        <input type="text" name="no_kk" value="<?=$no_kk;?>" class="form-control" required>
                                                        <br>
                                                        <label for="orangnya"><b>Kepala Keluarga</b></label><br>
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
                                                        <label for="desa"><b>Desa</b></label><br>
                                                        <input type="text" name="desa" value="<?=$desa;?>" class="form-control" required>
                                                        <br>
                                                        <label for="rt"><b>RT</b></label><br>
                                                        <input type="text" name="rt" value="<?=$rt;?>" class="form-control" required>
                                                        <br>
                                                        <label for="rw"><b>RW</b></label><br>
                                                        <input type="text" name="rw" value="<?=$rw;?>" class="form-control" required>
                                                        <br>
                                                        <label for="kec"><b>Kecamatan</b></label><br>
                                                        <input type="text" name="kec" value="<?=$kec;?>" class="form-control" required>
                                                        <br>
                                                        <label for="kab"><b>Kabupaten</b></label><br>
                                                        <input type="text" name="kab" value="<?=$kab;?>" class="form-control" required>
                                                        <br>
                                                        <label for="prov"><b>Provinsi</b></label><br>
                                                        <input type="text" name="prov" value="<?=$prov;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nik_anggota1"><b>Nik Anggota 1</b></label><br>
                                                        <input type="text" name="nik_anggota1" value="<?=$nik_anggota1;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nama_anggota1"><b>Nama Anggota 1</b></label><br>
                                                        <input type="text" name="nama_anggota1" value="<?=$nama_anggota1;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nik_anggota2"><b>Nik Anggota 2</b></label><br>
                                                        <input type="text" name="nik_anggota2" value="<?=$nik_anggota2;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nama_anggota2"><b>Nama Anggota 2</b></label><br>
                                                        <input type="text" name="nama_anggota2" value="<?=$nama_anggota2;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nik_anggota3"><b>Nik Anggota 3</b></label><br>
                                                        <input type="text" name="nik_anggota3" value="<?=$nik_anggota3;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nama_anggota3"><b>Nama Anggota 3</b></label><br>
                                                        <input type="text" name="nama_anggota3" value="<?=$nama_anggota3;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nik_anggota4"><b>Nik Anggota 4</b></label><br>
                                                        <input type="text" name="nik_anggota4" value="<?=$nik_anggota4;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nama_anggota4"><b>Nama Anggota 4</b></label><br>
                                                        <input type="text" name="nama_anggota4" value="<?=$nama_anggota4;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nik_anggota5"><b>Nik Anggota 5</b></label><br>
                                                        <input type="text" name="nik_anggota5" value="<?=$nik_anggota5;?>" class="form-control" required>
                                                        <br>
                                                        <label for="nama_anggota5"><b>Nama Anggota 5</b></label><br>
                                                        <input type="text" name="nama_anggota5" value="<?=$nama_anggota5;?>" class="form-control" required>
                                                        <br>
                                                        <br><br>
                                                        <button type="submit" class="btn btn-primary" name="editdatakk"> Submit </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- Delete Modal -->
                                            <div class="modal" id="delete<?=$no_kk;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Data Kartu Keluarga</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form action="functionkk.php" method="POST">
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ingin Menghapus Data Kartu Keluarga Ini?
                                                            <input type ="hidden" name="no_kk" value="<?=$no_kk;?>">
                                                            <br><br>
                                                            <button type="submit" class="btn btn-danger" name="deletedatakk"> Hapus </button>
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
                <h4 class="modal-title">Tambah Data KK</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="functionkk.php" method="POST">
                <div class="modal-body">
                    <label for="no_kk"><b>Nomor KK</b></label><br>
                    <input type="text" name="no_kk" placeholder="Masukkan nomor KK" class="form-control">
                    <br>
                    <label for="orangnya"><b>Kepala Keluarga</b></label><br>
                    <select name="orangnya" class="form-control select2bs4" required>
					<option selected="selected">- Pilih Kepala Keluarga -</option>
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
                    <label for="desa"><b>Desa</b></label><br>
                    <input type="text" name="desa" placeholder="Masukkan Desa" class="form-control">
                    <br>
                    <label for="rt"><b>RT</b></label><br>
                    <input type="text" name="rt" placeholder="Masukkan RT" class="form-control">
                    <br>
                    <label for="rw"><b>RW</b></label><br>
                    <input type="text" name="rw" placeholder="Masukkan RW" class="form-control">
                    <br>
                    <label for="kec"><b>Kecamatan</b></label><br>
                    <input type="text" name="kec" placeholder="Masukkan Kecamatan" class="form-control">
                    <br>
                    <label for="kab"><b>Kabupaten</b></label><br>
                    <input type="text" name="kab" placeholder="Masukkan kabupaten" class="form-control">
                    <br>
                    <label for="prov"><b>Provinsi</b></label><br>
                    <input type="text" name="prov" placeholder="Masukkan Provinsi" class="form-control">
                    <br>
                    <label for="nik_anggota1"><b>Nik Anggota 1</b></label><br>
                    <input type="text" name="nik_anggota1"  placeholder="Masukkan Nik Anggota 3" class="form-control" required>
                    <br>
                    <label for="nama_anggota1"><b>Nama Anggota 1</b></label><br>
                    <input type="text" name="nama_anggota1" placeholder="Masukkan Nama Anggota 1" class="form-control" required>
                    <br>
                    <label for="nik_anggota2"><b>Nik Anggota 2</b></label><br>
                    <input type="text" name="nik_anggota2"  placeholder="Masukkan Nik Anggota 2" class="form-control" required>
                    <br>
                    <label for="nama_anggota2"><b>Nama Anggota 2</b></label><br>
                    <input type="text" name="nama_anggota2" placeholder="Masukkan Nama Anggota 2" class="form-control" required>
                    <br>
                    <label for="nik_anggota3"><b>Nik Anggota 3</b></label><br>
                    <input type="text" name="nik_anggota3" placeholder="Masukkan Nik Anggota 3" class="form-control" required>
                    <br>
                    <label for="nama_anggota3"><b>Nama Anggota 3</b></label><br>
                    <input type="text" name="nama_anggota3" placeholder="Masukkan Nama Anggota 3"class="form-control" required>
                    <br>
                    <label for="nik_anggota4"><b>Nik Anggota 4</b></label><br>
                    <input type="text" name="nik_anggota4"  placeholder="Masukkan Nik Anggota 4" class="form-control" required>
                    <br>
                    <label for="nama_anggota4"><b>Nama Anggota 4</b></label><br>
                    <input type="text" name="nama_anggota4" placeholder="Masukkan Nama Anggota 4" class="form-control" required>
                    <br>
                    <label for="nik_anggota5"><b>Nik Anggota 5</b></label><br>
                    <input type="text" name="nik_anggota5"  placeholder="Masukkan Nik Anggota 5"class="form-control" required>
                    <br>
                    <label for="nama_anggota5"><b>Nama Anggota 5</b></label><br>
                    <input type="text" name="nama_anggota5" placeholder="Masukkan Nama Anggota 5" class="form-control" required>
                    <br>
                    <br><br>
                    <button type="submit" class="btn btn-primary" name="addKK"> Submit </button>
                </div>
            </form>
            </div>
        </div>
    </div>

</html>
