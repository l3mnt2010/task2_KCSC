<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password';";
    $user_query = $conn->query($sql);

    if ($user_query) {
        if ($row = $user_query->fetch_assoc()) {
            echo '<br><p class="font-bold text-center text-xl text-white mt-48">Chào mừng bạn đã trở lại ' . $row['username'] . '!</p>';
            echo '<form method="post" class="w-full flex item-center justify-center mt-10">
                <button type="submit" class="bg-red-500 text-white font-bold rounded-md px-4 py-2 hover:bg-red-900" name="logout">Logout</button>
                </form>
                ';
            if ($password === 'hihi123') {
                echo '<p class="font-bold text-center text-md text-white">Bạn đã hack tôi bây giờ là admin :( đây là tiền chuộc KCSC_TASK{____b4N_D^n9_h4ck_t@i_h3t_1ieN_R0i___}</p>';
            }
        } else {
            echo '<p class="font-bold text-center mt-48 text-xl">INVALID username or password</p>';
        }
    } else {
        echo '<p class="font-bold text-center mt-48 text-xl">Error executing query: ' . $conn->error . '</p>';
    }

    $conn->close();
}

if (isset($_POST['logout'])) {
    header('location: index.php');
}
?>
