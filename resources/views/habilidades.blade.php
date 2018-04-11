@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>habilidades</h1>
        <p>Cuando se comienza a acumular permanentes en juego, el juego cambia.
            Eso es porque muchos permanentes tienen texto sobre ellos que afecta el juego.
            Ese texto te indica las habilidades del permanente.
            Hay tres tipos distintos de habilidades:</p>

        <div class="col-md-12">
            <div class="col-md-3">
                <h2>Habilidades</br>estáticas</h2>
            </div>
            <div class="col-md-9">
                <p>Una habilidad estática es texto que es siempre cierto mientras la carta está en juego.
                    Una habilidad estática no se juega. Simplemente hace lo que dice.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <h2>Habilidades</br>disparadas</h2>
            </div>
            <div class="col-md-9">
                <p>Una habilidad disparada es un texto que sucede cuando ocurre un evento específico en el juego. 
                    Todas las habilidades disparadas comienzan con “cuando”, “siempre que” o “al”.
                    Se dispara automáticamente siempre que suceda la primera parte de la habilidad.
                    La habilidad va a la pila al igual que un hechizo y se resuelve como un hechizo.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <h2>Habilidades</br>activadas</h2>
            </div>
            <div class="col-md-9">
                <p>Una habilidad activada es una habilidad que puedes jugar siempre que quieras.
                    Todas las habilidades activadas tienen un coste, luego dos puntos (“:”) y luego un efecto.
                    Jugar una funciona exactamente igual que jugar un instantáneo, excepto que no hay una carta 
                    para poner en la pila. La habilidad va a la pila al igual que un hechizo y se resuelve como 
                    un hechizo.
                    Si juegas una habilidad activada y luego el permanente con la habilidad deja el juego, la habilidad igual se resolverá.</p>
            </div>
        </div>
    </div>
@endsection