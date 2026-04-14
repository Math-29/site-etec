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

        const response = await fetch(`/sugestoes?q=${valor}`);
        const dados = await response.json();

        dados.forEach(item => {
            const div = document.createElement("div");
            div.classList.add("sugestao-item");
            div.textContent = item;

            div.onclick = () => {
                input.value = item;
                sugestoesBox.innerHTML = "";
            };

            sugestoesBox.appendChild(div);
        });

        if (dados.length > 0) {
            pesquisa.classList.add('ativa');
        } else {
            pesquisa.classList.remove('ativa');
        }
    });
});