var home = {
    redirecionar: function(){
        let perfilBtn = document.getElementById("imagem-usuario");
        perfilBtn.onclick = function(){
            window.location.href = "perfil";
        }
    }
};


home.redirecionar();
