<?php
require_once '../helpers/response.php';
require_once '../helpers/auth.php';

if (!isAuthorized()) {
    jsonResponse(401, ['error' => 'Unauthorized']);
}

$name = $_POST['name'] ?? '';

if (empty($name)) {
    jsonResponse(400, ['error' => 'Name is required']);
}

jsonResponse(200, ['message' => 'Profile updated']);
