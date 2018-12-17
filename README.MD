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
│       ├── navbar.php
│       ├── rodape.php
│       ├── slider.php
│       ├── titulos-blog.php
│       └── titulos-interno.php
│   ├── modulos
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

## Banco de Dados

SQL está na pasta **mysql**, deve ser importado no phpMyAdmin e configurar no arquivo **wp-config.php** da sua instalação WordPress

## Arquivos Raíz

Os arquivos da pasta **raiz**, devem ser adicionados na raíz do site, juntamente com o arquivo **wp-config.php**

## WordPress

Este é um site em WordPress!