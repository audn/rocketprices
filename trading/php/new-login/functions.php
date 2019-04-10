<?php
include_once 'psl-config.php';
 
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        //header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        echo "Could not initialize safe session.";
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}

function login($username, $password, $conn){
    
    $call = $conn->prepare("SELECT id, username, password, email, lastLoginToken FROM users WHERE username=:user");
    $call->bindParam(":user", $username);
    $call->execute();
    
    if($call->rowCount()>0){
        $data = $call->fetch();
        if($password == $data["password"]){
            
           
            $token = bin2hex(openssl_random_pseudo_bytes(64));
            $call = $conn->prepare("UPDATE users SET lastLoginToken=:token WHERE username=:user");
            $call->bindParam(":token", $token);
            $call->bindParam(":user", $username);
            
            if($call->execute()){
                $_SESSION["username"] = $username;
                $_SESSION["login_string"] = $token;
                return true;
            }else{
                return false;
            }
            
            
            
            
        }else{
            
            return false;
        }
        
    }else{
        return false;
        
    }
    
    
}


function login_check($conn){
    
    if(isset($_SESSION["login_string"], $_SESSION["username"]) && !empty($_SESSION["username"])){
        
        $username = $_SESSION["username"];
        $token = $_SESSION["login_string"];
        
        $call = $conn->prepare("SELECT id, username, password, email, lastLoginToken FROM users WHERE username=:user");
        $call->bindParam(":user", $username);
        $call->execute();
       
        if($call->rowCount()>0){
            
            $data = $call->fetch();
            
            if ($token == $data["lastLoginToken"]){
                
                return true;
                
            }else{
                return false;
            }
            
        }else{
            return false;
        }
        
    }else{
        return false;
    }
    
}
