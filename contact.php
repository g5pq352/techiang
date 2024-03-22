<?php
require_once 'Connections/connect2data.php';

$shop = $DB->query("SELECT * FROM data_set WHERE d_class1='shop' AND d_active=1 ORDER BY d_sort ASC");

$repairMail = $DB->query("SELECT * FROM data_set WHERE d_class1='repairMail' AND d_active=1 ORDER BY d_sort ASC");

$_SESSION['checkPost'] = 0;
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- remove this if you use Modernizr -->
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

	<?php include 'html_head.php'; ?>


</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="contactWrap">

		<div class="no2-head-area">
			<div class="title">contact us</div>
			<div class="content-area">
				<div class="ch">期待與您的來信</div>
				<div class="en">
					Any questions?<br>
					Please feel free to contact us here.
				</div>
				<div class="content show-for-large">
					親愛的客戶您好，若您有任何意見或疑問，<br>
					我們誠摯地邀請您直接寄到我們專人服務的<br>
					電子郵件信箱
				</div>
			</div>
		</div>
			
		<section>	
			<form action="POST" id="contactForm" method="POST" enctype="multipart/form-data">

				<div class="item">
					<select name="store" id="" required>
						<option value="">門市 Store *</option>

						<?php foreach($shop as $row) : ?>
							<option value="<?=$row['d_title']?>"><?=$row['d_title']?></option>
						<?php endforeach ?>

						<option value="德匠名㕑總公司">德匠名㕑總公司</option>

						<!-- <option value="LEICHT高雄展示中心">LEICHT高雄展示中心</option>
						<option value="LEICHT台南展示中心">LEICHT台南展示中心</option>
						<option value="Cleanup北高雄展示中心">Cleanup北高雄展示中心</option>
						<option value="Cleanup台南展示中心">Cleanup台南展示中心</option> -->
					</select>
				</div>

				<div class="grid-x name align-justify">
					<div class="item cell"><input type="text" name="name" placeholder="姓名 name *"></div>
					<div class="item cell"><input type="text" name="phone" placeholder="電話 phone *"></div>
				</div>

				<div class="item"><input type="text" name="email" placeholder="電子信箱 e-mail *"></div>

				<div class="item">
					<textarea name="message" id="" placeholder="內容 message *"></textarea>
				</div>

				<div class="note">these fields are required.</div>

				<div class="submit text-right contactForm"><a href="javascript:;"><img src="images/submit.svg"></a></div>

				<div class="g-recaptcha"
					data-sitekey="6LeJ9qcUAAAAAI3N4h-Gj4d8I4exJA7-cp2hsU2s"
					data-callback="onSubmit"
					data-size="invisible"
					style="display: none;">
				</div>
			</form>
		</section>

		<div class="no2-head-area">
			<div class="title">repair form</div>
			<div class="content-area">
				<div class="ch">有什麼問題，德匠為您維修</div>
				<div class="en">
					Any questions?<br>
					Please feel free to contact us here.
				</div>
				<div class="content text-center show-for-large">
					服務時間：星期一至星期五 （例假日除外）<br>
					AM9:00至PM18:00
				</div>
			</div>
		</div>

		<section>
			<div class="repairInfo">
				<ul class="infoList">
					<li>
						<div class="title">
							<i>LINE官方帳號</i><br>
							服務項目：電器教學 / 線上簡易故障排除 / 線上報修
						</div>
						<div class="content">
							加入方式：請先點選LINE 「加入好友」，再使用下列方式加入<br>
							1.行動裝置掃描 右方QR CODE<br>
							2.搜尋LINE ID：@drdesign368<br>
							3.官方帳號搜尋：德匠名㕑 > 加入
						</div>
						<div class="openning hide-for-large">
							<div>服務時間：星期一至星期五 （例假日除外）</div>
							<div class="text-right">AM9:00至PM18:00</div>
						</div>
						<div class="additional">
							<nav>
								<a href="javascript:;"><img src="images/contact-line.svg" width="118"></a>
								<a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=328nhyvy" target="_blank"><img src="images/contact-link.svg"></a>
							</nav>
						</div>
					</li>
					<li>
						<div class="title"><i>線上登錄維修單</i></div>
						<div class="content">
							煩請選取您的身分，填寫維修表單，俾利人員後續處理
						</div>
					</li>
				</ul>

				<ul class="contactSwitch grid-x">
					<li class="current">一般客戶</li>
					<li>社區建案</li>
				</ul>
			</div>

			<form action="POST" id="repairForm" method="POST" enctype="multipart/form-data">

				<div class="item change-1">
					<select name="store" id="">
						<option value="" selected>門市 Store</option>

						<?php foreach($shop as $row) : ?>
							<option value="<?=$row['d_title']?>"><?=$row['d_title']?></option>
						<?php endforeach ?>
					</select>
				</div>

				<div class="grid-x name align-justify change-2">
					<div class="item cell">
						<select name="kitchenware" id="">
							<option value="" selected>廚具品牌 brand</option>

							<?php foreach($repairMail as $row) : ?>
								<option value="<?=$row['d_title']?>"><?=$row['d_title']?></option>
							<?php endforeach ?>
							<!-- <option value="Dr.design高雄專案">Dr.design高雄專案 </option>
							<option value="LEICHT高雄專案">LEICHT高雄專案</option>
							<option value="LEICHT台南專案">LEICHT台南專案</option>
							<option value="Cleanup高雄專案">Cleanup高雄專案</option>
							<option value="Cleanup台南專案">Cleanup台南專案</option> -->
						</select>
					</div>
					<div class="item cell"><input type="text" name="project" id="project_repair" placeholder="建案名稱 project name *"></div>
				</div>

				<div class="grid-x name align-justify">
					<div class="item cell"><input type="text" name="name" id="name_repair" placeholder="客戶名稱 name *"></div>
					<div class="item cell"><input type="text" name="phone" id="phone_repair" placeholder="行動電話 phone *"></div>
				</div>

				<div class="grid-x name align-justify">
					<div class="item cell"><input type="text" name="tel" placeholder="市話 tel"></div>
					<div class="item cell"><input type="text" name="email" id="email_repair" placeholder="信箱 E-mail *"></div>
				</div>

				<div class="grid-x align-justify">
					<div class="item cell"><input type="text" name="address" id="address_repair" placeholder="住址 address *"></div>
					<div class="note ps"><!-- (建案客戶請註明建設公司及案名，俾利後續處理) -->(如有A、B....棟請註明)</div>
				</div>

				<div class="head">報修內容 *</div>

				<article>
					<div class="no">1.櫃體</div>

					<div class="item">
						<textarea name="message_one" id="" placeholder="簡述 message"></textarea>
					</div>

					<div class="photo grid-x large-up-3">
						<div class="item js cell large-auto">

							<div class="upup is-open">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile1" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile1');" />
									<label for="upfile1"><img src="images/uploadimg.svg" class="upload_img upfile1"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<!-- <div class="plus">
								<img src="images/photo-plus.svg">
							</div> -->
						</div>
						<div class="item js cell large-auto">

							<div class="upup">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile2" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile2');" />
									<label for="upfile2"><img src="images/uploadimg.svg" class="upload_img upfile2"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<div class="plus">
								<img src="images/photo-plus.svg">
							</div>
						</div>
						<div class="item js cell large-auto">

							<div class="upup">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile3" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile3');" />
									<label for="upfile3"><img src="images/uploadimg.svg" class="upload_img upfile3"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<div class="plus">
								<img src="images/photo-plus.svg">
							</div>
						</div>
					</div>
					
				</article>

				<article>
					<div class="no">2.電器/配件:</div>

					<div class="grid-x align-justify">

						<div class="item cell">
							<select name="items" id="">
								<option value="" selected>品項 Item</option>
								<option value="爐具">爐具</option>
								<option value="水槽">水槽</option>
								<option value="油機">油機</option>
								<option value="龍頭">龍頭</option>
								<option value="烤箱">烤箱</option>
								<option value="蒸爐">蒸爐</option>
								<option value="燈具">燈具</option>
								<option value="檯面">檯面</option>
								<option value="洗碗機">洗碗機</option>
								<option value="烘碗機">烘碗機</option>
								<option value="其他">其他</option>
							</select>
						</div>

					</div>

					<div class="grid-x name align-justify">
						<div class="item cell">
							<input type="text" name="brand" placeholder="品牌 brand">
						</div>
						<div class="item cell">
							<input type="text" name="model" placeholder="型號 model">
						</div>
					</div>

					<div class="item">
						<textarea name="message_two" id="" placeholder="簡述 message"></textarea>
					</div>	

					<!-- <div class="item js">

						<div class="box">
							<input type="file" name="upfile[]" id="upfile2" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this);" />
							<label for="upfile2"><img src="images/uploadimg.svg"><span></span></label>
						</div>

						<div class="mark">建議照片上傳大小500KB</div>
					</div> -->

					<div class="photo grid-x large-up-3">
						<div class="item js cell large-auto">

							<div class="upup is-open">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile4" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile4');" />
									<label for="upfile4"><img src="images/uploadimg.svg" class="upload_img upfile4"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<!-- <div class="plus">
								<img src="images/photo-plus.svg">
							</div> -->
						</div>
						<div class="item js cell large-auto">

							<div class="upup">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile5" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile5');" />
									<label for="upfile5"><img src="images/uploadimg.svg" class="upload_img upfile5"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<div class="plus">
								<img src="images/photo-plus.svg">
							</div>
						</div>
						<div class="item js cell large-auto">

							<div class="upup">
								<div class="box">
									<input type="file" name="upfile[]" id="upfile6" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple onchange="checkfile(this, 'upfile6');" />
									<label for="upfile6"><img src="images/uploadimg.svg" class="upload_img upfile6"><span></span></label>
								</div>

								<div class="mark">建議照片上傳大小500KB</div>
							</div>

							<div class="plus">
								<img src="images/photo-plus.svg">
							</div>
						</div>
					</div>

				</article>

				<div class="note">
					感謝您的填單，線上報修登錄後，德匠名㕑將儘速安排專人與您電話聯繫確認維修內容，並預約可到府維修服務時間等後續相關事宜，感謝您!
				</div>

				<div class="submit text-right repairForm"><a href="javascript:;"><img src="images/submit.svg"></a></div>

				<div class="privacy">
					<div class="title">隱私權政策</div>
					<div class="iknow grid-x align-middle">
						<span class="block"></span>
						<span class="text">我已閱讀並了解德匠名㕑隱私權政策。</span>
					</div>
				</div>

				<input type="hidden" name="type" value="1">
				<input type="hidden" name="privacy">

				<div class="g-recaptcha"
					data-sitekey="6LeJ9qcUAAAAAI3N4h-Gj4d8I4exJA7-cp2hsU2s"
					data-callback="onSubmit"
					data-size="invisible"
					style="display: none;">
				</div>
			</form>
		</section>
	</div>

	<div class="contact-fancyboxWrap mail">
		<div class="window">
			<div class="title">
				<div class="ch">感謝您的來信！我們將會儘快回覆您。</div>
				<div class="line-lr"></div>
				<div class="en">Thanks for your message, and we'll contact you ASAP.</div>
			</div>
			<div class="logo"><img src="images/top-logo.svg"></div>
			<div class="close"><img src="images/close.svg" width="40"></div>
		</div>
		<div class="fancyCheck"></div>
	</div>

	<div class="fancyboxWrap-privacy">
		<div class="window">
			<div class="title">網站隱私權聲明</div>
			<div class="content">
				德匠名廚股份有限公司履行個人資料保護法告知事項：<br>
				德匠名廚股份有限公司（以下簡稱本公司）依據個人資料保護法，就產品服務相關事宜向台端告知下列事項，請台端詳閱：<br>
				<br>
				一、個人資料之保護<br>
				1、本公司致力於保護本網站使用者的隱私權。<br>
				2、除非經您的同意或依法律之規定，本公司不會將您個人的資訊透露給第三人/方。<br>
				<br>
				二、個人資料之蒐集與使用<br>
				為給您最完善的服務，本公司必須請您提供姓名、地址、聯絡電話、E-mail信箱或其他直接或間接方式識別個人之資料，並使用這些資料來回答您的問題，或是透過郵件或電話與您聯絡，通知您有關我們提供之服務內容。依據您在本網站要求提供之服務，有可能我們需要您提供其他必要之個人資料來與您聯絡，以便處理或完成您的要求。本網站為處理或完成您的服務需求，也可能需要將您提供之個人資料提供予相關之協力廠商。<br>
				提供<br>
				三、有關個人資料之更新<br>
				本公司提供您得請求查詢或閱覽，得請求停止蒐集、處理或利用或請求補充、更正或刪除您的個人資料，以確保資料之完整性與正確性。<br>
				<br>
				四、變更聲明<br>
				本公司隱私權保護政策將因應需求隨時進行修正，修正後的條款將刊登於網站上。
			</div>
			<div class="close"><img src="images/close.svg"></div>
		</div>
		<div class="fancy-close-block"></div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>

</html>

<script>
	$(".plus").on("click", function() {
		$(this).closest(".item").find(".upup").addClass("is-open")
		$(this).addClass("is-close")
	})


	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});


	
	function checkfile(sender, item) {


		// 可接受的附檔名
		var validExts = new Array(".png", ".jpg", ".PNG", ".JPG", ".heif", ".HEIF", ".hevc", ".HEVC", ".JEPG", ".jpeg");

		var fileExt = sender.value;
		fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
		if (validExts.indexOf(fileExt) < 0) {
		alert("檔案類型錯誤，可接受的副檔名有：" + validExts.toString());
			sender.value = null;
			return false;
		}

		if (sender.files && sender.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$("."+item+"").attr('src', e.target.result);
				// sender.closest(".box").addClass("is-show");

				// console.log(sender.closest(".box"))
			};

			reader.readAsDataURL(sender.files[0]);
		}

		else return true;
	}


	$(".contact-fancyboxWrap .window .close, .fancyCheck").on("click", function() {
		$("select").val("")
		$("input").val("")
		$("textarea").val("")

		$(".iknow .block").removeClass("is-click")
		$(".contact-fancyboxWrap").fadeOut(300)

		setTimeout(function() {
			location.reload();
		}, 500)
		
	})



	// 聯絡我們
	$(".contactForm").click(function () {
		if($("#contactForm").valid() == true){
			var answer = confirm("您確認要送出您所填寫的資訊嗎？");
			if (answer){

				window.onSubmit = () => {

					$.ajax({
						type: "POST",
						url: "contactMail.php",
						data: $("#contactForm").serialize(),
						beforeSend: function () {},
						success: function(data) {
							$(".contact-fancyboxWrap").fadeIn(300)
						}
					});

				}

				grecaptcha.execute();
			}
		}
	})

	$("#contactForm").validate({
		focusInvalid: false,
		invalidHandler: function(form, validator) {

	        if (!validator.numberOfInvalids())
	            return;

	        TweenMax.to($(window), 1.2, {
				scrollTo: {
					y: $(validator.errorList[0].element),
					offsetY: $(window).height() * 0.4
				},
				ease:Power2.easeInOut,
				onComplete: function() {}
			})

	    },
		ignore:[],
		rules:{
			store: {
				required: true,
			},
			name: {
				required: true,
			},
			phone: {
				required: true,
			},
			email: {
				required: true,
			},
			message: {
				required: true,
			}
		},
		messages: {
			store: {
				required: "必填"
			},
			name: {
				required: "必填"
			},
			phone: {
				required: "必填"
			},
			email: {
				required: "必填"
			},
			message: {
				required: "必填"
			}
		},
		errorPlacement: function(label, element) {
	        label.addClass('contact-form-error');
	        label.insertAfter(element);
	    },
	    wrapper: 'div'
	})



	
	//維修
	$(".repairForm").click(function () {
		if($("#repairForm").valid() == true){
			var answer = confirm("您確認要送出您所填寫的資訊嗎？");
			if (answer){

				window.onSubmit = () => {

					var formData = new FormData($( "#repairForm" )[0]);

			       $.ajax({ // create an AJAX call...
				        data: formData,
				        contentType: false,
				        processData: false,
						type: $("#repairForm").attr('method'), // GET or POST
						url: "contactMail_repair.php",
						beforeSend: function () {},
						success: function(data) {
							$(".contact-fancyboxWrap").fadeIn(300)
						}
					});

				}

				grecaptcha.execute();
			}
		}
	})

	$("#repairForm").validate({
		focusInvalid: false,
		invalidHandler: function(form, validator) {

	        if (!validator.numberOfInvalids())
	            return;

	        TweenMax.to($(window), 1.2, {
				scrollTo: {
					y: $(validator.errorList[0].element),
					offsetY: $(window).height() * 0.4
				},
				ease:Power2.easeInOut,
				onComplete: function() {}
			})

	    },
		ignore:[],
		rules:{
			name: {
				required: true,
			},
			phone: {
				required: true,
			},
			email: {
				required: true,
			},
			address: {
				required: true,
			},
			message: {
				required: true,
			},
			privacy: {
				required: true,
			}
		},
		messages: {
			project: {
				required: "必填"
			},
			name: {
				required: "必填"
			},
			phone: {
				required: "必填"
			},
			email: {
				required: "必填"
			},
			address: {
				required: "必填"
			},
			message: {
				required: "必填"
			},
			privacy: {
				required: "必填"
			}
		},
		errorPlacement: function(label, element) {
	        label.addClass('contact-form-error');
	        label.insertAfter(element);

	   //     	if ($("#project_repair").val() == '') {
				// 	TweenMax.to($(window), 1.2, {
				// 		scrollTo: {
				// 			y: '#repairForm',
				// 			offsetY: $(window).height() * 0.4
				// 		},
				// 		ease:Power2.easeInOut,
				// 		onComplete: function() {}
				// 	})
				// }else if ($("#name_repair").val() == ''){
				// 	TweenMax.to($(window), 1.2, {
				// 		scrollTo: {
				// 			y: '#repairForm',
				// 			offsetY: $(window).height() * 0.4
				// 		},
				// 		ease:Power2.easeInOut,
				// 		onComplete: function() {}
				// 	})
				// }else if ($("#phone_repair").val() == ''){
				// 	TweenMax.to($(window), 1.2, {
				// 		scrollTo: {
				// 			y: '#repairForm',
				// 			offsetY: $(window).height() * 0.4
				// 		},
				// 		ease:Power2.easeInOut,
				// 		onComplete: function() {}
				// 	})
				// }else if ($("#email_repair").val() == ''){
				// 	TweenMax.to($(window), 1.2, {
				// 		scrollTo: {
				// 			y: '#repairForm',
				// 			offsetY: $(window).height() * 0.4
				// 		},
				// 		ease:Power2.easeInOut,
				// 		onComplete: function() {}
				// 	})
				// }else if ($("#address_repair").val() == ''){
				// 	TweenMax.to($(window), 1.2, {
				// 		scrollTo: {
				// 			y: '#repairForm',
				// 			offsetY: $(window).height() * 0.4
				// 		},
				// 		ease:Power2.easeInOut,
				// 		onComplete: function() {}
				// 	})
				// }else{
				// }
	    },
	    wrapper: 'div'
	})

	$(".change-2").hide()
	$(".contactSwitch li").click(function () {
		$(this).addClass("current").siblings().removeClass("current")

		if($(this).index() == 0) {
			$(".change-1").show()
			$(".change-2").hide()

			$("select[name='kitchenware']").val("")
			$("input[name='type']").val("1")

			$("input[name='project']").val("")
			$("input[name='project']").removeAttr('required');
		} else {
			$(".change-1").hide()
			$(".change-2").show()

			$("select[name='store']").val("")
			$("input[name='type']").val("2")

			$("input[name='project']").attr('required', 'required');
		}
	})

	$(".iknow").on("click", function() {
		$("body").addClass("is-lock")

		$(this).find(".block").addClass("is-click")
		$(".fancyboxWrap-privacy").fadeIn(500)
	})

	$(".fancyboxWrap-privacy .close").on("click", function() {
		$("body").removeClass("is-lock")
		$(".fancyboxWrap-privacy").fadeOut(500)
		$("input[name='privacy']").val("1")
	})
	$(".fancyboxWrap-privacy .fancy-close-block").on("click", function() {
		$("body").removeClass("is-lock")
		$(".fancyboxWrap-privacy").fadeOut(500)
		$("input[name='privacy']").val("1")
	})

</script>