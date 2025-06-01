<?php
$version = "v1.0.0";

try {
    $pdo = new PDO('mysql:host=mysql;dbname=testdb', 'testuser', 'testpass');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $messages = $pdo->query("SELECT message FROM messages")->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $messages = [["message" => "Error connecting to DB: " . $e->getMessage()]];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CI/CD App</title>
</head>
<body>
    <h1>Version: <?= $version ?></h1>
    <h2>Messages:</h2>
    <ul>
        <?php foreach ($messages as $row): ?>
            <li><?= htmlspecialchars($row['message']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
