<?php
require_once "koneksi.php";
$no_pend=$_POST["no_pend"];
$nama=$_POST["nama"];
$nilai_tkp=$_POST["nilai_tkp"];
$nilai_tiu=$_POST["nilai_tiu"];
$nilai_tkw=$_POST["nilai_tkw"];
$query="INSERT INTO uas(no_pend,nama,nilai_tkp,nilai_tiu,nilai_tkw) VALUES ('".$no_pend."','".$nama."','".$snilai_tkp."','".$nilai_tiu."','".$nilai_tkw."')";
if($con->query($query)==TRUE){
    header("location:input.php");
}else{
    echo "<script>alert('PESAN GAGAL DISIMPAN');history.back();</script>";
}
?>