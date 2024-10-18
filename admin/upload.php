<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['surat_pemohon'])) {
    $dsn = 'mysql:host=localhost;dbname=e-office';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_GET['id']; // Assuming you have the ID in the URL

        $fileTmpPath = $_FILES['surat_pemohon']['tmp_name'];
        $fileName = $_FILES['surat_pemohon']['name'];
        $fileSize = $_FILES['surat_pemohon']['size'];
        $fileType = $_FILES['surat_pemohon']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Generate new file name
        $newFileName = 'surat-' . $id . '.' . $fileExtension;

        // Directory where the file will be uploaded
        $uploadFileDir = '../assets/lampiran/surat/';
        $dest_path = $uploadFileDir . $newFileName;

        // Move the file to the specified directory
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            // Update the database with the new file name
            $sql = 'UPDATE surat SET surat_pemohon = :fileName, status_permohonan = "Selesai" WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['fileName' => $newFileName, 'id' => $id]);

            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to move uploaded file.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No file uploaded or there was an upload error']);
}
?>