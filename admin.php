<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container">
    <section>
        <h1>Admin rozhranie</h1>
        <p>Vítaj admin <?php echo($_SESSION['user_name'][0]->user_name);?></p><br>
        <a href="inc/login/logout.php">Odhlásiť sa</a>
    </section>
    <section>
        <h2>Services</h2>
        <form action="inc/services/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Názov sluzby">
            <input type="text" name="name" id="name" placeholder="popis sluzby">
            <input type="text" name="name" id="name" placeholder="hodnotenie">
            <input type="text" name="name" id="name" placeholder="dlzka trvania">
            <input type="text" name="name" id="name" placeholder="cena">
            <input type="submit" value="Pridať" name="pridat_sluzbu">
        </form>
        <?php
$data=$services -> get_Service();

echo '<table class="admin-table">';
                foreach($data as $s){
                    echo '<tr>';
                    echo '<td>'.$s->name_service;'</td>';
                    echo '<td>'.$s->description_service;'</td>';
                    echo '<td>'.$s->rating_service;'</td>';
                    echo '<td>'.$s->duration;'</td>';
                    echo '<td>'.$s->price;'</td>';
                    echo '<td>
                            <form action="inc/services/delete.php" method="post">
                                <button type = "submit" name="delete_services" value="'.$s->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    
                    echo '</tr>';
                }
                echo '</table>';
    ?>
</body>
</html>