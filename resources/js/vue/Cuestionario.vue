<template>
    <Candado/>

    <h1 class="text-center">Segunda Prueba</h1>
    <h3 class="text-center mx-auto w-75">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas adipisci distinctio provident natus, suscipit quos, perspiciatis aspernatur quasi esse saepe aliquam. Saepe enim asperiores illum pariatur, ut ipsum odio rem.</h3>

    <div id="cajaPruebaCuestionario" class="ml-1 bg-light w-50 mx-auto">
        <form id="formCuestionario">
            <h4><label id="preguntaCuestionario">{{ pregunta }}</label></h4>
            <input type="radio" value="a" name="pregunta1" v-model="respuesta" id="respuestaA"><label for="respuestaA" id="respuestaACuestionario">{{ respuestaA }}</label><br>
            <input type="radio" value="b" name="pregunta1" v-model="respuesta" id="respuestaB"><label for="respuestaB" id="respuestaBCuestionario">{{ respuestaB }}</label><br>
            <input type="radio" value="c" name="pregunta1" v-model="respuesta" id="respuestaC"><label for="respuestaC" id="respuestaCCuestionario">{{ respuestaC }}</label><br>
            <input type="radio" value="d" name="pregunta1" v-model="respuesta" id="respuestaD"><label for="respuestaD" id="respuestaDCuestionario">{{ respuestaD }}</label><br><br>
            <input type="button" class="text-right" value="Responder" @click="compPregunta()"> 
            <label class="text-danger" id="labelSinRespuesta">Selecciona una respuesta</label>
        </form>
    </div>
</template>

<script setup>
    import Candado from './components/Candados.vue';
</script>

<script>
   export default {
        data() {
            return {
                a: 0,
                b: 0,
                c: 0,
                d: 0,
                contNumPreg: 0,
                preguntas: ['1 - Entre los objetos que persigue un buen sistema de almacenamiento está:','2 - ¿Como se denomina el almacenamiento en el que cada producto tiene su ubicación?', '3 - El sistema de almacenamiento convencional:', '4 - Si quieres posicionarte en un buscador, ¿Por cuál pagarías?', '5 - El buscador mas utilizado es:', '6 - ¿Cual es el marketing que se propaga de usuario en usuario?'],
                respuestasA: ['A) Máximo de aprovechamiento de la capacidad de almacenamiento', 'A) Almacenamiento caótico', 'A) No utiliza estanterías', 'A) SEM', 'A) Yahoo!', 'A) De afilición'],
                respuestasB: ['B) Accesibilidad a los productos', 'B) Almacenamiento ordenado', 'B) No sirve para el almacenamiento de mercancía paletizada', 'B) SEO', 'B) Google', 'B) Viral'],
                respuestasC: ['C) Rotación controladad de stock', 'C) Almacenamiento desordenado', 'C) Es fácil realizar las salidas por el método FIFO', 'C) Por los dos', 'C) Ask', 'C) One to one'],
                respuestasD: ['D) Todas son correctas', 'D) Almacenamiento aleatorio', 'D) Puede adaptarse a cualquier tipo de carga', 'D) Por ninguno de los dos', 'D) Baidu', 'D) Relacional'],
                pregunta:'1 - Entre los objetos que persigue un buen sistema de almacenamiento está:',
                respuestaA:'A) Máximo de aprovechamiento de la capacidad de almacenamiento',
                respuestaB:'B) Accesibilidad a los productos',
                respuestaC:'C) Rotación controladad de stock',
                respuestaD:'D) Todas son correctas',
                respuesta: false
            }
        },
        methods: {
            volverAJugar() {

                this.pregunta = this.preguntas[0];
                this.respuestaA = this.respuestasA[0];
                this.respuestaB = this.respuestasB[0];
                this.respuestaC = this.respuestasC[0];
                this.respuestaD = this.respuestasD[0];

                document.getElementById('cajaResultado').remove();

                document.getElementById('formCuestionario').style.display = 'block';
            },
            compPregunta(){
                document.getElementById('labelSinRespuesta').style.display = 'none';

                if(this.respuesta != false) {
                    if(this.respuesta == 'a') {
                        this.a++;
                    } else if(this.respuesta == 'b') {
                        this.b++;
                    } else if(this.respuesta == 'c') {
                        this.c++;
                    } else if(this.respuesta == 'd') {
                        this.d++;
                    }

                    this.contNumPreg++;
                    this.pregunta = this.preguntas[this.contNumPreg];
                    this.respuestaA = this.respuestasA[this.contNumPreg];
                    this.respuestaB = this.respuestasB[this.contNumPreg];
                    this.respuestaC = this.respuestasC[this.contNumPreg];
                    this.respuestaD = this.respuestasD[this.contNumPreg];
                
                    this.respuesta = false;

                } else {
                    document.getElementById('labelSinRespuesta').style.display = 'block';
                }

                if(this.contNumPreg == 6){
                    document.getElementById('formCuestionario').style.display = 'none';

                    let resultado = document.createElement('div');
                    resultado.className = 'text-center display-3 align-middle';
                    resultado.id = 'cajaResultado';

                    let br = document.createElement('br');

                    if(this.b > this.a && this.b > this.c && this.b > this.d) {
                        resultado.innerHTML = '<i class="fa-solid fa-b" id="animation"></i>';

                        document.getElementById('cajaPruebaCuestionario').appendChild(resultado);
                        setTimeout(() => {
                            document.getElementById("animation").style.transform = "scale(3)"; 

                            let botonAvanzar = document.createElement('input');
                            let aAvanzar = document.createElement('a');

                            botonAvanzar.setAttribute('type', 'button');
                            botonAvanzar.setAttribute('value', 'Siguiente prueba');
                            botonAvanzar.setAttribute('id', 'buttonAcabar');
                            aAvanzar.setAttribute("href", "./login");

                            aAvanzar.appendChild(botonAvanzar);

                            resultado.appendChild(br);
                            resultado.appendChild(aAvanzar);
                        }, 1);
                    } else {
                        resultado.innerHTML = '<i class="fa-solid fa-xmark" id="animation"></i>';

                        document.getElementById('cajaPruebaCuestionario').appendChild(resultado);
                        document.getElementById("animation").style.color = "red"; 
                        setTimeout(() => {
                            document.getElementById("animation").style.transform = "scale(3)";

                            let botonVolver = document.createElement('input');
                            botonVolver.setAttribute('type', 'button');
                            botonVolver.setAttribute('value', 'Volver a jugar');
                            botonVolver.setAttribute('id', 'buttonAcabar');

                            resultado.appendChild(br);
                            resultado.appendChild(botonVolver);

                            this.a = 0;
                            this.b = 0;
                            this.c = 0;
                            this.d = 0;
                            this.contNumPreg = 0;
                            botonVolver.addEventListener('click', this.volverAJugar);
                        }, 1);
                    }
                }
            }
        }
    }
</script>  

<style>

    body{
        font-family: Barlow-Condensed !important;
        background-color: rgb(38, 38, 38) !important;
        color: white !important;
    }

    #cajaPruebaCuestionario {
        padding: 10px;
        border-radius: 5px;
        min-height: 300px;
        color: black;
    }

    #cajaPruebaCuestionario #labelSinRespuesta {
        display: none;
    }

    #cajaPruebaCuestionario input[type=radio] {
        margin: 5px;
    }

    #cajaPruebaCuestionario label {
        padding: 5px;
    }

    #cajaPruebaCuestionario #preguntaCuestionario {
        height: 80px;
    }

    #animation {
        margin-top: 80px;
        transition: all 3s;
    }

    #buttonAcabar {
        margin-top: 40px;
        transform: scale(0.4);
        border-radius: 10px;
        padding: 10px;
    }
</style>