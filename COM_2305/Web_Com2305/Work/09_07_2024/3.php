<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่3</title>
</head>
<body>
    
</body>

<?php

    // สร้างอาร์เรย์เก็บข้อความภาษาไทย (ศูนย์ ถึง เก้า)
    $thaiNumbers = [
        "ศูนย์", "หนึ่ง", "สอง", "สาม", "สี่",
        "ห้า", "หก", "เจ็ด", "แปด", "เก้า"
    ];
    
    // แสดงผลลัพธ์ทางเบราว์เซอร์
    foreach ($thaiNumbers as $number) {
        echo $number . "<br>";
    }

    
?>
</html>