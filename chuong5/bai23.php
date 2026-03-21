<form method="post" enctype="multipart/form-data">

<input type="file" name="file">

<input type="submit">

</form>

<?php

move_uploaded_file($_FILES['file']['tmp_name'],
"Tailieu/".$_FILES['file']['name']);

?>