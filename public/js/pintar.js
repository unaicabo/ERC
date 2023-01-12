cargarImagen ();
var image

let x = 0;
let y = 0;

function cargarImagen () {
    // displaying the uploaded image
    image = document.createElement("img");
    image.src = 'img/sopa_letras2.PNG';

    // enbaling the brush after after the image
    // has been uploaded
    image.addEventListener("load", () => {
        drawOnImage(image);
    });
}

function fileToDataUri(field) {
    return new Promise((resolve) => {
        const reader = new FileReader();

        reader.addEventListener("load", () => {
            resolve(reader.result);
        });

        reader.readAsDataURL(field);
    });
}

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
        cargarImagen();
    };

    let isDrawing;

    canvasElement.onmousedown = (e) => {

        console.log("pageYOffset"+window.pageYOffset);
        console.log("Coords abs: " + e.clientX+" "+e.clientY);
        var scroll = window.pageYOffset;
        console.log(scroll);


        isDrawing = true;
        context.beginPath();
        context.lineWidth = 2;
        context.strokeStyle = "#ff0000";
        context.lineJoin = "round";
        context.lineCap = "round";

        if (scroll>0){
            x = e.clientX;
            console.log("x "+x);
            y = e.clientY-scroll;
            console.log("y "+y);

            context.moveTo(e.clientX, e.clientY-scroll);
        }else{
            context.moveTo(e.clientX- 515, e.clientY-207);
        }
    };

    canvasElement.onmousemove = (e) => {
        var scroll = window.pageYOffset;
        if (isDrawing) {
            if (scroll>0){
                x = e.clientX;
                console.log("x move "+x);
                y = e.clientY-scroll;
                console.log("y move "+y);

                context.lineTo(e.clientX, e.clientY-scroll);
            }else{
                context.lineTo(e.clientX- 515, e.clientY-207);
            }
            context.stroke();
        }
    };

    canvasElement.onmouseup = function () {
        isDrawing = false;
        context.closePath();
    };
}
