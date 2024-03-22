<?php require_once 'Connections/connect2data.php'; ?>



<?php



if (!isset($_SESSION['checkPost'])) {

    header("Location: ./");

}



if($_SESSION['checkPost'] == 1){

    unset($_SESSION['checkPost']);

    header("Location: ./");

}




if ( isset($_SESSION['checkPost']) && $_SESSION['checkPost'] == 0 && $_SERVER['REQUEST_METHOD'] === 'POST'){


    $_SESSION['checkPost'] = 1;

    $m_name = $_POST['name'];
    $m_phone = $_POST['phone'];
    $m_email = $_POST['email'];
    $m_store = $_POST['store'];

    $m_message = $_POST['message'];


    $insertSQl = $DB->query("INSERT INTO data_set (d_title, d_data1, d_data2, d_data3, d_content, d_class1, d_date) VALUES (?, ?, ?, ?, ?, 'contactus', NOW())", [
        $m_name,
        $m_phone,
        $m_email,
        $m_store,
        $m_message
    ]);

    if($m_store == "德匠名㕑總公司") {
        $shop_send = 'service@techiang.com.tw';
    } else {
        $shop_email = $DB->row("SELECT * FROM data_set WHERE d_class1='shop' AND d_title=? AND d_active=1 ORDER BY d_sort ASC", [$m_store]);
        $shop_send = $shop_email['d_data6'];
    }
    
    echo $shop_send;

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

    $phpmailer->SMTPSecure = 'tls';

    // $phpmailer->Port = 25; //ServerZoo主機的郵件伺服器port為 25 
    $phpmailer->Port = 587;

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
    $phpmailer->Subject = "德匠名㕑-聯絡我們通知 - $m_name";
    $phpmailer->IsHTML(true);

    
    // $phpmailer->SetFrom('service@techiang.com.tw', '德匠名㕑');
    

    if($shop_send == 'service@techiang.com.tw') {
        $phpmailer->AddReplyTo($shop_send, '德匠名㕑');

        $phpmailer->AddAddress($shop_send, '德匠名㕑-聯絡我們通知');


        // $phpmailer->AddBCC('james.lee@techiang.com.tw', '德匠名㕑-聯絡我們通知');
        // $phpmailer->AddBCC('chengweilee@gmail.com', '德匠名㕑-聯絡我們通知');
    } else {
        $phpmailer->AddReplyTo($shop_send, '德匠名㕑');
        
        $phpmailer->AddAddress('service@techiang.com.tw', '德匠名㕑-聯絡我們通知');
        $phpmailer->AddBCC($shop_send, '德匠名㕑-聯絡我們通知');


        // $phpmailer->AddBCC('james.lee@techiang.com.tw', '德匠名㕑-聯絡我們通知');
        // $phpmailer->AddBCC('chengweilee@gmail.com', '德匠名㕑-聯絡我們通知');
    }
    
    $phpmailer->AddBCC('maysuregun@gmail.com', '德匠名㕑-聯絡我們通知');
    

    

    $phpmailer->Subject = "德匠名㕑-聯絡我們通知 - $m_name";

    

    $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

    ."德匠名㕑官網管理員，您好！<br><br>"

    ."==================================================<br><br>"


    ."門市： $m_store <br><br>"
    ."姓名： $m_name <br><br>"
    ."電話： $m_phone <br><br>"
    ."電子信箱： $m_email <br><br>"
    
    ."<div style='line-height: 2;'>"

    ."內容： $m_message <br><br>"

    ."</div>"


    ."==================================================<br><br>"

    ."<br><br>"

    ."<div style='color: red;'>此為系統發信，請勿直接回覆。</div>"

    ."</div>";

    

    $phpmailer->Body = $mailContent;

    $phpmailer->IsHTML(true);

    

    if(!$phpmailer->Send()) {

        echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

        echo $phpmailer->ErrorInfo;

    } else {

        echo "您已預約成功！謝謝。";

        echo $phpmailer->ErrorInfo;

    }



    $_SESSION['checkPost'] = 0;

}else{

    unset($_SESSION['checkPost']);

    header("Location: ./");
}