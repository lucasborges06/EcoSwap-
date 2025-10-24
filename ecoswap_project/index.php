<?php
// EcoSwap - index.php
// Simple PHP page that lists items from products.php and provides search/filter via JS
require_once 'products.php';
$items = get_products();
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>EcoSwap — Trocas e Upcycle</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <h1>EcoSwap</h1>
      <p class="tagline">Plataforma universitária para trocar, vender ou doar objetos upcycled.</p>
      <nav>
        <a href="index.php" class="nav-link">Início</a>
        <a href="admin.php" class="nav-link">Adicionar item</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="controls">
      <input id="search" placeholder="Buscar por nome ou categoria..." />
      <select id="category">
        <option value="">Todas as categorias</option>
      </select>
      <button id="clear">Limpar</button>
    </section>

    <section id="grid" class="grid">
      <?php foreach($items as $item): ?>
        <article class="card" data-category="<?=htmlspecialchars($item['category'])?>" data-name="<?=htmlspecialchars($item['title'])?>">
          <img src="<?=htmlspecialchars($item['image'])?>" alt="<?=htmlspecialchars($item['title'])?>" class="thumb" />
          <h3><?=htmlspecialchars($item['title'])?></h3>
          <p class="meta"><?=$item['category']?> • <?=$item['condition']?></p>
          <p class="price"><?=$item['price']?></p>
          <a class="btn" href="product.php?id=<?=$item['id']?>">Ver</a>
        </article>
      <?php endforeach; ?>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>Feito para disciplina da faculdade — EcoSwap © <?=date("Y")?></p>
    </div>
  </footer>

  <script>
    // inject initial products data for JS
    const PRODUCTS = <?php echo json_encode($items, JSON_HEX_TAG); ?>;
  </script>
  <script src="script.js"></script>
</body>
</html>
