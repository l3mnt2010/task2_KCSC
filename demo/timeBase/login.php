<?php 
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result_user = mysqli_query($conn, $sql);   
        if($result_user) {
            if($row = mysqli_num_rows($result_user)){
                echo '<pre>So lazy</pre>';
            } else {
                echo '<pre>So lazy</pre>';
            }
        } else {
            echo '<pre>INVALID USERNAME OR PASSWORD!</pre>';
        }
    }