<?php
    
    $host="localhost";
    $user="root";
    $password="";
    $db="testproject";

    $conn = mysqli_connect($host,$user,$password);
    mysqli_select_db($conn, $db);

    if(isset($_POST['btn_register'])){
        $username = mysqli_real_escape_string( $conn, $_POST['username']);
        $password = mysqli_real_escape_string( $conn, $_POST['password']);
        $voornaam = mysqli_real_escape_string( $conn, $_POST['voornaam']);
        $achternaam = mysqli_real_escape_string( $conn, $_POST['achternaam']);
        $email = mysqli_real_escape_string( $conn, $_POST['email']);
        
        $sql = "INSERT INTO login(Username, Password, Voornaam, Achternaam, Email) VALUES('$username', '$password', '$voornaam', '$achternaam', '$email')";
        
        mysqli_query($conn, $sql);
        
        header("Location: login.html"); exit;

    } else {
        echo("Het registreren is mislukt");
      }
?>
