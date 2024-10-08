<?php 

 require_once('db.php');

$FIO = $_POST['FIO'];
$NUMBER = $_POST['NUMBER'];
$PASS = $_POST['PASS'];
$REPEATPASS = $_POST['REPEATPASS'];

if(empty($FIO) || empty($NUMBER) || empty($PASS) || empty($PEPEATPASS) ){
    if($PASS != $REPEATPASS){
        echo "Пароли не совподают";
    } else{
        $sql = "INSERT INTO `users` (names, numbers, password) VALUES ('$FIO', '$NUMBER', '$PASS')";
    }
}
$conn -> query($sql);   
?>