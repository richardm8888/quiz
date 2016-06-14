<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Models\QuizMessaging;

require 'vendor/autoload.php';

$server = IoServer::factory
(
	new HttpServer(
        	new WsServer(
                	new QuizMessaging()
            	)
        ),
        8080
);

$server->run();