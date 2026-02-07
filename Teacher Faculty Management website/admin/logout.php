<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\Teacher Faculty Management website\config\SessionManager.php';

SessionManager::startAdminSession();
SessionManager::logout();
header('Location: ../login.php');
exit;
?>
