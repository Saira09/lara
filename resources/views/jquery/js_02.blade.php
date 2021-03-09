        Nombre: <input type="text" name="nombre"><br>
        Ap. Paterno: <input type="text" name="app"><br>
        Ap. Materno: <input type="text" name="apm"><br>

        Usuarios:
        <select name="id_usuario" id="id_usuario">
            <option value="0">-- Selecione un Usuario --</option>
            @foreach($usus as $usu)
               <option value="{{ $usu->id_usuario}}">{{ $usu->nombre}}</option>
            @endforeach
        </select>