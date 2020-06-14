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

<link rel="stylesheet" href="../../resources/css/vendor.css">
<!-- <link rel="stylesheet" href="/resources/css/style.css"> -->
<script src="../../resources/js/vendor.js"></script>
<script src="../../resources/js/script.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="../assets/css/main.css" />
<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>
<body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K95V8MS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
    // セッションの開始
    session_start();

    function h($s) {
      return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }


    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // フォームから送信されたデータを各変数に格納
        $_SESSION['name'] = $name = h($_POST["name"]);
        $_SESSION['email'] = $email = h($_POST["email"]);
        $_SESSION['living_area'] = $living_area = h($_POST["living_area"]);
        $_SESSION['gender'] = $gender = h($_POST["gender"]);
        $_SESSION['occupation'] = $occupation = h($_POST["occupation"]);
        $_SESSION['wish_start_month'] = $wish_start_month = h($_POST["wish_start_month"]);
        $_SESSION['wish_term'] = $wish_term = h($_POST["wish_term"]);
        $_SESSION['category'] = $category = h($_POST["category"]);
        $_SESSION['tel'] = $tel = h($_POST["tel"]);
        $_SESSION['firstyear'] = $firstyear = h($_POST["firstyear"]);
        $_SESSION['firstmonth'] = $firstmonth = h($_POST["firstmonth"]);
        $_SESSION['firstday'] = $firstday = h($_POST["firstday"]);
        $_SESSION['firsttime'] = $firsttime = h($_POST["firsttime"]);
        $_SESSION['secondyear'] = $secondyear = h($_POST["secondyear"]);
        $_SESSION['secondmonth'] = $secondmonth = h($_POST["secondmonth"]);
        $_SESSION['secondday'] = $secondday = h($_POST["secondday"]);
        $_SESSION['secondtime'] = $secondtime = h($_POST["secondtime"]);
        $message = h($_POST["message"]);
        $_SESSION['message'] = h($_POST["message"]."無料英語体験レッスン希望");
        $_SESSION['refcode'] = $refcode = h($_POST["refcode"]);
        $formcode = 'INQ0004';

        if (empty($_POST["firstyear"]) or empty($_POST["firstmonth"]) or empty($_POST["firstday"]) or empty($_POST["firsttime"])) {
            header("location: index.php?error=2");
            exit;
        }

    }
?>

  <div class="header_wap">
    <header class="header">
        <?php
            include('../assets/inc/header.html');
        ?>
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
                        <input type="hidden" name="form[living_area]" value="<?php echo $living_area; ?>">
                        <input type="hidden" name="form[gender]" value="<?php echo $gender; ?>">
                        <input type="hidden" name="form[occupation]" value="<?php echo $occupation; ?>">
                        <input type="hidden" name="form[wish_start_month]" value="<?php echo $wish_start_month; ?>">
                        <input type="hidden" name="form[wish_term]" value="<?php echo $wish_term; ?>">
                        <input type="hidden" name="form[category]" value="<?php echo $category; ?>">
                        <input type="hidden" name="form[tel]" value="<?php echo $tel; ?>">
                        <input type="hidden" name="form[firstyear]" value="<?php echo $firstyear; ?>">
                        <input type="hidden" name="form[firstmonth]" value="<?php echo $firstmonth; ?>">
                        <input type="hidden" name="form[firstday]" value="<?php echo $firstday; ?>">
                        <input type="hidden" name="form[firsttime]" value="<?php echo $firsttime; ?>">
                        <input type="hidden" name="form[secondyear]" value="<?php echo $secondyear; ?>">
                        <input type="hidden" name="form[secondmonth]" value="<?php echo $secondmonth; ?>">
                        <input type="hidden" name="form[secondday]" value="<?php echo $secondday; ?>">
                        <input type="hidden" name="form[secondtime]" value="<?php echo $secondtime; ?>">
                        <input type="hidden" name="form[message]" value="<?php echo $_SESSION['message']; ?>">
                        <input type="hidden" name="thanks_url" value="https://nexseed.net/lp/contact/c-confirm.php">
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
                            <label class="subtitle_bule form_subtitle">カウンセリング方法：<?php echo $category; ?></label>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">Skype IDまたはお電話番号：<?php echo $tel; ?></label>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">第1ご希望カウンセリング日：<?php echo $firstyear; ?><?php echo $firstmonth; ?><?php echo $firstday; ?><?php echo $firsttime; ?></label>
                        </div>
                        <div>
                            <label class="subtitle_bule form_subtitle">第2ご希望カウンセリング日:<?php echo $secondyear; ?><?php echo $secondmonth; ?><?php echo $secondday; ?><?php echo $secondtime; ?></label>
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
                            <p><?php echo $message;?></p>
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
  include('../assets/inc/footer.html');
?>
</body>
</html>