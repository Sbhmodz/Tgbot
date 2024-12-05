<?php
$config = include('config.php');
$botToken = $config['8059330798:AAHkQCJf9qpWeYbKUnA3Bsa8i4lcMKzSMwc'];
$webhookUrl = 'https://yourdomain.com/path/to/bot.php';

$response = file_get_contents("https://api.telegram.org/bot{$botToken}/setWebhook?url={$webhookUrl}");

echo $response;