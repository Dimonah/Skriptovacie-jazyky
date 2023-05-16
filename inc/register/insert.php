<?php
require('../config.php');
$db =  new Database();
$users = $User->get_users();

if(isset($_POST['add_user'])){
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];
    //nemozu byt prazdne polia
    if(empty($_POST["user_name"])||empty($_POST["user_email"]) || empty($_POST["user_email"])){
        echo('Všetky polia musia byť vyplnené');
    }
    else{
        foreach($users as $user){
//jedinecny mail
            if($user->user_email==$data['user_email']){
                 echo 'User so zadaným emailom už existuje';   
            }
//registracia
            else{
                try{
                    $query = "INSERT INTO users (user_name, user_email, user_password) VALUES (:user_name, :user_email,:user_password)";
                    $query_run = $db->conn->prepare($query);        
                    $query_run->execute($data);
                    header("Location: ../../thankyou.php");
                }catch(PDOException $e){
                    $e->getMessage();
                    print($e);
                }
            }
        }
    }     
}
?>