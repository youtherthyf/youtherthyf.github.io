		<title>صفحة زئيسية</title>
		<?php
			include "./cyberblank.php";
		?>

			<div class="mainbody">
				<h1>G6Gاهلا وسهلا في</h1>
				<h2>اعظم سيبر في مصر</h2>
			
				<p>خدمات تسطيب ويندوز. إسلامي, كوري, إلخ</p>
				<p>احدث الألعاب و نسخ جاتا</p>
				<p>اجهزة كمبيوتر حديثة و إنترنت سريع</p>
				<p>يسعدنا إستضافتكم</p>
			</div>

			<div class="mainbody">
				<script>
					function go(loc) {
						document.getElementById('radio').src = loc;
					}
				</script>
				<div width="80%" style="margin-left:10%;">
					<button type="button" onclick="go('https://audio.nrpstream.com/listen/nogoumfm/radio.mp3?refresh=1668723970691')"><img src="https://www.nogoumfm.net/wp-content/uploads/2019/12/logo-nogoum-1.png" height="100px"></button>	
					<button type="button" onclick="go('https://audio.nrpstream.com/listen/nile_fm/radio.mp3')"><img src="https://nilefm.com/static/logo.png" height="100px"></button>	
					<button type="button" onclick="go('https://plaza.one/mp3')"><img src="https://plaza.one/assets/pc-CtFEkJM6.png" height="100px"></button>	
					<button type="button" onclick="go('https://stream.newgroundsradio.com/radio.mp3')"><img src="./images/iu_968880_1.gif" height="100px"></button>	
					<button type="button" onclick="go('https://radio.lainchan.org/listen/lainchan_radio_main/radio.mp3')"><img src="https://lainchan.org/static/lain_banner1.png" height="100px"></button>	
					<button type="button" onclick="go('https://phoebe.streamerr.co:2330/;?type=http&nocache=1704750100')"><img src="https://asahidenpa.neocities.org/images/asahidenpa.svg" height="100px"></button>	

				</div>

				<div width="80%" style="margin-left:10%;">
					<audio id="radio" controls src=""> </audio>
				</div>
				
			</div>
		<?php 
			include "./cyberblankbottom.php"
		?>
