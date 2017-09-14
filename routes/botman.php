<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Manah manah', function ($bot) {
	$bot->reply('Do doooo do do-do');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
