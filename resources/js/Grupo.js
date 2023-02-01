import axios from 'axios';

window.addEventListener("load", function() {
    this.document.getElementById('aniadirIntegrante').addEventListener('click', aniadirIntegranteArray);
    this.document.getElementById('btnCrearGrupo').addEventListener('click', crearGrupo);
} , true)


let idUsuarios = []

function aniadirIntegranteArray(){
    let cajaIntegrantes = document.getElementById('cajaIntegrantes');
    let usuario = document.getElementById('usuarios').value;
    let idUsuario = usuario.slice(0, usuario.indexOf('-'));
    let nameUsuario = usuario.slice((usuario.indexOf('-') + 1), usuario.length);

    if(idUsuarios.indexOf(idUsuario) == -1) {
        let newUsuario = document.createElement('h4');
        newUsuario.setAttribute('id', idUsuario);
        newUsuario.innerHTML = nameUsuario;

        cajaIntegrantes.appendChild(newUsuario);

        idUsuarios.push(idUsuario);
    }
}

function crearGrupo(event) {
    event.preventDefault();
    let nombreGrupo = document.getElementById('nombreGrupo').value;

    axios.post('/api/hacerGrupo',{
        usersId: idUsuarios,
        groupName: nombreGrupo
    });

    document.getElementById('formCrearGrupos').submit();
}