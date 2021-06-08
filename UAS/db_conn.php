<?php
$sName = "localhost";
$uName = "id16993308_juansuratno";
$pass = "Qwerty-4069*";
$db_name="id16993308_todos";
try{
    $conn= new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDEEPException $e){
    echo"Tidak Tersambung dengan basis data ". $e->getMessage();
}
?>

