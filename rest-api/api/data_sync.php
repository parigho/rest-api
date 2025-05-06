<?php
require_once '../helpers/response.php';
require_once '../helpers/auth.php';

// Only allow POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(405, ['error' => 'Method Not Allowed']);
}

// Check token
if (!isAuthorized()) {
    jsonResponse(401, ['error' => 'Unauthorized']);
}

// Validate input (expecting 'data' field)
$data = $_POST['data'] ?? null;
if (!$data) {
    jsonResponse(400, ['error' => 'Missing sync data']);
}

// Here, just simulate processing the data
jsonResponse(200, ['message' => 'Data synced successfully']);
