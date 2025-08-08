<?

session_start();

if ($_SESSION['logged_in'] == "admin") {

$pdo = new PDO('mysql:host=localhost;dbname=truckradar', 'root', 'root');

$sql = "INSERT INTO users (id, name, mail, password, phone) VALUES (:val1, :val2, :val3, :val4, :val5)";
$stmt = $pdo->prepare($sql);

$massivestrings = $_POST['strings'];

   $onestring = explode(';', $_POST['strings']);
   $count = count($onestring);
   
   for ($i=0; $i<=$count; $i++) {
    
    $data = explode(',', $onestring[$i]);
    
    $val1 = $data[0];
    $val2 = $data[1];
    $val3 = $data[2];
    $val4 = $data[3];
    $val5 = $data[4];
 
    $stmt->bindParam('val1', $val1);
    $stmt->bindParam('val2', $val2);
    $stmt->bindParam('val3', $val3);
    $stmt->bindParam('val4', $val4);
    $stmt->bindParam('val5', $val5);
    $stmt->execute();
   
}
}
?>