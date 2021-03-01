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
   
body {
    margin: 0px;
}

header {
    min-height: 75px;
    text-align: center;
    background-color: black;
}

h1 {
    margin: 0px;
    color: white;
    padding: 25px 0px;
    user-select: none;
}

main {
    text-align: center;
}

#info {
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}

#infoP {
    margin: 0;
    margin-right: 8px;
    user-select: none;
}

#infoImg {
    width: 15px;
    height: 15px;
}

#tablero {
    margin-top: 65px;
    display: inline-block;
    border-radius: 10px;
    padding: 25px;
    background-color: #d9efff;
}

#tablero div {
    display: flex;
}

.celda {
    background-color: #65c1ff;
    margin: 3px;
    width: 75px;
    height: 75px;
    background-position: center;
    background-size: 65%;
    background-repeat: no-repeat;
}

.celda:hover {
    background-color: #18a3ff;
}

.X {
    background-image: url("../img/X.png");
}

.O {
    background-image: url("../img/O.png");
}

.raya {
    background-color: #f8e57a !important;
}

.desactivada {
    pointer-events: none;
}

#reiniciar {
    margin: 25px 3px 0px 3px;
    justify-content: center;
    align-items: center;
    background-color: #65c1ff;
    padding: 8px 12px;
}

#reiniciar:hover {
    background-color: #18a3ff;
}

#reiniciar p {
    margin: 0;
    margin-right: 8px;
    user-select: none;
}

#reiniciar img {
    width: 15px;
    height: 15px;
}
        </style>

             <head>
	<script>
		let ticTacToe = (function () {
    const JUGADOR_X = "X"; // Jugador X
    const JUGADOR_O = "O"; // Jugador O

    let tablero = [0, 0, 0, 0, 0, 0, 0, 0, 0]; // Tablero del juego
    let turno = JUGADOR_X; // Turno acual

    /**
     * Devolver el turno actual
     * 
     * @returns {Number} Turno actual
     */
    let getTurno = function () {
        return turno;
    }

    /**
     * Comprobar una raya del tablero
     * 
     * @param {Number} resultado Resultado de la raya
     * @param {Array} raya Array con los índices las celdas de la raya
     * 
     * @throws Estado de la partida, jugador ganador y array con los índices de la raya con la que gana
     */
    let comprobar = function (resultado, raya) {
        if (resultado === 8) throw {finPartida: true, ganador: JUGADOR_X, raya: raya};
        if (resultado === 27) throw {finPartida: true, ganador: JUGADOR_O, raya: raya};
    }

    /**
     * Colocar ficha en la celda y comprobar la jugada
     * 
     * @param {Number} celda Celda
     * 
     * @returns Estado de la partida y en caso de que termine, jugador ganador y array con los índices
     * de la raya con la que gana
     */
    let clickCelda = function (celda) {
        try {
            tablero[celda] = turno === JUGADOR_X ? 2 : 3; // Colocar ficha (2 para las X y 3 para las O)
            turno = turno === JUGADOR_X ? JUGADOR_O : JUGADOR_X; // Cambio de turno

            // Comprobar si es jugada ganadora o empate y la partida termina
            comprobar(tablero[0] * tablero[1] * tablero[2], [0, 1, 2]); // Horizontal 1
            comprobar(tablero[3] * tablero[4] * tablero[5], [3, 4, 5]); // Horizontal 1
            comprobar(tablero[6] * tablero[7] * tablero[8], [6, 7, 8]); // Horizontal 3
            comprobar(tablero[0] * tablero[3] * tablero[6], [0, 3, 6]); // Vertical 1
            comprobar(tablero[1] * tablero[4] * tablero[7], [1, 4, 7]); // Vertical 1
            comprobar(tablero[2] * tablero[5] * tablero[8], [2, 5, 8]); // Vertical 3
            comprobar(tablero[0] * tablero[4] * tablero[8], [0, 4, 8]); // Diagonal 1
            comprobar(tablero[2] * tablero[4] * tablero[6], [2, 4, 6]); // Diagonal 2
            if (tablero.every((celda) => celda !== 0)) throw {finPartida: true, ganador: "empate"}; // Empate

            return {finPartida: false}; // La partida continúa
        } catch (resultado) {
            return resultado; // La partida termina
        }
    }

    return {
        clickCelda: clickCelda,
        getTurno: getTurno
    }
})();
$(function () {

// Celdas
let $celdas = $(".celda");

// Espacio donde se muestra el estado de la partida
let $infoP = $("#infoP"); // Texto de información
let $infoImg = $("#infoImg"); // Imagen de información

// Listener para las celdas
$celdas.click(function () {
    $(this).addClass(ticTacToe.getTurno() + " desactivada");
    let resultado = ticTacToe.clickCelda($celdas.index($(this)));
    if (resultado.finPartida) {
        if (resultado.ganador === "empate") {
            $infoP.html("Empate");
            $infoImg.css("display", "none");
        } else {
            $infoP.html("Ha ganado");
            $celdas.addClass("desactivada");
            $celdas.filter(function (index) {return resultado.raya.includes(index)})
                .fadeOut()
                .addClass("raya")
                .fadeIn()
                .fadeOut()
                .fadeIn();
        }
    } else {
        $infoImg.attr("src", "img/" + ticTacToe.getTurno() + ".png");
    }
});

// Reiniciar la partida
$("#reiniciar").click(function () {
    location.reload();
});
});
	</script>
</head>
<body>
	<h1>Tres en raya</h1>
	<canvas id="miCanvas">canvas>
</body>

        </script>
        </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel-Jquery: Basico
                </div>
                <br><hr>

                <center>
                   
                </center>
                <div class="links">
                    <a href="{{ route('inicio') }}">Inició</a>
                </div>
        </script>
    </body>
</html>