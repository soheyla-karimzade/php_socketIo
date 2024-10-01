<?php
$servername = "localhost";
$username = "root";
$password = "123456@Ss.";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// اسکریپتی برای وارد کردن ۳۰ رکورد در هر ثانیه
while (true) {
    for ($i = 0; $i < 30; $i++) {
        $query = "INSERT INTO records (col1, col2, col3, col4, col5, col6, col7, col8, col9, col10, col11, col12, col13, col14, col15, col16, col17, col18, col19, col20) 
                  VALUES ('data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10', 'data11', 'data12', 'data13', 'data14', 'data15', 'data16', 'data17', 'data18', 'data19', 'data20')";

        if (!$conn->query($query)) {
            echo "خطا در درج داده: " . $conn->error . "\n";
        }
    }
    sleep(1); // اجرای ۳۰ رکورد در هر ثانیه
}
?>
