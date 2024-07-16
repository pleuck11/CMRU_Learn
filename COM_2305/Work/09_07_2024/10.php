<!-- 10. เขียนโปรแกรมเป็นอาร์เรย์เก็บวันใน 1 สัปดาห์ จากนั้นให้ใช้ foreach แสดงข้อมูลในอาร์เรย์ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่ 10</title>
</head>
<body>

<pre>
<?php

    $daysOfWeek = [
        "วันจันทร์      [MON] = Monday",
        "วันอังคาร     [TUE] = Tuesday",
        "วันพุธ         [WED] = Wednesday",
        "วันพฤหัสบดี [THU] = Thursday",
        "วันศุกร์        [FRI] = Friday",
        "วันเสาร์       [SAT] = Saturday",
        "วันอาทิตย์   [SUN] = Sunday"
    ];
    
    foreach ($daysOfWeek as $day) {
        echo $day . "\n";
    }
?>
</pre>

</body>
</html>

