<?php

require_once(__DIR__."/../bootstrap/start.php");

$app->get('/',function($req,$res,$args){

	


	
	return $this->view->render($res,'welcome.php');

});

$app->get('/orders', function ($req,$res,$args) {
	$orders = Order::all();
    return $this->view->render($res,'orders/index.php',compact('orders'));
});
$app->run();
