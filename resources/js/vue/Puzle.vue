<template>
    <Candado numUno="1" numDos="7"></Candado>

    <h1 class="text-center titulo">Tercera Prueba</h1>
    <h3 class="text-center titulo mx-auto w-75">Para obtener el ultimo numero del candado azul deberás primero completar este puzle.<br>A continuacion deberás sumar todos los digitos de los cuadradados azules. El ultimo digito será la solución.</h3>

    <div id="cajaPrueba" class="ml-1 w-50 mx-auto">
        <i id="animation"></i>
        <div id="puzle">
            <div class="row">
                <input type="number" class="col" id="">
                <i class="fa-solid fa-minus col text-center"></i>
                <i class="fa-sharp fa-solid fa-8 col text-center"></i>
                <i class="fa-solid fa-equals col text-center"></i>
                <div class="col d-flex dNumber res dNumberRes"><i class="fa-solid fa-2"></i><i class="fa-solid fa-5"></i></div>
            </div>
            <div class="row">
                <i class="fa-solid fa-divide col text-center"></i>
                <i></i>
                <i class="fa-solid fa-xmark col text-center"></i>
                <i></i>
                <i></i>
            </div>
            <div class="row">
                <div class="col d-flex dNumber"><i class="fa-solid fa-1"></i><i class="fa-solid fa-1"></i></div>
                <i class="fa-solid fa-plus col text-center"></i>
                <input type="number" class="col" id="">
                <i class="fa-solid fa-equals col text-center"></i>
                <input type="number" class="col res" id="">
            </div>
            <div class="row">
                <i class="fa-solid fa-equals col text-center"></i>
                <i></i>
                <i class="fa-solid fa-equals col text-center"></i>
                <i></i>
                <i></i>
            </div>
            <div class="row">
                <input type="number" class="col res" id="">
                <i></i>
                <div class="col d-flex dNumber res dNumberRes"><i class="fa-solid fa-4"></i><i class="fa-solid fa-0"></i></div>
                <i></i>
                <i></i>
            </div>
        </div>
        <input type="number" max="9"  id="textNumero" v-model="numeroRespuesta">
        <button id="btnResponder" @click="clickBtn()">{{ textButton }}</button>
        <a id="btnSiguientePrueba" :href="route('principal')"><button>Siguiente prueba</button></a>
        <label class="text-danger" id="labelError">{{ mensajeError }}</label>
    </div>
</template>

<script setup>
    import route from 'ziggy';
    import Candado from './components/CandadosAvanzado.vue'
</script>

<script>
    export default {
        data() {
            return {
                numeroRespuesta: null,
                mensajeError: '',
                textButton: 'Responder',
                numClickBtn: 0
            }
        },
        methods: {
            clickBtn() {
                if(this.numClickBtn == 0) {
                    if(this.numeroRespuesta < 0 || this.numeroRespuesta > 9) {
                        this.mensajeError = 'El numero tiene que estar entre 0 y 9';
                        document.getElementById('labelError').style.display = 'block';
                    } else if(this.numeroRespuesta == null) {
                        this.mensajeError = 'Tienes que introducir un numero';
                        document.getElementById('labelError').style.display = 'block';
                    } else {
                        document.getElementById('puzle').style.display = 'none';
                        let animation = document.getElementById('animation');

                        if(this.numeroRespuesta != 4) {
                            this.numeroRespuesta = null;
                            animation.setAttribute('class', 'fa-solid fa-xmark text-danger');
                            this.textButton = 'Volver a jugar';
                            this.numClickBtn = 1;
                        } else {
                            document.getElementById('animation').style.marginTop = '80px';
                            animation.setAttribute('class', 'fa-solid fa-4');
                            this.textButton = 'Siguiente Prueba';
                            this.numClickBtn = 2;
                            document.getElementById('btnResponder').style.display = 'none';
                            document.getElementById('btnSiguientePrueba').style.display = 'block';
                        }
                        document.getElementById('labelError').style.display = 'none';
                        document.getElementById('textNumero').style.display = 'none';

                        document.getElementById("animation").style.display = 'block';

                        setTimeout(() => {
                                document.getElementById("animation").style.transform = "scale(8)";
                        }, 1);
                    }
                } else if(this.numClickBtn == 1) {
                    this.numClickBtn = 0;
                    this.textButton = 'Responder';

                    document.getElementById('puzle').style.display = 'block';
                    
                    document.getElementById("animation").style.transform = "scale(1)";
                    document.getElementById('textNumero').style.display = 'block';
                    document.getElementById("animation").style.display = 'none';

                } else {
                    console.log('Siguiente pagina');
                }
            }
        }
    }
</script>

<style>
    body{
        background-image: url('/img/fondo.png');
        background-color:darkblue;
    }

    .titulo {
        font-weight: bold;
        color: rgb(251, 252, 252 );
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
        padding: 20px 10px;
        width: 40%;
        margin: 8px auto;
    }
    
    #cajaPrueba {
        display: flex;
        padding: 10px;
        border-radius: 5px;
        min-height: 300px;
        justify-content: center;
        flex-direction: column;
        background-color: blanchedalmond;
    }

    #puzle {
        margin: auto;
        margin-bottom: 10px;
    }

    #puzle input {
        max-width: 50px;
        border-radius: 10px;
        border: 0.5px black solid;
        text-align: center;
        font-size: 1.5em;
    }

    .row {
        align-items: center;
    }

    .row * {
        margin: 4px 1px;
        width: 40px;
    }

    .dNumber {
        justify-content: center;
    }

    .res {
        background-color: cornflowerblue;
        border-radius: 10px;
    }

    .dNumberRes {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    #puzle i {
        max-width: 50px;
    }

    #textNumero {
        font-size: 4em;
        width: 30%;
        height: 100%;
        align-self: center;
        text-align: center;
        max-width: 85px;
    }

    button {
        background: linear-gradient(85deg, purple, blue);
        color: white;
        border: 0px;
        border-radius: 1rem;
        padding: 0.5rem 1rem;
        font-weight: bold;
        box-shadow: rgba(0, 0, 0, 0.327) 0px 4px 12px;
    }

    #btnSiguientePrueba {
        display: none;
        margin: auto;
    }

    input[type=number]::-webkit-inner-spin-button { 
        -webkit-appearance: none; 
    }

    #btnResponder {
        margin-top: 30px;
        align-self: center;
    }

    #labelError {
        display: none;
        margin-top: 20px;
        align-self: center;
    }

    #animation {
        display: none;
        align-self: center;
        transition: all 2s;
        margin-bottom: 50px;
    }

</style>