<?php
$page_title       = 'Efixa — Adesivos e Selantes de Alto Desempenho';
$page_description = 'Linha completa de adesivos e selantes de alto desempenho para construção civil, indústria e uso doméstico.';
$active_nav       = '';
include 'includes/head.php';
include 'includes/header.php';
?>
<main>

<!-- ═══════════════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden pt-40 pb-24 lg:pt-52 lg:pb-32">
  <!-- Ambient gradient -->
  <div class="absolute inset-0 -z-10" style="background:var(--gradient-ambient)"></div>

  <div class="max-w-7xl mx-auto px-6 sm:px-8 text-center">
    <!-- Tag pill -->
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white/10 border border-white/20 rounded-full text-xs font-semibold text-white/80 tracking-[0.15em] uppercase mb-8 backdrop-blur-sm">
      <span class="w-1.5 h-1.5 rounded-full bg-[#198754] opacity-80"></span>
      Indústria · Construção Civil · Uso Doméstico
    </div>

    <!-- H1 -->
    <h1 class="font-geist font-bold text-5xl sm:text-6xl lg:text-7xl text-white tracking-tighter leading-[1.05] max-w-4xl mx-auto mb-6">
      Soluções que fixam,<br class="hidden sm:block"/> vedam e duram.
    </h1>

    <!-- Subtitle -->
    <p class="text-base sm:text-lg text-white/70 max-w-2xl mx-auto mb-10 leading-relaxed">
      A Efixa oferece uma linha completa de adesivos e selantes de alto desempenho para construção, indústria e obras que precisam de resultado de verdade.
    </p>

    <!-- CTAs -->
    <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
      <a href="produtos.php"
        class="inline-flex items-center gap-2 px-6 py-3 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary w-full sm:w-auto justify-center">
        Ver produtos
        <i data-lucide="arrow-right" class="w-4 h-4 shrink-0"></i>
      </a>
      <a href="contato.php"
        class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold rounded-xl btn-primary backdrop-blur-sm w-full sm:w-auto justify-center">
        Fale com um representante
      </a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     STATS / CREDIBILITY
════════════════════════════════════════════════════════════════ -->
<section class="py-12 bg-white border-b border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-black/5">

      <div class="flex flex-col items-center text-center px-6 py-4 first:pl-0 last:pr-0">
        <span class="font-geist font-bold text-4xl text-[#198754] tracking-tight leading-none mb-1">+30</span>
        <span class="text-xs text-black/50 font-medium uppercase tracking-wide">anos de atuação</span>
      </div>

      <div class="flex flex-col items-center text-center px-6 py-4">
        <span class="font-geist font-bold text-4xl text-[#198754] tracking-tight leading-none mb-1">+15</span>
        <span class="text-xs text-black/50 font-medium uppercase tracking-wide">produtos na linha</span>
      </div>

      <div class="flex flex-col items-center text-center px-6 py-4">
        <span class="font-geist font-bold text-4xl text-[#198754] tracking-tight leading-none mb-1">BR</span>
        <span class="text-xs text-black/50 font-medium uppercase tracking-wide">cobertura nacional</span>
      </div>

      <div class="flex flex-col items-center text-center px-6 py-4">
        <span class="font-geist font-bold text-4xl text-[#198754] tracking-tight leading-none mb-1">2</span>
        <span class="text-xs text-black/50 font-medium uppercase tracking-wide">unidades (RS e SC)</span>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SOBRE — RESUMO
════════════════════════════════════════════════════════════════ -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <!-- Text -->
      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-4">Sobre a Efixa</p>
        <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-6">
          Uma empresa construída sobre confiança
        </h2>
        <p class="text-black/60 leading-relaxed mb-4">
          Desde 1991, a Efixa desenvolve e distribui produtos de fixação, vedação e colagem para os segmentos de construção civil, indústria e uso doméstico. Nossa missão é simples: entregar produtos que realmente funcionam, para profissionais que não podem se dar ao luxo de testar duas vezes.
        </p>
        <p class="text-black/60 leading-relaxed mb-8">
          Somos uma empresa responsável, que respeita seus consumidores e entende que qualidade não é diferencial — é obrigação.
        </p>
        <a href="sobre.php" class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#198754] hover:underline">
          Conheça nossa história
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>

      <!-- Credential card -->
      <div class="bg-white rounded-3xl border border-black/5 p-8 shadow-sm">
        <p class="text-xs font-semibold uppercase tracking-widest text-black/40 mb-6">Credenciais</p>
        <div class="space-y-5">
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-xl bg-[#198754]/10 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="calendar" class="w-4 h-4 text-[#198754]"></i>
            </div>
            <div>
              <p class="font-semibold text-sm text-black">Fundada em 1991</p>
              <p class="text-xs text-black/50">Porto Alegre, Rio Grande do Sul</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-xl bg-[#198754]/10 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="map-pin" class="w-4 h-4 text-[#198754]"></i>
            </div>
            <div>
              <p class="font-semibold text-sm text-black">2 unidades estratégicas</p>
              <p class="text-xs text-black/50">Porto Alegre — RS &amp; Itajaí — SC</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-xl bg-[#198754]/10 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="users" class="w-4 h-4 text-[#198754]"></i>
            </div>
            <div>
              <p class="font-semibold text-sm text-black">101–150 colaboradores</p>
              <p class="text-xs text-black/50">Equipe interna + rede nacional de representantes</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-xl bg-[#198754]/10 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="globe" class="w-4 h-4 text-[#198754]"></i>
            </div>
            <div>
              <p class="font-semibold text-sm text-black">Cobertura em todo o Brasil</p>
              <p class="text-xs text-black/50">Home centers, construtoras e indústrias</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     PRODUTOS — GRID DE CATEGORIAS
════════════════════════════════════════════════════════════════ -->
<section class="py-20 sm:py-28 bg-white border-y border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <!-- Section header -->
    <div class="max-w-2xl mb-12">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Linha Efixa</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-4">
        Do adesivo instantâneo ao selante de poliuretano profissional.
      </h2>
      <p class="text-black/60 text-base leading-relaxed">
        Escolha a solução certa para cada aplicação.
      </p>
    </div>

    <!-- 8-card grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <a href="adesivos.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="zap" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Adesivos Instantâneos</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Colagem rápida e precisa à base de cianoacrilato</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="acrilicos.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="droplet" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Acrílicos</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Vedação e acabamento para uso interno</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="espumas-pu.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="layers" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Espumas de PU</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Preenchimento, fixação e isolamento expansivo</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="aplicadores.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="wrench" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Aplicadores</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Pistolas metálicas para aplicação profissional</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="silicones.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="shield" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Silicones</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Vedação com fungicida para ambientes úmidos</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="vedantes-polimero.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="link-2" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Vedantes de Polímero</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Tecnologia MS para máxima aderência e flexibilidade</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="pu40.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="hard-hat" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">PU40</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Selantes de poliuretano modificado para construção e indústria</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

      <a href="diversos.php" class="product-card group flex flex-col bg-gray-50 hover:bg-white border border-black/5 rounded-3xl p-6 no-underline">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-4">
          <i data-lucide="package" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-semibold text-sm text-black mb-1.5">Diversos</h3>
        <p class="text-xs text-black/50 leading-relaxed flex-1">Soluções específicas para aplicações especializadas</p>
        <div class="flex items-center gap-1 text-xs font-semibold text-[#198754] mt-4">
          Ver produtos <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </div>
      </a>

    </div>

    <div class="mt-8 text-center">
      <a href="produtos.php" class="inline-flex items-center gap-2 px-5 py-2.5 border border-black/10 hover:border-[#198754] hover:text-[#198754] text-sm font-semibold rounded-xl transition-colors duration-150">
        Ver todos os produtos
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     DIFERENCIAIS
════════════════════════════════════════════════════════════════ -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <div class="max-w-xl mb-12">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Diferenciais</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight">
        Por que escolher a Efixa?
      </h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

      <div class="flex flex-col gap-4 p-6 bg-white rounded-3xl border border-black/5 shadow-sm">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center">
          <i data-lucide="cpu" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <div>
          <h3 class="font-semibold text-sm text-black mb-2">Tecnologia de ponta</h3>
          <p class="text-xs text-black/50 leading-relaxed">Formulações à base de cianoacrilato, polímero MS e poliuretano modificado, desenvolvidas para performance em condições reais de obra e indústria.</p>
        </div>
      </div>

      <div class="flex flex-col gap-4 p-6 bg-white rounded-3xl border border-black/5 shadow-sm">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center">
          <i data-lucide="layout-grid" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <div>
          <h3 class="font-semibold text-sm text-black mb-2">Portfólio completo</h3>
          <p class="text-xs text-black/50 leading-relaxed">Uma única marca para todas as etapas: adesão, vedação, preenchimento, acabamento. Menos fornecedores, mais agilidade.</p>
        </div>
      </div>

      <div class="flex flex-col gap-4 p-6 bg-white rounded-3xl border border-black/5 shadow-sm">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center">
          <i data-lucide="map-pin" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <div>
          <h3 class="font-semibold text-sm text-black mb-2">Cobertura nacional</h3>
          <p class="text-xs text-black/50 leading-relaxed">Representantes em todos os estados do Brasil, atendendo home centers, lojas de material de construção, construtoras e indústrias.</p>
        </div>
      </div>

      <div class="flex flex-col gap-4 p-6 bg-white rounded-3xl border border-black/5 shadow-sm">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center">
          <i data-lucide="file-text" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <div>
          <h3 class="font-semibold text-sm text-black mb-2">Suporte técnico</h3>
          <p class="text-xs text-black/50 leading-relaxed">Fichas técnicas disponíveis para todos os produtos. Equipe preparada para orientar sobre a aplicação correta em cada substrato.</p>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SEGMENTOS ATENDIDOS
════════════════════════════════════════════════════════════════ -->
<section class="py-20 sm:py-28 bg-white border-y border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <div>
        <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Mercados</p>
        <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-6">
          Para quem é a Efixa?
        </h2>
        <p class="text-black/60 leading-relaxed">
          Atendemos desde o profissional autônomo da construção civil até as grandes construtoras e indústrias que precisam de selantes de alto módulo para obras de longa duração.
        </p>
      </div>

      <div class="flex flex-wrap gap-2.5">
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Construtoras e incorporadoras
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Vidraçarias e esquadrias
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Marcenarias e indústria moveleira
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Indústria náutica
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Home centers e varejistas
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Profissionais autônomos
        </span>
        <span class="segment-tag flex items-center gap-2 px-4 py-2 bg-gray-50 border border-black/5 rounded-full text-sm font-medium text-black cursor-default">
          <i data-lucide="check" class="w-3.5 h-3.5 text-[#198754] shrink-0"></i>Uso doméstico e manutenção predial
        </span>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CTA — CATÁLOGO
════════════════════════════════════════════════════════════════ -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <div class="relative overflow-hidden rounded-3xl p-10 sm:p-14 bg-gradient-to-b from-neutral-700 to-neutral-900" style="box-shadow:var(--shadow-soft)">

      <!-- Decorative green glow -->
      <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full opacity-20" style="background:radial-gradient(circle, #198754, transparent)"></div>

      <div class="relative z-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
        <div class="max-w-xl">
          <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Documentação técnica</p>
          <h2 class="font-geist font-bold text-3xl sm:text-4xl text-white tracking-tighter leading-tight mb-4">
            Baixe o catálogo completo 2024
          </h2>
          <p class="text-white/60 leading-relaxed text-base">
            Todos os produtos, especificações técnicas e opções de embalagem em um único documento.
          </p>
        </div>
        <div class="shrink-0">
          <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-black font-semibold rounded-xl btn-primary whitespace-nowrap">
            <i data-lucide="download" class="w-4 h-4"></i>
            Download gratuito
          </a>
        </div>
      </div>

    </div>

  </div>
</section>


</main>
<?php include 'includes/footer.php'; ?>
