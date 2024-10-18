<?php
$dsn = 'mysql:host=localhost;dbname=e-office';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT MAX(no_surat) as last_number FROM surat';
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode(['last_number' => $result['last_number']]);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>