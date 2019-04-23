<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['Email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "INSERT INTO kontak (nama,email,pertanyaan,created) VALUES ('$nama','$email','$pertanyaan','$created');";

if ($conn->query($sql) === TRUE) {
	echo "Data berhasil disimpan";
} else{
	echo "Error dengan pesan: ". $sql ."<br>" . $conn->error;
}

$conn->close();
?>