<?php
require_once("../../config.php");
session_start();
if (isset($_SESSION["session_email"])) {
    echo "fin";
    session_destroy();
    header("location: ".$baseURL."/");
}else{ echo "fin";}
?>