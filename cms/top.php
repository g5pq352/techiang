<?php
function creatSet($title, $menuType){
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType."_list.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	echo "<a href='".$addList."' class='".$list_class."'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>".$title."設定</a>";
}
function creatList($title, $menuType){
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType."_list.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	echo "<a href='".$addList."' class='".$list_class."'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>".$title."列表</a>";
}
function creatAdd($title, $menuType){
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addTxt = $menuType."_add.php";
	$add_class = ($ryder_now == $addTxt) ? 'submenu current' : 'submenu';
	echo "<a href='".$addTxt."' class='".$add_class."'><img src='../cms/image/add.png' width='16' height='16' border='0' align='absbottom'>新增".$title."</a>";
}
function creatAll($title, $menuType){
	$ryder_now =  basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	$addList = $menuType."_list.php";
	$addTxt = $menuType."_add.php";
	$list_class = ($ryder_now == $addList) ? 'submenu current' : 'submenu';
	$add_class = ($ryder_now == $addTxt) ? 'submenu current' : 'submenu';
	echo "<a href='".$addList."' class='".$list_class."'><img src='../cms/image/table.gif' width='16' height='16' border='0' align='absbottom'>".$title."列表</a><a href='".$addTxt."' class='".$add_class."'><img src='../cms/image/add.png' width='16' height='16' border='0' align='absbottom'>新增".$title."</a>";
}
function creatTableTop(){
	echo "<table class='ryder-menu-area' width='100%' height='25' border='0' align='center' cellpadding='3' cellspacing='0' bgcolor='#E4E4E4' ><tr><td align='left'>";
}
function creatTablBottom(){
	echo "</td></tr></table>";
}
?>
<script src="js/menu.js"></script>
<div id="cmsMenu">
	<ul>
		<?php if($row_RecLevelAuthority['a_4']=='1'){ ?>
		<li id="main_menu_4" class="main_menu <?php if ($menu_is=='news'): ?>main_menu_now<?php endif ?>">
			<a href="news_list.php"><div>最新消息</div></a>
		</li>
		<?php } ?>
		
		<?php if($row_RecLevelAuthority['a_2']=='1'){ ?>
		<li id="main_menu_2" class="main_menu <?php if ($menu_is=='recipe'): ?>main_menu_now<?php endif ?>">
			<a href="recipe_list.php"><div>食譜</div></a>
		</li>
		<?php } ?>

		<?php if($row_RecLevelAuthority['a_3']=='1'){ ?>
		<li id="main_menu_3" class="main_menu <?php if ($menu_is=='shop'): ?>main_menu_now<?php endif ?>">
			<a href="shop_list.php"><div>門市據點</div></a>
		</li>
		<?php } ?>

		<?php if($row_RecLevelAuthority['a_5']=='1'){ ?>
		<li id="main_menu_5" class="main_menu <?php if ($menu_is=='leicht' || $menu_is=='ldownload'): ?>main_menu_now<?php endif ?>">
			<a href="leicht_list.php"><div>leicht</div></a>
		</li>
		<?php } ?>

     	<?php if($row_RecLevelAuthority['a_6']=='1'){ ?>
     	<li id="main_menu_6" class="main_menu <?php if ($menu_is=='cleanup' || $menu_is=='cdownload'): ?>main_menu_now<?php endif ?>">
     		<a href="cleanup_list.php"><div>cleanup</div></a>
     	</li>
     	<?php } ?>

     	<?php if($row_RecLevelAuthority['a_7']=='1'){?>
     	<!-- <li id="main_menu_7" class="main_menu <?php if ($menu_is=='news'): ?>main_menu_now<?php endif ?>">
     		<a href="news_list.php"><div>最新消息</div></a>
     	</li> -->
     	<?php } ?>

     	<?php if($row_RecLevelAuthority['a_8']=='1'){?>
     	<li id="main_menu_8" class="main_menu <?php if ($menu_is=='contactus'): ?>main_menu_now<?php endif ?>">
     		<a href="contact_list.php"><div>聯絡我們</div></a>
     	</li>
     	<?php } ?>

     	<?php if($row_RecLevelAuthority['a_9']=='1'){?>
     	<li id="main_menu_9" class="main_menu <?php if ($menu_is=='repair' || $menu_is=='repairMail'): ?>main_menu_now<?php endif ?>">
     		<a href="repair_list.php"><div>維修服務</div></a>
     	</li>
     	<?php } ?>

     	<?php if($row_RecLevelAuthority['a_10']=='1'){ ?>
     	<li id="main_menu_10" class="main_menu <?php if ($menu_is=='keywords'): ?>main_menu_now<?php endif ?>">
     		<a href="keywords_list.php"><div>關鍵字SEO</div></a>
     	</li>
     	<?php } ?>

     	<?php if($row_RecLevelAuthority['a_1']=='1'){ ?>
        <li id="main_menu_1" class="main_menu <?php if ($menu_is=='authority'): ?>main_menu_now<?php endif ?>">
        	<a href="authority_list.php"><div>權限管理</div></a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php
if($menu_is=="recipe"){

	creatTableTop();
	creatAll('食譜', 'recipe');
	creatAll('分類', 'recipeC');
	if($row_RecLevelAuthority['a_2']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="shop"){

	creatTableTop();
	creatAll('門市據點', 'shop');
	creatAll('分類', 'shopC');
	if($row_RecLevelAuthority['a_3']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="news"){

	creatTableTop();
	creatAll('最新消息', 'news');
	creatAll('分類', 'newsC');
	if($row_RecLevelAuthority['a_4']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="leicht" || $menu_is=="ldownload"){

	creatTableTop();
	creatAll('leicht', 'leicht');

	echo '<br>';

	creatAll('型錄下載', 'ldownload');
	if($row_RecLevelAuthority['a_5']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="cleanup" || $menu_is=="cdownload"){

	creatTableTop();
	creatAll('cleanup', 'cleanup');

	echo '<br>';

	creatAll('型錄下載', 'cdownload');
	if($row_RecLevelAuthority['a_6']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="menu"){

	creatTableTop();
	creatAll('菜單', 'menu');
	creatAll('菜單', 'menuC');
	if($row_RecLevelAuthority['a_7']=='0'){header("Location:first.php");}
	creatTablBottom();

}
else if($menu_is=="contactus"){

	creatTableTop();
	creatList('聯絡我們', 'contact');
	if($row_RecLevelAuthority['a_8']=='0'){header("Location:first.php");}
	creatTablBottom();

}
else if($menu_is=="repair" || $menu_is=="repairMail"){

	creatTableTop();
	creatList('維修服務', 'repair');

	echo '<br>';

	creatAll('維修服務信箱', 'repairMail');
	if($row_RecLevelAuthority['a_9']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="keywords"){

	creatTableTop();
	creatList('關鍵字SEO', 'keywords');
	if($row_RecLevelAuthority['a_10']=='0'){header("Location:first.php");}
	creatTablBottom();

}else if($menu_is=="authority"){

	creatTableTop();
	creatAll('管理員', 'authority');
	creatAll('權限管理群組', 'authorityC');
	if($row_RecLevelAuthority['a_1']=='0'){header("Location:first.php");}
	creatTablBottom();

}
?>

<div style="clear:both; height:20px;"></div>