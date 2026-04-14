# Site ETEC Zona Leste

Este é um projeto web desenvolvido com Laravel que simula um site institucional da ETEC Zona Leste, contendo informações sobre cursos, vestibulinho e um sistema de busca inteligente com sugestões em tempo real.

---

## Funcionalidades

-  Sistema de busca com sugestões dinâmicas (AJAX)
-  Navegação entre páginas (Início, Vestibulinho, Cursos)
-  Destaque de termos pesquisados
-  Interface responsiva com CSS customizado
-  Experiência dinâmica sem recarregamento de página

---

## Tecnologias utilizadas

- PHP (Laravel)
- JavaScript (Fetch API)
- HTML5
- CSS3

---

## Estrutura do projeto

- `app/Http/Controllers`
  - Contém o `BuscaController`, responsável pelas sugestões de busca

- `resources/views`
  - Arquivos das páginas do site (Blade)

- `public/`
  - Arquivos estáticos (CSS, JS, imagens)

---

## Como funciona a busca

O sistema de busca funciona da seguinte forma:

1. O usuário digita no campo de pesquisa
2. Após 3 caracteres, uma requisição AJAX é enviada para o backend
3. O Laravel processa os dados no `BuscaController`
4. As sugestões são retornadas em JSON
5. O JavaScript exibe os resultados dinamicamente

Além disso, ao clicar em uma sugestão:
- O usuário é redirecionado para a página correspondente
- O termo pesquisado é destacado com `<mark>`
