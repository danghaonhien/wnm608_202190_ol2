<?php
include "../lib/php/functions.php";

// $notes_object=file_get_json("notes.json");
$users_array=file_get_json("../data/users.json");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Data</title>
    <?php include "../parts/meta.php"; ?>

</head>
<body>
    <?php include"../parts/navbar.php";?>
    <div class="styleguidecontainer">
    
            <div class="card soft">
                <h2>Users</h2>
            </div>
            <?php
            for($i=0;$i<count($users_array);$i++){
                echo "<li> 
                <strong>{$users_array[$i]->name}</strong> 
                <span>{$users_array[$i]->type}</span>
                </li>";
            }
            ?>
    </div>
</body>
</html>
