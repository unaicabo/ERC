cargarImagen ();

function cargarImagen () {
    // displaying the uploaded image
    const image = document.createElement("img");
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
        isDrawing = true;
        context.beginPath();
        context.lineWidth = 2;
        context.strokeStyle = "#ff0000";
        context.lineJoin = "round";
        context.lineCap = "round";
        context.moveTo(e.clientX-505, e.clientY-115);
    };

    canvasElement.onmousemove = (e) => {
        if (isDrawing) {
            context.lineTo(e.clientX-505, e.clientY-115);
            context.stroke();
        }
    };

    canvasElement.onmouseup = function () {
        isDrawing = false;
        context.closePath();
    };
}
