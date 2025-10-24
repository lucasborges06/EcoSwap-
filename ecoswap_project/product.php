<?php
require_once 'products.php';
$items = get_products();
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$item = null;
foreach($items as $it){
    if($it['id'] === $id){ $item = $it; break;}
}
if(!$item){
    header("HTTP/1.0 404 Not Found");
    echo "Item não encontrado.";
    exit;
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title><?=htmlspecialchars($item['title'])?> — EcoSwap</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <h1><a href="index.php">EcoSwap</a></h1>
    </div>
  </header>

  <main class="container detail">
    <img src="<?=htmlspecialchars($item['image'])?>" alt="<?=htmlspecialchars($item['title'])?>" class="detail-img" />
    <div class="detail-info">
      <h2><?=htmlspecialchars($item['title'])?></h2>
      <p class="meta"><?=$item['category']?> • <?=$item['condition']?></p>
      <p class="price"><?=$item['price']?></p>
      <p class="desc"><?=nl2br(htmlspecialchars($item['description']))?></p>

      <h3>Contato</h3>
      <form method="post" action="contact_send.php" class="contact-form">
        <input type="hidden" name="item_id" value="<?=$item['id']?>" />
        <label>Seu nome<input name="name" required /></label>
        <label>Email<input name="email" type="email" required /></label>
        <label>Mensagem<textarea name="message" required>Tenho interesse no item "<?=htmlspecialchars($item['title'])?>"</textarea></label>
        <button class="btn" type="submit">Enviar</button>
      </form>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container"><p>EcoSwap © <?=date("Y")?></p></div>
  </footer>
</body>
</html>
