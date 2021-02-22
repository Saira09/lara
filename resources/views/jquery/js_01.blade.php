<?php
// echo $usu;

if(count($usu)==0){ ?>
       <script>
            $("#img").attr('src','img/shadow.png');         //original
       </script>
    <?php }
else{ ?>
    @foreach ($usu as $usu)
        ID: {{ $usu->id_usuario}}<br>
        Nombre: {{ $usu->nombre}}<br>
        Ap. Paterno: {{ $usu->app}}<br>
        Ap. Materno: {{ $usu->apm}}<br>
        E_Mail: {{ $usu->email}}<br>

        <script>
            $("#img").attr('src','img/{{$usu->img}}');         //original
       </script>

     @endforeach
<?php } ?>