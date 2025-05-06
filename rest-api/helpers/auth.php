<?php
function isAuthorized() {
    return isset($_POST['token']) && $_POST['token'] === 'mock-token-123';
}
