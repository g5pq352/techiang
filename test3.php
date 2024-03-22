<?php require_once 'Connections/connect2data.php'; ?>

<?php
ini_set('display_errors', 1);



include("PHPMailer/PHPMailerAutoload.php");
// require_once('PHPMailer2/class.phpmailer.php');
// 產生 Mailer 實體
$phpmailer = new PHPMailer();

$phpmailer->SMTPDebug = 0;

// 讓phpmailer 不要自動使用SSL連線(適用於PHP 5.6以上，非5.6可不用這段)
$phpmailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// 設定為 SMTP 方式寄信
$phpmailer->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊
$phpmailer->SMTPAuth = true;      
$phpmailer->Host = "mail.techiang.com.tw"; //此處請填寫您的郵件伺服器位置,通常是mail.網址。如果您MX指到外地，那這邊填入www.XXX.com 即可

$phpmailer->SMTPSecure = 'ssl';

// $phpmailer->Port = 25; //ServerZoo主機的郵件伺服器port為 25 
$phpmailer->Port = 465;

// $phpmailer->SMTPAutoTLS = false; 

// 信件內容的編碼方式
$phpmailer->CharSet = "utf-8";

// 信件處理的編碼方式
$phpmailer->Encoding = "base64";

// SMTP 驗證的使用者資訊
$phpmailer->Username = "no-reply";  // 此處為驗証電子郵件帳號,就是您在ServerZoo主機上新增的電子郵件帳號，＠後面請務必一定要打。
$phpmailer->Password = "3edcxsw2!QAZ";  //此處為上方電子郵件帳號的密碼 (一定要正確不然會無法寄出)

// 信件內容設定
$phpmailer->From = "no-reply@techiang.com.tw"; //此處為寄出後收件者顯示寄件者的電子郵件 (請設成與上方驗証電子郵件一樣的位址)
$phpmailer->FromName = "德匠名㕑"; //此處為寄出後收件者顯示寄件者的名稱

$phpmailer->Subject = "信件標題"; //信件主旨

$phpmailer->Body = "這是一封測是信!";   //信件內容

$phpmailer->IsHTML(true);

// 收件人

$phpmailer->AddAddress("maysuregun@gmail.com", "someone");

// 顯示訊息

if(!$phpmailer->Send()) {

echo "Mail error: " . $phpmailer->ErrorInfo;     

} else {

echo "Mail sent";     

}
?>
