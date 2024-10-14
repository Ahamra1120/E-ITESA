<?php
include('../connect.php');

$id = $_POST['id'];
$no_surat = $_POST['no_surat'];

$sql = "INSERT INTO surat (id, no_surat) VALUES ('$id', '$no_surat')";
if (mysqli_query($conn, $sql)) {
    echo "Nomor surat berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>