<?php
$scriptPath = __DIR__ . '/scriptG.php'; // مسیر کامل به scriptG.php

while (true) {
    // بررسی وضعیت اجرای اسکریپت
    $output = shell_exec("ps aux | grep 'php $scriptPath' | grep -v grep");
    if (empty($output)) {
        // اسکریپت متوقف شده است، راه‌اندازی مجدد
        echo "Script is not running. Starting scriptG.php...\n";
        shell_exec("php $scriptPath > /dev/null &"); // اجرای اسکریپت در پس‌زمینه
    } else {
        echo "Script is already running.\n";
    }
    sleep(5); // بررسی هر 5 ثانیه
}
?>
