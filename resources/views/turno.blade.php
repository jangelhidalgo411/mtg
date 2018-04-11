@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="tab-content panels-faq">
            <div class="tab-pane active" id="tab1">
                <div class="panel-group" id="help-accordion-1">
                    <!--01-->
                    <div id="untap" class="panel panel-default panel-help">
                        <a href="#unkeep" data-toggle="collapse" data-parent="#help-accordion-1">
                            <div class="panel-heading">
                                <h2>FASE INICIAL</h2>
                            </div>
                        </a>
                        <div id="unkeep" class="collapse">
                            <div class="panel-body">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden</th>
                                            <th scope="col" colspan=2>Fase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <th scope="row">Paso de enderezar</th>
                                            <td>
                                                Enderezas todos tus permanentes girados.
                                                En el primer turno del juego, no tienes permanentes, 
                                                así que simplemente te saltas este paso. 
                                                Nadie puede jugar hechizos o habilidades durante este paso.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <th scope="row">Paso de mantenimiento</th>
                                            <td>
                                                Esta parte del turno se menciona en algunas cartas.
                                                Si algo debe suceder una vez por turno, justo al comienzo, 
                                                la habilidad se disparará “al comienzo de tu mantenimiento”.
                                                Los jugadores pueden jugar instantáneos y habilidades activadas.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03</th>
                                            <th scope="row">Paso de robar</th>
                                            <td>
                                                Roba una carta de tu biblioteca.
                                                (El jugador que comienza se salta este paso en su primer 
                                                turno para compensar por la ventaja de empezar primero.) 
                                                Los jugadores pueden jugar instantáneos y habilidades activadas.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--02-->
                    <div id="first-min" class="panel panel-default panel-help">
                        <a href="#main1" data-toggle="collapse" data-parent="#help-accordion-1">
                            <div class="panel-heading">
                                <h2>PRIMERA FASE PRINCIPAL</h2>
                            </div>
                        </a>
                        <div id="main1" class="collapse">
                            <div class="panel-body">
                                Puedes jugar cualquier cantidad de conjuros, instantáneos, 
                                criaturas, artefactos, encantamientos y habilidades activadas. 
                                Además, puedes jugar una tierra durante esta fase, 
                                pero recuerda que sólo puedes jugar una tierra durante tu turno. 
                                Tu oponente puede jugar instantáneos y habilidades activadas.
                            </div>
                        </div>
                    </div>

                    <!--03-->
                    <div id="batle" class="panel panel-default panel-help">
                        <a href="#battle-fase" data-toggle="collapse" data-parent="#help-accordion-1">
                            <div class="panel-heading">
                                <h2>FASE DE COMBATE</h2>
                            </div>
                        </a>
                        <div id="battle-fase" class="collapse">
                            <div class="panel-body">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden</th>
                                            <th scope="col" colspan=2>Fase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>Paso de inicio del combate</td>
                                            <td>Los jugadores pueden jugar instantáneos y habilidades activadas.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td>Paso de declarar atacantes</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03</th>
                                            <td>Paso de declarar bloqueadores</td>
                                            <td>
                                                Tu oponente decide cuáles, o si ninguna, de sus criaturas 
                                                enderezadas bloqueará a tus criaturas atacantes y lo hacen.
                                                Los jugadores pueden jugar instantáneos 
                                                y habilidades activadas.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">04</th>
                                            <td>Paso de daño de combate</td>
                                            <td>
                                                Cada criatura asigna su daño de combate al jugador defensor 
                                                (si está atacando y no bloqueada), a la criatura o criaturas 
                                                que la bloquean o a la criatura que está bloqueando. 
                                                Una vez que los jugadores deciden cómo harán su daño de combate las criaturas
                                                que controlan, el daño se “fi ja” y va a la pila. Se hará incluso si algunas criaturas salen del juego. Los jugadores pueden luego
                                                jugar instantáneos y habilidades activadas. Una vez que se hayan resuelto, se hará el daño de combate.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">05</th>
                                            <td>Paso de final del combate</td>
                                            <td>Los jugadores pueden jugar instantáneos y habilidades activadas.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    <!--04-->
                    <div id="second-main" class="panel panel-default panel-help">
                        <a href="#main2" data-toggle="collapse" data-parent="#help-accordion-1">
                            <div class="panel-heading">
                                <h2>SEGUNDA FASE PRINCIPAL</h2>
                            </div>
                        </a>
                        <div id="main2" class="collapse">
                            <div class="panel-body">
                                Tu segunda fase principal es igual a la primera. 
                                Puedes jugar habilidades activadas y cualquier tipo de hechizo, 
                                pero tu oponente puede jugar sólo habilidades activadas e instantáneos. 
                                También puedes jugar una tierra durante esta fase si no lo hiciste
                                durante tu primera fase principal.
                            </div>
                        </div>
                    </div>

                    
                    <!--05-->
                    <div id="final" class="panel panel-default panel-help">
                        <a href="#final-fase" data-toggle="collapse" data-parent="#help-accordion-1">
                            <div class="panel-heading">
                                <h2>FASE FINAL</h2>
                            </div>
                        </a>
                        <div id="final-fase" class="collapse">
                            <div class="panel-body">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Orden</th>
                                            <th scope="col" colspan=2>Fase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">01</th>
                                            <td>Paso de final del turno</td>
                                            <td>
                                                Las habilidades que se disparan “al final del turno” van a la pila. 
                                                Los jugadores pueden jugar instantáneos y habilidades activadas.
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">02</th>
                                            <td>Paso de limpieza</td>
                                            <td>
                                                Si tienes más de siete cartas en la mano, elige y descarta 
                                                hasta que te queden sólo siete cartas. A continuación, todo el daño que
                                                se haya hecho a las criaturas y los efectos de 
                                                “hasta el final del turno” desaparecen. 
                                                Nadie puede jugar hechizos o habilidades a
                                                menos que una habilidad se dispare durante este paso.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection