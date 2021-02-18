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

            span.sname{
                position: relative;
                left: -140px;
                top: -30px;
                width: 140px;
                padding: 6px;
                background: #E00;
                color: #FFF;
                text-align: center;
                visibility: hidden;
                border-radius: 5px;
                opacity: 0.8;
                z-index: 999;
            }
            span.sname:after{
                content: '';
                position: absolute;
                top: 50px;
                left: 100px;
                margin-left: -8px;
                width: 0;
                height: 0;
                border.top: 8px solid #E00;
                border.right: 8px solid transparent;
                border.left: 8px solid transparent;
            }
        </style>

        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
 
 
        <script type="text/javascript">
             $(document).ready(function(){
                 $("#nombre").keyup(function(){
                     var txtname = $("#nombre").val();
                     var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                     if(formato.test(txtname)){ $("span.sname").css({"visibility": "hidden"}) }
                     else{ $("span.sname").css({"visibility": "visible"})}
                 });
                 //-------------------------------------------------------------------
                 $("#app").keyup(function(){
                     var txtapp = $("#app").val();
                     var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                     if(formato.test(txtapp)){ $("#sapp").text("Es Correcto!!"); }
                     else{ $("#sapp").text("Error!!"); }
                 });

                 //---------------------------------------------
                 $("#apm").keyup(function(){
                     var txtapm = $("#apm").val();
                     var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                     if(formato.test(txtapm)){ $("#apm").css({ "border": "1px solid #0F0" }).fadeIn(2000); }
                     else{ $("#apm").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                 });

                 ///-----------------------------------------------------------
                 $("#fn").blur(function(){
                     var f = new Date();
                     var year = f.getFullYear();
                     var mond = f.getMonth();
                     var day = f.getDate();

                     var fecha = $("#fn").val();

                     if(fecha!=''){
                         var fecha2 = fecha.split("-");
                         var edad = year - fecha2[0];
                         if(edad > 17){ $("#sfecha").text("Es mayor de edad !!"); }
                         else{ $("#sfecha").text("Es menor de edad !!"); }
                     }
                     else{ $("#sfecha").text("Indique una fecha !!"); }

                 });
            //--------------------------------------------------------------------------
            $("#mail").blur(function(){
                var txtmail = $("#mail").val();
                var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if(valmail.test(txtmail)){ $("#smail").text("válido"); }
                else{ $("#smail").text("Incorrecto"); }
            });
            //------------------------------------------------------------
            //-------------------------------------------------------------
            const $input = document.querySelector("#evaluacion");
            const patron =/[0-9a-zA-Z_@]+/;

            $input.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron.tes(event.key)){
                      $('#evaluacion').css({"border":"1px solid #0C0"});
                    }
                else{
                       if(event.keyCode==8){ console-log("backspace"); }
                       else{ event.preventDefault(); }
                    }
            });
    });

        </script>
        </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Formulario
                </div>
                <br><hr>

                <center>
                <form>
                <table border="0">
                <tr>
                     <td>Nombre</td>
                     <td><input type="text" name="nombre" id="nombre" class="nombre"></td>
                     <td><span id="sname" class="sname">Error: En el Nombre!!</span></td>
                </tr>
                <tr>
                     <td>Ap. Paterno</td>
                     <td><input type="text" name="app" id="app" class="app"></td>
                     <td><span id="sapp" class="sapp"></span></td>
                </tr>
                <tr>
                     <td>Ap. Materno</td>
                     <td><input type="text" name="apm" id="apm" class="apm"></td>
                     <td><span id="sapm" class="sapm"></span></td>
                </tr>
                <tr>
                     <td>E-Mail</td>
                     <td><input type="text" name="mail" id="mail" class="mail"></td>
                     <td><span id="smail" class="smail"></span></td>
                </tr>
                <tr>
                     <td>Fecha de Nacimiento</td>
                     <td><input type="date" name="fn" id="fn" class="fn"></td>
                     <td><span id="sfecha" class="sfecha"></span></td>
                </tr>
                <tr>
                     <td>Password</td>
                     <td><input type="password" name="pass1" id="pass1" class="pass1"></td>
                     <td></td>
                </tr>
                <tr>
                     <td>Confirmar Password</td>
                     <td><input type="password" name="pass2" id="pass2" class="pass2"></td>
                     <td><span id="spass" class="spass"></span></td>
                </tr>
                <tr>
                     <td colspan="3"><input type="submit" name="guardar" id="guardar" class="guardar" value="Guardar"></td>
                </tr>
                </table>
                <hr><hr>

                <h4>Evaluacion 4 (Imprime la escritura de caracteres)</h4>
                <input type="text" name="evaluacion" id="evaluacion">

                <br><br>
                <hr>

                <h4>Iniciacion de Valor (textual|númerico)</h4>
                <input type="text" onkeypress="ifTxt(event)"><br>
                <hr>
                <p id="salida">-- -- -- --</p>
                <hr>

                </form>
                </center>
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>  
        </div>  
         <script>
         function ifTxt(event){
             var vn = event.keyCode;
             var vt = String.fromCharCode(vn);
             document.getElementById("salida").innerHTML = "Numerico: " + vn + "<br>Textual: " + vt;
         }
        </script>
    </body>
</html>