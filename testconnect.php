


<?php
$link = mysqli_connect("192.168.100.104", "root", "root","vmail");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
?>