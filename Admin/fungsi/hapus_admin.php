<?php
include "koneksi.php";
$id= $_GET['id'];

$query = "SELECT * FROM tbl_admin WHERE id_admin='".$id."'";
$sql = mysqli_query($koneksi, $query); 
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM tbl_admin WHERE id_admin ='".$id."'";
$sql2 = mysqli_query($koneksi, $query2);

if($sql2){ 
  
  echo ("<script language='JavaScript'>
  window.alert('Gagal!')
  window.location.href='../view_admin.php';
  </script>");
}else{
 
  echo ("<script language='JavaScript'>
  window.alert('Data Gagal di hapus!')
  window.location.href='../view_admin.php';
  </script>");
  
}
?>