<?php

require 'includes/url.php';

session_start();

$_SESSION = array();

if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $param["path"], $params["domain"],
        $params["secure"], $param["httponly"]
    );
}

session_destroy();

redirect('/');
