<?php

include 'koneksi.php';


if (isset($_POST['simpan'])){
$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST ['nama'];
$periode = $_POST ['periode'];
$tgl = $_POST['tgl'];
$proyek = $_POST ['proyek'];
$notelp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi,"insert into tbl_user (id_user,username,password,nama_lengkap,periode,tgl_masuk,proyek,no_telp,alamat) values ('','$username','$password','$namalengkap','$periode','$tgl','$proyek','$notelp','$alamat')");

if ($query){
    echo ("<script language='JavaScript'>
    window.alert('Sukses, menambahkan Data!')
    window.location.href='../daftar_user.php';
    </script>");
}else{
    echo ("<script language='JavaScript'>
    window.alert('Gagal, menambahkan Data!')
    window.location.href='../daftar_user.php';
    </script>");
}

}