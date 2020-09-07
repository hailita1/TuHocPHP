<?php
if (isset($_GET["name"]) && isset($_GET["age"])) {
    echo "Welcome " . $_GET['name'] . "<br />";
    echo "You are " . $_GET['age'] . " years old.";

    die();
}
?>
<html>
<body>
<form action="example_GET_POST.php" method="get">
    Name:<br>
    <input type="text" name="name"> <br>
    Age:<br>
    <input type="text" name="age">
    <br>
    <input type="submit">
</form>
</body>
</html>
