<?php

include 'koneksi.php';


if (isset($_POST['simpan'])){
$namaprogram = $_POST['program'];


$query = mysqli_query($koneksi,"insert into tbl_program (id_program,nama_program) values ('','$namaprogram')");

if ($query){
    echo ("<script language='JavaScript'>
    window.alert('Sukses, menambahkan Data!')
    window.location.href='../tambah_program.php';
    </script>");
}else{
    echo ("<script language='JavaScript'>
    window.alert('Gagal, menambahkan Data!')
    window.location.href='../tambah_program.php';
    </script>");
}

}