<?php 
include "../lib/css/php/functions.php";
$users = file_get_json("../data/users.json");
// file_put_contents json_encode explode $_POST
// CRUD, CREATE READ UPDATE DELETE
function showUserPage($user) {
$classes = implode(",",$user -> classes);
    echo <<<HTML
    <div>
    <h2>$user->name</h2>
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
         <input type="submit" value="Submit">
            </div>
            
        <a href="admin/users.php">⬅Back</a>
        
   
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
<nav>
      <div class="nav-content">
  
        <!-- navigation button -->
        <div class="nav-icon">
          <div class="bar one"></div>
          <div class="bar two"></div>
        </div>

        <!-- naviagtion links -->
        <div class="nav-links">
          <a>User Admin</a>
          <a href="admin/users.php">User List</a>
      
        </div>
      </div>
    </nav>
<br>
    <div class="styleguidecontainer">

    <div class="nav-container card soft">

      <?php 
      
if(isset($_GET['id'])) {
    showUserPage($users[$_GET['id']]);
} else {


       ?>  

    <h2>Users List</h2>
 

    <div class="nav">
        <ul>
    <?php 


    for($i=0;$i < count($users);$i++){ 
    	echo "<li>
    		<a href='admin/users.php?id=$i'> {$users[$i] ->name}</a>
    		
    	</li>";
    }

     ?>
       </ul>
</div> 


        <?php }  ?>
    </div>
</div>
</body>
</html>