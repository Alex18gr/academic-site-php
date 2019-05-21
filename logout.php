<?php session_start();
// TODO comment why we do not need session_start in every page

// TODO comment logout

if (isset($_SESSION['user_id'])) {
    $_SESSION = array();
    session_destroy();
    setcookie('PHPSESSID','',time()-3600,'/','',0,0);
}

header('Location: login.php');
exit();