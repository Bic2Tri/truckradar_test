<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>

    <style>
    	body{
    		background-image: url("sGZwuvujwdQ.jpg");
    		background-position: center; /* Center the image */
  			background-repeat: no-repeat; /* Do not repeat the image */
  			background-size: cover;
  			text: bold;
    	}
    	.container {
        	margin-top: 45vh;
            display: flex;
            justify-content: center;
            padding-right: 60vh;
            align-items: center;
            height: 54vh; /* Высота блока будет соответствовать высоте видимой части экрана */
        }
    </style>
</head>
<body>
    <form method="post" action="login.php" class="container">
        <label for="id">ID:</label><br>
        <input type="text" name="id" id="id"><br>
        <label for="password">Пароль:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>
