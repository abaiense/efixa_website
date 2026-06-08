<?php
/* Active nav helper — maps $active_nav string to CSS classes */
$_active = $active_nav ?? '';

function _nav($item, $active, $extra = '') {
    $base = 'px-3 py-2 text-sm font-medium rounded-xl transition-colors nav-link' . ($extra ? ' ' . $extra : '');
    return $item === $active
        ? $base . ' text-black bg-black/5 active'
        : $base . ' text-black/70 hover:text-black hover:bg-black/5';
}

$_product_pages = ['produtos','adesivos','acrilicos','espumas-pu','aplicadores','silicones','vedantes-polimero','pu40','diversos'];
$_prod_active   = in_array($_active, $_product_pages);
$_prod_btn      = 'flex items-center gap-1 px-3 py-2 text-sm font-medium rounded-xl transition-colors duration-150 nav-link'
    . ($_prod_active ? ' text-black bg-black/5 active' : ' text-black/70 hover:text-black hover:bg-black/5');

function _mob($item, $active) {
    return $item === $active
        ? 'px-3 py-3 rounded-xl bg-black/5 font-semibold text-black'
        : 'px-3 py-3 rounded-xl hover:bg-black/5 transition-colors font-medium';
}
$_r = $root ?? '';
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-white/70 backdrop-blur-xl border-b border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="flex items-center justify-between h-16">

      <a href="<?php echo $_r; ?>index.php" class="flex items-center gap-2 shrink-0">
        <span class="w-2.5 h-2.5 rounded-full bg-[#198754] shrink-0"></span>
        <span class="font-geist font-bold text-lg tracking-tight text-black">EFIXA</span>
      </a>

      <nav class="hidden lg:flex items-center gap-0.5 flex-1 justify-center">

        <!-- Produtos dropdown -->
        <div class="relative" id="produtos-nav">
          <button id="produtos-btn" aria-expanded="false" aria-haspopup="true" class="<?php echo $_prod_btn; ?>">
            Produtos<i data-lucide="chevron-down" id="produtos-chevron" class="w-3.5 h-3.5 transition-transform duration-150 shrink-0 ml-1"></i>
          </button>
          <div id="produtos-dropdown" class="hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 w-80 bg-white/90 backdrop-blur-xl rounded-2xl border border-black/5 shadow-xl p-2 z-10">
            <a href="<?php echo $_r; ?>adesivos.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="zap" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Adesivos Instantâneos</div><div class="text-xs text-black/50">Cianoacrilato multiuso</div></div></a>
            <a href="<?php echo $_r; ?>acrilicos.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="droplet" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Acrílicos</div><div class="text-xs text-black/50">Vedação interna à base d'água</div></div></a>
            <a href="<?php echo $_r; ?>espumas-pu.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="layers" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Espumas de PU</div><div class="text-xs text-black/50">Preenchimento e vedação expansiva</div></div></a>
            <a href="<?php echo $_r; ?>aplicadores.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="wrench" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Aplicadores</div><div class="text-xs text-black/50">Pistolas metálicas profissionais</div></div></a>
            <hr class="my-1.5 border-black/5"/>
            <a href="<?php echo $_r; ?>silicones.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="shield" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Silicones</div><div class="text-xs text-black/50">Com fungicida para ambientes úmidos</div></div></a>
            <a href="<?php echo $_r; ?>vedantes-polimero.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="link-2" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Vedantes de Polímero</div><div class="text-xs text-black/50">Tecnologia MS — máxima aderência</div></div></a>
            <a href="<?php echo $_r; ?>pu40.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="hard-hat" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">PU40</div><div class="text-xs text-black/50">Poliuretano para obras e indústria</div></div></a>
            <a href="<?php echo $_r; ?>diversos.php" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-black/5 transition-colors"><i data-lucide="package" class="w-4 h-4 text-[#198754] shrink-0"></i><div><div class="text-sm font-medium text-black">Diversos</div><div class="text-xs text-black/50">Soluções especializadas</div></div></a>
            <div class="px-3 pt-2 pb-1">
              <a href="<?php echo $_r; ?>produtos.php" class="flex items-center justify-between text-xs font-semibold text-[#198754] py-1.5 hover:underline">
                Ver todos os produtos<i data-lucide="arrow-right" class="w-3 h-3"></i>
              </a>
            </div>
          </div>
        </div>

        <a href="<?php echo $_r; ?>sobre.php"        class="<?php echo _nav('sobre',        $_active); ?>">Sobre Nós</a>
        <a href="<?php echo $_r; ?>blog.php"         class="<?php echo _nav('blog',         $_active); ?>">Blog</a>
        <a href="<?php echo $_r; ?>onde-comprar.php" class="<?php echo _nav('onde-comprar', $_active); ?>">Onde Comprar</a>
        <a href="<?php echo $_r; ?>contato.php"      class="<?php echo _nav('contato',      $_active); ?>">Contato</a>
      </nav>

      <div class="flex items-center gap-2 shrink-0">
        <a href="<?php echo $_r; ?>contato.php"
          class="hidden lg:inline-flex items-center gap-1.5 px-4 py-2 bg-[#198754] hover:bg-[#157347] text-white text-sm font-semibold rounded-xl btn-primary">
          Solicitar orçamento
        </a>
        <button id="menu-btn" aria-label="Abrir menu" class="lg:hidden p-2 rounded-xl hover:bg-black/5 transition-colors">
          <i data-lucide="menu" class="w-5 h-5" id="menu-icon-open"></i>
          <i data-lucide="x"   class="w-5 h-5 hidden" id="menu-icon-close"></i>
        </button>
      </div>

    </div>
  </div>
</header>

<!-- MOBILE MENU -->
<div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-gray-50 flex-col pt-16 overflow-y-auto">
  <div class="px-6 py-6 flex flex-col gap-0.5">
    <p class="text-xs font-semibold text-black/40 uppercase tracking-widest px-3 py-2">Produtos</p>
    <a href="<?php echo $_r; ?>adesivos.php"          class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='adesivos') echo 'bg-black/5'; ?>"><i data-lucide="zap"       class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Adesivos Instantâneos</span></a>
    <a href="<?php echo $_r; ?>acrilicos.php"         class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='acrilicos') echo 'bg-black/5'; ?>"><i data-lucide="droplet"   class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Acrílicos</span></a>
    <a href="<?php echo $_r; ?>espumas-pu.php"        class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='espumas-pu') echo 'bg-black/5'; ?>"><i data-lucide="layers"    class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Espumas de PU</span></a>
    <a href="<?php echo $_r; ?>aplicadores.php"       class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='aplicadores') echo 'bg-black/5'; ?>"><i data-lucide="wrench"    class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Aplicadores</span></a>
    <a href="<?php echo $_r; ?>silicones.php"         class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='silicones') echo 'bg-black/5'; ?>"><i data-lucide="shield"    class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Silicones</span></a>
    <a href="<?php echo $_r; ?>vedantes-polimero.php" class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='vedantes-polimero') echo 'bg-black/5'; ?>"><i data-lucide="link-2"   class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Vedantes de Polímero</span></a>
    <a href="<?php echo $_r; ?>pu40.php"              class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='pu40') echo 'bg-black/5'; ?>"><i data-lucide="hard-hat" class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">PU40</span></a>
    <a href="<?php echo $_r; ?>diversos.php"          class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-black/5 transition-colors <?php if($_active==='diversos') echo 'bg-black/5'; ?>"><i data-lucide="package"  class="w-5 h-5 text-[#198754] shrink-0"></i><span class="font-medium">Diversos</span></a>
    <hr class="my-3 border-black/5"/>
    <a href="<?php echo $_r; ?>sobre.php"        class="<?php echo _mob('sobre',        $_active); ?>">Sobre Nós</a>
    <a href="<?php echo $_r; ?>blog.php"         class="<?php echo _mob('blog',         $_active); ?>">Blog</a>
    <a href="<?php echo $_r; ?>onde-comprar.php" class="<?php echo _mob('onde-comprar', $_active); ?>">Onde Comprar</a>
    <a href="<?php echo $_r; ?>contato.php"      class="<?php echo _mob('contato',      $_active); ?>">Contato</a>
    <div class="pt-4">
      <a href="<?php echo $_r; ?>contato.php"
        class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary">
        Solicitar orçamento
      </a>
    </div>
  </div>
</div>
