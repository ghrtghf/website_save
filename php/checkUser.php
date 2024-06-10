<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

$email = $message->email ?? null;
$password = $message->password  ?? null;

$user = findUser($email);

if (!$user) {
	$message = 1;
} else
if (!password_verify($password, $user['password'])) {
	$message = 2;
} else {
	$_SESSION['user']['id'] = $user['id'];
	$message = 'true';
};

echo json_encode($message);
