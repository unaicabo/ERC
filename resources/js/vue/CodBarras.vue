<template>
    <Candado numUno="1"></Candado>


    <h1 class="text-center titulo">Segunda Prueba</h1>
    <h3 class="text-center titulo mx-auto w-75">Para obtener el segundo numero del candado azul deberas calcular el dígito de control del siguiente código de barras:</h3>

    <div id="cajaPrueba" class="ml-1 w-50 mx-auto">
        <i id="animation"></i>
        <img src="../../img/CodBarras.jpeg" alt="Codigo de barras" id="imgCodBarras">
        <input type="number" max="9"  id="textNumero" v-model="numeroRespuesta">
        <button id="btnResponder" @click="clickBtn()">{{ textButton }}</button>
        <a id="btnSiguientePrueba" :href="route('puzle')"><button>Siguiente prueba</button></a>
        <label class="text-danger" id="labelError">{{ mensajeError }}</label>
    </div>
</template>

<script setup>
    import Candado from './components/CandadosAvanzado.vue';
    import route from 'ziggy';
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
                        document.getElementById('imgCodBarras').style.display = 'none';
                        let animation = document.getElementById('animation');

                        if(this.numeroRespuesta != 7) {
                            this.numeroRespuesta = null;
                            animation.setAttribute('class', 'fa-solid fa-xmark text-danger');
                            this.textButton = 'Volver a jugar';
                            this.numClickBtn = 1;
                        } else {
                            document.getElementById('animation').style.marginTop = '80px';
                            animation.setAttribute('class', 'fa-solid fa-7');
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

                    document.getElementById('imgCodBarras').style.display = 'block';
                    
                    document.getElementById("animation").style.transform = "scale(1)";
                    document.getElementById('textNumero').style.display = 'block';
                    document.getElementById("animation").style.display = 'none';

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
        padding: 1rem;
        background-color: blanchedalmond;
    }

    #imgCodBarras {
        width: 50%;
        align-self: center;
        margin-bottom: 20px;
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