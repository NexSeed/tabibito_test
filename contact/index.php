<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K95V8MS');</script>
<!-- End Google Tag Manager -->
		<title>NexSeed 一生モノのセブ島留学</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		<!-- <link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript2.css" /></noscript> -->
    <style type="text/css">
      .alert{
        margin-left: 25px;
        margin-top: 40px;
        margin-bottom: 0px;
        color:#b22222;
        width: 100%;
      }
      .scheduletitle{
        margin-top:10px;
      }
    </style>
	</head>
	<body class="is-preload">
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K95V8MS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php

	  function h($s) {
	    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
	  }
	  if (isset($_GET["ns_ref"])) {
	      $refcode = h($_GET["ns_ref"]);
	  }else{
	      $refcode = "";
	  }

	  $now_y = date("Y");
	  $now_m = date("Yn");
	?>
		<!-- Header -->
<!-- 			<header id="header">
				<h1><img src="../images/logo.png" width="50%"></h1>
				<nav>
					<ul>
						<li><a href="#work">私たちの理念</a></li>
						<li><a href="#one">NexSeedの英語留学</a></li>
						<li><a href="#two">講師の質</a></li>
						<li><a href="#three">Experience classとは</a></li>
						<li><a href="#carousel">１日の流れ</a></li>
						<li><a href="#price">留学費用</a></li>
						<li><a href="#contact">お問い合わせ</a></li>
					</ul>
				</nav>
			</header> -->


		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>無料体験レッスンのお申込み</h2>
						<p>実際のレッスン体験をご希望の方は、こちらからお申込みください。</p>
					</header>
					<div class="box">
						<form method="post" action="check-confirm.php" id="indexForm">
							<div class="fields">
								<input type="hidden" name="refcode" value="<?php echo $refcode; ?>">
								<div class="field half"><input type="text" name="name" placeholder="お名前" id="name" value="" class="name_box validate[required]" required/></div>
								<div class="field half"><input type="email" name="email" placeholder="メールアドレス" id="email" value="" class="validate[required]" required/></div>
								<div class="field half">
										<select name="category" id="category" type="method" class="validate[required]" data-prompt-position="bottomLeft" value="<?php if (isset($_SESSION['category'])) {echo $_SESSION['category']; }?>">
											<option value='' disabled selected style='display:none;' >カウンセリング方法を選んでください</option>
                    	<option >Skype</option>
                    	<option >お電話</option>
                 		</select>
               	</div>

								<div class="field half"><input type="text" name="tel" placeholder="Skype ID もしくは 電話番号" id="tel" value="" class="validate[required]" pattern="^[a-zA-Z0-9]+$"value="<?php if (isset($_SESSION['tel'])) {echo $_SESSION['tel']; }?>" required/></div>
								
								<!-- カウンセリング用 -->

                <!-- <div class="fields"> -->
                  <p class="alert">無料英語体験レッスンは、日本時間 平日10-16時に実施しています</p>

                  <div class="field quarter">
                    <p class="scheduletitle">第一希望&nbsp;&nbsp;[必須]：</p>
                  </div>
                  <div class="field half">
  								  <input type="date" name="firstdate" placeholder="yyyy/mm/dd" id="firstdate" value="" class="name_box validate[required]" onchange="validationdate(this,'firstdate');" required />
                  </div>
                  <div class="field quarter">
                   <select name="firsttime" id="firsttime" class="validate[required]" data-prompt-position="bottomLeft" required>
                      <option value=""  disabled selected style='display:none;' class="placeholder">時間</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                    </select>
                  </div>

                  <div class="field quarter">
                    <p class="scheduletitle">第二希望&nbsp;&nbsp;[任意]：</p>
                  </div>
                  <div class="field half">
                    <input type="date" name="seconddate" placeholder="yyyy/mm/dd" id="seconddate" value="" class="name_box validate[required]"  onchange="validationdate(this,'seconddate');"/>
                  </div>
                  <div class="field quarter">
                   <select name="secondtime" id="secondtime" class="validate[required]" data-prompt-position="bottomLeft">
                      <option value=""  disabled selected style='display:none;' class="placeholder">時間</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                    </select>
                  </div>
                <!-- </div> -->
                <input type="hidden" name="firstyear" id="firstyear" >
                <input type="hidden" name="firstmonth" id="firstmonth" >
                <input type="hidden" name="firstday" id="firstday" >
                <input type="hidden" name="secondyear" id="secondyear" >
                <input type="hidden" name="secondmonth" id="secondmonth" >
                <input type="hidden" name="secondday" id="secondday" >


								<div class="field">
									<textarea name="message" placeholder="その他お気軽にご相談ください" rows="6" id="message"><?php if (isset($_SESSION['message'])){echo $_SESSION['message'];}?></textarea>
								</div>
            
		            <input name="living_area" value="" type="hidden" />
		            <input name="gender" value="" type="hidden" />
		            <input name="occupation" value="" type="hidden" />
		            <input name="wish_start_month" value="" type="hidden" />
		            <input name="wish_term" value="" type="hidden" />
						</div>
							
							<ul class="actions special">
								<li><input type="submit" value="確認画面へ" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>


    <!-- Footer -->
      <?php 
        include('assets/inc/footer.html');
      ?>


		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.poptrox.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

      <script type="text/javascript">
        
        function validationdate(obj,objId){
          var dObj = new Date(obj.value);
          var wDay = dObj.getDay();

          if ((wDay == 0 ) || (wDay == 6)){
            alert("平日を指定してください");
            document.getElementById(objId).value = "";

            if (objId == 'firstdate'){
              document.getElementById("firstyear").value = "";
              document.getElementById("firstmonth").value = "";
              document.getElementById("firstday").value = "";
            }else{
              document.getElementById("secondyear").value = "";
              document.getElementById("secondmonth").value = "";
              document.getElementById("secondday").value = "";
            }
          }else{

            if (objId == 'firstdate'){
              document.getElementById("firstyear").value = dObj.getFullYear();
              document.getElementById("firstmonth").value = dObj.getMonth() + 1;
              document.getElementById("firstday").value = dObj.getDate();
            }else{
              document.getElementById("secondyear").value = dObj.getFullYear();
              document.getElementById("secondmonth").value = dObj.getMonth() + 1;
              document.getElementById("secondday").value = dObj.getDate();
            }

          }

        }
      </script>
	</body>
</html>