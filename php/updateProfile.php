<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

$F = $message -> F ?? null;
$I = $message -> I ?? null;
$O = $message -> O ?? null;
$email = $message -> email ?? null;
$phone = $message -> phone ?? null;
$date_birth = $message -> date_birth ?? null;
$id = $_SESSION['user']['id'];

$full_name = $F + ' ' + $I + ' ' + $O;

$pdo = getPDO();

$query = "UPDATE users 
    SET 
        full_name = :full_name, 
        email = :email, 
        phone = :phone
        date_birth = :date_birth
    WHERE
        id = :id
    ";

$params = [
	'full_name' => $full_name,
	'email' => $email,
	'phone' => $phone,
	'date_birth' => $date_birth,
	'id' => $id,
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}
