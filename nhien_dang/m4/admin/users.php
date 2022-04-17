<?php 

include "../lib/css/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


$empty_user = (object) [
    "name" =>"",
    "type" =>"",
    "email" =>"",
    "classes" =>[]
];


// print_p([$_GET, $_POST]);
if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case "update":
            $users[$_GET['id']]->name = $_POST['user-name'];
            $users[$_GET['id']]->type = $_POST['user-type'];
            $users[$_GET['id']]->email = $_POST['user-email'];
            $users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $empty_user->name = $_POST['user-name'];
            $empty_user->type = $_POST['user-type'];
            $empty_user->email = $_POST['user-email'];
            $empty_user->classes = explode(", ", $_POST['user-classes']);

            $id = count($users);

            $users[] = $empty_user;

            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            array_splice($users,$_GET['id'],1);
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }
}
function showUserPage($user) {
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode(", ", $user -> classes);
$display = <<< HTML
<div>
<h2>$user->name</h2>
<div>
<strong>Type</strong>
<span>$user->type</span>
</div>
<div>
<strong>Email</strong>
<span>$user->email</span>
</div>
<div>
<strong>Classes</strong>
<span>$classes</span>
</div>
</div>
HTML;    
$form =  <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
<h2>$addoredit User</h2>
<div class="form-control">
<label class="form-label" for="user-name">Name</label >
<input type="text" value="$user->name" class="form-input" name="user-name" id="user-name" placeholder="Enter the User Name">
</div>
<div class="form-control">
<label class="form-label" for="user-type">Type</label >
<input type="text" value="$user->type" class="form-input" name="user-type" id="user-type" placeholder="Enter the User Type">
</div>
<div class="form-control">
<label class="form-label" for="user-email">Email</label >
<input type="text" value="$user->email" class="form-input" name="user-email" id="user-email" placeholder="Enter the User Email">
</div>      
<div class="form-control">
<label class="form-label" for="user-classes">Classes</label >
<input type="text" value="$classes" class="form-input" name="user-classes" id="user-classes" placeholder="Enter the User Classes, comma seperated">
</div> 
<div class="form-control">
<input class="form-button" type="submit" value="Save Changes">
</div>       
</form>
HTML;

$output = $id == "new" ? $form :
"<div class-'grip gap'>
<div class='col-xs-12 col-md-7'>$display</div>
<div class='col-xs-12 col-md-5'>$form</div>
</div>
";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<div class="display-flex">
<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
<div class="flex-none">$delete</div>
</div>
$output
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
       <a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a>
       <a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a>
                  
</div>
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