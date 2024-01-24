<?php 
    if(isset($_POST['login'])) {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        echo '<center>'.mysqli_error($conn).'</center>';
        if($result){
            $row = mysqli_fetch_assoc($result);
            if($row != 0){
                echo '<center class="font-bold z-10 text-red-500">Stop hack me, i will kick you out !!!</center>';
                if ($password == "hihi123"){
                 echo "KCSC_TASK{____Flag_V3rY_sec3ret_T0_FUZz____}";
                }
            }else{
                echo '<center class="font-bold text-red-500">INVALID username or password</center>';
            }
        } 
    }

    ?>