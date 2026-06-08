# Efixa — Site Institucional

Site institucional da Efixa em PHP puro com sistema de includes. Futuramente portado para WordPress.

## Estrutura

```
efixa_website/
├── efixa/
│   ├── assets/                   # Todos os assets locais do site
│   │   ├── custom.css            # Tokens de design (primitivos → semânticos)
│   │   ├── 71de0c11c987f278_css2.css    # Inter (fonte de corpo)
│   │   ├── 4bcb63d746dc1754_css2.css    # Geist (fonte de títulos)
│   │   ├── 176e894661aa9cdc_3.4.17      # Tailwind CSS JIT runtime
│   │   ├── fde878a4f7aebe54_lucide.js   # Lucide icons
│   │   ├── c940764593d0fe5d_….woff2     # Inter Latin subset
│   │   └── 9b6f5ff45b278c74_….woff2     # Geist Latin subset
│   ├── includes/
│   │   ├── head.php              # <head>: meta, CSS, fontes, Tailwind, Lucide
│   │   ├── header.php            # Nav desktop + menu mobile + helpers de active state
│   │   └── footer.php            # Footer + botão WhatsApp + scripts JS
│   ├── index.php
│   ├── sobre.php
│   ├── produtos.php
│   ├── adesivos.php
│   ├── acrilicos.php
│   ├── espumas-pu.php
│   ├── aplicadores.php
│   ├── silicones.php
│   ├── vedantes-polimero.php
│   ├── pu40.php
│   ├── carreira.php
│   ├── contato.php
│   ├── blog.php
│   ├── onde-comprar.php
│   ├── diversos.php
│   └── privacidade.php
└── design/
    └── design-system.html        # Documentação de tokens (referencia ../efixa/assets/)
```

## Pré-requisitos

- PHP 8.0+ (built-in server ou Apache/Nginx)
- Sem dependências de banco de dados ou Composer

## Como executar

### Opção 1 — PHP built-in server (desenvolvimento)

```bash
cd efixa_website/efixa
php -S localhost:8000
```

Acesse: [http://localhost:8000](http://localhost:8000)

### Opção 2 — XAMPP / Laragon (Windows)

1. Copie a pasta `efixa_website/` para `C:\xampp\htdocs\` ou `C:\laragon\www\`
2. Inicie o Apache
3. Acesse: `http://localhost/efixa_website/efixa/`

### Opção 3 — VS Code + extensão PHP Server

1. Instale a extensão **PHP Server** (`brapifra.phpserver`)
2. Abra `efixa/index.php`
3. Clique em **PHP Server: Serve Project**

## Estrutura de cada página

```php
<?php
$page_title       = 'Título — Efixa';
$page_description = 'Meta description da página.';
$active_nav       = 'slug-da-pagina'; // sobre | blog | contato | onde-comprar
                                      // ou uma das categorias de produto
include 'includes/head.php';
include 'includes/header.php';
?>

<main>
  <!-- Conteúdo específico da página -->
</main>

<?php include 'includes/footer.php'; ?>
```

### Valores válidos para `$active_nav`

| Valor               | Página                  |
|---------------------|-------------------------|
| `sobre`             | Sobre Nós               |
| `blog`              | Blog                    |
| `contato`           | Contato                 |
| `onde-comprar`      | Onde Comprar            |
| `carreira`          | Carreira                |
| `produtos`          | Produtos (visão geral)  |
| `adesivos`          | Adesivos Instantâneos   |
| `acrilicos`         | Acrílicos               |
| `espumas-pu`        | Espumas de PU           |
| `aplicadores`       | Aplicadores             |
| `silicones`         | Silicones               |
| `vedantes-polimero` | Vedantes de Polímero    |
| `pu40`              | PU40                    |
| `diversos`          | Diversos                |
| `''` (vazio)        | Home / Privacidade      |

## Stack

| Tecnologia | Uso |
|------------|-----|
| PHP 8+     | Template engine via includes |
| Tailwind CSS 3.4.17 | Utilidades CSS (JIT via CDN local) |
| Lucide.js  | Ícones SVG |
| Geist      | Fonte de títulos |
| Inter      | Fonte de corpo |

> Todos os assets (Tailwind, Lucide, fontes) estão em `efixa/assets/` — **sem dependência de internet** para o subset latino. Subsets não-latinos carregam do Google Fonts CDN.

## Migração para WordPress (futuro)

| Arquivo atual         | Equivalente WordPress          |
|-----------------------|-------------------------------|
| `includes/head.php`   | `header.php` do tema (parte 1) |
| `includes/header.php` | `header.php` do tema (parte 2) |
| `includes/footer.php` | `footer.php` do tema           |
| `assets/custom.css`   | `style.css` + `wp_enqueue_style()` |
| `$page_title`         | `wp_title()` / `the_title()`  |
| Cada `<main>`         | Template de página (`page-{slug}.php`) |
