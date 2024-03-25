<?php
require_once __DIR__ . '/healpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

addOldValues('email', $email);

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

	addValidationError('email', 'Validation Error'); 
	addValidationError('email', 'The email address is invalid.');
	redirect('/login.php');
}

$user = findUser($email);

if (!$user) {
	addValidationError('email', "User not found");
}
if (!password_verify($password, $user['password'])) {
	addValidationError('password', 'Incorrect password');
}

$_SESSION['user']['id'] = $user['id'];
$_SESSION['user']['role'] = $user['role'];

$message[] = json_decode(file_get_contents('php://input'));
echo json_encode($message);
