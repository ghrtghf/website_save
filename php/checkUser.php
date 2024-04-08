<?php
require_once __DIR__ . '/healpers.php';

$message = json_decode(file_get_contents('php://input'));

$email = $message -> email ?? null;
$password = $message -> password ?? null;

$user = findUser($email);

if (!$user) {
	addValidationError('email', "User not found");
	$message = 2;
}else
if (!password_verify($password, $user['password'])) {
	addValidationError('password', 'Incorrect password');
	$message = 3;
}else
 {
	$_SESSION['user']['id'] = $user['id'];
	$_SESSION['user']['role'] = $user['role'];
	$message = 1;
};

echo json_encode($message);
