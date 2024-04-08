<?php
session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
	header(header: "Location:$path");
	die();
}

function getPDO()
{
	try {
		return new \PDO('mysql:host=' . DB_HOST . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
	} catch (\PDOException $e) {
		die("Connection error: {$e->getMessage()}");
	}
}

function addOldValues(string $key, mixed $value)
{
	$_SESSION['old'][$key] = $value;
}

function addValidationError(string $fieldName, string $message)
{
	$_SESSION['validation'][$fieldName] = $message;
}

function findUser(string $email): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status <> :status");
	$stmt->execute(['email' => $email , 'status' => '2']);
	return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function uploadFile(array $file, string $prefix = '')
{
	$uploadPath = __DIR__ . '/../uploads';

	if (!is_dir($uploadPath)) {
		mkdir($uploadPath, 0777, true);
	}

	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
	$fileName = $prefix . '_' . time() . ".$ext";

	$path = "$uploadPath/$fileName";

	if (!move_uploaded_file($file['tmp_name'], $path)) {
		die('ошибка при загрузке файла');
	}

	return "uploads/$fileName";
}

function CheckoutUser(){
	if (isset($_SESSION['user'])) {
		redirect('/');
	}
}