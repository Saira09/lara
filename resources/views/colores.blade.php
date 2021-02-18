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
        <script>
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Colores-JS
                </div>
                <hr>
                <select id="colores">
                <option value="0">Selecione un Color</option>
                <option value="1">Aqua</option>
                <option value="2">Salmon</option>
                <option value="3">Morado</option>
                <option value="4">Verde Limon</option>
                <option value="5">Rosa</option>
                </select>
                <br>
                <button onclick="mostrar()">Mostrar Color</button>
                <br>
                <br>
                <hr>
                <h3 id="vercolor">Color Sleccionado</h3>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        function mostrar(){
            var color = document.getElementById('colores').value;
            if(color == 0){
                document.getElementById('vercolor').style.cssText = 'color: #FF0000; border: solid 1px #FF0000';
                document.getElementById('vercolor').innerHTML = "Error: Sleccione Color";
            }
            else{
                    if(color == 1){
                      document.getElementById('vercolor').style.cssText = 'color: #00FFFF; border: solid 1px #00FFFF';
                      document.getElementById('vercolor').innerHTML = "Aqua";
                     }
                    else{
                        document.getElementById('vercolor').style.cssText = 'color: #FA8072; border: solid 1px #FA8072';
                        document.getElementById('vercolor').innerHTML = "Salmon";;
                        
                            if(color == 2){
                                  document.getElementById('vercolor').style.cssText = 'color: #FA8072; border: solid 1px #FA8072';
                                  document.getElementById('vercolor').innerHTML = "Salmon";
                            }
                            else{
                                 document.getElementById('vercolor').style.cssText = 'color: #8A2BE2; border: solid 1px #8A2BE2';
                                 document.getElementById('vercolor').innerHTML = "Morado";
                       
                                if(color == 3){
                                     document.getElementById('vercolor').style.cssText = 'color: #8A2BE2; border: solid 1px #8A2BE2';
                                     document.getElementById('vercolor').innerHTML = "Morado";
                                 }
                               else{
                                     document.getElementById('vercolor').style.cssText = 'color: #7FFF00; border: solid 1px #7FFF00';
                                     document.getElementById('vercolor').innerHTML = "Verde Limon";
                                 
                                    if(color == 4){
                                         document.getElementById('vercolor').style.cssText = 'color: #7FFF00; border: solid 1px #7FFF00';
                                         document.getElementById('vercolor').innerHTML = "Verde Limon";
                                    }
                                   else{
                                          document.getElementById('vercolor').style.cssText = 'color: #FF1493; border: solid 1px #FF1493';
                                          document.getElementById('vercolor').innerHTML = "Rosa";
                                    }
                               }
                           }
                    } 
            }
        }
        </script>
    </body>
</html>