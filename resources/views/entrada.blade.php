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

            .full-height {}

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
                 $("#email").keyup(function(){
                     var valemail = $("#email").val();
                     if(valemail != ''){
                         $("#info").load('js00?email=' + valemail);
                         //console.log(valemail);
                     }
                     else{
                         $('#img').attr("src", "img/shadow.png");
                         console.log("--- sin datos ---");
                     }
                 });
             });
        
        </script>
        </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Entrada | Login
                </div>
                <br><hr>

                <center>
                    <table border="0">
                        <tr>
                           <td colspan="2">
                           <img src="{{ asset('img/shadow.png') }}" id="img" width="140" height="140" alt="imagen" />
                           </td>
                        </tr>
                        <tr>
                          <td>E-mail</td>
                          <td>
                             <input type="text" name="email" id="email">
                          </td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>
                             <input type="password" name="pass" id="pass">
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                             <input type="submit" id="ingresar" value="Ingresar">
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                              <hr><hr>
                              <div id="info">-- -- -- -- </div>
                          </td>
                        </tr>
                    </table>
                </center>
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
        </script>
    </body>
</html>