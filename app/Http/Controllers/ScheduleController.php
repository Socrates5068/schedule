<?php

namespace App\Http\Controllers;

use TelegramBot\Api\BotApi;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function store(Request $schedule)
    {
        $chatId = -534586236;
        $messageText = "Prueba de bot";
        $bot = new \TelegramBot\Api\BotApi(env('BOT_API_TOKEN'));
        $bot->sendMessage($chatId, $messageText);
    }
}
