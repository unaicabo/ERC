//  //======================================================================
//     // VARIABLES
//     //======================================================================
//     let miCanvas = document.querySelector('#pizarra');
//     let lineas = [];
//     let correccionX = 0;
//     let correccionY = 0;
//     let pintarLinea = false;
//     // Marca el nuevo punto
//     let nuevaPosicionX = 0;
//     let nuevaPosicionY = 0;

//     let posicion = miCanvas.getBoundingClientRect()
//     correccionX = posicion.x;
//     correccionY = posicion.y;

//     miCanvas.width = 500;
//     miCanvas.height = 500;

//     //======================================================================
//     // FUNCIONES
//     //======================================================================

//     /**
//      * Funcion que empieza a dibujar la linea
//      */
//     function empezarDibujo () {
//         pintarLinea = true;
//         lineas.push([]);
//     };

//     /**
//      * Funcion que guarda la posicion de la nueva línea
//      */
//     function guardarLinea() {
//         lineas[lineas.length - 1].push({
//             x: nuevaPosicionX,
//             y: nuevaPosicionY
//         });
//     }

//     /**
//      * Funcion dibuja la linea
//      */
//     function dibujarLinea (event) {
//         event.preventDefault();
//         if (pintarLinea) {
//             let ctx = miCanvas.getContext('2d')
//             // Estilos de linea
//             ctx.lineJoin = ctx.lineCap = 'round';
//             ctx.lineWidth = 10;
//             // Color de la linea
//             ctx.strokeStyle = '#000000';
//             // Marca el nuevo punto
//             if (event.changedTouches == undefined) {
//                 // Versión ratón
//                 nuevaPosicionX = event.layerX;
//                 nuevaPosicionY = event.layerY;
//             } else {
//                 // Versión touch, pantalla tactil
//                 nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
//                 nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
//             }
//             // Guarda la linea
//             guardarLinea();
//             // Redibuja todas las lineas guardadas
//             ctx.beginPath();
//             lineas.forEach(function (segmento) {
//                 ctx.moveTo(segmento[0].x, segmento[0].y);
//                 segmento.forEach(function (punto, index) {
//                     ctx.lineTo(punto.x, punto.y);
//                 });
//             });
//             ctx.stroke();
//         }
//     }

//     /**
//      * Funcion que deja de dibujar la linea
//      */
//     function pararDibujar () {
//         pintarLinea = false;
//         guardarLinea();
//     }

//     //======================================================================
//     // EVENTOS
//     //======================================================================

//     // Eventos raton
//     miCanvas.addEventListener('mousedown', empezarDibujo, false);
//     miCanvas.addEventListener('mousemove', dibujarLinea, false);
//     miCanvas.addEventListener('mouseup', pararDibujar, false);

//     // Eventos pantallas táctiles
//     miCanvas.addEventListener('touchstart', empezarDibujo, false);
//     miCanvas.addEventListener('touchmove', dibujarLinea, false);

image = "././img/sopa_letras2.PNG";

console.log(image);

drawOnImage(image);


function drawOnImage(image = null) {
    const canvasElement = document.getElementById("canvas");
    const context = canvasElement.getContext("2d");

    // if an image is present,
    // the image passed as a parameter is drawn in the canvas
    if (image) {
      const imageWidth = image.width;
      const imageHeight = image.height;

      // rescaling the canvas element
      canvasElement.width = imageWidth;
      canvasElement.height = imageHeight;

      context.drawImage(image, 0, 0, imageWidth, imageHeight);
    }

    const clearElement = document.getElementById("clear");
    clearElement.onclick = () => {
      context.clearRect(0, 0, canvasElement.width, canvasElement.height);
    };

    let isDrawing;

    canvasElement.onmousedown = (e) => {
      isDrawing = true;
      context.beginPath();
      context.lineWidth = 2;
      context.strokeStyle = "#000000";
      context.lineJoin = "round";
      context.lineCap = "round";
      context.moveTo(e.clientX, e.clientY);
    };

    canvasElement.onmousemove = (e) => {
      if (isDrawing) {
        context.lineTo(e.clientX, e.clientY);
        context.stroke();
      }
    };

    canvasElement.onmouseup = function () {
      isDrawing = false;
      context.closePath();
    };
  }
