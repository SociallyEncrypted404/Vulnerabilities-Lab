<?php

if(isset($_FILES['f'])){

move_uploaded_file(

$_FILES['f']['tmp_name'],

"uploads/" . $_FILES['f']['name']

);

echo "uploaded";

}

?>

<form method="POST"

enctype="multipart/form-data">

<input type="file" name="f">

<button>upload</button>

</form>
