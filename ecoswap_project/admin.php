<?php
// admin.php - simple form that would 'add' an item.
// NOTE: This demo does not persist items to a DB — it shows how to handle upload and validation.
// In a full project, save to a database and handle file uploads securely.
$message = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = trim($_POST['title'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $desc = trim($_POST['description'] ?? '');
    if($title === '' || $category === ''){
        $message = 'Título e categoria são obrigatórios.';
    } else {
        // In a real app: validate and insert into DB.
        $message = 'Item recebido (em demo). Em um projeto real, aqui inseriríamos no banco.';
    }
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Adicionar item — EcoSwap</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container"><h1><a href="index.php">EcoSwap</a></h1></div>
  </header>

  <main class="container">
    <h2>Adicionar novo item (demo)</h2>
    <?php if($message): ?><p class="note"><?=$message?></p><?php endif; ?>
    <form method="post" enctype="multipart/form-data" class="admin-form">
      <label>Título<input name="title" required /></label>
      <label>Categoria<input name="category" required /></label>
      <label>Preço<input name="price" /></label>
      <label>Descrição<textarea name="description"></textarea></label>
      <label>Imagem<input type="file" name="image" accept="image/*" /></label>
      <button class="btn" type="submit">Enviar</button>
    </form>
    <p class="hint">Este formulário é apenas demonstrativo. Para persistir, conecte a um banco de dados (MySQL/MariaDB) e valide uploads.</p>
  </main>

  <footer class="site-footer">
    <div class="container"><p>EcoSwap © <?=date("Y")?></p></div>
  </footer>
</body>
</html>
