var perfil = {
    
    btnPergunta: document.getElementById("btn-tabs-left"),
    btnResposta: document.getElementById("btn-tabs-right"),
    perguntas: document.getElementById("container-respostas-perfil"),

    trocarTab: function(){

        this.btnPergunta.onclick = function(){
            document.getElementById("container-respostas-perguntas").style.backgroundColor = "green";
        }

        this.btnResposta.onclick = function(){
            document.getElementById("container-respostas-perguntas").style.backgroundColor = "blue";
        }
    }

};

perfil.trocarTab();