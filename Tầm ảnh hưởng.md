### Tầm ảnh hưởng của SQL Injection, mức độ nguy hiểm và tác động sâu nhất nó có thể mang lại

# Có thể thấy nhiều năm liền SQL injection luôn nằm trong top các lỗ hổng NGUY HIỂM nhất của top10 owasp nên có thể biết được tính nghiêm trọng mà lỗ hổng này gây ra.

- Một cuộc tấn công SQL injection thành công có thể gây ra nhiều tác động tiêu cực cho hệ thống và ứng dụng web kể cả mobile như là :
+ Tấn công SQL injection có thể cho phép kẻ tấn công truy xuất, đọc và lấy thông tin từ cơ sở dữ liệu mà không cần có quyền truy cập.
+ Kẻ tấn công có thể thực hiện các câu lệnh SQL để thay đổi hoặc xóa dữ liệu từ cơ sở dữ liệu, gây nên mất mát thông tin quan trọng.
+ SQL injection có thể được sử dụng để thực hiện các tác vụ không được ủy quyền, như tạo tài khoản mới, thay đổi mật khẩu, hoặc thậm chí là quản lý hệ thống.
+ Khi một cuộc tấn công SQL injection thành công, thông tin từ cơ sở dữ liệu có thể được sử dụng để tạo ra các cuộc tấn công khác như tấn công phishing hoặc tấn công vào các hệ thống khác.
+ Kẻ tấn công có thể chèn mã độc hại vào trang web thông qua tấn công SQL injection, làm cho người dùng bình thường khi truy cập trang web sẽ bị tấn công - ví dụ như store XSS,...
+ Thiết lập chối dịch dịch vụ (DoS) hoặc chối dịch dịch vụ phân tán (DDoS).
+ Nếu hệ thống không được bảo vệ đúng cách, cuộc tấn công SQL injection có thể mở ra lỗ hổng bảo mật, khiến cho kẻ tấn công có thể tiếp tục thực hiện các cuộc tấn công khác - ví dụ như là tấn công nâng quyền lên admin bắt đầu bằng authentication -> authorization @@