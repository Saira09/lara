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
        </style>
        <script type="text/javascript">
           var suma = function(){
           /*
              parseInt()
              parseFloat()
              String()
           */
              var num1 = parseFloat(document.getElementById("numero1").value);
              var num2 = parseFloat(document.getElementById("numero2").value);

              var res = num1 + num2;
                 document.getElementById("resdata").innerHTML = res;
             return alert(res);
           }

           function otro(num1,num2){
               var res = num1 +  num2;
               resultado.call(this);
               return res;
           }

           function resultado(){
               var info = "DSM";
               document.getElementById("info").innerHTML = info;
               document.getElementsByClassName("info")[0].innerHTML = info;
               document.getElementsByName("info")[0].innerHTML = info;
               document.getElementById("numero2").value = "DSM";
           }

        var fecha1 = new Date();
        var fecha2 = String(fecha1);  
            
       </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Funciones-JS
                </div>

               <input type="text" id="numero1"> &nbsp;   &nbsp;
               <input type="text" id="numero2"> <br>
               <input type="submit" value="Sumar-1" onclick="suma();"> &nbsp;   &nbsp;
               <button onclick="suma();">Suma-2</button> 
               <br></br>
               <hr>
               <div id="resdata">RESULTADO</div>
               <br></br>   

               <div id="info"> Información - 1</div><br>   
               <div class="info"> Información - 2a</div><br>      
               <div class="info"> Información - 2b</div><br>    
               <textarea name="info" rows="5" cols="50">Información - 3</textarea>
               <br></br>
               <hr>
               <p id="fecha">-- -- -- -- -- </p>  
               <hr>
              <!--------------------------------------------------------------------------------->
              <h2 id="colores">Colores</h2>
              <button onclick="document.getElementById('colores').style.color = 'red'">Color Rojo!!</button>
              <button onclick="document.getElementById('colores').style.border = 'solid 1px #00FF00'">Color Verde!!</button>
              <button onclick="document.getElementById('colores').style.cssText = 'color: #0000FF; border: solid 1px #0000FF'">Color Azul!!</button>
              <br>
              <hr>
            <!--------------------------------------------------------------------------------->

                <select id="seleccion">
                   <option>red</option>
                   <option>blue</option>
                </select>
                
                <div class="links">
                    </div>
                    <br><br>
                    <a href="{{ route('inicio') }}">Inició</a>
                <br><br>
                <br>
            </div>
        </div>
        <script type="text/javascript">
             document.getElementById("fecha").innerHTML = fecha2; 
             //---------------------CREAR UN NUEVO ELEMENTO-----------------------------------------------
             var elemento = document.createElement("option");
             var selector = document.getElementById("seleccion");
             var objeto = document.getElementsByTagName("option")[0];
                 selector.insertBefore(elemento,objeto);
                 elemento.setAttribute('id','green');
                 elemento.textContent = "green";

       </script>
    </body>
</html>
