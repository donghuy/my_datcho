<?php
try {
    session_start();
    $_SESSION['submited']= true;
    $name= $_SESSION['name'];
    $phone= $_SESSION['phone'];
    $checkin= $_SESSION['checkin'];
    $carnumber= $_SESSION['carnumber'];
    $seat= $_POST['seat'];

    $pdo= new PDO('mysql:host=localhost;dbname=datcho', 'root','');
    $sql = "INSERT INTO dat_cho(`name`,phone_number,seat,check_in,car_number) VALUE ('$name',$phone,'$seat','$checkin','$carnumber')";
    $pdo->exec($sql);

    unset($_SESSION['name']);
    unset($_SESSION['phone']);
    unset($_SESSION['checkin']);
    unset($_SESSION['carnumber']);
    header('Location: index.php');
}
catch (PDOException $e) {
    echo $e->getMessage();
}


