<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class IndexController extends QuizController
{
    public function getIndex()
    {
    	//$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
	//$channel = $connection->channel();


    	$viewParams = [];
    	return view('quiz.index.index', $viewParams);
    }

}
