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

        
        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
 
 
       
        <script type="text/javascript">
             $(document).ready(function(){
                 var arreglo = ['Nombre 1', 'Nombre 2', 'Nombre 3', 'Nombre 4'];

                 $("#random").click(function(){
                     var rand1 = arreglo[(Math.random() *arreglo.length)|0]; 
                     var rand2 = Math.floor((Math.random() *arreglo.length));
                     var dato = arreglo[rand2];

                     $("#contenido").html(rand1 + "\n" + rand2 + " : " + dato);
                 });
                 $("#arreglo").html(arreglo);
             });

        </script>
        </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Random
                </div>
                <br><hr>

                <center>
                  <div id="arreglo"></div><br>
                  <hr>
                  <button id="random">Random</button>
                  <br>
                  <textarea id="contenido">Mostrar Random</textarea>
                  <br><br>
                  <hr>
                </center>
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
        </script>
    </body>
</html>