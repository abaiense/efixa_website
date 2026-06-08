<?php
$page_title       = 'Contato — Efixa';
$page_description = 'Fale com a Efixa. Suporte técnico, orçamentos e representantes em todo o Brasil.';
$active_nav       = 'contato';
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
      <span class="text-black/70">Contato</span>
    </nav>
    <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Fale conosco</p>
    <h1 class="font-geist font-bold text-4xl sm:text-5xl text-black tracking-tighter leading-tight max-w-3xl mb-4">
      Como podemos ajudar?
    </h1>
    <p class="text-base sm:text-lg text-black/60 max-w-2xl leading-relaxed">
      Nossa equipe está pronta para esclarecer dúvidas técnicas, indicar o produto certo para sua aplicação e viabilizar orçamentos com agilidade.
    </p>
  </div>
</section>

<!-- CONTACT CHANNELS -->
<section class="py-20 sm:py-28 bg-white border-y border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-xl mb-12">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Canais de atendimento</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight">Escolha o canal ideal</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1: Suporte técnico -->
      <div class="bg-gray-50 rounded-3xl border border-black/5 p-8">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-5">
          <i data-lucide="headphones" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-geist font-bold text-lg text-black tracking-tight mb-3">Dúvidas técnicas e suporte</h3>
        <p class="text-sm text-black/60 leading-relaxed mb-5">Tem alguma dúvida sobre o produto ideal para sua aplicação? Solicite a ficha técnica de qualquer produto ou envie sua pergunta.</p>
        <div class="space-y-2.5">
          <a href="mailto:efixa@efixa.com.br" class="flex items-center gap-2 text-sm text-[#198754] font-medium hover:underline">
            <i data-lucide="mail" class="w-4 h-4 shrink-0"></i>efixa@efixa.com.br
          </a>
          <a href="tel:+555133940000" class="flex items-center gap-2 text-sm text-[#198754] font-medium hover:underline">
            <i data-lucide="phone" class="w-4 h-4 shrink-0"></i>(51) 3394.0000
          </a>
        </div>
      </div>

      <!-- Card 2: Orçamentos -->
      <div class="bg-gray-50 rounded-3xl border border-black/5 p-8">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-5">
          <i data-lucide="briefcase" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-geist font-bold text-lg text-black tracking-tight mb-3">Orçamentos e cotações</h3>
        <p class="text-sm text-black/60 leading-relaxed mb-5">Interessado em adquirir produtos Efixa para sua loja, construtora, indústria ou projeto? Nossa equipe comercial retorna com agilidade.</p>
        <div class="space-y-2.5">
          <a href="mailto:vendas@efixa.com.br" class="flex items-center gap-2 text-sm text-[#198754] font-medium hover:underline">
            <i data-lucide="mail" class="w-4 h-4 shrink-0"></i>vendas@efixa.com.br
          </a>
        </div>
      </div>

      <!-- Card 3: Representante -->
      <div class="bg-gray-50 rounded-3xl border border-black/5 p-8">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mb-5">
          <i data-lucide="map-pin" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <h3 class="font-geist font-bold text-lg text-black tracking-tight mb-3">Encontre um representante</h3>
        <p class="text-sm text-black/60 leading-relaxed mb-5">Contamos com representantes em todo o Brasil. Para localizar o mais próximo, entre em contato informando sua cidade.</p>
        <div class="space-y-2.5">
          <a href="mailto:efixa@efixa.com.br" class="flex items-center gap-2 text-sm text-[#198754] font-medium hover:underline">
            <i data-lucide="mail" class="w-4 h-4 shrink-0"></i>efixa@efixa.com.br
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT FORM -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-xl mb-10">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Formulário</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-3">Fale com a Efixa</h2>
      <p class="text-black/60 leading-relaxed">Preencha o formulário abaixo e nossa equipe retornará em até 1 dia útil.</p>
    </div>

    <div class="max-w-3xl">
      <form id="contact-form" action="#" class="space-y-5">
        <div class="grid sm:grid-cols-2 gap-5">
          <div>
            <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="nome">Nome completo <span class="text-red-400">*</span></label>
            <input type="text" id="nome" name="nome" required placeholder="Seu nome" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10"/>
          </div>
          <div>
            <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="email">E-mail <span class="text-red-400">*</span></label>
            <input type="email" id="email" name="email" required placeholder="seu@email.com" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10"/>
          </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-5">
          <div>
            <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="telefone">Telefone / WhatsApp <span class="text-red-400">*</span></label>
            <input type="tel" id="telefone" name="telefone" required placeholder="(51) 99999-0000" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10"/>
          </div>
          <div>
            <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="empresa">Empresa <span class="text-black/30 font-normal normal-case">(opcional)</span></label>
            <input type="text" id="empresa" name="empresa" placeholder="Nome da empresa" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10"/>
          </div>
        </div>
        <div>
          <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="cidade">Cidade e Estado <span class="text-red-400">*</span></label>
          <input type="text" id="cidade" name="cidade" required placeholder="Ex: Porto Alegre — RS" class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10"/>
        </div>
        <div>
          <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="assunto">Assunto <span class="text-red-400">*</span></label>
          <select id="assunto" name="assunto" required class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10">
            <option value="" disabled selected>Selecione um assunto</option>
            <option value="duvida-tecnica">Dúvida técnica sobre produto</option>
            <option value="ficha-tecnica">Solicitação de ficha técnica</option>
            <option value="orcamento">Orçamento / Cotação</option>
            <option value="revendedor">Quero ser revendedor</option>
            <option value="representante">Quero ser representante</option>
            <option value="reclamacao">Reclamação ou sugestão</option>
            <option value="outro">Outro</option>
          </select>
        </div>
        <div>
          <label class="text-xs font-semibold text-black/60 uppercase tracking-wide mb-1.5 block" for="mensagem">Mensagem <span class="text-red-400">*</span></label>
          <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Descreva sua dúvida, pedido ou mensagem..." class="w-full rounded-xl border border-black/10 bg-white px-4 py-3 text-sm text-black placeholder-black/30 focus:outline-none focus:border-[#198754]/40 focus:ring-2 focus:ring-[#198754]/10 resize-none"></textarea>
        </div>
        <button type="submit" class="w-full px-6 py-3.5 bg-[#198754] hover:bg-[#157347] text-white font-semibold rounded-xl btn-primary text-sm">
          Enviar mensagem
        </button>
      </form>

      <div id="form-success" style="display:none;" class="bg-[#198754]/5 border border-[#198754]/20 rounded-2xl p-6 text-center">
        <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="check" class="w-5 h-5 text-[#198754]"></i>
        </div>
        <p class="text-sm text-black/70 leading-relaxed">Sua mensagem foi recebida. Nossa equipe retornará em até 1 dia útil pelo e-mail ou telefone informado. Obrigado por entrar em contato com a Efixa.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHATSAPP SECTION -->
<section class="py-20 sm:py-28 bg-white border-y border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-2xl">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">WhatsApp</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-4">Prefere falar pelo WhatsApp?</h2>
      <p class="text-black/60 leading-relaxed mb-8">Nossa equipe também está disponível via WhatsApp para dúvidas rápidas, direcionamento de produto e orçamentos.</p>
      <a href="https://wa.me/555133940000?text=Ol%C3%A1%2C%20Efixa%21%20Gostaria%20de%20tirar%20uma%20d%C3%BAvida." target="_blank" rel="noopener" class="inline-flex items-center gap-3 px-8 py-4 bg-[#25D366] hover:bg-[#1eb95a] text-white font-semibold rounded-xl transition-colors text-base">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="22" height="22"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        Falar pelo WhatsApp
      </a>
      <p class="mt-4 text-xs text-black/40">Segunda a sexta, das 8h às 18h (horário de Brasília)</p>
    </div>
  </div>
</section>

<!-- ADDRESSES -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-xl mb-12">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Endereços</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight">Onde estamos</h2>
    </div>
    <div class="grid sm:grid-cols-2 gap-6 max-w-3xl">
      <div class="bg-white rounded-3xl border border-black/5 p-8">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center shrink-0">
            <i data-lucide="building-2" class="w-5 h-5 text-[#198754]"></i>
          </div>
          <div>
            <p class="font-semibold text-black mb-1">Porto Alegre — RS <span class="text-xs font-medium text-[#198754] ml-2">Sede</span></p>
            <p class="text-sm text-black/50 leading-relaxed">Av. Cristóvão Colombo, 1328, Sala 301<br/>Bairro Floresta — CEP 90560-001</p>
            <p class="text-sm text-black/50 mt-2">Tel: (51) 3394.0000</p>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-3xl border border-black/5 p-8">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 rounded-2xl bg-[#198754]/10 flex items-center justify-center shrink-0">
            <i data-lucide="building" class="w-5 h-5 text-[#198754]"></i>
          </div>
          <div>
            <p class="font-semibold text-black mb-1">Itajaí — SC <span class="text-xs font-medium text-black/40 ml-2">Filial</span></p>
            <p class="text-sm text-black/50 leading-relaxed">Rodovia Antonio Heil, 4670, Sala 32, Km 12<br/>Itaipava — CEP 88316-002</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 sm:py-28 bg-white border-y border-black/5">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-xl mb-12">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">FAQ</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight">Perguntas frequentes</h2>
    </div>
    <div class="max-w-3xl divide-y divide-black/5">

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Como obtenho a ficha técnica de um produto Efixa?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Envie um e-mail para <a href="mailto:efixa@efixa.com.br" class="text-[#198754] hover:underline">efixa@efixa.com.br</a> com o nome do produto desejado. Nossa equipe responde em até 1 dia útil.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Vocês vendem direto para pessoa física?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">A Efixa atua no canal atacadista. Para compra individual, procure um revendedor autorizado na sua região. Entre em contato para indicarmos o ponto de venda mais próximo.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Como me torno representante da Efixa?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Envie seu currículo ou apresentação para <a href="mailto:rh@efixa.com.br" class="text-[#198754] hover:underline">rh@efixa.com.br</a> informando sua região de atuação e experiência no segmento.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Os produtos Efixa têm garantia?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Todos os nossos produtos são fabricados dentro de rigorosos padrões de qualidade. Em caso de dúvida sobre performance, entre em contato com nosso suporte técnico.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Vocês fornecem para construtoras e indústrias?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Sim. Entre em contato pelo <a href="mailto:vendas@efixa.com.br" class="text-[#198754] hover:underline">vendas@efixa.com.br</a> para discutir condições comerciais, volumes e logística.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Qual é a diferença entre o MS 35 e o PU40?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">O MS 35 é à base de polímero MS (silano modificado) — sem solventes, sem isocianatos, aplicável em superfícies úmidas e com excelente resistência UV. O PU40 é à base de poliuretano modificado, com maior resistência mecânica, indicado para juntas sujeitas a maior movimentação e esforço estrutural.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Posso pintar sobre os produtos Efixa?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Depende do produto. Acrílicos, vedantes MS e PU40 aceitam pintura após a cura. Silicones (acético e neutro) em geral não aceitam pintura convencional. Consulte sempre a ficha técnica do produto específico.</p>
      </details>

      <details class="border-b border-black/5">
        <summary class="py-4 text-sm font-semibold text-black cursor-pointer hover:text-[#198754] transition-colors list-none flex items-center justify-between">
          Qual o pedido mínimo para compra direta?
          <i data-lucide="chevron-down" class="w-4 h-4 shrink-0 transition-transform"></i>
        </summary>
        <p class="pb-4 text-sm text-black/60 leading-relaxed">Consulte nossa equipe comercial pelo <a href="mailto:vendas@efixa.com.br" class="text-[#198754] hover:underline">vendas@efixa.com.br</a>. As condições variam conforme o produto, volume e região de entrega.</p>
      </details>

    </div>
  </div>
</section>

<!-- SOCIAL -->
<section class="py-20 sm:py-28">
  <div class="max-w-7xl mx-auto px-6 sm:px-8">
    <div class="max-w-xl mb-10">
      <p class="text-xs font-semibold uppercase tracking-widest text-[#198754] mb-3">Redes sociais</p>
      <h2 class="font-geist font-bold text-3xl sm:text-4xl text-black tracking-tighter leading-tight mb-4">Siga a Efixa</h2>
      <p class="text-black/60 leading-relaxed mb-8">Acompanhe dicas de aplicação, novidades de produto e conteúdo técnico nas nossas redes sociais.</p>
      <div class="flex items-center gap-4">
        <a href="https://www.instagram.com/efixa" target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 px-5 py-3 bg-white border border-black/10 hover:border-black/20 hover:bg-gray-50 text-black font-semibold rounded-xl transition-colors text-sm">
          <i data-lucide="instagram" class="w-4 h-4 text-[#198754]"></i>Instagram
        </a>
        <a href="https://www.facebook.com/efixacolasselantes" target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 px-5 py-3 bg-white border border-black/10 hover:border-black/20 hover:bg-gray-50 text-black font-semibold rounded-xl transition-colors text-sm">
          <i data-lucide="facebook" class="w-4 h-4 text-[#198754]"></i>Facebook
        </a>
      </div>
    </div>
  </div>
</section>

</main>
<?php include 'includes/footer.php'; ?>
