### task2_KCSC


+ Về điều kiện thực hiện của LOAD_FILE và WRITE_FILE rất hiếm trường hợp thực tế mình có thể thực hiện vì thường thì mysql không có quyền ghi vào file webroot và  nếu mà người ta sử dụng 2 sever riêng thì điều đó cũng hoàn toàn khó khăn trừ khi quản trị cấp quyền đó cho mysql

 Em để link demo và cách khắc phục ở đầu mỗi file readme em kiệt kê ở dưới ạ.

# Cách khắc phục chung theo ý hiểu của em:
- Hầu kết các lỗ hổng đều phát sinh từ sink source và out của nó, thường thì sẽ hiểu là đầu vào logic và đầu ra của nó,
SQL injection cũng như vậy chúng ta có thể kiểm soát đầu vào của nó bằng nhiều biện phải như tham số hóa xác định kí tự để backlist, kiểm soát đầu ra của câu truy vấn , giảm tối thiểu lấy dữ liệu đầu vào quan trong từ người dùng ảnh hướng trực tiếp đến hệ thống, đồng thời cần kiểm soát chặt chẽ việc tổ chức code logic code, việc trả về status header, mã lỗi cũng rất quan trọng để tránh tấn công SQLi
Tông quan chung :

Câu 1:
https://github.com/l3mnt2010/task2_KCSC/blob/main/Kh%C3%A1i%20ni%E1%BB%87m.md
https://github.com/l3mnt2010/task2_KCSC/blob/main/T%E1%BA%A7m%20%E1%BA%A3nh%20h%C6%B0%E1%BB%9Fng.md

Câu 2:
https://github.com/l3mnt2010/task2_KCSC/blob/main/C%C3%A1c%20case%2C%20ph%C3%A2n%20lo%E1%BA%A1i.md

Câu 3:
https://github.com/l3mnt2010/task2_KCSC/blob/main/sqliToReadFile%2BWriteFile.md

Câu 4:
https://github.com/l3mnt2010/task2_KCSC/blob/main/StackQueryMSSQL.md



Tài liệu em có tham khảo portswigger, payload allthing, mấy anh trung quốc và mấy anh trên medum ạ:<,...
