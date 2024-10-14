<?php
include('../connect.php');

$id = $_POST['id'];
$rejectReason = $_POST['rejectReason'];

$sql = "INSERT INTO surat (id, alasan) VALUES ('$id', '$rejectReason')";
if (mysqli_query($conn, $sql)) {
    echo "Alasan penolakan berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>