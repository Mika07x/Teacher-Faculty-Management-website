<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\config\SessionManager.php';

SessionManager::startTeacherSession();
SessionManager::logout();
header('Location: ../login.php');
exit;
?>