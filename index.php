<?php
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
echo $request_uri;
if ($request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/' || $request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41') {
	
	$route = 'views/login.view.php';
	
} elseif ($request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/form/' || $request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/form') {
	
	$route = 'views/login.view.php';
	
} elseif ($request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/archive/' || $request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/archive') {
	
	$route = '/archive.php';

} elseif ($request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/contact/' || $request_uri === '/web-servidor/AS34C-Desenv_Web-Server-N41/contact') {
	
	$route = '/contact.php';
	
} else {
	$route = '/404.php';
	
}

require __DIR__ . "/". $route;