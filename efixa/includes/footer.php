<?php $_r = $root ?? ''; ?>
<footer class="bg-neutral-900 text-white">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 py-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <div class="lg:col-span-1">
        <a href="<?php echo $_r; ?>index.php" class="inline-flex items-center gap-2 mb-4">
          <span class="w-2.5 h-2.5 rounded-full bg-[#198754]"></span>
          <span class="font-geist font-bold text-lg tracking-tight">EFIXA</span>
        </a>
        <p class="text-sm text-white/50 leading-relaxed mb-6">
          Soluções de fixação, vedação e colagem de alto desempenho para construção, indústria e uso doméstico desde 1991.
        </p>
        <div class="flex gap-3">
          <a href="https://www.instagram.com/efixa" target="_blank" rel="noopener"
            class="w-8 h-8 rounded-lg bg-white/10 hover:bg-[#198754] flex items-center justify-center transition-colors btn-primary">
            <i data-lucide="instagram" class="w-4 h-4"></i>
          </a>
          <a href="https://www.facebook.com/efixacolasselantes" target="_blank" rel="noopener"
            class="w-8 h-8 rounded-lg bg-white/10 hover:bg-[#198754] flex items-center justify-center transition-colors btn-primary">
            <i data-lucide="facebook" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">Navegação</p>
        <ul class="space-y-2.5">
          <li><a href="<?php echo $_r; ?>index.php"       class="text-sm text-white/60 footer-link">Home</a></li>
          <li><a href="<?php echo $_r; ?>sobre.php"       class="text-sm text-white/60 footer-link">Sobre Nós</a></li>
          <li><a href="<?php echo $_r; ?>blog.php"        class="text-sm text-white/60 footer-link">Blog</a></li>
          <li><a href="<?php echo $_r; ?>onde-comprar.php" class="text-sm text-white/60 footer-link">Onde Comprar</a></li>
          <li><a href="<?php echo $_r; ?>carreira.php"    class="text-sm text-white/60 footer-link">Carreira</a></li>
          <li><a href="<?php echo $_r; ?>contato.php"     class="text-sm text-white/60 footer-link">Contato</a></li>
        </ul>
      </div>

      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">Produtos</p>
        <ul class="space-y-2.5">
          <li><a href="<?php echo $_r; ?>adesivos.php"          class="text-sm text-white/60 footer-link">Adesivos Instantâneos</a></li>
          <li><a href="<?php echo $_r; ?>acrilicos.php"         class="text-sm text-white/60 footer-link">Acrílicos</a></li>
          <li><a href="<?php echo $_r; ?>espumas-pu.php"        class="text-sm text-white/60 footer-link">Espumas de PU</a></li>
          <li><a href="<?php echo $_r; ?>aplicadores.php"       class="text-sm text-white/60 footer-link">Aplicadores</a></li>
          <li><a href="<?php echo $_r; ?>silicones.php"         class="text-sm text-white/60 footer-link">Silicones</a></li>
          <li><a href="<?php echo $_r; ?>vedantes-polimero.php" class="text-sm text-white/60 footer-link">Vedantes de Polímero</a></li>
          <li><a href="<?php echo $_r; ?>pu40.php"              class="text-sm text-white/60 footer-link">PU40</a></li>
        </ul>
      </div>

      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-4">Contato</p>
        <ul class="space-y-3">
          <li class="flex items-start gap-2.5">
            <i data-lucide="map-pin" class="w-4 h-4 text-[#198754] shrink-0 mt-0.5"></i>
            <span class="text-sm text-white/60 leading-relaxed">Av. Cristóvão Colombo, 1328, sala 301<br/>Porto Alegre — RS, CEP 90560-001</span>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="phone" class="w-4 h-4 text-[#198754] shrink-0"></i>
            <a href="tel:+555133940000" class="text-sm text-white/60 footer-link">(51) 3394.0000</a>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="mail" class="w-4 h-4 text-[#198754] shrink-0"></i>
            <a href="mailto:efixa@efixa.com.br" class="text-sm text-white/60 footer-link">efixa@efixa.com.br</a>
          </li>
          <li class="flex items-center gap-2.5">
            <i data-lucide="mail" class="w-4 h-4 text-[#198754] shrink-0"></i>
            <a href="mailto:vendas@efixa.com.br" class="text-sm text-white/60 footer-link">vendas@efixa.com.br</a>
          </li>
        </ul>
      </div>

    </div>

    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 mt-14 pt-8 border-t border-white/10">
      <p class="text-xs text-white/30">© 2024 Efixa Importação e Exportação Ltda. Todos os direitos reservados.</p>
      <a href="<?php echo $_r; ?>privacidade.php" class="text-xs text-white/30 hover:text-white/60 footer-link">Políticas de Privacidade</a>
    </div>

  </div>
</footer>

<!-- WhatsApp floating button -->
<a href="https://wa.me/555133940000?text=Ol%C3%A1%2C%20Efixa%21%20Gostaria%20de%20tirar%20uma%20d%C3%BAvida."
  target="_blank" rel="noopener" aria-label="Contato via WhatsApp"
  class="wa-btn fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-[#25D366] flex items-center justify-center shadow-2xl">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="26" height="26">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
  </svg>
</a>

<script>
  lucide.createIcons();

  const menuBtn    = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const iconOpen   = document.getElementById('menu-icon-open');
  const iconClose  = document.getElementById('menu-icon-close');

  menuBtn.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('open');
    mobileMenu.classList.toggle('hidden', !isOpen);
    iconOpen.classList.toggle('hidden', isOpen);
    iconClose.classList.toggle('hidden', !isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  const prodBtn      = document.getElementById('produtos-btn');
  const prodDropdown = document.getElementById('produtos-dropdown');

  prodBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = prodDropdown.classList.toggle('open');
    prodDropdown.classList.toggle('hidden', !isOpen);
    prodBtn.setAttribute('aria-expanded', isOpen);
  });

  document.addEventListener('click', (e) => {
    if (!document.getElementById('produtos-nav').contains(e.target)) {
      prodDropdown.classList.remove('open');
      prodDropdown.classList.add('hidden');
      prodBtn.setAttribute('aria-expanded', 'false');
    }
  });
</script>
</body>
</html>
