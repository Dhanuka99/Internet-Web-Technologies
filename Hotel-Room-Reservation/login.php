<?php
$username = $_POST["username"];
$pwd = $_POST["password"];

if (isset($_POST["submit"])){
    if (!empty($username) && !empty($pwd)){
        if($username=="admin" && $pwd=="1234"){
            echo "successfully registration";
        }else{
            echo "invalied username or password";
        }
    }else{
        echo "Please fill the text fields.";
    }
}