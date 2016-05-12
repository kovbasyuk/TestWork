<?php
    
    include_once('db.php');


$sql = "SELECT `id`, `name`, `email`, `user_name`, `password` FROM `users` WHERE `user_name` = '".$_POST['login']."' AND `password` = '".$_POST['password']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['login_user'] = $row["user_name"];
        header('Location: index.php');
//        echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " " . $row["email"]. "<br>";
    }
} else {
    header('Location: Login_page.php');
}


//var_dump($result);