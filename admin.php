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
            <input type="text" name="name_service" id="name" placeholder="Názov sluzby">
            <input type="text" name="description_service" id="name" placeholder="popis sluzby">
            <input type="text" name="rating_service" id="name" placeholder="hodnotenie">
            <input type="text" name="duration" id="name" placeholder="dlzka trvania">
            <input type="text" name="price" id="name" placeholder="cena">
            <input type="submit" value="Pridať" name="add_service">
        </form>
        <?php
$data=$services -> get_Service();

echo '<table class="admin-table">';
                foreach($data as $s){
                            
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4" style="display: flex;">
                    <form action="inc/services/update.php" method="post">
                    <input type="text" name="id" value="'.$s->id.'" hidden>
                    <input type="text" name="name_service" value = '.$s->name_service.' placeholder="Názov sluzby">
                    <input type="text" name="description_service" value = '.$s->description_service.' placeholder="popis sluzby">
                    <input type="text" name="rating_service" value = '.$s->rating_service.' placeholder="hodnotenie">
                    <input type="text" name="duration" value = '.$s->duration.' placeholder="dlzka trvania">
                    <input type="text" name="price" value='.$s->price.' placeholder="cena">
                    <input type="submit" value="premenovať" name="rename_services">
                    </form>
                    <form action="inc/services/delete.php" method="post">
                        <button type = "submit" name="delete_services" value="'.$s->id.'"'.'>Vymazať</button>
                    </form>
                    </td>';
                                echo '</tr>';

                }
                echo '</table>';
    ?>
</body>
</html>