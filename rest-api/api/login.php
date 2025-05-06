<?php
require_once '../helpers/response.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (!$email || !$password) {
    jsonResponse(400, ['error' => 'Email and password required']);
}

// Read users from JSON file
$usersFile = file_get_contents('../users.json');
$users = json_decode($usersFile, true);

// Search for matching user
$validUser = false;
foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        $validUser = true;
        break;
    }
}

if ($validUser) {
    jsonResponse(200, ['token' => 'mock-token-123']);
} else {
    jsonResponse(401, ['error' => 'Invalid credentials']);
}
