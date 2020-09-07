<?php
if (isset($_POST["upload"])) {
    if (isset($_FILES["file"]) && !$_FILES["file"]["error"]) {
        move_uploaded_file($_FILES["file"]["tmp_name"], './media/' . $_FILES["file"]["name"]);
        echo "Thanh cong";
    } else {
        echo "Thai bai";
    }
}
?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"> <br>
    <input type="submit" name="upload" value="Upload">
</form>
</body>
</html>
