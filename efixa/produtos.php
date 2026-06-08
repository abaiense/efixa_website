<?php
$page_title       = 'Produtos — Linha Efixa de Adesivos e Selantes';
$page_description = 'Conheça a linha completa de adesivos, selantes e espumas Efixa.';
$active_nav       = 'produtos';
include 'includes/head.php';
include 'includes/header.php';
?>
<main>

<!-- HERO -->
<section class="pt-28 pb-14 bg-white border-b border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <nav class="flex items-center gap-1.5 text-xs text-black/40 mb-8">
      <a href="index.php" class="hover:text-black transition-colors">Home</a>
      <i data-lucide="chevron-right" class="w-3 h-3"></i>
      <span class="text-black/70">Produtos</span>
    </nav>
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6">
      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Linha Efixa</p>
        <h1 class="font-geist font-bold text-4xl sm:text-5xl text-black tracking-tighter leading-tight max-w-2xl mb-4">
          Linha Efixa de Adesivos e Selantes
        </h1>
        <p class="text-base sm:text-lg text-black/60 max-w-2xl leading-relaxed">
          Soluções para cada etapa — desde a colagem rápida até a vedação estrutural de alta performance.
        </p>
      </div>
      <a href="#" class="inline-flex items-center gap-2 px-5 py-2.5 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary whitespace-nowrap shrink-0">
        <i data-lucide="download" class="w-4 h-4"></i>Baixar catálogo 2024
      </a>
    </div>
  </div>
</section>

<!-- GRADE DE CATEGORIAS -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <a href="adesivos.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="zap" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Adesivos Instantâneos</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Colagem imediata à base de cianoacrilato. Para metais, plásticos, madeiras, borrachas e mais. Ideal para indústria, linha moveleira e uso doméstico.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="acrilicos.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="droplet" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Acrílicos</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Vedantes à base d'água, sem odor, para uso interno. Podem ser lixados e pintados. Ideais para acabamento em rodapés, paredes e juntas.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="espumas-pu.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="layers" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Espumas de PU</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Espumas expansivas de poliuretano para preenchimento, vedação e fixação. Indicadas para montagem de batentes, esquadrias, painéis e isolamento.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="aplicadores.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="wrench" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Aplicadores</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Pistolas metálicas para aplicação precisa de selantes em tubo ou sachet. Ferramentas profissionais para uso contínuo em obra.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="silicones.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="shield" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Silicones</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Vedantes de silicone com fungicida para ambientes úmidos. Disponíveis nas versões acético e neutro, em múltiplas cores.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="vedantes-polimero.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="link-2" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Vedantes de Polímero</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Tecnologia MS (polímero híbrido) para fixação e vedação de alto módulo. Sem solventes, sem isocianatos. Para uso interno e externo.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="pu40.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="hard-hat" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">PU40</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Selantes monocomponente de poliuretano modificado para obras e indústria. Disponíveis em tubo e sachet para uso profissional intensivo.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

      <a href="diversos.php" class="product-card group flex flex-col bg-white border border-black/5 rounded-3xl p-6 no-underline hover:bg-gray-50">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4"><i data-lucide="package" class="w-5 h-5 text-[#198754]"></i></div>
        <h2 class="font-semibold text-sm text-black mb-1.5">Diversos</h2>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Linha complementar com soluções para fixação de espelhos, pias, cubas e calhas. Produtos especializados para demandas específicas.</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i></div>
      </a>

    </div>
  </div>
</section>

<!-- FICHAS TÉCNICAS CTA -->
<section class="pb-20 sm:pb-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="bg-white rounded-3xl border border-black/5 p-10 sm:p-12 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
      <div>
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="file-text" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h2 class="font-geist font-bold text-xl sm:text-2xl text-black tracking-tight mb-2">Precisa da ficha técnica?</h2>
        <p class="text-sm text-black/60 leading-relaxed max-w-lg">Disponibilizamos ficha técnica detalhada para todos os produtos da linha Efixa. Basta solicitar pelo e-mail e nossa equipe responde rapidamente.</p>
      </div>
      <a href="mailto:efixa@efixa.com.br?subject=Solicita%C3%A7%C3%A3o%20de%20ficha%20t%C3%A9cnica" class="inline-flex items-center gap-2 px-6 py-3 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary whitespace-nowrap shrink-0">
        <i data-lucide="mail" class="w-4 h-4"></i>Solicitar ficha técnica
      </a>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
