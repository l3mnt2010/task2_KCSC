
### SQL Injection là gì?

- Theo OWASP:
+ Một cuộc tấn công tiêm nhiễm SQL bao gồm việc chèn hoặc “tiêm” một truy vấn SQL thông qua dữ liệu đầu vào từ máy khách đến ứng dụng. Khai thác SQL SQL thành công có thể đọc dữ liệu nhạy cảm từ cơ sở dữ liệu, sửa đổi dữ liệu cơ sở dữ liệu (Chèn/Cập nhật/Xóa), thực thi các thao tác quản trị trên cơ sở dữ liệu (chẳng hạn như tắt DBMS), khôi phục nội dung của một tệp nhất định có trên tệp DBMS hệ thống và trong một số trường hợp đưa ra lệnh cho hệ điều hành. Tấn công tiêm nhiễm SQL là một kiểu tấn công tiêm nhiễm, trong đó các lệnh SQL được đưa vào đầu vào mặt phẳng dữ liệu để ảnh hưởng đến việc thực thi các lệnh SQL được xác định trước.

- Theo Portswigger:
+ SQL SQL (SQLi) là một lỗ hổng bảo mật web cho phép kẻ tấn công can thiệp vào các truy vấn mà ứng dụng thực hiện đối với cơ sở dữ liệu của nó. Điều này có thể cho phép kẻ tấn công xem dữ liệu mà thông thường chúng không thể truy xuất được. Điều này có thể bao gồm dữ liệu thuộc về người dùng khác hoặc bất kỳ dữ liệu nào khác mà ứng dụng có thể truy cập. Trong nhiều trường hợp, kẻ tấn công có thể sửa đổi hoặc xóa dữ liệu này, gây ra những thay đổi liên tục đối với nội dung hoặc hành vi của ứng dụng.
Trong một số trường hợp, kẻ tấn công có thể nâng cấp cuộc tấn công SQL SQL để xâm phạm máy chủ cơ bản hoặc cơ sở hạ tầng phụ trợ khác. Nó cũng có thể cho phép họ thực hiện các cuộc tấn công từ chối dịch vụ.

- Theo viblo :
+ SQL injection là một kỹ thuật cho phép những kẻ tấn công lợi dụng lỗ hổng của việc kiểm tra dữ liệu đầu vào trong các ứng dụng web và các thông báo lỗi của hệ quản trị cơ sở dữ liệu trả về để inject (tiêm vào) và thi hành các câu lệnh SQL bất hợp pháp. SQL injection có thể cho phép những kẻ tấn công thực hiện các thao tác, delete, insert, update,… trên cơ sở dữ liệu của ứng dụng, thậm chí là server mà ứng dụng đó đang chạy, lỗi này thường xảy ra trên các ứng dụng web có dữ liệu được quản lý bằng các hệ quản trị cơ sở dữ liệu như SQL Server, MySQL, Oracle, DB2, Sysbase...

## Tổng thể lại có thể hiểu nôm na là việc mà kẻ tấn công có thể lợi dụng sự sai sót khi truyền tham số từ người dùng vào câu lệnh truy vấn SQL từ đó có thể thao tác với cơ sở dữ liệu của hệ thống để thực hiện các thao tác ngoài lề ứng dụng mà nhà phát triển không mong muốn @@@
