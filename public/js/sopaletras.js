var clicks = 0;
var mifila1 = [];
var micolumna1 = [];
var fila1 = 0;
var columna1 = 0;
var mifila2 = [];
var micolumna2 = [];
var fila2 = 0;
var columna2 = 0;

$("#tablasopaletras").on("click","td[id^='letra-']", function(){
//$("td[id^='letra-']").click(function(){
    clicks++;
    if(clicks == 1){
        var coordenada = this.id.split("-");
        mifila1 = coordenada[1];
        fila1 = mifila1.split("f")[1];
        micolumna1 = coordenada[2];
        columna1 = micolumna1.split("c")[1];

        document.getElementById("letra-f"+fila1+"-c"+columna1).style.backgroundColor = "red";

    }else if (clicks == 2){
        var coordenada = this.id.split("-");
        mifila2 = coordenada[1];
        fila2 = mifila2.split("f")[1];
        micolumna2 = coordenada[2];
        columna2 = micolumna2.split("c")[1];


        if(fila1 != fila2 && columna1 != columna2)
        {
            if (columna1 < columna2)
            {
                for(var f = fila1, c = columna1; f <= parseInt(fila2), c >= parseInt(columna2); f++, c--)
                {
                    document.getElementById("letra-f"+f+"-c"+c).style.backgroundColor = "red";
                }
            }else
            {
                for(var f = fila1, c = columna1; f <= parseInt(fila2), c <= parseInt(columna2); f++, c++)
                {
                    document.getElementById("letra-f"+f+"-c"+c).style.backgroundColor = "red";
                }
            }



        }else if(fila1 == fila2  && columna1 != columna2)
        {
            f = fila1;
            for(var c = columna1; c<=parseInt(columna2); c++)
            {
                document.getElementById("letra-f"+f+"-c"+c).style.backgroundColor = "red";
            }
        }else if(fila1 != fila2  && columna1 == columna2)
        {
            c = columna1;
            for(var f = fila1; f<=parseInt(fila2); f++)
            {
                document.getElementById("letra-f"+f+"-c"+c).style.backgroundColor = "red";
            }
        }

        clicks = 0;
    }

    console.log(clicks);
})


$("#clear").click(function () {
    $("td").css("background-color", "white");
    clicks = 0;
});
