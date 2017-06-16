<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'U3df1cac88e3510a10684dc664237064b';
$access_token  = 'ifNEIb0T0fu00LwBVddqYSarOl/O+5v8LEhd9BbPNtBBT0mqK6hYGI5SgV4IYxAyN3CAOpcCNaTsf5q+jT9eLNiEa9vgsmPuEUF60+KL41WJ09ck4ZYVu8BfOJVexyb5/qvfajyXkHI2yF3D1QL7hgdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('U3df1cac88e3510a10684dc664237064b', 'Hello World !!');

if ($bot->isSuccess()) {
    echo 'Succeeded!';
    exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
