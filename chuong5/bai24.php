<form method="post" enctype="multipart/form-data">

<input type="file" name="file[]" multiple>

<input type="submit">

</form>

<?php

foreach($_FILES['file']['tmp_name'] as $key=>$tmp){

$name=$_FILES['file']['name'][$key];

move_uploaded_file($tmp,"BoSuuTap/".$name);

}

?>