<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td rowspan="2" align="left">
            <!-- <span class="cms-art-logo-name"><img src="../images/logo-green.svg" width="190"></span> -->
            <span class="cms-art-logo-text">德匠名㕑</span>
            <!-- <a href="<?= $_SERVER['PHP_SELF'] ?>?lang=<?= $lanlink ?>"><span style="font-size: 12px;
            float: right;
            padding-top: 15px;
            padding-right: 25px;
            font-family:Gill Sans MT,STXihei, HEITI TC, HEITI TC, 黑體-繁,微軟正黑體, 黑體, Arial, Helvetica, sans-serif;
            color:#666666"><?php if ($_SESSION['lang'] == 'tw'): ?> 英文版 <?php else: ?> 中文版 <?php endif ?></span></a> -->
            <span class="cms-login-cms-text">後端內容管理系統<!--  - <?php if ($_SESSION['lang'] == 'tw'): ?> 中文版 <?php else: ?> 英文版 <?php endif ?> --></span>
        </td>
        <td width="100" align="right" valign="middle">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="5" align="left"><span class="color_white"><a href="<?php echo $logoutAction ?>">&nbsp;&nbsp;<img src="image/logout.gif" width="48" height="16" /></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="left" class="color_white">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="left" class="color_white">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="5" align="left" class="table_data">&nbsp;&nbsp;<a href="../index.php" target="_blank">觀看首頁</a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>