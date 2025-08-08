<?php
session_start();
if ($_SESSION['logged_in'] == "admin") {
   

?>
<!DOCTYPE html>
<html>
<head>
    <title>Форма для ввода строк</title>
</head>
<body>
    <form action="phpadd.php" method="post">
        <label>Введите строки (через запятую): </label><br>
        <input type="text" name="strings"><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?
}
else {
	echo "No Access For This Page";
}
?>