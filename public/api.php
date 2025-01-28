<?php
require '../vendor/autoload.php';
require '../database/db.php';
$pdo = require '../database/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $pdo->prepare("INSERT INTO questions (question) VALUES (:question)");
    $stmt->execute(['question' => $data['question']]);
    echo json_encode(['status' => 'success']);
}
