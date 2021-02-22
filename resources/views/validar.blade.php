<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Validar-JS
                </div>
                <hr>

                <h4>Evaluación 1:</h4>
                   <input type="text" required pattern="[0-9\/]+">

                <h4>Evaluación 2:</h4>
                   <input type="text" id="pass1" onkeyup="validar1(this);">

                <h4>Evaluación 3:</h4>
                   <input type="text" id="pass2" onkeyup="validar2(this);">   
                   <b id="mostrar">----</b>
                   <b id="error">****</b>
               
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
           function validar1(obj){
               var pass = obj.value;
               if(pass.search(/[a-z]/g) < 0){
                   alert("Error: la contraseña no tiene letras");
               }
               else{
                   alert("La contraseña si tiene letras");
               }
               if(pass.search(/[0-9]/) < 0){
                alert("Error: la contraseña no tiene números");
               }
    
           }
           //------------------------------------
           function validar2(obj){
            var pass = obj.value;
            var cadena = pass.split("");
            
            for(var i=0; i < cadena.length; i++){
                 document.getElementById("mostrar").innerHTML = cadena[i].search(/[A-Z]/g);
            }

            var cont = 0;
            if(pass.search(/[A-Z]/g)+1 > 0){
                     document.getElementById("pass2").style.cssText = "color: #0F0 ; border: solid 1px #0F0;";
                     document.getElementById("error").innerHTML = "----";
                for(var i=0; i < cadena.length; i++){
                       var letra = cadena[i];
                       if(letra.search(/[a-zA-Z0-9]/g)+1 > 0){cont = cont+0;}
                       else{ cont = cont+1; }
                }
                /*
                if(pass.search(/[a-zA-Z0-9]/g)+1 > 0){
                     document.getElementById("pass2").style.cssText = "color: #0F0 ; border: solid 1px #0F0;";
                     document.getElementById("error").innerHTML = "----";
                }
                else{
                     document.getElementById("pass2").style.cssText = "color: #0F0 ; border: solid 1px #0F0;";
                     document.getElementById("error").innerHTML = "Error: la contraseña tiene que contener letras y números";
                }
                */
            }
            else{
                 document.getElementById("pass2").style.cssText = "color: #F00 ; border: solid 1px #F00;";
                 document.getElementById("error").innerHTML =  "Error: la primera letra debe ser Mayúscula";
            }
        
            if(cont>0){
                     document.getElementById("pass2").style.cssText = "color: #0F0 ; border: solid 1px #0F0;";
                     document.getElementById("error").innerHTML = "Error: la contraseña tiene que contener solo letras y números" + cont;
                     cont=0;
            }
        }
        </script>
    </body>
</html>
