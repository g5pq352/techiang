<?php require_once 'Connections/connect2data.php'; ?>

<?php
ini_set('display_errors', 1);



include("PHPMailer/PHPMailerAutoload.php");

 

// 產生 Mailer 實體

$mail = new PHPMailer();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// 設定為 SMTP 方式寄信

$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊

// $mail->Host = "smtp.gmail.com";

$mail->Host = "mail.techiang.com.tw";

// $mail->SMTPAutoTLS = false; 

// $mail->Port = 465;
$mail->Port = 587;
// $mail->Port = 25;

$mail->SMTPAuth = true;

// $mail->SMTPSecure = 'ssl';
$mail->SMTPSecure = 'tls';

$mail->SMTPDebug = 2;

// 信件內容的編碼方式       

$mail->CharSet = "utf-8";

// 信件處理的編碼方式

$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊

// $mail->Username = "sendmail@goods-design.com.tw";

// $mail->Password = "jojegzonugxayyrv";

$mail->Username = "no-reply";
$mail->Password = "3edcxsw2!QAZ";

// 信件內容設定  

$mail->From = "no-reply@techiang.com.tw"; //需要與上述的使用者資訊相同mail

$mail->FromName = "myemail"; //此顯示寄件者名稱

$mail->Subject = "信件標題"; //信件主旨

$mail->Body = "這是一封測是信!";   //信件內容

$mail->IsHTML(true);

// 收件人

$mail->AddAddress("maysuregun@gmail.com", "someone");

// 顯示訊息

if(!$mail->Send()) {

echo "Mail error: " . $mail->ErrorInfo;     

} else {

echo "Mail sent";     

}
?>
