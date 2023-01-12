function comprobarVacios() {
    var respuesta = document.getElementById("respuesta").value;
    if (respuesta == "") {

        document.getElementById("respuesta").style.borderColor = "red";
        document.getElementById("respuesta").style.Color = "red";
        document.getElementById("respuesta").value = "Introduce tu respuesta";
    }
}

function limpiar(){
    document.getElementById("respuesta").style.borderColor = "rgb(160, 160, 160";
    document.getElementById("respuesta").style.Color = "white";
    document.getElementById("respuesta").value = "";
}
