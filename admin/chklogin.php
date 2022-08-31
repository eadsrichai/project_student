<?php
    $u = $_GET['username'];
    $p = $_GET['password'];

    include_once('../service/db.php');

    $sql = "SELECT username,password FROM account WHERE username = ? AND password = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $u, $p);

    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header('location:index.php');   
        $stmt->close();
        $conn->close();
        exit(0);
    }else {
        header('location:login.php');
    }
   
   

?>