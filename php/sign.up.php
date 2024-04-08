<?php


require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

$name = $message->name;
$lastName = $message->LastName;
$surname = $message->surname;
$email = $message->email;
$phone = $message->phone;
$birthDate = $message->birthDate;
$password = $message->password;

$user = findUser($email);

if ($user['status'] == 'active') {
	addValidationError(fieldName: 'email', message: 'The mail already exists');
	$message = 1;
}else{
	$pdo = getPDO();

$query = "INSERT INTO users (name, last_name, surname, email, phone, birth_date, password, status, role) VALUES (:name, :last_name, :surname, :email, :phone, :birth_date, :password, :status, :role)";

$params = [
	'name' => $name,
	'last_name' => $lastName,
	'surname' => $surname,
	'email' => $email,
	'phone' => $phone,
	'birth_date' => $birth_date,
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'status' => 1,
	'role' => 1
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

$user = findUser($email);

$_SESSION['user']['id'] = $user['id'];
$_SESSION['user']['role'] = $user['role'];

redirect('/');
}

