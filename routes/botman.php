<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

// This is the get started text
$botman->hears('GET_STARTED', function ($bot) {
	$bot->reply('Hi. I can\'t do much right now, but try saying "Hi", or asking me to "Start conversation"');
});

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Manah manah', function ($bot) {
	$bot->reply('Do doooo do do-do');
});
$botman->hears('Who am I\??', function ($bot) {
	$bot->reply('Hmm...let me think about that');
	$user = $bot->getUser();
	$bot->reply( 'Why, you seem to be ' . $user->getFirstName() . ' ' . $user->getLastName() );
} );
$botman->hears('Start conversation', BotManController::class.'@startConversation');
