<?php
require_once 'dbkoneksi.php';

// ambil data yang dikirimkan dari form edit
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_jk = $_POST['jk'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_email = $_POST['email'];
$_kartu_id = $_POST['kartu_id'];

$_proses = $_POST['proses'];

// update data pelanggan berdasarkan id
$sql = "UPDATE pelanggan SET kode=?, nama=?, jk=?, tmp_lahir=?, tgl_lahir=?, email=?, kartu_id=? WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_kode, $_nama, $_jk, $_tmp_lahir, $_tgl_lahir, $_email, $_kartu_id, $_id]);

// redirect ke halaman data pelanggan setelah berhasil diupdate
header('Location:list_pelanggan.php');
exit();
?>