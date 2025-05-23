<?php
session_start();

// Conexão com o banco
$pdo = new PDO('mysql:host=localhost;dbname=sisgb', 'root', '');

$email = $_POST['username'] ?? '';
$senha = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['password'])) {
    $_SESSION['user_id'] = $usuario['id'];
    $_SESSION['user_username'] = $usuario['username'];
    header("Location: home.php");
    exit;
} else {
    echo "Nome de usuário ou senha incorretos.";
}
?>
