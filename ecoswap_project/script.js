// script.js - client interactivity: populate categories and implement search/filter
document.addEventListener('DOMContentLoaded', ()=>{
  const grid = document.getElementById('grid');
  const search = document.getElementById('search');
  const category = document.getElementById('category');
  const clear = document.getElementById('clear');

  // Build category options from PRODUCTS
  const cats = Array.from(new Set(PRODUCTS.map(p=>p.category))).sort();
  for(const c of cats){
    const opt = document.createElement('option'); opt.value = c; opt.textContent = c;
    category.appendChild(opt);
  }

  function filter(){
    const q = (search.value||'').toLowerCase().trim();
    const cat = category.value;
    const cards = grid.querySelectorAll('.card');
    cards.forEach(card=>{
      const name = card.dataset.name.toLowerCase();
      const c = card.dataset.category;
      const matchQ = q === '' || name.includes(q) || (card.querySelector('h3')?.textContent||'').toLowerCase().includes(q);
      const matchCat = cat === '' || c === cat;
      card.style.display = (matchQ && matchCat) ? '' : 'none';
    });
  }

  search.addEventListener('input', filter);
  category.addEventListener('change', filter);
  clear.addEventListener('click', ()=>{
    search.value=''; category.value=''; filter();
  });

  // Nice micro-interaction: keyboard "/" focuses search
  document.addEventListener('keydown', (e)=>{
    if(e.key === '/' && document.activeElement.tagName !== 'INPUT' && document.activeElement.tagName !== 'TEXTAREA'){
      e.preventDefault(); search.focus();
    }
  });

});
