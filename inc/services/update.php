<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['rename_services']) && isset($_POST["name_service"])){
    try{
        $data=[
            'id' => $_POST['id'],
            'name_service' => $_POST["name_service"],
            'description_service' => $_POST["description_service"],
            'rating_service'=> $_POST["rating_service"],
            'duration' => $_POST["duration"],
            'price' => $_POST["price"]
        ];
        $sql = "UPDATE services SET name_service = :name_service, description_service = :description_service, rating_service = :rating_service, duration = :duration, price = :price 
        WHERE id = :id";
        
        $query_run = $db->conn->prepare($sql);        
        $query_run->bindParam(':id', $data['id']);
        $query_run->bindParam(':name_service', $data['name_service']);
        $query_run->bindParam(':description_service', $data['description_service']);
        $query_run->bindParam(':rating_service', $data['rating_service']);
        $query_run->bindParam(':duration', $data['duration']);
        $query_run->bindParam(':price', $data['price']);
        $query_run->execute($data);
        header('Location: ../../admin.php');
    }catch(PDOException $e){
        print_r($e->getMessage());
    }

}
?>