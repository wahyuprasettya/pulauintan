<?php

include 'koneksi.php';


if (isset($_POST['simpan'])){


$username = $_POST ['username'];
$password = $_POST ['password'];
$namalengkap = $_POST ['nama'];
$notelp = $_POST ['notelp'];
$alamat = $_POST ['alamat'];

$query = mysqli_query($koneksi,"insert into tbl_tutor (id_tutor,username,password,nama_lengkap,no_telp,alamat) values ('','$username','$password','$namalengkap','$notelp','$alamat')");

if ($query){
    echo ("<script language='JavaScript'>
    window.alert('Sukses, menambahkan Data!')
    window.location.href='../daftar_tutor.php';
    </script>");
}else{
    echo ("<script language='JavaScript'>
    window.alert('Gagal, menambahkan Data!');
    window.location.href='../daftar_tutor.php';
    </script>");
}

}















?>