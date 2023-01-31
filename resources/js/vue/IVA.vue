<template>
    <Candado/>

    <h1 class="titulo">Primera Prueba</h1>
   
    <div class="caja-tarjetas">
        <div id="cajaPrueba" class="tarjeta ml-1 w-50 mx-auto">
        <p class="texto text-center mx-auto w-75">Para obtener el primer número del candado azul tendrás que calcular el IVA del siguiente PVP: <b>45,67</b>.<br>El segundo decimal del importe será será el número del candado.</p>
        <i id="animation"></i>
        <input type="number" max="9"  id="textNumero" v-model="numeroRespuesta">
    </div>
    <button class="btn" id="btnResponder" @click="clickBtn()">{{ textButton }}</button>
    <a id="btnSiguientePrueba" :href="route('codBarras')"><button class="btn">Siguiente prueba</button></a>
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
                        this.mensajeError = 'El número tiene que estar entre 0 y 9';
                        document.getElementById('labelError').style.display = 'block';
                    } else if(this.numeroRespuesta == null) {
                        this.mensajeError = 'Tienes que introducir un número';
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