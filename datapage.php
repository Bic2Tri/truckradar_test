<?php
session_start();
if ($_SESSION['logged_in'] == "user") {
   

$idinput = $_SESSION['id'];
$pdo = new PDO('mysql:host=localhost;dbname=truckradar', 'root', 'root');
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :idinput");
$stmt->execute([':idinput' => $_SESSION['id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <style>
    	body{
    		background-image: url("sGZwuvujwdQ.jpg");
    	}

        .container {
        	margin-top: 35vh;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 64vh; /* Высота блока будет соответствовать высоте видимой части экрана */
        }
        
        .item {
            background-color: lightblue;
            border: 1px solid blue;
            padding: 10px;
            margin: 5px;
            text-align: center;
            width: 200px;
            height: 50px;
            line-height: 50px; /* Чтобы текст был по вертикали по центру */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="item"><?  echo $row["id"]; ?></div> 
        <div class="item"><? echo $row["name"]; ?></div> 
        <div class="item"><? echo $row["mail"]; ?></div> 
        <div class="item"><? echo $row["password"]; ?></div> 
        <div class="item"><? echo $row["phone"]; ?></div> 
    </div>
</body>
</html>

<? 

}
else {
	echo "No Access For This Page";
}
?>