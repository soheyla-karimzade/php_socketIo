<?php
// اطلاعات اتصال به MySQL
$servername = "localhost";
$username = "root";
$password = "123456@Ss.";

// اتصال به MySQL
$conn = new mysqli($servername, $username, $password);

// بررسی اتصال به MySQL
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL server.\n";

// ایجاد پایگاه داده
$dbname = "test_db";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' created successfully or already exists.\n";
} else {
    die("Error creating database: " . $conn->error);
}

// اتصال به پایگاه داده جدید
$conn->select_db($dbname);

// ایجاد جدول با 20 ستون
$tableName = "records";
$tableSql = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    col1 VARCHAR(255),
    col2 VARCHAR(255),
    col3 VARCHAR(255),
    col4 VARCHAR(255),
    col5 VARCHAR(255),
    col6 VARCHAR(255),
    col7 VARCHAR(255),
    col8 VARCHAR(255),
    col9 VARCHAR(255),
    col10 VARCHAR(255),
    col11 VARCHAR(255),
    col12 VARCHAR(255),
    col13 VARCHAR(255),
    col14 VARCHAR(255),
    col15 VARCHAR(255),
    col16 VARCHAR(255),
    col17 VARCHAR(255),
    col18 VARCHAR(255),
    col19 VARCHAR(255),
    col20 VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// اجرای دستور SQL برای ایجاد جدول
if ($conn->query($tableSql) === TRUE) {
    echo "Table '$tableName' created successfully or already exists.\n";
} else {
    die("Error creating table: " . $conn->error);
}

// بستن اتصال به پایگاه داده
$conn->close();
echo "Database setup completed.\n";
?>
