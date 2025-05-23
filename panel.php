<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>
<h1>Bem-vindo ao Painel</h1>
<p>Você está logado como <?php echo htmlspecialchars($_SESSION['user_username']); ?></p>
<a href="logout.php">Sair</a>
