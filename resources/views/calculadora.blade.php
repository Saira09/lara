<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi Calculadora</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .calculadora{
            display:block;
            margin:0 auto;
            padding:20px;
            background-color:#2980b9;
            width:350px;
            height:500px;
            border-radius: 25px;
            }
            .calculadora td button{
            display:block;
            width:70px;
            height: 70px;
            font-size: 25px;
            }
            #creditos{
            display:block;
            padding-top:20px;
            color:#fff;
            text-align: center;
            width:300px;
            }
            #resultado{
            display:block;
            text-align: center;
            font-size: 40px;
            margin-bottom: 50px;
            width:300px;
            height: 100px;
            line-height: 100px;
            background-color:#fff;
            border-radius: 25px;
            overflow-y: scroll;
            }
        </style>
        <script>
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Calculadora-JS
                </div>
                <table class="calculadora">
                    <tr>
                       <td colspan="4"><span id="resultado"></span></td>
                    </tr>
                    <tr>
                       <td><button id="siete">7</button></td><td><button id="ocho">8</button></td><td><button id="nueve">9</button></td><td><button id="division">/</button></td>
                    </tr>
                    <tr>
                       <td><button id="cuatro">4</button></td><td><button id="cinco">5</button></td><td><button id="seis">6</button></td><td><button id="multiplicacion">*</button></td>
                    </tr>
                    <tr>
                       <td><button id="uno">1</button></td><td><button id="dos">2</button></td><td><button id="tres">3</button></td><td><button id="resta">-</button></td>
                    </tr>
                    <tr>
                      <td><button id="igual">=</button></td><td><button id="reset">C</button></td><td><button id="cero">0</button></td><td><button id="suma">+</button></td>
                    </tr>
                    <tr>
                      <td colspan="4"><span id="creditos"></span></td>
                    </tr>
                    </table>
                    <br>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            //Declaramos variables
            var operandoa;
            var operandob;
            var operacion;

        function init(){
           //variables
            var resultado = document.getElementById('resultado');
            var reset = document.getElementById('reset');
            var suma = document.getElementById('suma');
            var resta = document.getElementById('resta');
            var multiplicacion = document.getElementById('multiplicacion');
            var division = document.getElementById('division');
            var igual = document.getElementById('igual');
            var uno = document.getElementById('uno');
            var dos = document.getElementById('dos');
            var tres = document.getElementById('tres');
            var cuatro = document.getElementById('cuatro');
            var cinco = document.getElementById('cinco');
            var seis = document.getElementById('seis');
            var siete = document.getElementById('siete');
            var ocho = document.getElementById('ocho');
            var nueve = document.getElementById('nueve');
            var cero = document.getElementById('cero');
        }
            //Eventos de click
            uno.onclick = function(e){
             resultado.textContent = resultado.textContent  + "1";
            }
            dos.onclick = function(e){
             resultado.textContent = resultado.textContent  + "2";
            }
            tres.onclick = function(e){
             resultado.textContent = resultado.textContent  + "3";
            }
            cuatro.onclick = function(e){
             resultado.textContent = resultado.textContent  + "4";
            }
            cinco.onclick = function(e){
             resultado.textContent = resultado.textContent  + "5";
            }
            seis.onclick = function(e){
             resultado.textContent = resultado.textContent  + "6";
            }
            siete.onclick = function(e){
             resultado.textContent = resultado.textContent  + "7";
            }
            ocho.onclick = function(e){
             resultado.textContent = resultado.textContent  + "8";
            }
            nueve.onclick = function(e){
             resultado.textContent = resultado.textContent  + "9";
            }
            cero.onclick = function(e){
             resultado.textContent = resultado.textContent  + "0";
            }
            
            reset.onclick = function(e){
             resetear();
            }
            suma.onclick = function(e){
             operandoa = resultado.textContent;
             operacion = "+";
             limpiar();
            }
            resta.onclick = function(e){
             operandoa = resultado.textContent;
             operacion = "-";
             limpiar();
            }
            multiplicacion.onclick = function(e){
             operandoa = resultado.textContent;
             operacion = "*";
             limpiar();
            }
            division.onclick = function(e){
             operandoa = resultado.textContent;
             operacion = "/";
             limpiar();
            }
            igual.onclick = function(e){
             operandob = resultado.textContent;
             resolver();
            }
            
            function limpiar(){
             resultado.textContent = "";
            }
            function resetear(){
             resultado.textContent = "";
             operandoa = 0;
             operandob = 0;
             operacion = "";
            }

            //Operadores SUMA/RESTA/MULTIPLICACION/DIVICION
        function resolver(){
          var res = 0;
            switch(operacion){
                 case "+":
                     res = parseFloat(operandoa) + parseFloat(operandob);
                     break;
                 case "-":
                     res = parseFloat(operandoa) - parseFloat(operandob);
                     break;
                 case "*":
                     res = parseFloat(operandoa) * parseFloat(operandob);
                     break;
                 case "/":
                     res = parseFloat(operandoa) / parseFloat(operandob);
                     break;
            }
             resetear();
             resultado.textContent = res;
            }
        </script>
    </body>
</html>