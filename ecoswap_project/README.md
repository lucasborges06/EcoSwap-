# EcoSwap — Projeto de Página Web (PHP, CSS, JavaScript)

**Resumo:**  
EcoSwap é uma plataforma estudantil criativa para trocar, vender ou doar objetos upcycled. Este projeto é entregue como um *prototype* em PHP sem banco de dados (dados em `products.php`) e inclui frontend responsivo.

**Arquivos principais:**
- `index.php` — Página inicial com listagem.
- `products.php` — Fonte de dados (array PHP).
- `product.php` — Página de detalhe e formulário de contato.
- `admin.php` — Formulário demo para adicionar item (não persiste).
- `contact_send.php` — Recebe o formulário de contato (demo).
- `styles.css`, `script.js` — Frontend.

**Como usar localmente:**
1. Rode um servidor PHP local. Exemplo usando PHP embutido:
   ```
   php -S localhost:8000
   ```
   Abra `http://localhost:8000` no navegador.
2. Para persistência, conecte `products.php` a um banco MySQL e implemente uploads seguros.

**Observações técnicas:**
- Projeto pensado para apresentação universitária: destaque do design, responsividade e código claro.
- Para entregá-lo como trabalho: adicione README com instruções de deploy, screenshots e um pequeno relatório.

Boa sorte na apresentação!