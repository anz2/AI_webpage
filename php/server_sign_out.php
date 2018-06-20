<?php
session_start();
if(isset($_SESSION["id"])) {
    unset($_SESSION["id"]);
    session_unset();
    session_cache_expire();
    session_destroy();
}
header('Location: sign_out.php');
