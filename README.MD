# Site Brasil.GS

O site **Brasil.GS** é um tema em WordPress desenvolvido especialmente para a empresa Brasil.GS.
Sua arquitetura é baseada no modelo **Atomic Design**, de modo mais simplificado quais seus componentes são representados em módulos, estruturas e páginas. E a utilização de SCSS ajuda na criação de componentes dinâmicos que dão maior profundidade ao site.

## Arquitetura

```
brasilgs
.
├── css
│   └── style.css
├── font
├── img
├── js
├── mysql
├── raiz
├── scss
│   ├── style.scss
│   └── _varset.scss
│   └── _base.scss
│   └── _internas.scss
│   └── _lp.scss
├── src
│   ├── estruturas
│   │   ├── navbar.php
│   │   ├── rodape.php
│   │   ├── slider.php
│   │   ├── titulos-blog.php
│   │   └── titulos-interno.php
│   ├── modulos
│   │   ├── modals.php
│   │   ├── numeros.php
│   │   ├── titulos-imagem.php
│   │   ├── titulos-texto.php
│   │   └── varset.php
│   └── paginas
│       ├── areadecanais.php
│       ├── contato.php
│       ├── home.php
│       ├── imprensa.php
│       ├── imprensa-detalhes.php
│       ├── orangepaper.php
│       ├── orangepaper-detalhes.php
│       ├── sobre.php
│       ├── paginas.php
│       ├── arquivos.php
│       └── detalhes.php
├── videos
├── index.php
├── footer.php
├── header.php
├── style.css
└── ...

```

Na pasta **src** tem os arquivos necessário que formam as páginas do site. Em *estruturas* ficam as bases padronizadas para formar o site: **navbar, rodapé, slider e titulos**. Em *modulos* são as informações que compõe as estruturas, na pasta tem o arquivo **varset.php** que tem as informações de contato e mapas. Em *paginas* ficam os arquivos que formam cada página do site: **home, sobre, contato, blog etc**; também é composta por arquivos padronizados do WordPress como: **arquivos.php, paginas.php, detalhes.php** que são respectivamente **archive, page, single** interpretado pelo WordPress.

## Tema WordPress

A pasta principal **brasilgs**, deve ser colocada na diretório de temas do WordPress **/wp-content/themes/** e o tema deve ser obrigatóriamente ativado no menu de Temas do WordPress

## Banco de Dados

SQL está na pasta **mysql**, deve ser importado no phpMyAdmin e configurar no arquivo **wp-config.php** da sua instalação WordPress

## Arquivos Raíz

Os arquivos da pasta **raiz**, devem ser adicionados na raíz do site, juntamente com o arquivo **wp-config.php**

## WordPress

Este é um site em WordPress!