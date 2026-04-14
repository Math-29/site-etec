<div class="card-curso">

    <div class="img-container">
        <img src="{{ $img }}" alt="{{ $alt }}">
    </div>
                    
    <div class="info">
        <h2>{{ $curso }}</h2><br>
        <p>{{ $texto }}</p><br>
    </div>
        
    <div class="detalhes">
        <p><b>Duração: </b> {{ $tempo }}</p><br>
        <p><b>Periódo: </b> {{ $periodo }}</p>
    </div>

    <button class="saiba"><a href="{{ $link }}">Saiba Mais!</a></button>
</div>