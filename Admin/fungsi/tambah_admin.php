<?php

include 'koneksi.php';


if (isset($_POST['simpan'])){

$namalengkap = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];

$query = mysqli_query($koneksi,"insert into tbl_admin (id_admin,nama_lengkap,username,password) values ('','$namalengkap','$username','$password')");

if ($query){
    echo ("<script language='JavaScript'>
    window.alert('Sukses, menambahkan Data!')
    window.location.href='../daftar_admin.php';
    </script>");
}else{
    echo ("<script language='JavaScript'>
    window.alert('Gagal, menambahkan Data!');
    </script>");
}

}















?>