<?php

//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data KK
    $no_kk=$_POST['no_kk'];
    $orangnya=$_POST['orangnya'];
    $desa=$_POST['desa'];
    $rt=$_POST['rt'];
    $rw=$_POST['rw'];
    $kec=$_POST['kec'];
    $kab=$_POST['kab'];
    $prov=$_POST['prov'];
    $nik_anggota1=$_POST['nik_anggota1'];     
    $nama_anggota1=$_POST['nama_anggota1'];
    $nik_anggota2=$_POST['nik_anggota2'];     
    $nama_anggota2=$_POST['nama_anggota2'];
    $nik_anggota3=$_POST['nik_anggota3'];     
    $nama_anggota3=$_POST['nama_anggota3'];
    $nik_anggota4=$_POST['nik_anggota4'];     
    $nama_anggota4=$_POST['nama_anggota4'];
    $nik_anggota5=$_POST['nik_anggota5'];     
    $nama_anggota5=$_POST['nama_anggota5'];

    $hasil=mysqli_query($koneksi, "insert into data_kk values('$no_kk','$orangnya','$desa','$rt','$rw','$kec','$kab','$prov','$nik_anggota1','$nama_anggota1','$nik_anggota2','$nama_anggota2','$nik_anggota3','$nama_anggota3','$nik_anggota4','$nama_anggota4','$nik_anggota5','$nama_anggota5')");

    if($hasil){
        header('location:kk.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }

//Update data kk
    if(isset($_POST['editdatakk'])){
       
    $no_kk=$_POST['no_kk'];
    $orangnya=$_POST['orangnya'];
    $desa=$_POST['desa'];
    $rt=$_POST['rt'];
    $rw=$_POST['rw'];
    $kec=$_POST['kec'];
    $kab=$_POST['kab'];
    $prov=$_POST['prov'];
    $nik_anggota1=$_POST['nik_anggota1'];     
    $nama_anggota1=$_POST['nama_anggota1'];
    $nik_anggota2=$_POST['nik_anggota2'];     
    $nama_anggota2=$_POST['nama_anggota2'];
    $nik_anggota3=$_POST['nik_anggota3'];     
    $nama_anggota3=$_POST['nama_anggota3'];
    $nik_anggota4=$_POST['nik_anggota4'];     
    $nama_anggota4=$_POST['nama_anggota4'];
    $nik_anggota5=$_POST['nik_anggota5'];     
    $nama_anggota5=$_POST['nama_anggota5'];


    $update = mysqli_query($koneksi, "update data_kk set no_kk='$no_kk', nik='$orangnya',desa='$desa', rt='$rt', rw='$rw', kec='$kec', kab='$kab', prov='$prov',
     nik_anggota1='$nik_anggota1',
      nama_anggota1='$nama_anggota1',
       nik_anggota2='$nik_anggota2', 
       nama_anggota2='$nama_anggota2',
        nik_anggota3='$nik_anggota3',
         nama_anggota3='$nama_anggota3',
     nik_anggota4='$nik_anggota4', nama_anggota4='$nama_anggota4', nik_anggota5='$nik_anggota5', nama_anggota5='$nama_anggota5' where no_kk='$no_kk'");

    if($update){
        header('location:kk.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
    }

    //Menghapus Data penduduk
    if(isset($_POST['deletedatakk'])){
        $no_kk = $_POST['no_kk'];

        $hapus = mysqli_query($koneksi, "delete from data_kk where no_kk='$no_kk'");
        if($hapus){
            header('location:kk.php');
        }else{
            echo 'gagal';
            header('location:gagal.php');
        }
    }


?>