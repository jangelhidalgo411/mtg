@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
                <h1>WIZARD OF THE COST</h1>
            <div class="col-md-9">
                <p>Es subsidiaria de la empresa juguetera&nbsp;Hasbro Inc.
                    &nbsp;Su mayor aportación son los juegos&nbsp;
                    Magic: el encuentro&nbsp;(1993)	y las ediciones tercera (2000) 
                    y cuarta (2008) deDungeons &amp; Dragons, juego creado en 1974 
                    por otra editorial,&nbsp;TSR, Inc., que Wizards of the Coast compró en 1997. 
                    Entre otros juegos de cartas coleccionables Wizards of the Coast también es 
                    creadora de juegos sobre el mundo mágico de&nbsp;Harry Potter&nbsp;y sobre el 
                    universo de&nbsp;Star Wars. Sin duda alguna, su juego insignia ha sido y sigue 
                    siendo&nbsp;Magic: el encuentro, el juego de cartas coleccionables más 
                    jugado del mundo.</p>	
            </div>
            <div class="col-md-3">
                <img src="img/wotc.gif" width="100%">
            </div>
        </div>

		<div class="col-md-12">
                <h1>MAGIC: THE GATHERING/MAGIC: EL ENCUENTRO</h1>
            <div class="col-md-9">
                <p>
                    Es un juego de cartas coleccionables diseñado en 1993 por Richard Garfield, profesor
                    de matemáticas, y comercializado por la empresa Wizards of the Coast. Magic es el primer 
                    ejemplo de juego de cartas coleccionables moderno, con más de seis millones de jugadores 
                    en cincuenta y dos países diferentes, permaneciendo vigente en la actualidad. Magic puede 
                    ser jugado por dos o más jugadores, cada uno de ellos usando un mazo individual. También 
                    existe una versión digital que puede jugarse on-line a través de Internet.
                </p>
                <p>
                    Cada partida de Magic representa una batalla entre poderosos magos. Llamados 
                    planeswalkers en el juego, cada uno de estos magos es uno de los jugadores de 
                    la partida. Los jugadores pueden usar hechizos (conjuros, artefactos, tierras, 
                    criaturas fantásticas, etc.), representados individualmente en cada carta, para 
                    derrotar a sus oponentes. De este modo, el concepto original del juego se inspira 
                    de forma notable en los duelos de magos típicos de los juego de rol tradicionales, 
                    como Dungeons &amp; Dragons. La estructura del juego reemplaza los útiles usados en 
                    los juegos de aventura de papel y lápiz por una gran cantidad de cartas y unas reglas 
                    más complejas que la mayoría de otros juegos de cartas.
                </p>
                <p>
                    Un sistema organizado de torneos y una comunidad de jugadores profesionales se ha 
                    desarrollado alrededor del juego, así como un mercado secundario de cartas. Las cartas de 
                    Magic son valoradas no sólo por su escasez, sino también por su valor en el juego, su 
                    antigüedad, por ser cartas de "culto" o por el valor estético de las ilustraciones.
                </p>    
            </div>
			<div class="col-md-3">
                <img src="img/mtg.gif" width="100%">
            </div>
        </div>

        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2" class="title">REGLAS BASICAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" colspan="2" class="title">vidas</th>
                    </tr>
                    <tr>
                        <th scope="row">iniciales</th>
                        <td>20 (puede variar segun el formato de juego)</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2" class="title">CARTAS EN EL MAZO/DECK</th>
                    </tr>
                    <tr>
                        <th scope="row">formato normal</th>
                        <td>Tiene un minimo de 40 cartas y no existe maximo, pero se juega con 60 cartas como estandar</td>
                    </tr>
                    <tr>
                        <th scope="row">formato commander</th>
                        <td>se tienen 99 cartas mas 1 carta de comandante</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2" class="title">cartas por turno</th>
                    </tr>
                    <tr>
                        <th scope="row">cartas que robas</th>
                        <td>Solo se roba 1 carta por turno del tope del mazo</td>
                    </tr>
                    <tr>
                        <th scope="row">cartas de tierras</th>
                        <td>Solo se puede jugar 1 carta de tierra</td>
                    </tr>
                    <tr>
                        <th scope="row">cartas de hechizos</th>
                        <td>Se puede jugar cualquier cantidad de hechizos siempre y cuando tengas suficiente mana para pagarlos</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="2" class="title">Se pierde</th>
                    </tr>
                    <tr>
                        <th scope="row">Por vidas</th>
                        <td>Si las vidas de algun jugador llegan a cero o menos</td>
                    </tr>
                    <tr>
                        <th scope="row">Por robo</th>
                        <td>SI TIENES QUE ROBAR CARTA Y NO TIENES YA EN LA LIBRERIA PIERDES AUTOMATICAMENTE INDIPENDIENTEMENTE DEL TURNO</td>
                    </tr>
                    <tr>
                        <th scope="row">Rendirse</th>
                        <td>Si cualquier jugador dice "CONCEDO" se entiende que esta concediendo la victoria al oponente</td>
                    </tr>
                </tbody>
            </table> 


    </div>
@endsection