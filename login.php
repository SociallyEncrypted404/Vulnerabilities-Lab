<?php

include "config.php";

if(isset($_POST['u'])){

$user = $_POST['u'];

$pass = $_POST['p'];

$q = "SELECT * FROM users

WHERE username='$user'

AND password='$pass'";

$r = $conn->query($q);

if($r->num_rows > 0){

header("Location: admin.php?id=1");

}

else{

echo "access denied";

}

}

?>

<form method="POST">

<input name="u" placeholder="username">

<input name="p" placeholder="password">

<button>login</button>

</form>
