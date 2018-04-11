<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class definition extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definitions')->insert(
            array(
                array(
                    'title'=> 'Alcance',
                    'def' => 'Una habilidad de palabra clave. Una criatura con alcance puede bloquear una criatura con la habilidad de volar.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Arrolla',
                    'def' => 'Una habilidad de palabra clave. Cuando una criatura que tiene la habilidad de arrollar es bloqueada, tienes que hacer el suficiente daño de combate a las criaturas que la bloquean para destruir todas esas criaturas, entonces puedes asignar el daño sobrante al jugador defensor.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Artefacto',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Atacar',
                    'def' => 'Es la forma en que tus criaturas hacen daño a tu oponente. Las criaturas sólo pueden atacar a tu oponente. Tu oponente tiene una oportunidad de bloquear con sus propias criaturas.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Aura',
                    'def' => 'Un tipo especial de encantamiento que puede ser anexado a un permanente. Cuando juegas un aura, eliges el tipo correcto de permanente para hacer objetivo. Cuando el aura se resuelve, se pone en juego anexada a ese permanente (ya no lo está haciendo objetivo). El aura permanece allí hasta que es destruida o el permanente al cual está anexada deja el juego.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Biblioteca',
                    'def' => 'Baraja/Mazo',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Bloquear',
                    'def' => 'Es evitar que una criatura atacante te dañe haciéndola luchar contra una de tus criaturas. Después de que tu oponente ataca con una o más criaturas, puedes hacer que cualquier cantidad de tus criaturas enderezadas bloqueen. Cada una puede bloquear una criatura atacante. Puedes hacer que 2 o más de tus criaturas enderezadas se unan y bloqueen a una sola criatura atacante. Si se bloquea a una criatura atacante, hará su daño a la criatura bloqueadora en lugar de a ti. Bloquear es opcional.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Carta multicolor',
                    'def' => 'Es una carta que tiene más de un color en su coste de maná. La mayoría de las cartas multicolores tienen un fondo dorado.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Cementerio',
                    'def' => 'Tus cartas van a tu cementerio cuando se descartan, se destruyen, se sacrifican, son contrarrestadas, se resuelven o llegan ahí por un efecto. Las cartas de tu cementerio siempre estarán boca arriba y cualquiera debe poder verlas. Cada jugador tiene su propio cementerio.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Color',
                    'def' => 'Los cinco colores de Magic son: blanco, azul, negro, rojo y verde. Si un hechizo o una habilidad dice que elijas un color, debes elegir uno de esos cinco. El coste de maná determina el color de una carta. Las tierras son incoloras.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Combate',
                    'def' => 'Todo lo que sucede durante la fase de combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Conceder',
                    'def' => 'Es dejar de jugar y darle la victoria a tu oponente. Puedes conceder un juego en cualquier momento. Cuando concedes, pierdes el juego.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Conjuro',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Contador',
                    'def' => 'Algunos hechizos y habilidades te dirán que pongas un contador sobre un permanente. El contador señala un cambio en el permanente y dura mientras está en juego. Puedes usar cualquier cosa como contador: monedas, cuentas, lo que sea.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Contrarrestar',
                    'def' => 'Es anular un hechizo para que no surta efecto. Si un hechizo es contrarrestado, es removido de la pila y puesto en el cementerio de su propietario. Una vez que un hechizo o habilidad empieza a resolverse, es muy tarde para contrarrestarlo. Las tierras no son hechizos, así que no pueden ser contrarrestadas.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Control',
                    'def' => 'Controlas los hechizos que juegas y los permanentes que han entrado en juego bajo tu mando. También controlas las habilidades que son de permanentes que controlas. Sólo puedes decidir sobre las cosas que controlas. Si controlas un permanente, sólo tú puedes jugar sus habilidades. Incluso si lanzas un encantamiento sobre la criatura de tu oponente, lo que controlarás es el encantamiento y sus habilidades.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Controlador',
                    'def' => 'Es el jugador que ha jugado el hechizo o la habilidad. Para un permanente, el controlador es el jugador que lo jugó.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Coste',
                    'def' => 'El coste es lo que pagas para jugar un hechizo o una habilidad. Sólo es posible pagar un coste completo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Coste adicional',
                    'def' => 'Algunos hechizos te dicen que tienen un coste adicional. Para jugar un hechizo, debes pagar tanto el coste de maná que está en la esquina superior derecha de la carta como su coste adicional.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Coste de maná convertido',
                    'def' => 'Es la cantidad total de maná que hay en un coste de maná, sin importar el color.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Criatura',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Criatura artefacto',
                    'def' => 'Esto es tanto una criatura como un artefacto.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Criatura atacante',
                    'def' => 'Es la criatura que está atacando. Una criatura está atacando desde el momento en que es declarada como atacante hasta que termina la fase de combate, a menos que sea de alguna manera removida del combate. Las criaturas no pueden atacar fuera de la fase de combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Criatura bloqueada',
                    'def' => 'Es una criatura atacante que ha sido bloqueada al menos por una criatura. Cuando se bloquea una criatura, permanece así el resto de la fase de combate, incluso si todas las criaturas que la bloquean salen del juego. En otras palabras, una vez que se bloquea una criatura, no hay manera de que haga daño al jugador defensor (a menos que la criatura atacante tenga la habilidad de arrollar). No existe una criatura bloqueada fuera de la fase de combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Criatura bloqueadora',
                    'def' => 'Es una criatura asignada a bloquear a una criatura atacante. Cuando se bloquea una criatura atacante, hará su daño de combate a la bloqueadora en vez de al jugador defensor. Cuando una criatura bloquea, permanece como bloqueadora el resto del combate. Las criaturas no pueden bloquear fuera de la fase de combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Cruzar tierras',
                    'def' => 'Cruzar tierras es el nombre que se da a un grupo de habilidades de palabra clave entre las que se incluyen cruzar llanuras, cruzar islas, cruzar pantanos, cruzar montañas y cruzar bosques. Una criatura que tiene la habilidad de cruzar una tierra es imbloqueable si el jugador defensor controla al menos una tierra del tipo especificado.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Dañar dos veces',
                    'def' => 'Una habilidad de palabra clave. Las criaturas con la habilidad de dañar dos veces hacen su daño de combate dos veces. Cuando llegas al paso de daño de combate, Se crea un paso adicional de daño de combate sólo para ellas. Sólo las criaturas con dañar primero o dañar dos veces hacen daño de combate en este paso. Después de eso está el paso de daño de combate normal. Todo el resto de las criaturas atacantes y bloqueadoras, así como las que tienen dañar dos veces, harán daño de combate durante este segundo paso.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Dañar primero',
                    'def' => 'Una habilidad de palabra clave. Las criaturas que tienen la habilidad de dañar primero hacen su daño de combate antes que las criaturas que no la tienen. Se crea un paso adicional de daño de combate sólo para ellas. Sólo las criaturas con dañar primero o dañar dos veces hacen daño de combate en este paso. Después de eso está el paso de daño de combate normal. Todo el resto de las criaturas atacantes y bloqueadoras, así como las que tienen dañar dos veces, harán daño de combate durante este segundo paso.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Daño',
                    'def' => 'Esto es lo que disminuye los totales de vida de los jugadores y destruye a las criaturas. Las criaturas atacantes y bloqueadoras hacen daño igual a su fuerza. Algunos hechizos y habilidades también pueden hacer daño. El daño sólo se le hace a las criaturas o a los jugadores. Si el daño que se hace a una criatura en un turno es igual o mayor que su resistencia, se destruye. Si se le hace daño a un jugador, se le resta del total de vidas.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Daño de combate',
                    'def' => 'Es el daño hecho por criaturas por atacar y bloquear. Una criatura hace un daño de combate igual a su fuerza. Este daño se hace durante el paso de daño de combate. Cualquier otro tipo de daño no cuenta como daño de combate, incluso si es hecho por la habilidad de una criatura durante el combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Defensor',
                    'def' => 'Una habilidad de palabra clave que hay en algunas criaturas. Las criaturas con la habilidad de defensor no pueden atacar.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Descartar',
                    'def' => 'Es tomar una carta de tu mano y ponerla en tu cementerio. Si un hechizo o una habilidad te obliga a descartarte, podrás elegir las cartas, a menos que el hechizo o la habilidad diga que otro jugador las elige o que debes descartarlas “al azar”. Si tienes más de siete cartas en la mano durante tu propio paso de limpieza, tienes que descartar hasta tener siete.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Destello',
                    'def' => 'Es una habilidad de palabra clave. Una carta con destello puede jugarse en cualquier momento en que pudieras jugar un instantáneo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Destruir',
                    'def' => 'Es remover un permanente del juego y ponerlo en el cementerio de su propietario. Las criaturas son destruidas cuando reciben una cantidad de daño igual o mayor que su resistencia. Además, muchos hechizos y habilidades pueden destruir permanentes (sin hacerles daño).',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Efecto',
                    'def' => 'Es lo que hace un hechizo o una habilidad cuando se resuelve.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'En juego',
                    'def' => 'Zona del juego donde entran los hechizos una vez se resuelven.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Encantado, Encantada',
                    'def' => 'Hace referencia al permanente que tenga anexado un aura.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Encantamiento',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Encantar',
                    'def' => 'Es una habilidad de palabra clave en todas las auras. Cuando juegas un aura, debes hacer objetivo ese tipo de permanente. Si el aura está en algún momento anexada a algo que no es el tipo correcto de permanente, va al cementerio de su propietario.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Enderezar',
                    'def' => 'Es poner derecha una carta girada para que esté lista para usarse nuevamente.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Entrar en juego',
                    'def' => 'Cuando se resuelve un hechizo de artefacto, criatura o encantamiento, entra en juego como un permanente. Las tierras también entran en juego como permanentes.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Equipar',
                    'def' => 'Una habilidad de palabra clave que hay en equipos. Te dice cuánto cuesta anexar el equipo a una de tus criaturas. No importa si el equipo está desanexado o anexado a otra criatura. Puedes jugar esta habilidad sólo durante tu fase principal, cuando no haya hechizos o habilidades en la pila. La habilidad de equipar hace objetivo a la criatura a la que estás moviendo el equipo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Equipo',
                    'def' => 'Un tipo de artefacto que representa un arma, armadura u otro objeto que tus criaturas pueden usar. Una carta de equipo entra en juego como cualquier otro artefacto. Una vez que está en juego, puedes pagar el coste de equipar en cualquier momento en que pudieras jugar un conjuro para anexarlo a una criatura que controlas. Puedes hacer esto incluso si el equipo está anexado a otra criatura. Una vez que está anexado a una criatura, el equipo tiene algún efecto sobre ella. Si la criatura equipada deja el juego, el equipo “cae” y permanece en juego, a la espera de que lo anexes a otra criatura.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Fase',
                    'def' => 'Una de las partes principales de un turno.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Ficha',
                    'def' => 'Algunos instantáneos, conjuros y habilidades pueden crear criaturas que se representan mediante fichas. Puedes usar cualquier cosa como ficha, siempre que se pueda girar claramente. Las fichas se consideran criaturas en todo aspecto, y son afectadas por todas las reglas, hechizos y habilidades que afectan criaturas. Sin embargo, si una de tus fichas de criatura deja el juego, se mueve a una nueva zona e inmediatamente desaparece del juego.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Fuente',
                    'def' => 'De donde viene el daño o una habilidad. Una vez que el daño de combate o una habilidad va a la pila, remover la fuente no impide que se resuelva el daño de combate o el efecto.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Fuerza',
                    'def' => 'Es el número que está a la izquierda de la diagonal en la esquina inferior derecha de las cartas de criatura. Una criatura con fuerza igual o menor que 0 no hace daño en combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Girar',
                    'def' => 'Es poner una carta de lado.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad',
                    'def' => 'Cualquier texto en un permanente (excepto el texto recordatorio y el texto de ambientación) te indica las habilidades del permanente. Hay tres tipos de habilidades: habilidades activadas, habilidades estáticas y habilidades disparadas. A menos que digan lo contrario, las habilidades “funcionan” sólo mientras el permanente está en juego. Una vez que una habilidad disparada se dispara o se juega una habilidad activada, se resolverá a menos que sea contrarrestada; no importa qué pasa con la fuente de la habilidad una vez que la habilidad va a la pila.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad activada',
                    'def' => 'Una habilidad activada siempre está escrita como “coste: efecto”.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad de evasión',
                    'def' => 'Es un sobrenombre para cualquier habilidad que haga que la criatura sea más difícil de bloquear.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad de maná',
                    'def' => 'Es una habilidad que añade maná a tu reserva. Las habilidades de maná pueden ser activadas o disparadas. Cuando las juegas obtienes el maná inmediatamente y no van a la pila.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad disparada',
                    'def' => 'Son las habilidades que se juegan automaticamente cuando se cumple la condicion.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Habilidad estática',
                    'def' => 'Son las habilidades que estan siempre activas.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Hechizo',
                    'def' => 'Todos los tipos de cartas, excepto las tierras, son hechizos cuando los juegas.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Imbloqueable',
                    'def' => 'Cuando una criatura atacante es imbloqueable, es imposible que el jugador defensor la bloquee con una criatura.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Incoloro',
                    'def' => 'Los artefactos y las tierras son incoloros. Incoloro no es un color.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Inspirar temor',
                    'def' => 'Una habilidad de palabra clave. Una criatura que posea la habilidad de inspirar temor no puede ser bloqueada salvo por criaturas artefacto o por criaturas negras.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Instantáneo',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Jugador activo',
                    'def' => 'Es el jugador que tiene el turno. El jugador activo siempre tiene oportunidad de jugar hechizos y habilidades primero.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Jugador defensor',
                    'def' => 'El jugador que está siendo atacado durante una fase de combate.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Jugar',
                    'def' => 'Juegas una tierra poniéndola en juego de tu mano. Juegas un hechizo poniéndolo en la pila.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Legendario',
                    'def' => 'Legendario es un supertipo, así que lo encontrarás escrito en la línea de tipo después de la palabra “criatura” o “artefacto”. Sólo puede haber una copia en juego de un mismo permanente legendario. Esto se conoce como la “regla de leyendas”.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Maná',
                    'def' => 'Es la energía mágica que usas para pagar los hechizos y algunas habilidades.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Mostrar',
                    'def' => 'Cuando muestras una carta, tienes que enseñársela a todos los jugadores.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Mulligan',
                    'def' => 'Al comienzo de un juego de Magic, robas las primeras siete cartas de tu biblioteca. Esa es tu mano inicial. Si no te gusta tu mano inicial de cartas por cualquier razón, puedes hacer mulligan. Para hacer mulligan, baraja las cartas de tu mano con las de tu biblioteca y roba una nueva mano, pero esta vez con una carta menos. Puedes hacer mulligan cuantas veces quieras, pero cada vez robas una carta menos. Cuando ambos jugadores estén satisfechos con sus manos iniciales, empieza la partida.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'No bloqueada',
                    'def' => 'Una criatura está no bloqueada sólo si está atacando y el jugador defensor ha decidido no bloquearla.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Objetivo',
                    'def' => 'Una palabra usada en hechizos y habilidades.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Oponente',
                    'def' => 'Es la persona contra la que juegas. Si una carta dice “un oponente”, se refiere al oponente del controlador de esa carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Perder vida',
                    'def' => 'Todo el daño que recibes te hace perder vida, que se resta de tu total de vidas. Además, algunos hechizos y habilidades dicen que te hacen perder vida. Perder vida no es recibir daño, así que no puede prevenirse.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Permanente',
                    'def' => 'Son las cartas que se quedan en juego hasta que se destruya, se sacrifique o se remueva del juego. Si un permanente sale del juego y luego vuelve a entrar se lo considera como un permanente nuevo. No “recuerda” nada de lo que pasó la última vez que estuvo en juego.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Pila',
                    'def' => 'Los hechizos y habilidades existen en la pila. Esperan allí para resolverse hasta que ambos jugadores eligen no jugar nuevos hechizos o habilidades. Luego el último hechizo o habilidad puesto en la pila se resuelve, y los jugadores tienen una nueva oportunidad de jugar hechizos y habilidades.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Poner en juego',
                    'def' => 'Es mover una carta o ficha a la zona en juego. Cuando un hechizo o una habilidad te dice que pongas algo en juego, no es lo mismo que jugarlo, sino que lo pongas en juego sin pagar sus costes.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Prisa',
                    'def' => 'Una habilidad de palabra clave. Una criatura con la habilidad de prisa puede atacar  o jugar sus habilidades activadas que requieran girarse tan pronto como entra bajo tu control.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Propietario',
                    'def' => 'Es la persona que empezó la partida con la carta en su mazo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Protección',
                    'def' => 'Una habilidad de palabra clave. Un permanente o jugador con protección siempre tendrá: “protección contra _______”. Ese algo es contra lo que está protegido. La protección hace que: No reciba daño que ese tipo de fuentes fueran a hacer, No pueda ser encantado o ser objetivo de ese algo. En el caso de las criaturas no puede ser bloqueada por ese tipo de criaturas, carta o color.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Rareza',
                    'def' => 'Se refiere a la probabilidad que tienes de conseguir una determinada carta. Las cartas de Magic tienen tres niveles de rareza: común, poco común, rara y Mitica.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),


                array(
                    'title'=> 'Regenerar',
                    'def' => 'Es evitar que una criatura sea destruida. Un efecto de regeneración funciona como un escudo. Si una criatura fuera a ser destruida y tiene un escudo de regeneración, no es destruida. En vez de eso, la criatura se gira, se remueve del combate (si está atacando o bloqueando) y se le remueve todo el daño. Ese escudo de regeneración ya está usado. La criatura no deja el juego al regenerarse, así que cualquier aura, equipo o contadores sobre ella permanecen allí. Cualquier escudo de regeneración no usado desaparecerá durante el paso de limpieza.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Regla de oro',
                    'def' => 'Es cómo manejar un conflicto entre una carta y el reglamento. Cuando una carta de Magic contradice las reglas del juego, la carta gana.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Remover del combate',
                    'def' => 'Si un efecto remueve una criatura del combate, ya no está atacando o bloqueando. Si la criatura removida bloqueó a una criatura con anterioridad, la criatura atacante permanece bloqueada para que el daño no llegue al jugador defensor. Si el daño de combate fue a la pila antes de que fuera removida, el daño de combate de la criatura igualmente se hace (y si la criatura todavía está en juego, el daño de combate se le hace).',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Removido del juego',
                    'def' => 'Una zona del juego. Algunos hechizos y habilidades te dicen que remuevas cartas del juego. Pon esas cartas a un costado. Las cartas removidas del juego están normalmente boca arriba. Esta zona es compartida por ambos jugadores.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Reserva de maná',
                    'def' => 'Es un lugar imaginario donde guardas el maná hasta que lo usas. Cuando agregas maná a tu reserva de maná, se queda ahí hasta que lo usas o hasta que termina la fase.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Resistencia',
                    'def' => 'Es el número que está a la derecha de la diagonal en la esquina inferior derecha de las cartas de criatura. Si el daño que se hace a una criatura es igual o mayor que su resistencia en un turno, se destruye. Si la resistencia de una criatura es reducida a 0 o menos, va al cementerio de su propietario.', 
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Resolver',
                    'def' => 'Cuando juegas un hechizo o una habilidad, no sucede nada de inmediato. Tienes que ponerlo en la pila. Después de que cada jugador tiene una oportunidad de responder, se resolverá y sucederá su efecto. Si otro hechizo o habilidad lo contrarresta o si ninguno de sus objetivos es legal cuando intenta resolverse, no se resolverá (y si es un hechizo, irá al cementerio de su propietario).',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Respuesta, en respuesta',
                    'def' => 'Cuando juegas un hechizo o habilidad activada justo después de que se jugó otro hechizo o habilidad, jugaste algo en respuesta. Como el último hechizo o habilidad en la pila se resuelve primero, un hechizo o habilidad jugado en respuesta a otro se resolverá antes.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Robar',
                    'def' => 'Es tomar la carta superior de tu biblioteca y ponerla en tu mano.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Sacrificar',
                    'def' => 'Es elegir uno de tus permanentes en juego y ponerlo en el cementerio de su propietario. Sólo puedes sacrificar permanentes que controlas. Sacrificar un permanente es distinto de destruirlo, así que no podrás regenerarlo. Puedes sacrificar un permanente sólo si un hechizo o habilidad te lo indica, o como parte de un coste.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Salir del juego',
                    'def' => 'Un permanente sale de juego cuando se mueve de la zona en juego a cualquier otra zona. Desde el juego puede volver a la mano de un jugador o ir a un cementerio o a cualquier otra zona. Si una carta sale del juego y luego vuelve a entrar se la considera como una carta nueva. Es decir, no “recuerda” nada de lo que pasó la última vez que estuvo en juego.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Subtipo',
                    'def' => 'Todos los tipos de cartas tienen subtipos. Los subtipos están después de un guión largo en la línea de tipo. Los subtipos de criaturas también son llamados tipos de criatura, los subtipos de tierra también son llamados tipos de tierra, etcétera. Una carta puede tener varios subtipos o ninguno.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Supertipo',
                    'def' => 'Todos los tipos de cartas pueden tener supertipos. Los supertipos van junto al tipo de carta en la línea de tipo. . Los supertipos no tienen una correlación específica con los tipos de cartas. Algunos supertipos tienen reglas específicas asociadas a ellos.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Tierra',
                    'def' => 'Un tipo de carta.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Tierra no básica',
                    'def' => 'Es cualquier tierra que no tenga el supertipo “básica” en su línea de tipo. No puedes poner en tu mazo más de cuatro copias de una misma carta de tierra no básica.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Tipo de criatura',
                    'def' => 'Te dice ante qué clase de criatura. El tipo de criatura se encuentra en medio de la carta, después de “Criatura — ”. Si hay más de una palabra después del guión, es porque la criatura tiene varios subtipos.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Tipo de tierra básica/Tipo de tierra',
                    'def' => 'Cada tierra básica tiene un subtipo, que aparece después de “Tierra básica —” en su línea de tipo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Velo',
                    'def' => 'Una habilidad de palabra clave. Un permanente con la habilidad de velo no puede ser objetivo de hechizos o habilidades; ni siquiera las tuyas. Los jugadores también pueden ganar la habilidad de velo.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Vigilancia',
                    'def' => 'Una habilidad de palabra clave. Cuando una criatura con vigilancia ataca, no es girada.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Vínculo vital',
                    'def' => 'Una habilidad de palabra clave. Siempre que un permanente con vínculo vital haga daño, su controlador gana esa misma cantidad de vida.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'Vuela',
                    'def' => 'Una habilidad de palabra clave. Una criatura que vuela no puede ser bloqueada excepto por criaturas que tengan la habilidad de volar o alcance.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                ),

                array(
                    'title'=> 'X',
                    'def' => 'Cuando ves X en un coste de maná o en un coste de activación, tú eliges el número para X.',
                    'created_at'=> new DateTime,
                    'updated_at'=> new DateTime
                )
            )
        );
    }
}
