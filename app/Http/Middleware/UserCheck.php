<?php

namespace App\Http\Middleware;

use BotMan\BotMan\Interfaces\Middleware\Received;



class UserCheck implements Received
{
    /**
     * Handle an incoming message.
     *
     * @param IncomingMessage $message
     * @param callable $next
     * @param BotMan $bot
     *
     * @return mixed
     */
    public function received($message, $next, $bot)
    {
        $sender = $message->getSender();


        // $result=$bot->sendRequest('getChatMember', [
        //     "chat_id="=>env('Chanel_Name'),
        //     'user_id'=>"1733193623"

        // ]);

        $result = json_decode(file_get_contents("https://api.telegram.org/bot" . env('TELEGRAM_TOKEN') . "/getChatMember?chat_id=" . env('Chanel_Name') . "&user_id=" . $sender));

        $bot->say(json_encode("OK: " . $result->ok), $sender);
        $bot->say(json_encode($result->result->user->is_bot), $sender);
        $status = $result->result->status;
        $bot->say(json_encode("status: " . $status), $sender); //left

        if ($status != 'left') {

            $bot->say('here in worker: ' . env('Chanel_Name'), $sender);

            return $next($message);
        } else {
            $bot->say('youre not a member please join ' . env('Chanel_Name'), $sender);
            return $next;
        }
    }
}
