<?php

use App\Http\Middleware\UserCheck;
use App\Http\Controllers\BotManController;


$botman = resolve('botman');

$middleware=new UserCheck();

$botman->middleware->received($middleware);


$botman->hears('Hi', function ($bot) {
    $user = $bot->getUser();
    
    $bot->reply('Hello! '.$user->getFirstName());
    
});
$botman->hears('jalili',function($bot){
    $bot ->reply('he is');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
