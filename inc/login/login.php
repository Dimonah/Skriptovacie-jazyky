<?php
    require('../config.php');
    session_start();
    
    $users = $User->get_users();
    $db =  new Database();
    $data = [
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];

    if(isset($_POST['log_user'])){
            $query = "SELECT user_email  FROM users WHERE user_email='".$data['user_email']."'";
            $query = $db->conn->query($query);
            $user_exists =  $query->fetchAll(PDO::FETCH_OBJ);
            if($user_exists){
                $query = "SELECT user_password  FROM users WHERE user_email='".$data['user_email']."'";
                $query = $db->conn->query($query);
                $password =  $query->fetchAll(PDO::FETCH_OBJ);
                if($password){
                    if($data['user_password']==$password[0]->user_password){
                        $_SESSION['valid'] = true;
                        $query = "SELECT user_name  FROM users WHERE user_email='".$data['user_email']."'";
                        $query = $db->conn->query($query);
                        $name =  $query->fetchAll(PDO::FETCH_OBJ);
                        $_SESSION['user_name'] = $name;
                        header("Location: ../../admin.php");
                    }else{
                        echo 'Nesprávne heslo';
                    }
            }
            }else{
                echo 'pouzivatel neexistuje';
            }
    }

?>