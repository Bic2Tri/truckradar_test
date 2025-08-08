<?php



    

    $pdo = new PDO('mysql:host=localhost;dbname=truckradar', 'root', 'root');

    if(isset($_POST['strings'])) {
        $strings = explode(',', $_POST['strings']);
        $stmt = $pdo->prepare("INSERT INTO users (id, name, mail, password, phone) VALUES (:val1, :val2, :val3, :val4, :val5)");
        
        foreach(array_chunk($strings, 5) as $chunk) {
            $stmt->bindParam(':val1', $chunk[0]);
            $stmt->bindParam(':val2', $chunk[1]);
            $stmt->bindParam(':val3', $chunk[2]);
            $stmt->bindParam(':val4', $chunk[3]);
            $stmt->bindParam(':val5', $chunk[4]);
            $stmt->execute();
           
        }
        
        echo "Данные успешно добавлены в базу данных.";
    } else {
        echo "Ошибка: Нет данных для обработки.";
    }

?>