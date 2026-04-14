<section class="banner">
    <h2 class="titulo-banner">{{ $titulo }}</h2>
    <p>{{ $texto }}</p>

    @if(isset($botao))
        <a href="{{ $botao['link'] }}" class="botao-banner">
            {{ $botao['texto'] }}
        </a>
    @endif
</section>