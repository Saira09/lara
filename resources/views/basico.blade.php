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
            console.log("Datos en Consola...");
            document.write("Datos en Navegador...");
            alert("Datos en Ventana");

     //---------------------------------------------------------------
            if(confirm("Presione Apcertar o Cancelar")){
                document.write("SI <br>");
            }
            else{
                document.write("NO <br>");
            }  

            /*
               var: Variables
               let:Vaiables de bloque (Funciones y condiciones)
               const:Variables inmutables
            */ 

           let datos = "dattosss";
           var x;
           var nombre = "Saira";
           var edad = "18";
           var lista = ["Santiago","Liliana","Jose"];

           var res1 = 2+3;
           var res2 = edad-res1;
     //--------------------------------------------------------------
           var y = 1;
           for(var x=1; x<=10; x++){
                  console.log("for: " + x);
           }

           while(y<=10){
               y++;
               console.log("while:" + y);
           }

           do{
               console.log("do:" + y);
               y++;
           }while(y<=10);

           for(z in lista){
            console.log(lista[z]);
           }
     //--------------------SUMA CON UN VALOR INERTADO------------------------------------------
           var dato = prompt("Indica un Valor");
             console.log(parseInt(dato)+10);
             document.write(parseInt(dato)+10);
             alert(parseInt(dato)+10);
             
     //----------------EL USUARIO INSERTA DOS VALORES----------------------------------------------
             var dato1 = prompt("Indica un Valor 1");
             var dato2 = prompt("Indica un Valor 2");
             console.log(parseInt(dato1)+parseInt(dato2));
             document.write(parseInt(dato1)+parseInt(dato2));
             alert(parseInt(dato1)+parseInt(dato2));
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Tipos de Variables-JS
                </div>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>
        </div>
    </body>
</html>
