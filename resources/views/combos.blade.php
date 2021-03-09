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
        html,
        body {
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

        .links>a {
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

</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel-Jquery: Basico
            </div>
            <br>
            <hr>

            <center>
                <form name="usuario" action="{{route('datos')}}" method="POST">
                    {{ csrf_field()}}
                    <table>
                        <tr>
                            <td>Estado: </td>
                            <td>
                                <select name="id_estado" id="selc_estados">
                                    <option value="0">-- Seleciona un Estado --</option>
                                    @foreach($estados as $estado)
                                    <option value="{{ $estado->id_estado }}">{{ $estado->nombre}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Municipios: </td>
                            <td>
                                <select name="id_municipio" id="selc_municipios">
                                    <option value="0">-- Seleciona un Estado Antes 1 --</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="info">-- -- -- -- -- --</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="salvar"></td>
                        </tr>
                    </table>
                </form>
            </center>
            <div class="links">
                <a href="{{ route('inicio') }}">Inició</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#selc_estados').on('change', function(){
                var id_estado = $(this).val();
                if($.trim(id_estado) !='0'){
                    $.get('js02', {id_estado: id_estado}, function(municipios){
                        $('#selc_municipios').empty();
                        $('#selc_municipios').append("<option value='0'>-- Seleciona un Municipio 0--</option>");
                        $.each(municipios, function(id, nombre){
                            $('#selc_municipios').append("<option value='"+id+"'>"+nombre+"</option>");
                        });
                    });
                }
            else{
                   $('#selc_municipios').empty();
                   $('#selc_municipios').append("<option value='0'>-- Seleciona un Estado Antes --</option>");
                }
            });
            $('#selc_municipios').on('change', function(){
                $('#info').html('');
                var id_municipio = $(this).val();

                if(id_municpio > 0){
                    $('#info').load('js02b?id_municpio=' +id_municipio).css({ "background": "#0CE"})
                }
                else{  $('#info').html('');}
            });
        });
    </script>
</body>

</html>