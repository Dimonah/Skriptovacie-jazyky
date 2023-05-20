<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_service'])){
    print_r("T");
    $data = [
        'name_service' => $_POST["name_service"],
        'description_service' => $_POST["description_service"],
        'rating_service'=> $_POST["rating_service"],
        'duration' => $_POST["duration"],
        'price' => $_POST["price"]
    ];
    try{
        $query = "INSERT INTO services (name_service, description_service, rating_service, duration, price) VALUES (:name_service, :description_service, :rating_service, :duration, :price)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        header('Location: ../../admin.php');
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("F");
}
?>