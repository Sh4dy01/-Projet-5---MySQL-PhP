<?php
echo $_FILES['image']['name'];
$destination = "upload/img/".$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$destination); ?>
