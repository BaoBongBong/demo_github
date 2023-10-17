<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date  = $_POST['date'];
    
    // Lưu thông tin vào file văn bản
    $file = 'thongtin.txt';
    
    // Kiểm tra xem tệp tin đã tồn tại hay không
    if (file_exists($file)) {
        // Nếu tệp tin không rỗng, làm mới nội dung của tệp tin
        file_put_contents($file, ' ');
    }
    
    // Ghi dữ liệu vào tệp tin
    $data = "$fullname |\n$phone |\n$email |$date\n";
    file_put_contents($file, $data, FILE_APPEND);
    
    
    // Chuyển hướng về trang đăng ký thành công
    header('Location: ketqua.html');
    exit;
    }
?>