<?php
// All your app routes goes here

$app->get('/',function($req,$res,$args){

	
	return $this->view->render($res,'welcome.php');

});

$app->get('/orders', function ($req,$res,$args) {
	$orders = Order::all();
    return $this->view->render($res,'orders/index.php',compact('orders'));
});

$app->get('/conf',function($req,$res,$args){
	echo $this->config->get('url');
});