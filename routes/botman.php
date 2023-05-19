<?php

use App\Worker;
use App\Http\Middleware\UserCheck;
use App\Http\Controllers\BotManController;


$botman = resolve('botman');

$middleware=new UserCheck();

$botman->middleware->received($middleware);


$botman->hears('Hi', function ($bot) {
    $user = $bot->getUser();
    
    $bot->reply('Hello! '.$user->getFirstName()." ".$user->getLastName());
    $bot->reply('Hello! '."@".$user->getUsername());
    $bot->reply(strval($user->getId()));
   
    
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');

$botman->fallback(function($bot){
    $bot->reply('wrong command');
});