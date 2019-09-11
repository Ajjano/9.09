<?php
$users='pages/users.txt';
function register($login, $password, $email){
    $login=trim(htmlspecialchars($login));
    $password=trim(htmlspecialchars($password));
    $email=trim(htmlspecialchars($email));

    if($login==''||$password==''||$email==''){
        echo "<h3><span style='color: red'>Fill all fields! </span></h3>";
        return false;
    }

    global  $users;
    $file=fopen($users, 'a+');
    while($line=fgets($file)){
        $read_name=substr($line,0, strpos($line,':'));
        if($read_name==$login){
            echo "<h3><span style='color: red'>Such login is already used </span></h3>";
            return false;
        }
    }
    $password=md5($password);
    $line="$login:$password:$email";
    fputs($file,$line.PHP_EOL);
    fclose(($file));
    return true;
}

function login($log,$pass){

    $log=trim(htmlspecialchars($log));
    $pass=trim(htmlspecialchars($pass));

    if($log==''||$pass==''){
        echo "<h3><span style='color: red'>Fill all fields! </span></h3>";
        return false;
    }

    global  $users;
    $ifExist=false;
    $file=fopen($users, 'a+');
    while($line=fgets($file)){
        $read_name=explode(':', $line);
        if($read_name[0]==$log&&$read_name[1]==md5($pass)){

            $ifExist=true;
            break;
        }
    }
    if($ifExist==false){
        echo "<h3><span style='color: red'>User doesn't exist! </span></h3>";
       echo '<script>window.location="index.php?page=4";</script>';
    }
    else{

        $_SESSION['registered_user']=$log;
    }
}