<template>
    <Candado numUno="1" numDos="7" numTres="4"></Candado>

    <h1 class="titulo">Cuarta Prueba</h1>

    <div class="caja-tarjetas">
        <div id="cajaPrueba" class="tarjeta ml-1 w-50 mx-auto">
            <p class="texto text-left mx-auto textoPrueba">Para obtener el ultimo numero del candado rojo deberas calcular el importe de la factura que emitirá el proveedor de material de construcción ACV S.L. a José Campo Lamas Construcciones S.L. por las siguientes ventas realizadas. <br>El ultimo digito será la respuesta:</p>
            <ul class="text-white h1 textoPrueba">
                <li>• 600 und. de cajas de azulejo mod. Century a 13 €/und.</li>
                <li>• 777 und. de cajas de teja mod. Plannun a 12,8 €/und.</li>
                <li>• Rappels 6% (aplicado a referencias cuyo volumen de ventas sea > 400 und.)</li>
                <div class="d-flex row">
                    <li class="col">• Descuento por pronto pago 5%</li>
                    <li class="col">• Descuento comercial 16%</li>
                </div>
                <div class="d-flex row">
                    <li class="col">• Transporte 90 €</li>
                    <li class="col">• Embalajes 1 €/und.</li>
                </div>
                <div class="d-flex row">
                    <li class="col">• Seguros 63 €</li>
                    <li class="col">• Tipo de IVA general</li>
                </div>
            </ul>
            <i id="animation"></i>
            <input type="number" max="9"  id="textNumero" v-model="numeroRespuesta">

        </div>
        <button id="btnResponder" class="btn" @click="clickBtn()">{{ textButton }}</button>
        <a id="btnSiguientePrueba" :href="route('finpartida')"><button class="btn">Terminar</button></a>
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
                        let animation = document.getElementById('animation');

                        if(this.numeroRespuesta != 0) {
                            this.numeroRespuesta = null;
                            animation.setAttribute('class', 'fa-solid fa-xmark text-danger');
                            this.textButton = 'Volver a jugar';
                            this.numClickBtn = 1;
                        } else {

                            document.getElementById('animation').style.marginTop = '80px';
                            animation.setAttribute('class', 'fa-solid fa-0');
                            this.numClickBtn = 2;
                            document.getElementById('btnResponder').style.display = 'none';
                            document.getElementById('btnSiguientePrueba').style.display = 'block';

                        }
                        document.getElementById('labelError').style.display = 'none';
                        document.getElementById('textNumero').style.display = 'none';

                        document.getElementById("animation").style.display = 'block';

                        setTimeout(() => {
                                document.getElementById("animation").style.transform = "scale(5)";
                        }, 1);
                    }
                } else if(this.numClickBtn == 1) {
                    this.numClickBtn = 0;
                    this.textButton = 'Responder';

                    document.getElementById("animation").style.transform = "scale(1)";
                    document.getElementById('textNumero').style.display = 'block';
                    document.getElementById("animation").style.display = 'none';

                }
            }
        }
    }
</script>

<style>
    #textNumero {
        font-size: 10rem;
        width: 30%;
        height: 100%;
        align-self: center;
        text-align: center;
        max-width: 120px;
    }

    .texto {
        text-align: left;
    }

    ul {
        list-style: none;
        text-align: left;
        border: solid 1px white;
        border-radius: 10px;
    }

    li {
        margin-bottom: 5px;
    }
</style>
