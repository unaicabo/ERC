<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/js/sopaDeLetras.js','resources/css/index.css'])
    <title>Sopa de letras</title>
    <script src="js/jquery.js"></script>
</head>

<body id="pag-sopaletras">
    <div id="candado"></div>
    <h1>Completa la sopa de letras</h1>
    <div class="caja-prueba">
        <div class="enunciado">
            <p>Para conseguir sacar el código del candado tenemos que mirar las palablas que están en vertical y contar
                cuántas veces está la letra "o".
            </p>
        </div>
        <p>Necesitamos buscar un <b>albarán</b>, facturas de <b>contrareembolso</b>, una copia de los archivos del
            <b>googlebot</b>, un pedrive con <b>keywords</b>, el registro de la <b>recepción</b> del almacen y
            un boceto del <b>producto</b> que vende nuestro cliente.
        </p>

        <div class="contenedor-prueba">

            <table id="tablasopaletras" class="tablasopaletras">
                {{-- Fila 1 --}}
                <tr>
                    <td id="letra-f1-c1">
                        O
                    </td>
                    <td id="letra-f1-c2">
                        C
                    </td>
                    <td id="letra-f1-c3">
                        U
                    </td>
                    <td id="letra-f1-c4">
                        E
                    </td>
                    <td id="letra-f1-c5">
                        F
                    </td>
                    <td id="letra-f1-c6">
                        R
                    </td>
                    <td id="letra-f1-c7">
                        E
                    </td>
                    <td id="letra-f1-c8">
                        C
                    </td>
                    <td id="letra-f1-c9">
                        E
                    </td>
                    <td id="letra-f1-c10">
                        P
                    </td>
                    <td id="letra-f1-c11">
                        C
                    </td>
                    <td id="letra-f1-c12">
                        I
                    </td>
                    <td id="letra-f1-c13">
                        O
                    </td>
                    <td id="letra-f1-c14">
                        N
                    </td>
                    <td id="letra-f1-c15">
                        A
                    </td>
                </tr>
                {{-- fila 2 --}}
                <tr>
                    <td id="letra-f2-c1">
                        Q
                    </td>
                    <td id="letra-f2-c2">
                        O
                    </td>
                    <td id="letra-f2-c3">
                        É
                    </td>
                    <td id="letra-f2-c4">
                        D
                    </td>
                    <td id="letra-f2-c5">
                        A
                    </td>
                    <td id="letra-f2-c6">
                        E
                    </td>
                    <td id="letra-f2-c7">
                        N
                    </td>
                    <td id="letra-f2-c8">
                        É
                    </td>
                    <td id="letra-f2-c9">
                        T
                    </td>
                    <td id="letra-f2-c10">
                        O
                    </td>
                    <td id="letra-f2-c11">
                        G
                    </td>
                    <td id="letra-f2-c12">
                        Ü
                    </td>
                    <td id="letra-f2-c13">
                        I
                    </td>
                    <td id="letra-f2-c14">
                        L
                    </td>
                    <td id="letra-f2-c15">
                        S
                    </td>
                </tr>
                {{-- fila 3 --}}
                <tr>
                    <td id="letra-f3-c1">
                        S
                    </td>
                    <td id="letra-f3-c2">
                        N
                    </td>
                    <td id="letra-f3-c3">
                        H
                    </td>
                    <td id="letra-f3-c4">
                        L
                    </td>
                    <td id="letra-f3-c5">
                        S
                    </td>
                    <td id="letra-f3-c6">
                        T
                    </td>
                    <td id="letra-f3-c7">
                        H
                    </td>
                    <td id="letra-f3-c8">
                        T
                    </td>
                    <td id="letra-f3-c9">
                        A
                    </td>
                    <td id="letra-f3-c10">
                        U
                    </td>
                    <td id="letra-f3-c11">
                        T
                    </td>
                    <td id="letra-f3-c12">
                        G
                    </td>
                    <td id="letra-f3-c13">
                        G
                    </td>
                    <td id="letra-f3-c14">
                        Ñ
                    </td>
                    <td id="letra-f3-c15">
                        R
                    </td>
                </tr>
                {{-- fila 4 --}}
                <tr>
                    <td id="letra-f4-c1">
                        É
                    </td>
                    <td id="letra-f4-c2">
                        T
                    </td>
                    <td id="letra-f4-c3">
                        S
                    </td>
                    <td id="letra-f4-c4">
                        N
                    </td>
                    <td id="letra-f4-c5">
                        Y
                    </td>
                    <td id="letra-f4-c6">
                        Ü
                    </td>
                    <td id="letra-f4-c7">
                        P
                    </td>
                    <td id="letra-f4-c8">
                        L
                    </td>
                    <td id="letra-f4-c9">
                        G
                    </td>
                    <td id="letra-f4-c10">
                        Ó
                    </td>
                    <td id="letra-f4-c11">
                        E
                    </td>
                    <td id="letra-f4-c12">
                        K
                    </td>
                    <td id="letra-f4-c13">
                        O
                    </td>
                    <td id="letra-f4-c14">
                        O
                    </td>
                    <td id="letra-f4-c15">
                        M
                    </td>
                </tr>
                {{-- fila 5 --}}
                <tr>
                    <td id="letra-f5-c1">
                        M
                    </td>
                    <td id="letra-f5-c2">
                        R
                    </td>
                    <td id="letra-f5-c3">
                        Ñ
                    </td>
                    <td id="letra-f5-c4">
                        O
                    </td>
                    <td id="letra-f5-c5">
                        N
                    </td>
                    <td id="letra-f5-c6">
                        E
                    </td>
                    <td id="letra-f5-c7">
                        M
                    </td>
                    <td id="letra-f5-c8">
                        O
                    </td>
                    <td id="letra-f5-c9">
                        O
                    </td>
                    <td id="letra-f5-c10">
                        P
                    </td>
                    <td id="letra-f5-c11">
                        Q
                    </td>
                    <td id="letra-f5-c12">
                        E
                    </td>
                    <td id="letra-f5-c13">
                        O
                    </td>
                    <td id="letra-f5-c14">
                        V
                    </td>
                    <td id="letra-f5-c15">
                        D
                    </td>
                </tr>
                {{-- fila 6 --}}
                <tr>
                    <td id="letra-f6-c1">
                        T
                    </td>
                    <td id="letra-f6-c2">
                        A
                    </td>
                    <td id="letra-f6-c3">
                        V
                    </td>
                    <td id="letra-f6-c4">
                        V
                    </td>
                    <td id="letra-f6-c5">
                        R
                    </td>
                    <td id="letra-f6-c6">
                        A
                    </td>
                    <td id="letra-f6-c7">
                        T
                    </td>
                    <td id="letra-f6-c8">
                        K
                    </td>
                    <td id="letra-f6-c9">
                        R
                    </td>
                    <td id="letra-f6-c10">
                        W
                    </td>
                    <td id="letra-f6-c11">
                        F
                    </td>
                    <td id="letra-f6-c12">
                        Y
                    </td>
                    <td id="letra-f6-c13">
                        G
                    </td>
                    <td id="letra-f6-c14">
                        X
                    </td>
                    <td id="letra-f6-c15">
                        É
                    </td>
                </tr>
                {{-- fila 7 --}}
                <tr>
                    <td id="letra-f7-c1">
                        K
                    </td>
                    <td id="letra-f7-c2">
                        R
                    </td>
                    <td id="letra-f7-c3">
                        Z
                    </td>
                    <td id="letra-f7-c4">
                        H
                    </td>
                    <td id="letra-f7-c5">
                        P
                    </td>
                    <td id="letra-f7-c6">
                        Ü
                    </td>
                    <td id="letra-f7-c7">
                        R
                    </td>
                    <td id="letra-f7-c8">
                        O
                    </td>
                    <td id="letra-f7-c9">
                        Ú
                    </td>
                    <td id="letra-f7-c10">
                        S
                    </td>
                    <td id="letra-f7-c11">
                        G
                    </td>
                    <td id="letra-f7-c12">
                        W
                    </td>
                    <td id="letra-f7-c13">
                        L
                    </td>
                    <td id="letra-f7-c14">
                        F
                    </td>
                    <td id="letra-f7-c15">
                        V
                    </td>
                </tr>
                {{-- fila 8 --}}
                <tr>
                    <td id="letra-f8-c1">
                        D
                    </td>
                    <td id="letra-f8-c2">
                        E
                    </td>
                    <td id="letra-f8-c3">
                        Á
                    </td>
                    <td id="letra-f8-c4">
                        B
                    </td>
                    <td id="letra-f8-c5">
                        Ñ
                    </td>
                    <td id="letra-f8-c6">
                        C
                    </td>
                    <td id="letra-f8-c7">
                        D
                    </td>
                    <td id="letra-f8-c8">
                        A
                    </td>
                    <td id="letra-f8-c9">
                        C
                    </td>
                    <td id="letra-f8-c10">
                        X
                    </td>
                    <td id="letra-f8-c11">
                        Ñ
                    </td>
                    <td id="letra-f8-c12">
                        O
                    </td>
                    <td id="letra-f8-c13">
                        E
                    </td>
                    <td id="letra-f8-c14">
                        K
                    </td>
                    <td id="letra-f8-c15">
                        A
                    </td>
                </tr>
                {{-- fila 9 --}}
                <tr>
                    <td id="letra-f9-c1">
                        I
                    </td>
                    <td id="letra-f9-c2">
                        E
                    </td>
                    <td id="letra-f9-c3">
                        E
                    </td>
                    <td id="letra-f9-c4">
                        K
                    </td>
                    <td id="letra-f9-c5">
                        N
                    </td>
                    <td id="letra-f9-c6">
                        U
                    </td>
                    <td id="letra-f9-c7">
                        H
                    </td>
                    <td id="letra-f9-c8">
                        T
                    </td>
                    <td id="letra-f9-c9">
                        B
                    </td>
                    <td id="letra-f9-c10">
                        S
                    </td>
                    <td id="letra-f9-c11">
                        T
                    </td>
                    <td id="letra-f9-c12">
                        R
                    </td>
                    <td id="letra-f9-c13">
                        B
                    </td>
                    <td id="letra-f9-c14">
                        A
                    </td>
                    <td id="letra-f9-c15">
                        C
                    </td>
                </tr>
                {{-- fila 10 --}}
                <tr>
                    <td id="letra-f10-c1">
                        Z
                    </td>
                    <td id="letra-f10-c2">
                        M
                    </td>
                    <td id="letra-f10-c3">
                        M
                    </td>
                    <td id="letra-f10-c4">
                        B
                    </td>
                    <td id="letra-f10-c5">
                        C
                    </td>
                    <td id="letra-f10-c6">
                        O
                    </td>
                    <td id="letra-f10-c7">
                        Ñ
                    </td>
                    <td id="letra-f10-c8">
                        E
                    </td>
                    <td id="letra-f10-c9">
                        Y
                    </td>
                    <td id="letra-f10-c10">
                        L
                    </td>
                    <td id="letra-f10-c11">
                        R
                    </td>
                    <td id="letra-f10-c12">
                        D
                    </td>
                    <td id="letra-f10-c13">
                        O
                    </td>
                    <td id="letra-f10-c14">
                        U
                    </td>
                    <td id="letra-f10-c15">
                        D
                    </td>
                </tr>
                {{-- fila 11 --}}
                <tr>
                    <td id="letra-f11-c1">
                        P
                    </td>
                    <td id="letra-f11-c2">
                        B
                    </td>
                    <td id="letra-f11-c3">
                        W
                    </td>
                    <td id="letra-f11-c4">
                        T
                    </td>
                    <td id="letra-f11-c5">
                        D
                    </td>
                    <td id="letra-f11-c6">
                        W
                    </td>
                    <td id="letra-f11-c7">
                        U
                    </td>
                    <td id="letra-f11-c8">
                        V
                    </td>
                    <td id="letra-f11-c9">
                        K
                    </td>
                    <td id="letra-f11-c10">
                        N
                    </td>
                    <td id="letra-f11-c11">
                        A
                    </td>
                    <td id="letra-f11-c12">
                        S
                    </td>
                    <td id="letra-f11-c13">
                        T
                    </td>
                    <td id="letra-f11-c14">
                        Y
                    </td>
                    <td id="letra-f11-c15">
                        Ñ
                    </td>
                </tr>
                {{-- fila 12 --}}
                <tr>
                    <td id="letra-f12-c1">
                        K
                    </td>
                    <td id="letra-f12-c2">
                        O
                    </td>
                    <td id="letra-f12-c3">
                        O
                    </td>
                    <td id="letra-f12-c4">
                        U
                    </td>
                    <td id="letra-f12-c5">
                        X
                    </td>
                    <td id="letra-f12-c6">
                        B
                    </td>
                    <td id="letra-f12-c7">
                        G
                    </td>
                    <td id="letra-f12-c8">
                        N
                    </td>
                    <td id="letra-f12-c9">
                        B
                    </td>
                    <td id="letra-f12-c10">
                        C
                    </td>
                    <td id="letra-f12-c11">
                        X
                    </td>
                    <td id="letra-f12-c12">
                        Z
                    </td>
                    <td id="letra-f12-c13">
                        M
                    </td>
                    <td id="letra-f12-c14">
                        Y
                    </td>
                    <td id="letra-f12-c15">
                        U
                    </td>
                </tr>
                {{-- fila 13 --}}
                <tr>
                    <td id="letra-f13-c1">
                        E
                    </td>
                    <td id="letra-f13-c2">
                        L
                    </td>
                    <td id="letra-f13-c3">
                        G
                    </td>
                    <td id="letra-f13-c4">
                        T
                    </td>
                    <td id="letra-f13-c5">
                        V
                    </td>
                    <td id="letra-f13-c6">
                        J
                    </td>
                    <td id="letra-f13-c7">
                        T
                    </td>
                    <td id="letra-f13-c8">
                        N
                    </td>
                    <td id="letra-f13-c9">
                        É
                    </td>
                    <td id="letra-f13-c10">
                        N
                    </td>
                    <td id="letra-f13-c11">
                        Á
                    </td>
                    <td id="letra-f13-c12">
                        M
                    </td>
                    <td id="letra-f13-c13">
                        Á
                    </td>
                    <td id="letra-f13-c14">
                        V
                    </td>
                    <td id="letra-f13-c15">
                        J
                    </td>
                </tr>
                {{-- fila 14 --}}
                <tr>
                    <td id="letra-f14-c1">
                        Q
                    </td>
                    <td id="letra-f14-c2">
                        S
                    </td>
                    <td id="letra-f14-c3">
                        N
                    </td>
                    <td id="letra-f14-c4">
                        V
                    </td>
                    <td id="letra-f14-c5">
                        P
                    </td>
                    <td id="letra-f14-c6">
                        Z
                    </td>
                    <td id="letra-f14-c7">
                        A
                    </td>
                    <td id="letra-f14-c8">
                        L
                    </td>
                    <td id="letra-f14-c9">
                        B
                    </td>
                    <td id="letra-f14-c10">
                        F
                    </td>
                    <td id="letra-f14-c11">
                        M
                    </td>
                    <td id="letra-f14-c12">
                        Q
                    </td>
                    <td id="letra-f14-c13">
                        H
                    </td>
                    <td id="letra-f14-c14">
                        Á
                    </td>
                    <td id="letra-f14-c15">
                        R
                    </td>
                </tr>
                {{-- fila 15 --}}
                <tr>
                    <td id="letra-f15-c1">
                        E
                    </td>
                    <td id="letra-f15-c2">
                        O
                    </td>
                    <td id="letra-f15-c3">
                        Y
                    </td>
                    <td id="letra-f15-c4">
                        R
                    </td>
                    <td id="letra-f15-c5">
                        Ó
                    </td>
                    <td id="letra-f15-c6">
                        Ú
                    </td>
                    <td id="letra-f15-c7">
                        O
                    </td>
                    <td id="letra-f15-c8">
                        Z
                    </td>
                    <td id="letra-f15-c9">
                        Ó
                    </td>
                    <td id="letra-f15-c10">
                        Y
                    </td>
                    <td id="letra-f15-c11">
                        R
                    </td>
                    <td id="letra-f15-c12">
                        Y
                    </td>
                    <td id="letra-f15-c13">
                        Ü
                    </td>
                    <td id="letra-f15-c14">
                        Í
                    </td>
                    <td id="letra-f15-c15">
                        Ú
                    </td>
                </tr>

            </table>

            {{-- <canvas id="canvas"></canvas> --}}

            <div class="boton-clear">
                <button id="clear" class="btn">Limpiar</button>
            </div>
        </div>
    </div>
    <div class="respuesta-sopadeletras">
        <div class="botones">
            <input type="text" id="respuesta" onfocus="limpiar()" placeholder="Introducir respuesta">
            <input type="button" value="Validar" onclick="comprobarVacios()" class="btn">
        </div>
    </div>

    <div id="contenedor-error">
        <p>Parace que ese no es el digito correcto</p>
    </div>

    <div id="contenedor-resultado">
        <p id="resultado">Correcto, has conseguido un dígito del candado <a id="btnSiguiente"
                href="{{ route('buscarletra') }}"><button class="btn">Siguiente prueba</button></a></p>
    </div>

    <script src="js/sopaletras.js"></script>

    <script src="js/validarSopaLetras.js"></script>
</body>

</html>
