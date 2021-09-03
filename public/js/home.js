


/**
 *  Modulo para listar as perguntas
 * 
 */
(function() {

    var listaPerguntas = document.getElementById('container-lista-perguntas');
    var botoesMenu = document.getElementsByClassName('btn-selecionar-categoria-pergunta');
    var paginaAtual = 1;
    var tabSelecionada = 'paquera';
    var spiner = document.getElementById('spinner');

    /**
     *  Metodo para alterar tab selecinada
     */

    /**
     * Metodo para setar evento de click na janela
     */
    (function trocarAba(){
        for(let botao of botoesMenu){
            botao.onclick = () => {
                tabSelecionada  = botao.innerHTML;
                paginaAtual = 1;
                listarPergunta(tabSelecionada, paginaAtual,false);
            }
        }
    }());

    /**
     * Metodo para remover o actived do botao
     */
    function removerActived(){
        for(let botao of botoesMenu){
            // Removendo classe active
            botao.classList.remove('active');
        }
    }

    /**
     * Metodo para obter as perguntas
     */
    async function obterPerguntas(categoria,pagina){
        const res = await fetch(
            URL_BASE + 'perguntas' + '/' + categoria + "?page=" + pagina
        );
        const data = await res.json();
        return data;
    }

    /**
     * Metodo para listar as perguntas no html
     */
    async function listarPergunta(categoria,pagina,contatenar){
        let data = await obterPerguntas(categoria, pagina);
        let perguntas = data['perguntas']['data'];
        let containerPerguntas = document.createElement('div');

        perguntas.forEach(pergunta => {
            // Criando elemento
            let elemento = document.createElement('div');
            elemento.innerHTML = 
            `<div class = "container-pergunta-home" id = "container-pergunta-home">
                <div class = "container-pergunta-header">
                    <img src="${ URL_BASE + 'imagem/' + pergunta.user.image_profile }" alt="Imagem usuário"></img>
                    <h7>${ pergunta.user.name }</h7>
                    <h7>Há 7 min</h7>
                    <h7>0 Respostas</h7>
                </div> 
               <div class = "container-pergunta-body"> 
                    <div class = "container-pergunta-body">
                        <h1>${ pergunta.titulo.substr(0,44) + '...' }</h1> 
                        <h7>${ pergunta.conteudo.substr(0,350) + '...' }</h7>
                        <a id = "btn-responder" href="https://www.w3schools.com">Visit W3Schools</a>
                    </div>
                </div>
            </div>`;

            // Evento de click
            elemento.onclick = (e) => {
                elemento.querySelector('a').click();
            };
            // Adicionando elemento a lista
            containerPerguntas.insertAdjacentElement('beforeend', elemento);
        });

        if(contatenar){
            listaPerguntas.insertAdjacentElement('beforeend', containerPerguntas);
        } else {
            listaPerguntas.innerHTML = '';
            listaPerguntas.classList.add('container-lista-perguntas');
            listaPerguntas.insertAdjacentElement('beforeend', containerPerguntas);
        }
    }

    /**
     * Metodo para filtrar as peguntas de acordo com a categoria
     */
    for(let botao of botoesMenu){
        botao.addEventListener('click',function(){
            removerActived();
            botao.classList.add('active');
        })
    }

    /**
     * Criando scroll infinito
     */
    window.addEventListener('scroll', () => {
        if(window.scrollY + window.innerHeight >= document.documentElement.scrollHeight){
            paginaAtual = paginaAtual + 1;
            listarPergunta(tabSelecionada, paginaAtual,true);
        }
    })

    /**
     *  Criando evento ao carregar a pagina
     */
    window.addEventListener('load', () => {
        listarPergunta(tabSelecionada, paginaAtual);
    });


}());

