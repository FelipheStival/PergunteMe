




(function() {

    let btnPerfil = document.getElementById('btn-editar-pefil');
    let btnFoto = document.getElementById('btn-editar-foto');
    let btnAtualizarNome = document.getElementById('btn-atualizar-perfil');
    let btnAtualizarFoto = document.getElementById('btn-enviar-foto-input');

    btnPerfil.onfocus = function(){

        document.getElementById('tab-editar-perfil').style.display = 'block';
        document.getElementById('tabs-editar-foto').style.display = 'none';

    }

    btnFoto.onfocus = function(){
        document.getElementById('tab-editar-perfil').style.display = 'none';
        document.getElementById('tabs-editar-foto').style.display = 'flex';
    }

    // Iniciando input
    btnPerfil.focus();

}());