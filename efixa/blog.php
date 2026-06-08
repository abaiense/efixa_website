<?php
$page_title       = 'Blog — Central de Conhecimento Efixa';
$page_description = 'Guias técnicos, dicas de aplicação e conteúdo especializado para profissionais da construção civil.';
$active_nav       = 'blog';
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
      <span class="text-black/70">Blog</span>
    </nav>
    <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Conhecimento técnico</p>
    <h1 class="font-geist font-bold text-4xl sm:text-5xl text-black tracking-tighter leading-tight max-w-3xl mb-4">
      Central de Conhecimento Efixa
    </h1>
    <p class="text-base sm:text-lg text-black/60 max-w-2xl leading-relaxed">
      Dicas técnicas, guias de aplicação e conteúdo especializado para profissionais da construção civil e indústria.
    </p>
  </div>
</section>

<!-- CATEGORIES BAR + ARTICLES -->
<section class="py-14 sm:py-20">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    <!-- Categories -->
    <div class="flex flex-wrap gap-2 mb-10">
      <button class="category-pill active px-4 py-2 rounded-full text-xs font-semibold border border-black/10 bg-[#198754] text-white">Todos</button>
      <button class="category-pill px-4 py-2 rounded-full text-xs font-semibold border border-black/10 bg-white text-black/70 hover:bg-black/5">Guias de aplicação</button>
      <button class="category-pill px-4 py-2 rounded-full text-xs font-semibold border border-black/10 bg-white text-black/70 hover:bg-black/5">Escolha do produto certo</button>
      <button class="category-pill px-4 py-2 rounded-full text-xs font-semibold border border-black/10 bg-white text-black/70 hover:bg-black/5">Dicas para profissionais</button>
      <button class="category-pill px-4 py-2 rounded-full text-xs font-semibold border border-black/10 bg-white text-black/70 hover:bg-black/5">Novidades</button>
    </div>

    <!-- Articles grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Article 1 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Escolha do produto certo</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Silicone acético ou neutro: qual usar em cada situação?</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">A diferença entre os dois tipos de cura vai muito além do cheiro — e escolher errado pode comprometer o serviço.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 2 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Guias de aplicação</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Como vedar uma calha metálica sem usar solda</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">O Efixa Veda Calha resolve com mais agilidade e segurança — sem necessidade de equipamento especializado.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 3 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Escolha do produto certo</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Polímero MS, silicone ou poliuretano: o guia definitivo para selantes</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Três tecnologias, aplicações diferentes. Veja como escolher o selante certo para cada tipo de obra e substrato.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 4 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Guias de aplicação</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Como fixar espelhos sem pregos e sem risco de manchar</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">A cola errada pode danificar o revestimento metálico do espelho permanentemente. Use o produto certo.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 5 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Dicas para profissionais</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">7 erros na aplicação de espuma de PU que comprometem o serviço</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">A espuma expansiva é versátil — mas aplicada de forma errada, gera mais problemas do que resolve.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 6 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Guias de aplicação</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Acrílico na construção: quando usar e como aplicar corretamente</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Tem técnica para um acabamento realmente profissional antes da pintura. Veja o passo a passo completo.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 7 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Escolha do produto certo</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Qual adesivo usar para colar diferentes materiais entre si?</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Madeira com metal, pedra com vidro, cerâmica com PVC — o guia completo de combinações e produtos indicados.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 8 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Dicas para profissionais</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Como armazenar selantes e adesivos corretamente para não perder produto</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Temperatura, posição e tampa fechada fazem toda a diferença na vida útil dos seus produtos.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 9 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Dicas para profissionais</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Como calcular a quantidade de selante necessária para um projeto</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Evite desperdício e falta de material com uma estimativa simples antes de começar.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

      <!-- Article 10 -->
      <article class="bg-white rounded-3xl border border-black/5 p-6 flex flex-col gap-4">
        <span class="inline-block px-3 py-1 rounded-full bg-[#198754]/10 text-[#198754] text-xs font-semibold w-fit">Novidades</span>
        <div class="flex flex-col gap-2 flex-1">
          <h2 class="font-geist font-bold text-lg text-black tracking-tight leading-snug">Linha PU40 Efixa: conheça o selante de poliuretano modificado para obra e indústria</h2>
          <p class="text-sm text-black/60 leading-relaxed flex-1">Disponível em tubo e sachet, desenvolvido para demandas profissionais de alto volume e exigência técnica.</p>
        </div>
        <a href="#" class="text-sm font-semibold text-[#198754] hover:underline flex items-center gap-1">Ler artigo <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></a>
      </article>

    </div>
  </div>
</section>

<!-- NEWSLETTER CTA -->
<section class="py-20 sm:py-28 bg-white border-t border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-2xl mx-auto text-center">
      <div class="w-12 h-12 rounded-2xl bg-[#198754]/10 flex items-center justify-center mx-auto mb-6">
        <i data-lucide="mail" class="w-6 h-6 text-[#198754]"></i>
      </div>
      <h2 class="font-geist font-bold text-2xl sm:text-3xl text-black tracking-tighter leading-tight mb-4">Receba conteúdo técnico por e-mail</h2>
      <p class="text-black/60 leading-relaxed mb-8">Novos guias, dicas de aplicação e informações sobre lançamentos de produtos diretamente na sua caixa de entrada.</p>
      <a href="mailto:efixa@efixa.com.br?subject=Quero%20receber%20conte%C3%BAdo%20t%C3%A9cnico" class="inline-flex items-center gap-2 px-6 py-3 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary">
        Entrar em contato <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
