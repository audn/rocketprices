
<?php
include_once "new-login/db_connect.php";
include_once "new-login/functions.php";

sec_session_start();

if(login_check($conn)){
    exit("You are already logged in.");
}

if(isset($_POST["name"], $_POST["password"])){
    $user = $_POST["name"];
    $password = crypt($_POST["password"], "sucker");
    
    if (login($user, $password, $conn)){
        
        exit("logged");
    }else{
        exit("password");
    }
    
}else{
    exit("Invalid request");
}

?>
