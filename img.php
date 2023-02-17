<?php
    if(isset($_post['submit'])){
      //  print_r($_FILES['upload_img']);
    $_img_name=$_FILES['upload_img']['name'];
    $tmp_name=$_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name,"upload/".$img_name);
    }
?>