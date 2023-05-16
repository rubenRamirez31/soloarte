<?php
include "Bot.php";
$bot = new Bot;
$questions = [

    //quien eres
    "quien eres?" =>"Hola soy Quetzbotl, tu asistente de chatbot personal, para proporcionarte información útil y responder cualquier pregunta que puedas tener sobre el arte y la cultura mexicanos. Juntos, podemos explorar la rica historia y la diversidad del arte mexicano y descubrir las obras de artistas destacados de todo el país. ¿En qué puedo ayudarte hoy?",
    

    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "gracias" =>"de nada, hay algo mas en que te pueda ayudar?",
    "si" =>"que mas necesitas?",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is CoroBot",
   
    // Artesanías mexicanas
    "qué son las artesanías mexicanas?" => "Las artesanías mexicanas son productos hechos a mano que reflejan la rica cultura y tradiciones de México. Pueden incluir cerámica, textiles, joyería, alebrijes, talavera, entre otros.",
    "artesanías" => "Las artesanías mexicanas son productos hechos a mano que reflejan la rica cultura y tradiciones de México. Pueden incluir cerámica, textiles, joyería, alebrijes, talavera, entre otros.",
    "artesanias" => "Las artesanías mexicanas son productos hechos a mano que reflejan la rica cultura y tradiciones de México. Pueden incluir cerámica, textiles, joyería, alebrijes, talavera, entre otros.",
    "dónde puedo encontrar artesanías mexicanas?" => "Puedes encontrar artesanías mexicanas en nuestra página de ventas, donde ofrecemos una amplia variedad de productos únicos y auténticos.",
    "dónde puedo encontrar?" => "Puedes encontrar artesanías mexicanas en nuestra página de ventas, donde ofrecemos una amplia variedad de productos únicos y auténticos.",
    "dónde encontrar?" => "Puedes encontrar artesanías mexicanas en nuestra página de ventas, donde ofrecemos una amplia variedad de productos únicos y auténticos.",
    "donde encontrar?" => "Puedes encontrar artesanías mexicanas en nuestra página de ventas, donde ofrecemos una amplia variedad de productos únicos y auténticos.",
    "qué tipo de artesanías venden en esta página?" => "En nuestra página de ventas de artesanías mexicanas, ofrecemos una amplia selección de productos, que incluyen cerámica, textiles, joyería tradicional, alebrijes tallados a mano, talavera y mucho más. ¡Explora nuestra colección y descubre piezas maravillosas!",
    "tipos?" => "En nuestra página de ventas de artesanías mexicanas, ofrecemos una amplia selección de productos, que incluyen cerámica, textiles, joyería tradicional, alebrijes tallados a mano, talavera y mucho más. ¡Explora nuestra colección y descubre piezas maravillosas!",

    // Cultura mexicana
    "qué características destacan en la cultura mexicana?" => "La cultura mexicana se caracteriza por su diversidad, colores vibrantes, gastronomía única, música folklórica, tradiciones ancestrales y una gran influencia indígena y española.",
    "cultura mexicana" => "La cultura mexicana se caracteriza por su diversidad, colores vibrantes, gastronomía única, música folklórica, tradiciones ancestrales y una gran influencia indígena y española.",
    "cultura" => "La cultura mexicana se caracteriza por su diversidad, colores vibrantes, gastronomía única, música folklórica, tradiciones ancestrales y una gran influencia indígena y española.",
    "cuáles son las festividades más importantes de México?" => "Algunas festividades importantes en México son el Día de los Muertos, la Guelaguetza, el Día de la Independencia, el Carnaval, la Noche de Rábanos y el Día de la Virgen de Guadalupe.",
    "festividades" => "Algunas festividades importantes en México son el Día de los Muertos, la Guelaguetza, el Día de la Independencia, el Carnaval, la Noche de Rábanos y el Día de la Virgen de Guadalupe.",
    "cómo la cultura mexicana se refleja en las artesanías?" => "Las artesanías mexicanas son una manifestación tangible de la cultura mexicana. Cada pieza refleja la historia, las tradiciones y la identidad de diferentes regiones de México. Los colores, diseños y técnicas",
    
     // Mitología mexicana
     "qué es la mitología mexicana?" => "La mitología mexicana se refiere a las creencias, dioses y leyendas de las culturas prehispánicas de México, como los aztecas, mayas, zapotecas y toltecas. Incluye deidades como Quetzalcóatl, Huitzilopochtli, Tláloc y Coatlicue.",
     "cuáles son las leyendas más conocidas de México?" => "Algunas leyendas famosas de México son La Llorona, El Sombrerón, El Charro Negro, El Cadejo y La Nahuala. Estas leyendas han pasado de generación en generación, enriqueciendo la rica tradición oral de México.",
 
     // Conexión con la página de ventas de artesanías
     "cómo puedo comprar artesanías mexicanas en esta página?" => "Comprar artesanías mexicanas en nuestra página es muy sencillo. Solo necesitas explorar nuestra colección, seleccionar los productos que te interesen, agregarlos al carrito de compras y completar el proceso de pago. ¡En poco tiempo recibirás las artesanías en tu domicilio!",
     "qué métodos de pago aceptan en la página?" => "Aceptamos diversos métodos de pago, incluyendo tarjetas de crédito y débito, transferencia bancaria y pagos electrónicos a través de plataformas seguras. Durante el proceso de pago, se te mostrarán las opciones disponibles.",
     "cómo se realizan los envíos de las artesanías?" => "Nos encargamos de realizar los envíos de las artesanías mexicanas de manera segura y confiable. Trabajamos con servicios de paquetería reconocidos para garantizar que las piezas lleguen en perfecto estado a tu destino. Además, ofrecemos opciones de envío nacional e internacional, según tus necesidades.",
 
     // Otras preguntas
     "qué recomendaciones tienes para cuidar las artesanías mexicanas?" => "Para cuidar las artesanías mexicanas, es importante evitar la exposición directa a la luz solar intensa, mantenerlas alejadas de la humedad y limpiarlas suavemente con un paño suave. También es recomendable no utilizar productos químicos agresivos. Tratar las piezas con delicadeza ayudará a preservar su belleza y durabilidad.",
     "puedo solicitar artesanías personalizadas?" => "Sí, en algunos casos es posible solicitar artesanías personalizadas. Te recomendamos contactarnos directamente para discutir tus requerimientos y ver si podemos cumplir con tu solicitud. Estaremos encantados de ayudarte en la medida de nuestras posibilidades.",

     //Metodos de pago
     "qué métodos de pago aceptan en la página?" => "Aceptamos diversos métodos de pago para brindarte comodidad y seguridad en tus compras. Actualmente, aceptamos tarjetas de crédito y débito, como Visa, Mastercard y American Express. También puedes realizar pagos a través de plataformas de pago en línea, como PayPal o Mercado Pago.",
     "pagos" => "Aceptamos diversos métodos de pago para brindarte comodidad y seguridad en tus compras. Actualmente, aceptamos tarjetas de crédito y débito, como Visa, Mastercard y American Express. También puedes realizar pagos a través de plataformas de pago en línea, como PayPal o Mercado Pago.",
     "pago" => "Aceptamos diversos métodos de pago para brindarte comodidad y seguridad en tus compras. Actualmente, aceptamos tarjetas de crédito y débito, como Visa, Mastercard y American Express. También puedes realizar pagos a través de plataformas de pago en línea, como PayPal o Mercado Pago.",
     "es seguro realizar pagos en esta página?" => "Sí, tu seguridad es nuestra prioridad. Utilizamos tecnologías de encriptación y cumplimos con los más altos estándares de seguridad para proteger tus datos durante el proceso de pago. Además, las plataformas de pago en línea que ofrecemos cuentan con medidas de seguridad adicionales para garantizar transacciones seguras y confiables.",
     "qué debo hacer si tengo problemas con el proceso de pago?" => "Si encuentras algún problema durante el proceso de pago, te recomendamos verificar los datos de tu tarjeta y asegurarte de que estén ingresados correctamente. Si el problema persiste, puedes contactarnos directamente a través de nuestro servicio de atención al cliente y estaremos encantados de ayudarte a resolver cualquier inconveniente que puedas tener.",

];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con solo arte mexicano.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
