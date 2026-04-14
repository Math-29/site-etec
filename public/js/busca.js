document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("pesquisa");
    const sugestoesBox = document.getElementById("sugestoes");
    const pesquisa = document.querySelector(".pesquisa");

    if (!input) return;

    input.addEventListener("input", async () => {
        const valor = input.value;

        sugestoesBox.innerHTML = "";

        if (valor.length < 3) {
            pesquisa.classList.remove('ativa');
            return;
        }

        const response = await fetch(`/sugestoes?input_user=${valor}`);
        const dados = await response.json();

        dados.forEach(item => {
            const div = document.createElement("div");
            div.classList.add("sugestao-item");

            div.textContent = item.texto;

            div.onclick = () => {
                window.location.href = `/${item.pagina}?input_user=${encodeURIComponent(item.texto)}`;
            };

            sugestoesBox.appendChild(div);
        });

        if (dados.length > 0) {
            pesquisa.classList.add('ativa');
        } else {
            pesquisa.classList.remove('ativa');
        }
    });

    function destacarTexto() {
        const params = new URLSearchParams(window.location.search);
        const termo = params.get('input_user');

        if (!termo) return;

        const elementos = document.querySelectorAll("p, h1, h2, h3, span, li, a");

        elementos.forEach(el => {
            const regex = new RegExp(`(${termo})`, 'gi');
            el.innerHTML = el.innerHTML.replace(regex, '<mark>$1</mark>');
        });
    }

    window.addEventListener("load", destacarTexto);

    pesquisa.addEventListener("submit", (e) => {
        e.preventDefault();
    });
});