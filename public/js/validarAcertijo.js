function comprobarVacios() {
    var respuesta = document.getElementById("respuesta").value;
    if (respuesta == "") {

        document.getElementById("respuesta").style.borderColor = "red";
        document.getElementById("respuesta").style.Color = "red";
        document.getElementById("respuesta").value = "Introduce tu respuesta";
    }else if (respuesta != "s" && respuesta != "S"){
        document.getElementById("respuesta").style.borderColor = "red";
        document.getElementById("resultado").style.visibility= 'visible';
        document.getElementById("resultado").innerHTML = "Parace que ese no es el digito correcto";
    }
    else{
        document.getElementById("respuesta").style.borderColor = "#0fff00";
        document.getElementById("respuesta").style.border = "2px solid #0fff00";
        document.getElementById("contenedor-resultado").style.display= 'flex';
        // document.getElementById("resultado").style.visibility= 'visible';
        // document.getElementById("resultado").innerHTML = "Correcto, has consegido un digito del candado";
        // document.getElementById("btnSiguiente").style.visibility= 'visible';
    }
}

function limpiar(){
    document.getElementById("respuesta").style.borderColor = "rgb(160, 160, 160";
    document.getElementById("respuesta").style.Color = "white";
    document.getElementById("respuesta").value = "";
}

