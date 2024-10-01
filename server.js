const http = require('http').createServer();
const io = require('socket.io')(http, {
    cors: {
        origin: "*"
    }
});
const mysql = require('mysql');

// تنظیمات اتصال به دیتابیس
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '123456@Ss.',
    database: 'test_db'
});

// بررسی اتصال به دیتابیس
connection.connect((err) => {
    if (err) throw err;
    console.log("Connected to MySQL Database!");
});

// زمان‌بندی برای دریافت 100 رکورد آخر هر 2 ثانیه
setInterval(() => {
    connection.query('SELECT * FROM records ORDER BY id DESC LIMIT 100', (err, rows) => {
        if (err) throw err;
        io.emit('updateRecords', rows); // ارسال رکوردها به کلاینت
    });
}, 2000);

io.on('connection', (socket) => {
    console.log('New client connected');
});

http.listen(3000, () => {
    console.log('Socket.IO server running on http://localhost:3000');
});
