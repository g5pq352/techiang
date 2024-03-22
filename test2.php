<?php require_once 'Connections/connect2data.php'; ?>

<?php
ini_set('display_errors', 1);



include("PHPMailer/PHPMailerAutoload.php");

 

// 產生 Mailer 實體

$mail = new PHPMailer();

// 設定為 SMTP 方式寄信

$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊

$mail->Host = "smtp.gmail.com";

$mail->Port = 465;

$mail->SMTPAuth = true;

$mail->SMTPSecure = 'ssl';

$mail->SMTPDebug = 2;

// 信件內容的編碼方式       

$mail->CharSet = "utf-8";

// 信件處理的編碼方式

$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊

$mail->Username = "sendmail@goods-design.com.tw";

$mail->Password = "jojegzonugxayyrv";

// 信件內容設定  

$mail->From = "myemail@gmail.com"; //需要與上述的使用者資訊相同mail

$mail->FromName = "myemail"; //此顯示寄件者名稱

$mail->Subject = "信件標題"; //信件主旨

$mail->Body = "這是一封測是信!";   //信件內容

$mail->IsHTML(true);

// 收件人

$mail->AddAddress("maysuregun@gmail.com", "someone"); //此為收件者的電子信箱及顯示名稱

// 顯示訊息

if(!$mail->Send()) {

echo "Mail error: " . $mail->ErrorInfo;     

} else {

echo "Mail sent";     

}
?>
