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
        document.getElementById('errorGrupos').innerHTML = '';
        let nombreGrupo = document.getElementById('nombreGrupo').value;

    if(nombreGrupo != '') {
        if(idUsuarios.length != 0) {
            idUsuarios.push(document.getElementsByClassName('h1CrearGrupo')[0].id);
            axios.post('/api/hacerGrupo',{
                usersId: idUsuarios,
                groupName: nombreGrupo
            })
            .then(response => {
                document.getElementById('formCrearGrupos').submit();
            });
        } else {
            document.getElementById('errorGrupos').innerHTML = 'El grupo tiene que tener al menos un integrante';
        }
    } else {
        document.getElementById('errorGrupos').innerHTML = 'El grupo tiene que tener un nombre';
    }
}
