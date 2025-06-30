<?php

require "config.php";
require 'header.php';

// if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
   
// }

//  setcookie("rakib", "jahan", time() + 86400, "'/");




setcookie("username", '', time()-1, "/");
setcookie("password", '', time()-1, "/");

// setcookie("username", '', time() + 86400, "/");
// setcookie("password", '', time() + 86400, "/");

if($_COOKIE['username'] && $_COOKIE['password']) {
    echo "Cookie is not deleted";
} else {
    header("Location: index.php");
}



require 'footer.php';