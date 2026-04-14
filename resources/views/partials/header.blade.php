<header>
    <div class="navbar">
        <div class="logos">
            <img src="{{ asset('assets/cps-logo.png') }}" alt="Centro Paula Souza" class="logo">
            <img src="{{ asset('assets/etec-logo.png') }}" alt="Etec da Zona Leste" class="logo">
        </div>
        <form class="pesquisa">
    
        <div class="linha-pesquisa">
            <input type="text" id="pesquisa" class="barra-pesquisa" placeholder="Buscar..." autocomplete="off" name="input">
            <button type="submit" class="botao-pesquisa">🔍</button>
        </div>

        <div class="sugestoes" id="sugestoes"></div>

        </form>
        
    </div>
    <div class="menu">
        <ul>
            <li class="itens-menu"><a href="{{ route('inicio') }}">Início</a></li>
            <li class="itens-menu"><a href="{{ route('vestibulinho') }}">Vestibulinho</a></li>
            <li class="itens-menu"><a href="{{ route('cursos') }}">Cursos</a></li>
        </ul>
    </div>
</header>