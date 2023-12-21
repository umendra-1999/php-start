<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method ="post" enctype="multipart/form-data">
     <input type="file" name ="uploadfile">
     <br>
      <br>
     <input type="submit" value="upload file" name="upload file"> 
    </form>
</body>
</html>
<?php
$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
print_r($_FILES['uploadfile']);
$folder="D:/upload/$filename";
move_uploaded_file($tempname,$folder);
?>