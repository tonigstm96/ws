<?php

declare(strict_types=1);

require_once __DIR__ . '/models/User.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') 
{
    http_response_code(405);
    echo 'Método no permitido';
    exit;
}

$name = trim($_POST['name'] ?? '');
$surname = trim($_POST['surname'] ?? '');
$password = $_POST['password'] ?? '';
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$sex = $_POST['sex'] ?? '';

$user = new User(
    $name,
    $surname,
    password_hash($password, PASSWORD_DEFAULT),
    $phone,
    $email,
    $sex
);

file_put_contents(
    __DIR__ . '/usuarios.txt',
    $user->toJson() . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

header('Content-Type: application/json; charset=utf-8');
echo $user->toJson();