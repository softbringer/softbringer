<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-02.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '1552665506';
$access_token  = 'bac0c2ac312737b42e70033e47247d2e';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('[U421e4ce046d15fdad0a2adc6d3a512ad]', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
