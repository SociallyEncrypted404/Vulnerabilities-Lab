<?php

session_start();

if(isset($_POST['email'])){

echo "email changed to: " . $_POST['email'];

}

?>

<form method="POST">

<input name="email">

<button>update email</button>

</form>
