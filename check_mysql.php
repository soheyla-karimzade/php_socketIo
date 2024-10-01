<?php
// اطلاعات اتصال به پایگاه داده
$servername = "localhost";
$username = "root";
$password = "123456@Ss.";
$dbname = "test_db";

// اتصال به پایگاه داده
$conn = @new mysqli($servername, $username, $password, $dbname);

// بررسی وضعیت اتصال به دیتابیس
if ($conn->connect_error) {
    echo "MySQL Server is Out of Service. Please check the connection.\n";
} else {
    echo "MySQL Server is running.\n";
}

$conn->close();
?>
