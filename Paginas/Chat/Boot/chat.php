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
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is CoroBot",
   

    
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
