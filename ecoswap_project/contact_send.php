<?php
// contact_send.php - demo of receiving contact form
if($_SERVER['REQUEST_METHOD'] !== 'POST') { header("Location: index.php"); exit; }
$item_id = intval($_POST['item_id'] ?? 0);
$name = strip_tags(trim($_POST['name'] ?? ''));
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = trim($_POST['message'] ?? '');
if(!$email || !$name || !$message){
    echo "Dados inválidos. <a href='javascript:history.back()'>Voltar</a>";
    exit;
}
// In production you would send an email or save to DB. Demo:
echo "<h2>Mensagem enviada (demo)</h2>";
echo "<p>Obrigado, ".htmlspecialchars($name).". Sua mensagem sobre o item #".intval($item_id)." foi recebida.</p>";
echo "<p><a href='index.php'>Voltar ao site</a></p>";
?>
