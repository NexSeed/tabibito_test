<!DOCTYPE html>
<html lang="ja">
<head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K95V8MS');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>NexSeed 一生モノのセブ島留学</title>
<meta name="Keywords" content="NexSeed,フィリピン留学,セブ島,語学留学,語学学校,英語,ビジネス英語,格安,企業研修,短期留学,海外研修,グローバル人材,語学研修">
<meta name="description" content="フィリピン・セブ島留学のNexSeedは、グローバル人材を育成するための学校です。将来海外で活躍するために本当に必要な英語力とマインドを養うことを目指しています。">

<meta property="og:title" content="NexSeed 一生モノのセブ島留学">
<meta property="og:description" content="フィリピン・セブ島留学のNexSeedは、グローバル人材を育成するための学校です。将来海外で活躍するために本当に必要な英語力とマインドを養うことを目指しています。">
<meta property="og:type" content="website">
<meta property="og:url" content="https://nexseed.net">
<meta property="og:image" content="https://nexseed.net/img_ogp.jpg">

<link rel="stylesheet" href="/resources/css/vendor.css">
<!-- <link rel="stylesheet" href="/resources/css/style.css"> -->
<script src="/resources/js/vendor.js"></script>
<script src="/resources/js/script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />
<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body>
            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K95V8MS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
    function h($s) {
      return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }


    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = h($_POST["name"]);
        $email = h($_POST["email"]);
        $phone_number = h($_POST["tel"]);
        $message = h($_POST["message"]);
        $living_area = h($_POST["living_area"]);
        $gender = h($_POST["gender"]);
        $occupation = h($_POST["occupation"]);
        $wish_start_month = h($_POST["wish_start_month"]);
        $wish_term = h($_POST["wish_term"]);
        $refcode = h($_POST["refcode"]);
        $formcode = 'INQ0005_1';
    }
?>
<?php
  include('../resources/inc/header.html');
?>
  <div class="header_wap">
    <header class="header">

    </header>
  </div>
    <!-- ▽▽▽▽▽コンテンツ01▽▽▽▽▽ -->
  <!-- △△△△△コンテンツ01△△△△△ -->
        <!-- Contact -->
    <section id="contact" class="main style4 secondary">
                <div class="content">
                    <header>
                        <h2>確認画面</h2>
                        <p>こちらの内容でよろしいですか？</p>
                    </header>
                    <div>
                     <form action="https://nexseed.net/fd_common/fd_get_api.php?formcode=<?php echo $formcode; ?>" method="post">
                        <input type="hidden" name="form[name]" value="<?php echo $name; ?>">
                        <input type="hidden" name="form[email]" value="<?php echo $email; ?>">
                        <input type="hidden" name="form[tel]" value="<?php echo $phone_number; ?>">
                        <input type="hidden" name="form[message]" value="<?php echo $message; ?>">
                        <input type="hidden" name="form[living_area]" value="<?php echo $living_area; ?>">
                        <input type="hidden" name="form[gender]" value="<?php echo $gender; ?>">
                        <input type="hidden" name="form[occupation]" value="<?php echo $occupation; ?>">
                        <input type="hidden" name="form[wish_start_month]" value="<?php echo $wish_start_month; ?>">
                        <input type="hidden" name="form[wish_term]" value="<?php echo $wish_term; ?>">
                        <input type="hidden" name="thanks_url" value="https://nexseed.net/lp/contact/tabi-thanks.php">
                        <input type="hidden" name="mode" value="pro">
                        <input type="hidden" name="refcode" value="<?php echo $refcode; ?>">
                        <input type="hidden" name="formcode" value="<?php echo $formcode; ?>">
                    <div>
                        <div>
                            <label class="subtitle_bule form_subtitle form_subtitle_first"><?php echo $name; ?>様</label>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">メールアドレス：<?php echo $email; ?></label>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">お電話番号：<?php echo $phone_number; ?></label>
                        </div>
                        <!-- <div>
                            <label class="subtitle_bule form_subtitle">お住いの地域<sup>[必須]</sup></label>
                            <p><?php //echo $living_area; ?></p>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">性別<sup>[必須]</sup></label>
                            <p><?php //echo $gender; ?></p>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">職業<sup>[必須]</sup></label>
                            <p><?php //echo $occupation; ?></p>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">希望留学月<sup>[必須]</sup></label>
                            <p><?php //echo $wish_start_month; ?></p>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">希望留学期間<sup>[必須]</sup></label>
                            <p><?php //echo $wish_term; ?></p>
                        </div> -->
                        <div>
                            <label class="subtitle_bule form_subtitle">お問い合わせ内容</label>
                            <p><?php echo $message; ?></p>
                        </div>
                    </div>
                        <ul class="actions special">
                            <li><button type="button" value="戻る" onclick="history.back()"/>戻る</li>
                            <li><button type="submit" value="送信する" />送信する</li>
                        </ul>
                     </form>
                </div>
            </div><!-- form_box -->
        </div>
    </section>

<?php
  include('assets/inc/footer.html');
?>
</body>
</html>