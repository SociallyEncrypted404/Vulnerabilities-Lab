<?php

if(isset($_GET['user'])){

echo "password reset link sent for user id: ";

echo $_GET['user'];

}

?>

<form>

<input name="user">

<button>reset password</button>

</form>
