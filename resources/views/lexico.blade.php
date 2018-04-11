@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>lexico</h1>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">simbolo</th>
                    <th scope="col">Significado</th>
                    <th scope="col">simbolo</th>
                    <th scope="col">Significado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/X.svg" class="img-responsive">
                    </td>
                    <td>Es el simbolo de maná genérico, significa “esta cantidad de cualquier tipo de maná”</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/S.svg" class="img-responsive">
                    </td>
                    <td>Es un maná de cualquier color que sea generado por un permanente nevado</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/W.svg" class="img-responsive">
                    </td>
                    <td>Es un maná blanco. Una carta con maná blanco en su coste de maná es blanca.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/U.svg" class="img-responsive">
                    </td>
                    <td>Es un maná azul. Una carta con maná azul en su coste de maná es azul.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/B.svg" class="img-responsive">
                    </td>
                    <td>Es un maná negro. Una carta con maná negro en su coste de maná es negra.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/R.svg" class="img-responsive">
                    </td>
                    <td>Es un maná rojo. Una carta con maná rojo en su coste de maná es roja.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/G.svg" class="img-responsive">
                    </td>
                    <td>Es un maná verde. Una carta con maná verde en su coste de maná es verde.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/C.svg" class="img-responsive">
                    </td>
                    <td>Es un maná incoloro.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/WU.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido blanco azul, se puede pagar con un mana blanco o un mana azul.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/UB.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido azul negro, se puede pagar con un mana azul o un mana negro.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/BR.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido negro rojo, se puede pagar con un mana negro o un mana rojo.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/RG.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido rojo verde, se puede pagar con un mana rojo o un mana verde.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/GW.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido verde blanco, se puede pagar con un mana verde o un mana blanco.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/WB.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido blanco negro, se puede pagar con un mana blanco o un mana negro.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/BG.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido negro verde, se puede pagar con un mana negro o un mana verde.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/GU.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido verde azul, se puede pagar con un mana verde o un mana azul.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/UR.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido azul rojo, se puede pagar con un mana azul o un mana rojo.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/RW.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido rojo blanco, se puede pagar con un mana rojo o un mana blanco.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/2W.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido blanco, se puede pagar con un mana blanco o 2 mana de cualquier color.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/2U.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido azul, se puede pagar con un mana azul o 2 mana de cualquier color.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/2B.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido negro, se puede pagar con un mana negro o 2 mana de cualquier color.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/2R.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido rojo, se puede pagar con un mana rojo o 2 mana de cualquier color.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/hybrid/2G.svg" class="img-responsive">
                    </td>
                    <td>Mana hibrido verde, se puede pagar con un mana verde o 2 mana de cualquier color.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/phyrexian/WP.svg" class="img-responsive">
                    </td>
                    <td>Mana pirexiano blanco, se puede pagar con un mana blanco o 2 vidas. Una carta con maná blanco en su coste de maná es blanca.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/phyrexian/UP.svg" class="img-responsive">
                    </td>
                    <td>Mana pirexiano azul, se puede pagar con un mana azul o 2 vidas. Una carta con maná azul en su coste de maná es azul.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/phyrexian/BP.svg" class="img-responsive">
                    </td>
                    <td>Mana pirexiano negro, se puede pagar con un mana negro o 2 vidas. Una carta con maná negro en su coste de maná es negra.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/mana-simbol/phyrexian/RP.svg" class="img-responsive">
                    </td>
                    <td>Mana pirexiano rojo, se puede pagar con un mana rojo o 2 vidas. Una carta con maná rojo en su coste de maná es roja.</td>
                    <th scope="row">
                        <img src="/img/mana-simbol/phyrexian/GP.svg" class="img-responsive">
                    </td>
                    <td>Mana pirexiano verde, se puede pagar con un mana verde o 2 vidas. Una carta con maná verde en su coste de maná es verde.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Q.svg" class="img-responsive">
                    </td>
                    <td>Este símbolo significa “endereza esta carta”, Aparece en costes de activación. No puedes pagar el coste de enderezar si la carta no está girada.</td>
                    <th scope="row">
                        <img src="/img/simbols/T.svg" class="img-responsive">
                    </td>
                    <td>Este símbolo significa “gira esta carta” (ponla de lado para mostrar que ya fue usada) esta es la tercera y ultima version de este simbolo. Aparece en costes de activación. No puedes pagar el coste de girar si la carta ya está girada.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/T_1st.svg" class="img-responsive">
                    </td>
                    <td>Primera version del simbolo de girar.</td>
                    <th scope="row">
                        <img src="/img/simbols/T_2nd.svg" class="img-responsive">
                    </td>
                    <td>Segunda version del simbolo de girar.</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Sun.png" class="img-responsive">
                    </td>
                    <td>Simbolo de sol, lo tienen las cartas de doble cara, en la cara delantera</td>
                    <th scope="row">
                        <img src="/img/simbols/Moon.png" class="img-responsive">
                    </td>
                    <td>Simbolo de la luna, lo tienen las cartas de doble cara, en la cara posterior</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Artifact.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Artifact. Lo poseen las cartas de formato Future Sight</td>
                    <th scope="row">
                        <img src="/img/simbols/Creature.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Creature. Lo poseen las cartas de formato Future Sight</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Enchantment.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Enchantment. Lo poseen las cartas de formato Future Sight</td>
                    <th scope="row">
                        <img src="/img/simbols/Instant.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Instant. Lo poseen las cartas de formato Future Sight</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Land.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Land. Lo poseen las cartas de formato Future Sight</td>
                    <th scope="row">
                        <img src="/img/simbols/Planeswalker.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Planeswalker. Lo poseen las cartas de formato Future Sight, aunque en esta edicion no existian los planeswalker igual tienen el simbolo para futuras ediciones</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Sorcery.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Sorcery. Lo poseen las cartas de formato Future Sight</td>
                    <th scope="row">
                        <img src="/img/simbols/E.svg" class="img-responsive">
                    </td>
                    <td>Simbolo de Energia. Son contadores que se le van colocando al jugador para activar algunas habilidades</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="/img/simbols/Loyalty_start.jpg" class="img-responsive">
                    </td>
                    <td>Contadores de lealtad. Son los contadores que poseen los planeswalker que le permiten activar sus habilidades</td>
                    <th scope="row">
                        <img src="/img/simbols/Loyalty_up.png" class="img-responsive">
                    </td>
                    <td>Indica que para activar esta habilidad del planeswalker, se le suma esta cantidad de contadores de lealtad. solo se puede jugar un habilidad por turna solo en cualquiera de las 2 fases principales</td>
                </tr>
                <tr>
                    <th scope="row">
                    <img src="/img/simbols/Loyalty_neutral.jpg" class="img-responsive">
                    </td>
                    <td>Indica que para activar esta habilidad del planeswalker, no alterara la cantidad de contadores de lealtad. solo se puede jugar un habilidad por turna solo en cualquiera de las 2 fases principales</td>
                    <th scope="row">
                        <img src="/img/simbols/Loyalty_down.png" class="img-responsive">
                    </td>
                    <td>Indica que para activar esta habilidad del planeswalker, se le resta esta cantidad de contadores de lealtad. solo se puede jugar un habilidad por turna solo en cualquiera de las 2 fases principales</td>
                </tr>
            </tbody>
        </table>
        @if(count($definition) > 0)
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">termino</td>
                        <th scope="col">Significado</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($definition as $definition)
                        <tr>
                            <th scope="row">{{$definition->title}}</td>
                            <td>{{$definition->def}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No definiciones a mostrar</p>
        @endif
    </div>
@endsection