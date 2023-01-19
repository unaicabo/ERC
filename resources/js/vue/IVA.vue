<template>
    <Candado/>

    <h1 class="text-center titulo">Primera Prueba</h1>
    <h3 class="text-center titulo mx-auto w-75">Para obtener el primer numero del candado azul tendrás que calcular el IVA del siguiente PVP: <b>45,67</b>.<br>El segundo decimal del importe será será el número del candado.</h3>

    <div id="cajaPrueba" class="ml-1 w-50 mx-auto">
        <i id="animation"></i>
        <input type="number" max="9"  id="textNumero" v-model="numeroRespuesta">
        <button id="btnResponder" @click="clickBtn()">{{ textButton }}</button>
        <a id="btnSiguientePrueba" :href="route('codBarras')"><button>Siguiente prueba</button></a>
        <label class="text-danger" id="labelError">{{ mensajeError }}</label>
    </div>
</template>

<script setup>
    import route from 'ziggy';
    import Candado from './components/Candados.vue'
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
                        let animation = document.getElementById('animation');

                        if(this.numeroRespuesta != 1) {
                            this.numeroRespuesta = null;
                            animation.setAttribute('class', 'fa-solid fa-xmark text-danger');
                            this.textButton = 'Volver a jugar';
                            this.numClickBtn = 1;
                        } else {
                            document.getElementById('animation').style.marginTop = '80px';
                            animation.setAttribute('class', 'fa-solid fa-1');
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
    body {
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

    #textNumero {
        font-size: 4em;
        width: 30%;
        height: 100%;
        align-self: center;
        text-align: center;
        max-width: 85px;
    }

    input[type=number]::-webkit-inner-spin-button { 
        -webkit-appearance: none; 
    }

    #btnResponder {
        margin-top: 30px;
        align-self: center;
    }

    #btnSiguientePrueba {
        display: none;
        margin: auto;
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