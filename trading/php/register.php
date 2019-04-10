<?php


include_once("new-login/db_connect.php");
include_once("new-login/functions.php");

sec_session_start();
$loggedin = false;
if(login_check($conn)){
    $loggedin = true;
}
if($loggedin){
    exit("Already logged in!");
}


$user = $_POST["name"];
$pass = $_POST["password"];
$email = $_POST["email"];
if(strlen($user) > 31 or preg_match("[^A-Za-z0-9]", $user)===1){
    exit("username");
}
if(strlen($pass) < 8 or preg_match('~[0-9]~', $pass) !== 1){
    exit("password");
    
}

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => '6LcImT4UAAAAAFVpZNA4P0FWI00sUlN5mF4pjnr5',
	'response' => $_POST["g-recaptcha-response"]
);
$options = array(
	'http' => array (
	    'header' => 'Content-Type: application/x-www-form-urlencoded',
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

if($captcha_success->success !== true){
    
    exit('captcha');
}


try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    $query = $conn->prepare("SELECT username FROM users WHERE username=:name");
    $query->bindParam(":name", $user);
    $query->execute();
    $test= "test";
    $test0 = "0";
    $date = date("Y-m-d");
    
    if($query->rowCount()>0){
        exit("username");
        
    }else{
       $query = $conn->prepare("INSERT INTO users (username, password, email, postCount, userCreated) VALUES (?,?,?,?,?)");
       
       $query->execute(array($user,crypt($pass, "sucker"),$email,$test0,$date));
       
            
            if(login($user, crypt($pass, "sucker"), $conn)){
                
                #echo $_SESSION["login_token"];
                exit("finished");
            }else{
                header("Location: logout.php");
                exit("something bad happened");
            }
       
    }
    #change this to /trading on launch | replaced with ajax
    #header('Location: ../login');
    
    
    }
catch(PDOException $e)
    {
    echo $e;
    }
    
    
    
?>