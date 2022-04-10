<?php 

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");


// file_put_contents json_encode explode $_POST

// CRUD, CREATE READ UPDATE DELETE

function showUserPage($user) {

$classes = implode(",",$user -> classes);


    echo <<<HTML
    <div>
        <h2>$user</h2>
        <div>
            <strong>Name</strong>
          <input type="text" placeholder="$user->name" class="form-input">
        </div>
        <div>
            <strong>Type</strong>
          <input type="text" placeholder="$user->type" class="form-input">
        </div>
        <div>
            <strong>Email</strong>
         <input type="text" placeholder="$user->email" class="form-input">
        </div>      
         <div>
            <strong>Classes</strong>
              <input type="text" placeholder="$classes" class="form-input">
        </div> 
         <div class="form-control">
                <button class="form-button">Submit</button>
            </div>
             <nav class="nav nav-crumbs";>
        <ul>
            <li><a href="admin/users.php">⬅Back</a></li>
        </ul>
    </nav>
    </div>
    HTML;    
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>

    <?php include"../parts/meta.php"; ?>
</head>
<body>

  <header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>User Admin</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="admin/users.php">User List</a> </li>
            </ul>
        </nav>
    </div>
  </header>


    <div class="container">

    <div class="card soft">

      <?php 
      
if(isset($_GET['id'])) {
    showUserPage($users[$_GET['id']]);
} else {


       ?>  

    <h2>Users List</h2>
 

    <nav class="nav">
        <ul>
    <?php 


    for($i=0;$i < count($users);$i++){ 
    	echo "<li>
    		<a href='admin/users.php?id=$i'> {$users[$i] ->name}</a>
    		
    	</li>";
    }

     ?>
       </ul>
    </nav> 


        <?php }  ?>
    </div>
</div>
</body>
</html>