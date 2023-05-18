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
    public function received( $message, $next, $bot)
    {
        
        
        return $next($message);
    }
}
