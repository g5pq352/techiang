<?php require_once 'Connections/connect2data.php'; ?>
<?php require_once 'file_process.php'; ?>


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

    $m_store = $_POST['store'];
    $m_kitchenware = $_POST['kitchenware'];
    $m_project = $_POST['project'];
    $m_name = $_POST['name'];
    $m_phone = $_POST['phone'];
    $m_tel = $_POST['tel'];
    $m_email = $_POST['email'];
    $m_address = $_POST['address'];
    // $m_message = $_POST['message'];

    $m_message_one = $_POST['message_one'];

    $m_items = $_POST['items'];
    $m_brand = $_POST['brand'];
    $m_model = $_POST['model'];
    $m_message_two = $_POST['message_two'];

    $m_type = $_POST['type'];



    $insertSQl = $DB->query("INSERT INTO data_set (d_title, d_data1, d_data2, d_data3, d_data4, d_data5, d_data6, d_data7, d_data8, d_data9, d_data10, d_data11, d_data12, d_class1, d_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'repair', NOW())", [
        $m_name,
        $m_store,
        $m_phone,
        $m_tel,
        $m_email,
        $m_address,
        $m_message_one,
        $m_items,
        $m_brand,
        $m_model,
        $m_message_two,
        $m_kitchenware,
        $m_project
    ]);

    //找到insert ID
    $sql_max = "SELECT MAX(d_id) FROM data_set";
    $sth = $conn->query($sql_max)->fetch();
    $new_file_num = $sth[0];

    $file_result = file_process($conn, "repairFile", "add");

    if(count($file_result) > 0) {

        for ($j = 0; $j < count($file_result); $j++) {
            $insertSQL = "INSERT INTO file_set (file_name, file_link1, file_type, file_d_id, file_title) VALUES (:file_name, :file_link1, :file_type, :file_d_id, :file_title)";

            $stat = $conn->prepare($insertSQL);
            $stat->bindParam(':file_name', $file_result[$j][0], PDO::PARAM_STR);
            $stat->bindParam(':file_link1', $file_result[$j][1], PDO::PARAM_STR);
            $stat->bindParam(':file_type', $type = 'file', PDO::PARAM_STR);
            $stat->bindParam(':file_d_id', $new_file_num, PDO::PARAM_INT);
            $stat->bindParam(':file_title', $file_result[$j][2], PDO::PARAM_STR);
            $stat->execute();
        }

    }
    // ----------------------------------------------------------------------

    $query_RecFile = "SELECT * FROM data_set, file_set WHERE file_d_id = :file_d_id AND d_id = file_d_id AND file_type = 'file'";
    $RecFile = $conn->prepare($query_RecFile);
    $RecFile->bindParam(':file_d_id', $new_file_num, PDO::PARAM_STR);
    $RecFile->execute();
    $row_RecFile = $RecFile->fetch();
    $totalRows_RecFile = $RecFile->rowCount();

    // ----------------------------------------------------------------------

    if($m_type == '2') {
        $brand_email = $DB->row("SELECT * FROM data_set WHERE d_class1='repairMail' AND d_title=? AND d_active=1 ORDER BY d_sort ASC", [$m_kitchenware]);
        $brand_send = $brand_email['d_class2'];

        $item = '廚具品牌： '.$m_kitchenware.'<br><br>建案名稱： '.$m_project.'<br><br>';
    } else {
        $shop_email = $DB->row("SELECT * FROM data_set WHERE d_class1='shop' AND d_title=? AND d_active=1 ORDER BY d_sort ASC", [$m_store]);
        $brand_send = $shop_email['d_data6'];
        
        // $brand_send = 'service@techiang.com.tw';

        $item = '門市： '.$m_store.'<br><br>';
    }

    echo $brand_send;

    // ----------------------------------------------------------------------

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
    $phpmailer->Subject = "德匠名㕑-維修通知 - $m_name";
    $phpmailer->IsHTML(true);

    
    // $phpmailer->SetFrom('service@techiang.com.tw', '德匠名㕑');
    $phpmailer->AddReplyTo($brand_send, '德匠名㕑');

    $phpmailer->AddAddress('service@techiang.com.tw', '德匠名㕑-維修通知');
    $phpmailer->AddBCC($brand_send, '德匠名㕑-維修通知');
    $phpmailer->AddBCC('maysuregun@gmail.com', '德匠名㕑-維修通知');



    // $phpmailer->AddBCC('james.lee@techiang.com.tw', '德匠名㕑-維修通知');
    // $phpmailer->AddBCC('chengweilee@gmail.com', '德匠名㕑-維修通知');


    if(count($file_result) > 0) {
        do {
            $phpmailer->addAttachment($row_RecFile['file_link1']);
        } while ($row_RecFile = $RecFile->fetch());
    }
    

    $phpmailer->Subject = "德匠名㕑-維修通知 - $m_name";

    

    $mailContent = "<div style='max-width: 500px; letter-spacing: 1px;'>"

    ."德匠名㕑官網管理員，您好！<br><br>"

    ."==================================================<br><br>"

    .$item
    
    ."客戶名稱： $m_name <br><br>"
    ."行動電話： $m_phone <br><br>"
    ."市話： $m_tel <br><br>"
    ."信箱： $m_email <br><br>"
    ."住址： $m_address <br><br>"

    ."<div style='line-height: 2;'>"

    ."簡述： $m_message_one <br><br>"

    ."</div><br><br>"


    ."品項： $m_items <br><br>"
    ."品牌： $m_brand <br><br>"
    ."型號： $m_model <br><br>"


    ."<div style='line-height: 2;'>"

    ."簡述： $m_message_two <br><br>"

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

    }



    $_SESSION['checkPost'] = 0;

}else{

    unset($_SESSION['checkPost']);

    header("Location: ./");
}