<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่6 </title>
</head>
<body>
    
    <p2> ฟอร์มแจ้งซ่อมอุปกรณ์ </p2><br><br>

    <form method="post" accept="">
        ชื่อผู้แจ้ง <input type="text" name="name"> <br><br>
        รายการที่แจ้ง <input type="text" name="eq"> <br><br>
        อาการหรือปัญหา
        <textarea name="datail" rows="5" cols=50 ></textarea><br><br>
        <input type="submit" name="bt" value="แจ้งซ่อม">

    </form>
</body>

<?php

    if(isset($_POST['bt']))
    {
        $name =  $_POST['name'];
        $rq = $_POST['eq'];
        $datail = $_POST['datail'];

        $sToken = "u17LQbyS91E27AizAAW2Bn0Pg441KOHKF6YWYIdQXuJ";
        $sMessage ="แจ้งซ่อมอุปกรณ์ \n ";
        $sMessage .="ชื่อผู้แจ้งซ่อม:".$name ."\n";
        $sMessage .="ชื่ออุปกรณ์:".$rq ."\n";
        $sMessage .="รายละเอียด:".$datail ."\n";
        // $Message = array('message' => $sMessage);
        // $mgs = ['message' => $sMessage];

        $imageFile = new CURLFile('images.png');
        $sticker_package_id = '446';
        $sticker_id = '1989';

        $mgs = array(
            'message' => $sMessage,
            'imageFile' => $imageFile,
            'stickerpackageid' => $sticker_package_id,
            'stickerid' => $sticker_id

        );
     
    //คำสั่งสำหรับให้ PHP เชื่อมต่อกับ Line Notify
        $chOne = curl_init();
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $chOne, CURLOPT_POST, 1);
       curl_setopt( $chOne, CURLOPT_POSTFIELDS, http_build_query($mgs));
       $headers = array( 'Content-type: multipart/form-data', 'Authorization: Bearer '.$sToken.'', );
       curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $chOne );
            
        //Result error
        if(curl_error($chOne))
        {
           echo 'มีข้อผิดพลาด' . curl_error($chOne);
        }
        else {
           $result_ = json_decode($result, true);
           echo "status : ".$result_['status']; 
           echo "message : ". $result_['message'];
        }
        curl_close( $chOne );
    
    }
?>

</html>