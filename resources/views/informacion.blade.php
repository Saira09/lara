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
                var close = ' ';
                var after = ' ';
                //----------------------------------------

                $('tr').click(function(){
                    $("#info"+close).text('');
                        after = close;
                        close = $(this).attr("id");

                        var idtab = $(this).attr("id");
                        console.log(idtab);

                    if(close == after){
                            $("#info"+after).text('');
                            close = '';
                    }
                    else{
                        $("#info"+idtab).load('js01?idtab=' + idtab).css({"background":"#0CE"})
                    }
                });
             });

        </script>
        </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Listado Detalle
                </div>
                <br><hr>

                <center>
                <table width="95%">
                    <tr>
                        <th>IMG</th>
                        <th>No. Usuario</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Otros</th>
                    </tr>
                    @foreach($usus as $usu)
                        <tr id="{{ $usu->id_usuario }}">
                            <td style="text-align:centre">
                            <img src="{{ asset('img/'.$usu->img) }}" width="40" height="40" alt="desc" />
                            </td>
                            <td style="text-align:centre">#{{ $usu->id_usuario }}</td>
                            <td style="text-align:centre">
                                <?php echo $usu->app . ' ' . $usu->apm . ', ' . $usu->nombre; ?>
                            </td>
                            <td style="text-align:centre">{{ $usu->email }}</td>
                            <td style="text-align:centre">-- -- -- --</td>
                        </tr>
                        <tr id="{{ $usu->id_usuario }}">
                            <td colspan="5">
                                <div id="info{{ $usu->id_usuario }}"></div>
                            </td>
                        </tr>
                    @endforeach    
                </table>  

                {{ $usus->render() }} 
                </center>
                
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
            </div>
        </div>
    </body>
</html>