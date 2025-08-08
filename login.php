<?php
session_start();
$idinput = $_POST['id'];
$pdo = new PDO('mysql:host=localhost;dbname=truckradar', 'root', 'root');
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :idinput");
$stmt->execute([':idinput' => $idinput]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$id = $row['id'];
$passwordbd = $row['password'];
$accessrights = $row['access rights'];

if (isset($_POST['id']) && isset($_POST['password'])) {
    // Проверяем логин и пароль (здесь можно добавить свою логику проверки)
    if ($accessrights == 'admin' && $_POST['password'] == $passwordbd) {
        $_SESSION['logged_in'] = "admin";
        header('Location: protected_page.php');
        exit();
    }   
    elseif ($id == $idinput && $_POST['password'] == $passwordbd) {
           $_SESSION['logged_in'] = "user";
           $_SESSION['id'] = $idinput;
        header('Location: datapage.php');
        exit();
    }
     else {
        echo "Неверный логин или пароль";
    }

}

?>