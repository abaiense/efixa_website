<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="color-scheme" content="light"/>
<title><?php echo htmlspecialchars($page_title ?? 'Efixa — Adesivos e Selantes'); ?></title>
<?php if (!empty($page_description)): ?>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>"/>
<?php endif; ?>
<link href="<?php echo $root ?? ''; ?>assets/custom.css" rel="stylesheet"/>
<link href="<?php echo $root ?? ''; ?>assets/71de0c11c987f278_css2.css" rel="stylesheet"/>
<link href="<?php echo $root ?? ''; ?>assets/4bcb63d746dc1754_css2.css" rel="stylesheet"/>
<style>
  .font-geist{font-family:'Geist',sans-serif;}
  #produtos-dropdown.open{display:block;}
  #mobile-menu.open{display:flex;}
  .product-card{transition:box-shadow 250ms ease,transform 250ms ease;}
  .product-card:hover{box-shadow:var(--shadow-card);transform:translateY(-2px);}
  .btn-primary{transition:background-color 150ms ease;}
  .nav-link{position:relative;}
  .nav-link::after{content:'';position:absolute;bottom:-1px;left:.75rem;right:.75rem;height:1.5px;background:var(--color-primary);border-radius:1px;transform:scaleX(0);transition:transform 150ms ease;}
  .nav-link:hover::after{transform:scaleX(1);}
  .nav-link.active::after{transform:scaleX(1);}
  .footer-link{transition:color 150ms ease;}
  .footer-link:hover{color:var(--color-primary) !important;}
  .segment-tag{transition:border-color 150ms ease,background-color 150ms ease;}
  .segment-tag:hover{border-color:var(--color-primary-border);background-color:var(--color-primary-bg);}
  .wa-btn{transition:transform 150ms ease,box-shadow 150ms ease;}
  .wa-btn:hover{transform:scale(1.08);box-shadow:0 8px 24px rgba(25,135,84,0.4);}
  #produtos-btn[aria-expanded="true"] #produtos-chevron{transform:rotate(180deg);}
  /* Prose (privacidade) */
  .prose h2{font-family:'Geist',sans-serif;font-size:1.125rem;font-weight:700;color:#000;margin-top:2rem;margin-bottom:.75rem;letter-spacing:-.01em;}
  .prose p{font-size:.9375rem;color:rgba(0,0,0,.6);line-height:1.7;margin-bottom:1rem;}
  .prose ul{list-style:none;padding:0;margin-bottom:1rem;}
  .prose ul li{font-size:.9375rem;color:rgba(0,0,0,.6);line-height:1.7;padding-left:1.25rem;position:relative;margin-bottom:.25rem;}
  .prose ul li::before{content:'—';position:absolute;left:0;color:#198754;}
  .prose a{color:#198754;}
  /* Page-specific styles can be added inline in each page file */
  <?php if (!empty($extra_styles)) echo $extra_styles; ?>
</style>
<script src="<?php echo $root ?? ''; ?>assets/176e894661aa9cdc_3.4.17"></script>
<script src="<?php echo $root ?? ''; ?>assets/fde878a4f7aebe54_lucide.js"></script>
</head>
<body class="min-h-full antialiased selection:bg-[#198754] selection:text-white text-black bg-gray-50" style="font-family:Inter,ui-sans-serif,system-ui,-apple-system,sans-serif;">
