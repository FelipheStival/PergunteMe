var editarPerfil = {

    btnEditarPerfil: document.getElementById('btn-editar-pefil'),
    btnEditarFoto: document.getElementById('btn-editar-foto'),
    btnEditarSenha: document.getElementById('btn-editar-senha'),
    btnEditarImagemCapa: document.getElementById('btn-editar-imagem-capa'),
    btnAtualizarPerfil: document.getElementById('btn-atualizar-perfil'),

    /**
     * Método para trocar as tabs
     * 
     */
    teste: function () {

        let caixaBotoes = document.getElementById('container-editar-perfil-tabs');
        let tabUsuario = document.getElementById('tab-editar-perfil');
        let tabFoto = document.getElementById('tabs-editar-foto');

        caixaBotoes.onclick = function (e) {

            let botaoSelecionado = e.target.id;

            switch (botaoSelecionado) {
                case 'btn-editar-pefil':
                    tabUsuario.style.display = "block"
                    tabFoto.style.display = "none";
                    break;
                case 'btn-editar-foto':
                    tabUsuario.style.display = "none"
                    tabFoto.style.display = "block";
                    break;
                default:
                console.log("Nenhuma opcao selecionada")
            }
        }

    },
    /**
    * Metodo para iniciar as tabs
    * 
    */
    iniciarTab: function () {
        this.btnEditarPerfil.focus();
    },
    /**
     * Metodo para atualizar o nome do usuario
     * 
     */
    atualizarNome: function () {

        let novoNome = { usuario: document.getElementById('nomeUsuarioInput').value }
        let tokken = document.getElementsByName('csrf-token')[0].getAttribute('content');

        /**
         * Método para atualizar nome do usuario
         */
        this.btnAtualizarPerfil.onclick = function () {

        }
    }
}

editarPerfil.teste();