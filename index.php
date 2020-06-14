<!DOCTYPE HTML>

<html>

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-K95V8MS');
	</script>
	<!-- End Google Tag Manager -->
	<title>NexSeed 旅人エンジニア留学</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Keywords" content="NexSeed,フィリピン留学,セブ島,語学留学,語学学校,英語,ビジネス英語,格安,企業研修,短期留学,海外研修,グローバル人材,語学研修,旅人エンジニア留学">
	<meta name="description" content="旅人エンジニアになるために3週間で英語とWordPressの知識、自分の仕事を作るノウハウを学ぶ留学です。事前学習＋3週間の留学で、月に5万円稼げるプログラミングスキルを身に付けることを旅人エンジニア留学のゴールとします。">

	<meta property="og:title" content="NexSeed 旅人エンジニア留学">
	<meta property="og:description" content="旅人エンジニアになるために3週間で英語とWordPressの知識、自分の仕事を作るノウハウを学ぶ留学です。事前学習＋3週間の留学で、月に5万円稼げるプログラミングスキルを身に付けることを旅人エンジニア留学のゴールとします。">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://nexseed.net/lp/tabibito-engineer">
	<meta property="og:image" content="http://nexseed.net/tabibito-engineer.jpg">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="../inc/footer.css">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<!-- <link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript2.css" /></noscript> -->

	<script>
		(function(d) {
			var config = {
					kitId: 'mea8unq',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
</head>

<body class="is-preload">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K95V8MS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php

	function h($s)
	{
		return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
	}
	if (isset($_GET["ns_ref"])) {
		$refcode = h($_GET["ns_ref"]);
	} else {
		$refcode = "";
	}

	$now_y = date("Y");
	$now_m = date("Yn");
	?>
	<!-- Header -->
	<?php
	include('assets/inc/header2.html');
	?>

	<!-- Intro -->
	<section id="intro" class="main style1 dark fullscreen">
		<!--				<video src="images/top.mp4" muted autoplay loop poster="images/one.jpg" preload="none"></video>-->
		<div class="content">
			<header class="kazuraki-font">

			</header>
			<footer>
				<img src="images/logotabi.png" alt="旅人エンジニア留學" class="intro-img-logo">
			</footer>

		</div>
		<a href="#work" class="button style2 down anchored">Next</a>
	</section>

	<!-- Covid19 -->
	<section id="work" class="main style3 primary">
		<div class="content">
			<header>
				<h3>新型コロナウイルスの影響を受け</h3>
				<h2>旅人エンジニア留学が<strong style="color: red;">オンライン</strong>になりました</h2>
			</header>
			<p>
				新型コロナウイルスの影響を受け、旅人エンジニア留学の授業をご自宅から受講いただけるようにアップデートしました。<br>
				外出自粛中の今だからこそ、集中してプログラミングと英語をオンラインで学び、月5万円を稼ぐ力を身に着けよう。
			</p>

			<div class="conversion_btn">
				<p><a href="#curriculum">詳しいカリキュラムはこちら</a></p>
			</div>

		</div>
	</section>

	<!-- inq -->
	<section id="inq" class="main style3 secondary">
		<div class="content">
			<header>
				<h2>まずはお気軽にお問い合わせください</h2>
				<p>NexSeedでは、LINEでお問い合わせを承っております。<br>カリキュラムや料金、申込方法について気になることがございましたら、<br>下のボタンよりお友達追加お願いいたします。</p>
			</header>

			<div class="conversion_btn">
				<p><a href="https://landing.lineml.jp/r/1638679644-4O1W9WP9?lp=YwYssx">詳細をLINEで問い合わせ</a></p>
			</div>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="main style2 right dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>リモートワークで月5万円を稼げるようになる</h2>
			</header>
			<p>
				旅人エンジニア留学の成功は3週間で月に5万円を自分の力で稼げる技術を身につけること。<br>自分だけの自己紹介ページとWordPressサイトを学びながら立ち上げて、実際に仕事を見つける動きをするところまで期間内で進めます。実践形式にこだわります。<br><br>カリキュラムには英語力を伸ばすためのマンツーマン授業も含まれます。エンジニアとしての仕事は日本国内に限らず、世界各地にありますからシンガポールチームとの仕事が終わったら、次はインドからの仕事へとグローバルに働く旅人エンジニアを目指しましょう。<br><br>NexSeedのエンジニア留学は2018年時点で1,500名以上の卒業生数を誇り、就職率は92%、起業数18社以上と、圧倒的な成果を残しています。
			</p>
		</div>
		<a href="#two" class="button style2 down anchored">Next</a>
	</section>

	<!-- Two -->
	<section id="two" class="main style2 left dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>NexSeed専任エンジニア講師の手厚いサポート</h2>
			</header>
			<p>
				旅人エンジニア授業では、少人数に対して、専任のエンジニア講師がしっかりサポートします。<br>
				Seed Tech Schoolではこれまで2000人以上の卒業生を送り出してきました。その経験を生かした挫折しない仕組みで、みなさんが目標に辿り着けるよう全力でサポートします。<br>
				授業の時間外にも、Slackというコミュニケーションツール上で質問ができますので、自習する際に答えがわからず、何時間も一人で悩むという心配も無用です。
			</p>
		</div>
		<a href="#three" class="button style2 down anchored">Next</a>
	</section>

	<!-- One -->
	<section id="three" class="main style2 right dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>特別講師と共に、将来を設計する</h2>
			</header>
			<p>
				本コースでは、<a href="http://inc.tabippo.net/">株式会社TABIPPO</a>より、TABIPPO.NET編集長の前田塁氏を講師に迎えます。<br>
				前田編集長自身も、世界64カ国を旅しながらフリーランスとしても働いている、いわば卒業後のロールモデルです。<br><br>旅人エンジニアとして成功するためには、少数派として自分を律しながら、戦略と計画を持って人生をコントロールしていく必要があります。新しい時代の働き方ですから、両親や友人は答えを持っていません。<br><br>これからどんな人生を過ごしていくのかを一緒に考えてみませんか。様々なワークショップやコミュニケーションの機会をご用意してお待ちしてます。

			</p>
		</div>
		<!-- <a href="#carousel" class="button style2 down anchored">Next</a> -->
	</section>

	<!-- inq -->
	<section id="inq" class="main style3 secondary">
		<div class="content">
			<header>
				<h2>まずはお気軽にお問い合わせください</h2>
				<p>NexSeedでは、LINEでお問い合わせを承っております。<br>カリキュラムや料金、申込方法について気になることがございましたら、<br>下のボタンよりお友達追加お願いいたします。</p>
			</header>

			<div class="conversion_btn">
				<p><a href="https://landing.lineml.jp/r/1638679644-4O1W9WP9?lp=YwYssx">詳細をLINEで問い合わせ</a></p>
			</div>
		</div>
	</section>

	<section id="teachers" class="main style4 primary">

		<div class="content-location">
			<header>
				<h2>講師紹介</h2>
				<h3>Teacher</h3>
				<p>
					「旅人エンジニア留学」を担当する講師の紹介です。本コースでは、メイン講師として株式会社TABIPPOの前田編集長、授業内容や進路について相談できるメンターのKohが授業をご提供します。
				</p>
			</header>
			<div class="flexwrap">
				<div class="imgbox-office">
					<img src="images/ruimaeda.jpg" alt="ruimaeda">
				</div>
				<div class="textbox-office">
					<h3>前田 塁（まえだ るい）</h3>
					<p>講師</p>
					<hr>
					<p>
						　リモートワークとインターネットが得意分野です。世界一周→大阪ガス→オプト→<a href="https://tabippo.net/">TABIPPO</a>起業。193ヶ国訪問と宇宙旅行を目指して79ヶ国を訪問しました。1人10職しながら好きな場所で暮らす秘訣を毎日ブログ「<a href="https://ruimaeda.com/">Work Life Chaos</a>」で公開してます
					</p>
				</div>
			</div>

			<div class="flexwrap right">
				<div class="imgbox-office">
					<img src="images/koh.jpg" alt="koh">
				</div>
				<div class="textbox-office right">
					<h3>Koh</h3>
					<p>メンター</p>
					<hr>
					<p>
						　趣味は地図に載っていないスポットの探索です。 中卒で美容師→世界の路上でヘアカット→副業のライターでバズる→美容師引退→タイ移住→ジョージア移住。 世界１９ヶ国を旅してきてジョージアの魅力に溺れました。 上場企業運営のメディアや旅行業界最大級のメディアで執筆中。
					</p>
				</div>
			</div>

			<div class="flexwrap">
				<div class="imgbox-office">
					<img src="images/takeru_kayamori.jpg" alt="takerukayamori">
				</div>
				<div class="textbox-office">
					<h3>栢森 威瑠（かやもり たける）</h3>
					<p>プログラミング講師</p>
					<hr>
					<p>
						　早稲田大学政治経済学部卒業後、IT x 英語の2つのスキルを身につけるため、約1年半、アメリカに留学。語学を身に付けつつ、ITの本場サンフランシスコで、生徒数200名以上の大規模なプログラミングスクール「General Assembly」を唯一の日本人として卒業。<br>
						　文系出身のエンジニアとして、初心者の立場に立った丁寧な指導を得意とする。
					</p>
				</div>
			</div>

		</div>
	</section>
	<section id="webinar">
		<h2>ウェビナーのご案内</h2>
		<div class="webinars-wrap">
			<div class="webinar-card">
				<div class="webinar-card-head"></div>
				<h3>ノマドになるための攻略</h3>
				<img class="webinar-icon" src="images/icon_telecommuting.png" alt="nomad_icon">
				<ul>
					<li>KOH</li>
					<span class="slash"> / </span>
					<li>７月１日（月）</li>
					<span class="slash"> / </span>
					<li>１９時〜２０時</li>
				</ul>
				<p>趣味は地図に載っていないスポットの探索です。 中卒で美容師→世界の路上でヘアカット→副業のライターでバズる→美容師引退→タイ移住→ジョージア移住。 世界１９ヶ国を旅してきてジョージアの魅力に溺れました。 上場企業運営のメディアや旅行業界最大級のメディアで執筆中。</p>
			</div>
			<div class="webinar-card">
				<div class="webinar-card-head"></div>
				<h3>旅行と仕事が両立できる仕事一覧</h3>
				<img class="webinar-icon" src="images/icon_world-map.png" alt="nomad_icon">
				<ul>
					<li>前田ルイス</li>
					<span class="slash"> / </span>
					<li>７月２日（木）</li>
					<span class="slash"> / </span>
					<li>１９時〜２０時</li>
				</ul>
				<p>趣味は地図に載っていないスポットの探索です。 中卒で美容師→世界の路上でヘアカット→副業のライターでバズる→美容師引退→タイ移住→ジョージア移住。 世界１９ヶ国を旅してきてジョージアの魅力に溺れました。 上場企業運営のメディアや旅行業界最大級のメディアで執筆中。</p>
			</div>
			<div class="webinar-card">
				<div class="webinar-card-head"></div>
				<h3>独学の講座学習の方法</h3>
				<img class="webinar-icon icon-monitor" src="images/icon_monitor.png" alt="nomad_icon">
				<ul>
					<li>栢森威瑠</li>
					<span class="slash"> / </span>
					<li>７月３日（金）</li>
					<span class="slash"> / </span>
					<li>１９時〜２０時</li>
				</ul>
				<p>趣味は地図に載っていないスポットの探索です。 中卒で美容師→世界の路上でヘアカット→副業のライターでバズる→美容師引退→タイ移住→ジョージア移住。 世界１９ヶ国を旅してきてジョージアの魅力に溺れました。 上場企業運営のメディアや旅行業界最大級のメディアで執筆中。</p>
			</div>
		</div>
	</section>

	<section class="main style3 secondary">
		<div class="content" id="video">
			<header>
				<h2>旅人の生活</h2>
				<h3>life of Traveler</h3>
				<p>
				仕事をしながら、冬のアイスランドをレンタカーで旅した時の映像です。<br>11時に日が昇り15時には暗くなるので、昼は一生懸命に旅行をして、夜は仕事してました。<br>旅人エンジニアは、インターネットさえあれば、どんな場所でも無制限に旅ができます。(前田塁)
				</p>
			</header>
			<div class="video-cm">
				<iframe width="100%" height="auto" src="https://www.youtube.com/embed/lltchgxW-xc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<!-- Work -->
	<section id="curriculum" class="main style3 primary">
		<div class="content">
			<header>
				<h2>「旅人エンジニア留学」 カリキュラム</h2>
				<h3>Curriculum</h3>
				<p>旅人エンジニア留学はプログラミング以外にも英語授業と旅人エンジニアとしての授業（仕事の取り方や旅と仕事の両立）がセットです。
					英語授業は1日3コマのマンツーマン授業です。また、NexSeedのエンジニア講師からプログラミングの講義を、特別講師の前田氏とKOH氏から稼ぐ方法や、仕事の受託方法、営業方法、自分のメディアを作る方法など、幅広い講義を行います。</p>
			</header>
			<!-- カリキュラム予定表 -->
			<!-- KOHさん -->
			<span class="test">Test</span>
			<div class="switch-btns">
				<button class="btn-a btn-active">KOH</button>
				<button class="btn-b">前田ルイス</button>
			</div>
			<table class="tbl-r02 table-a table-c-a">
				<tr>
					<th rowspan="1">事前学習</th>
					<td colspan="2">Web基礎、HTML/CSS基礎、UI/UX</td>
				</tr>
				<!-- 1週目 -->
				<tr>
					<th rowspan="5">1週目</th>
					<td>オリエンテーション<br>KOHの稼ぎ方</td>
					<td>事前学習総復習</td>
				</tr>
				<tr>
					<td>理想の人生、僕たちはいくら必要なのか</td>
					<td rowspan="2">セマンティックHTML、レスポンシブデザイン</td>
				</tr>
				<tr>
					<td>マインドマップ作成【ワークショップ】</td>
				</tr>
				<tr>
					<td>マインドマップ発表【ワークショップ】</td>
					<td rowspan="2">デザインカンプ10本ノック</td>
				</tr>
				<tr>
					<td>稼ぎ続けるフリーランスになる方法</td>
				</tr>
				
				<!-- 2週目 -->
				<tr>
					<th rowspan="5">2週目</th>
					<td>外こもりのススメ</td>
					<td rowspan="2">オリジナルテーマ開発</td>
				</tr>
				<tr>
					<td>案件獲得のための営業講座</td>
				</tr>
				<tr>
					<td>海外旅行を安く、快適に、楽しくする21の裏技</td>
					<td rowspan="2">プラグイン10本ノック</td>
				</tr>
				<tr>
					<td>エンジニアフリーランスとして大切なこと</td>
				</tr>
				<tr>
					<td>旅を仕事にする方法（エンジニアとしての未来を明るく）</td>
					<td>オウンドメディア企画・設計</td>
				</tr>
				<!-- 3週目 -->
				<tr>
					<th rowspan="7">3週目</th>
					<td>何でも質問会で、モヤモヤを解消</td>
					<td rowspan="5">オウンドメディア開発(wordpress実践)</td>
				</tr>
				<tr>
					<td>仕事を獲得するSNS運用・ブランディング</td>
				</tr>
				<tr>
					<td>あらゆる効果を最大化するファンアウトマーケティング思考</td>
				</tr>
				<tr>
					<td>駆け出しエンジニアの取り組みやすい案件</td>
				</tr>
				<tr>
					<td>これからの旅人エンジニア・旅人フリーランス</td>
				</tr>
				<tr>
					<td colspan="3">卒業プレゼンテーション</td>
				</tr>
			</table>
			<!-- ルイスさん -->
			<table class="tbl-r02 table-b table-c-b hide-element">
				<tr>
					<th rowspan="1">事前学習</th>
					<td colspan="2">Web基礎、HTML/CSS基礎、UI/UX</td>
				</tr>
				<!-- 1週目 -->
				<tr>
					<th rowspan="5">1週目</th>
					<td>オリエンテーション<br>前田塁の旅をしながら稼ぐ方法をネタバレ</td>
					<td>事前学習総復習</td>
				</tr>
				<tr>
					<td>理想の生活にいくら稼げばいいのか？</td>
					<td rowspan="2">セマンティックHTML、レスポンシブデザイン</td>
				</tr>
				<tr>
					<td>WordPressエンジニアが最強である理由</td>
				</tr>
				<tr>
					<td>人生でやりたい100のリストで未来を計算する</td>
					<td rowspan="2">デザインカンプ10本ノック</td>
				</tr>
				<tr>
					<td>フリーランスエンジニアとして稼ぎ続ける秘訣</td>
				</tr>
				
				<!-- 2週目 -->
				<tr>
					<th rowspan="5">2週目</th>
					<td>外こもりなら生活費5万円で豊かに暮らせる</td>
					<td rowspan="2">オリジナルテーマ開発</td>
				</tr>
				<tr>
					<td>未経験の業界で仕事を獲得する25の方法</td>
				</tr>
				<tr>
					<td>海外旅行を安く楽しくする45の裏技</td>
					<td rowspan="2">プラグイン10本ノック</td>
				</tr>
				<tr>
					<td>仕事が途切れないエンジニアの特徴</td>
				</tr>
				<tr>
					<td>旅行と両立できる46の職業</td>
					<td>オウンドメディア企画・設計</td>
				</tr>
				<!-- 3週目 -->
				<tr>
					<th rowspan="6">3週目</th>
					<td>何でも質問会で、モヤモヤを解消</td>
					<td rowspan="4">オウンドメディア開発(wordpress実践)</td>
				</tr>
				<tr>
					<td>仕事を獲得するSNS運用</td>
				</tr>
				<tr>
					<td>これからの旅人エンジニア・旅人フリーランス</td>
				</tr>
				<tr>
					<td>クラウドソーシングで仕事を見つける</td>
				</tr>
				<tr>
					<td colspan="3">卒業プレゼンテーション</td>
				</tr>
			</table>

			<div class="conversion_btn">
				<p><a href="https://landing.lineml.jp/r/1638679644-4O1W9WP9?lp=YwYssx">詳細をLINEで問い合わせ</a></p>
			</div>
		</div>
	</section>

	<section class="main style4 primary">
				<div class="content"  id="portfolio">
					<h2>PORTFOLIO</h2>
					<h3>NexSeedのエンジニア留学で作られた作品</h3>
					<div class="forsp">※横にスクロールしてください</div>
				</div>
			</section>
						<!-- Carousel -->
				<section class="carousel" id="carousel">
					<div class="reel">
						<article>
							<a href="http://nexseed.net/portfolio/bucket_lists/users/home" class="image featured"><img src="images/work_img01.jpg" alt="" /></a>
							<header>
								<h3>BUSCKET LIST</h3>
							</header>
							<p>死ぬまでにしたい100のことを共有して、同じ思いを持つ人と繋がることができるSNSサイト。</p>
						</article>

						<article>
							<a href="https://nexseed.net/portfolio/photovote/" class="image featured"><img src="images/work_img02.jpg" alt=""/></a>
							<header>
								<h3>Photo vote</h3>
							</header>
							<p>旅先や私生活で撮影したお気に入りの写真を投稿しランキング表示する、写真共有SNSサイト。</p>
						</article>

						<article>
							<a href="http://nexseed.net/portfolio/fly_high/" class="image featured"><img src="images/work_img03.jpg" alt="" /></a>
							<header>
								<h3>Fly High</h3>
							</header>
							<p><a href="https://tabippo.net/">TABIPPO</a>前田編集長がエンジニア留学で開発！旅人必見、格安航空券情報を定期的に配信してくれるサービス.</p>
						</article>

						<article>
							<a href="http://nexseed.net/portfolio/chocomallow/" class="image featured"><img src="images/work_img04.jpg" alt="" /></a>
							<header>
								<h3>Batch</h3>
							</header>
							<p>来た時期を超えて、NexSeedの留学生がバッチメイト以外とも繋がれる、ClosedなSNSサービスです。</p>
						</article>

						<article>
							<a href="http://nexseed.net/portfolio/Joynt/" class="image featured"><img src="images/work_img05.jpg" alt="" /></a>
							<header>
								<h3>joynt</h3>
							</header>
							<p>ダウン症の子どもたちの進路に悩む家族の為に、同じ情報を持つ人と相談できるSNSサービスです。</p>
						</article>

						<article>
							<a href="https://nexseed.net/portfolio/packingme/top.php" class="image featured"><img src="images/work_img06.jpg" alt="" /></a>
							<header>
								<h3>Packing Me!</h3>
							</header>
							<p>旅人やエンジニアのバックの中身が気になるところから生まれた、バックの中身写真を集めたSNSです。</p>
						</article>

						<article>
							<a  href="https://itunes.apple.com/jp/app/%E3%81%AA%E3%81%8C%E3%82%89%E9%9B%BB%E5%8D%93-%E3%82%AB%E3%83%A1%E3%83%A9%E3%83%AD%E3%83%BC%E3%83%AB%E3%81%AE%E7%94%BB%E5%83%8F%E3%82%92%E8%A6%8B%E3%81%AA%E3%81%8C%E3%82%89%E9%9B%BB%E5%8D%93%E5%85%A5%E5%8A%9B/id1324846719?mt=8" class="image featured"><img src="images/nagara.jpg" alt="" /></a>
							<header>
								<h3>ながら電卓</h3>
							</header>
							<p>猫の手も借りたいあなたへ。カメラロールのレシート画像を見ながら計算ができる電卓アプリです。</p>
						</article>

						<article>
							<a href="https://itunes.apple.com/jp/app/jinnilee/id1327876988?mt=8" class="image featured"><img src="images/jinnilee.jpg" alt="" /></a>
							<header>
								<h3>jinnilee</h3>
							</header>
							<p>初めての国に行く時に簡単に日本人宿を見つけられる世界中の日本人が経営する宿をリストアップした一覧アプリです。</p>
						</article>

						<article>
							<a href="https://itunes.apple.com/jp/app/%E3%81%88%E3%82%89%E3%81%B6%E3%81%8C%E3%81%84%E3%81%A9/id1298414365?mt=8&ign-mpt=uo%3D4" class="image featured"><img src="images/erabu.jpg" alt="" /></a>
							<header>
								<h3>えらぶがいど</h3>
							</header>
							<p>様々な名作映画の舞台となってきた沖永良部島の情報すべてが詰まっている、南の島に行きたくなるアプリです。</p>
						</article>
					</div>
				</section><!-- Carousel -->


	<!-- Work -->
	<section id="price" class="main style3 primary">
		<div class="content">
			<header>
				<h2>「旅人エンジニア留学」 概要</h2>
			</header>

			<div class="switch-btns">
				<button class="btn-a btn-active">KOH</button>
				<!-- <button>KOH</button> -->
				<button class="btn-b">前田ルイス</button>
			</div>
			<!-- 料金表 -->
			<!--  -->
			<table class="tbl-r02 table-a table-d-a">
				<tbody>
					<tr>
						<th rowspan="1">開催時期</th>
						<td colspan="3">2020年8月10日〜2020年8月28日</td>
					</tr>
					<tr>
						<th rowspan="1">旅人授業講師</th>
						<td colspan="3">KOH</td>
					</tr>
					<tr>
						<th rowspan="1">参加人数<sup>※</sup></th>
						<td colspan="2">20名</td>
					</tr>
					<tr>
						<th rowspan="1">提供授業</th>
						<td colspan="2">旅人エンジニア授業(プログラミング授業 + 特別授業) 1日3コマ<br>英語授業1日3コマ</td>
					</tr>
					<tr>
						<th rowspan="1">料金</th>
						<!-- <td>英語授業あり</td> -->
						<td>¥238,000</td>
					</tr>
					<tr>
						<th rowspan="1">お申し込み締切</th>
						<td colspan="2">2020年8月7日</td>
					</tr>
					<tr>
						<th rowspan="1">特典</th>
						<td colspan="2">新型コロナウイルス影響収束後、1日6コマ2週間の英語留学</td>
					</tr>
				</tbody>
			</table>
			<table class="tbl-r02 table-b table-d-b hide-element">
				<tbody>
					<tr>
						<th rowspan="1">開催時期</th>
						<td colspan="3">2020年8月31日〜2020年9月25日</td>
					</tr>
					<tr>
						<th rowspan="1">旅人授業講師</th>
						<td colspan="3">前田ルイス</td>
					</tr>
					<tr>
						<th rowspan="1">参加人数<sup>※</sup></th>
						<td colspan="2">20名</td>
					</tr>
					<tr>
						<th rowspan="1">提供授業</th>
						<td colspan="2">旅人エンジニア授業(プログラミング授業 + 特別授業) 1日3コマ<br>英語授業1日3コマ</td>
					</tr>
					<tr>
						<th rowspan="3">授業スケジュール</th>
						<td>英語</td>
						<td>月〜金　18:00-19:00</td>
					</tr>
					<tr>
						<td>プログラミング</td>
						<td>月・水・金　19:00-21:00</td>
					</tr>
					<tr>
						<td>旅人授業</td>
						<td>火・木　19:00-21:00</td>
					</tr>
					<tr>
						<th rowspan="1">お申し込み締切</th>
						<td colspan="2">2020年8月7日</td>
					</tr>
					<tr>
						<th rowspan="1">特典</th>
						<td colspan="2">新型コロナウイルス影響収束後、1日6コマ2週間の英語留学</td>
					</tr>
				</tbody>
			</table>
			
			<span style="font-size:9pt;">※お問い合わせ状況によって参加人数を増枠する可能性があります。<br>※上記に加えて2週間の留学の際に、渡航費用、出国費用、VISA費用、生活費用が必要です。</span><br>
			<div class="conversion_btn">
				<p><a href="https://landing.lineml.jp/r/1638679644-4O1W9WP9?lp=YwYssx">詳細をLINEで問い合わせ</a></p>
			</div>
		</div>
	</section>
	<section id="rec-to">
		<h2>こんな方におすすめ</h2>
		<div class="rec-wrap">
			<div class="rec-item">
				<img src="images/takeru_kayamori.jpg" alt="">
				<div class="rec-item-bottom">
					<h3>旅と仕事を両立したい人</h3>
					<p>旅が大好きで、海外や国内のまだ知らない場所を移動しながら仕事をしたい！という人に向けた講座です。エンジニアなら旅と仕事の両立は必ずできます。</p>
				</div>
			</div>
			<div class="rec-item">
				<img src="images/takeru_kayamori.jpg" alt="">
				<div class="rec-item-bottom">
					<h3>技術を身につけて場所に縛られたくない人</h3>
					<p>旅人エンジニア専業だけではなく、副業で挑戦してみたい方の参加も歓迎です。プログラミングの勉強をしていたけれど挫折した経験があれば、リベンジしませんか？</p>
				</div>
			</div>
			<div class="rec-item">
				<img src="images/takeru_kayamori.jpg" alt="">
				<div class="rec-item-bottom">
					<h3>ワクワクするものを作りたい人</h3>
					<p>サイトやサービス、アプリを作り出す仕事はとてもクリエイティブです。エンジニアとしての技術があれば、自分が作りたい、ワクワクするものを作って、稼ぐことができます。</p>
				</div>
			</div>
		</div>
	</section>
	<section id="reviews">
		<h2>第１期生の声</h2>
		<div class="review-content">
			<h3 class="">開講中のツイート</h3>
			<div class="review-content-inner">
				<div class="tweets-wrap">
					<div class="grid-item tweet-grid1">
						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">打ち込めることもなく<br>ずっと迷走しながら過ごしていたので<br>3週間で鬼のように成長した気分<br><br>1人じゃ絶対無理だった👩🏻‍💻<br><br>皆さんに出会い、新しい自分にも出会い<br>参加して本当に良かったと思ってる今<br><br>(もう1つLPを作ってる途中に突然キタ)<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a> <a href="https://t.co/xuRQFvLGvI">pic.twitter.com/xuRQFvLGvI</a></p>&mdash; つぐ🐑 (@yp_17_) <a href="https://twitter.com/yp_17_/status/1266763958209282048?ref_src=twsrc%5Etfw">May 30, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>

						
					</div>

					<div class="grid-item tweet-grid2">
						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">3週間ぶち込んでフロントエンジニアスキルを習得しました🧑‍💻<br><br>感想としては独学だと同じ到達点まで1年かかったり挫折してただろうなという感じです...!!!<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a> <a href="https://t.co/LVjoD2iAH7">pic.twitter.com/LVjoD2iAH7</a></p>&mdash; KOH🇬🇪 (@Luck81O) <a href="https://twitter.com/Luck81O/status/1266371862751133698?ref_src=twsrc%5Etfw">May 29, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>

						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">画像のサイズ変わらない事に30分くらい悩んだけどめちゃくちゃ初期の頃に習ったしこの時間だしどうにか自分でやりたくて粘ったらまじでドット一個抜けてて反映されてなくてほんっっとに心の底からぴえんが出た。ぐぎぎ…<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a>　🥕</p>&mdash; はるか🥕にんじんエンジニア (@jkjnyn4rang) <a href="https://twitter.com/jkjnyn4rang/status/1265277641738731523?ref_src=twsrc%5Etfw">May 26, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>

					</div>

					<div class="grid-item tweet-grid3">
						<div class="tweet">

							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">【旅人エンジニア留学】11日目<br><br>・感想<a href="https://twitter.com/NY_ruisu?ref_src=twsrc%5Etfw">@NY_ruisu</a> さんと<a href="https://twitter.com/Luck81O?ref_src=twsrc%5Etfw">@Luck81O</a> <br>さんへの質問コーナー楽しい😆<br><br>・英語<br>自分が考えてることを英語で<br><br>・プログラミング<br>ドメインとサーバーとるの簡単！<a href="https://twitter.com/NexSeed_Cebu?ref_src=twsrc%5Etfw">@NexSeed_Cebu</a> <a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a><a href="https://twitter.com/hashtag/%E6%97%85%E3%81%99%E3%82%8B%E3%82%88%E3%81%86%E3%81%AB%E5%83%8D%E3%81%8D%E7%94%9F%E3%81%8D%E3%82%8B?src=hash&amp;ref_src=twsrc%5Etfw">#旅するように働き生きる</a> <a href="https://twitter.com/hashtag/%E9%A7%86%E3%81%91%E5%87%BA%E3%81%97%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2?src=hash&amp;ref_src=twsrc%5Etfw">#駆け出しエンジニア</a> <a href="https://twitter.com/hashtag/IT%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#IT留学</a><a href="https://twitter.com/hashtag/nexseed?src=hash&amp;ref_src=twsrc%5Etfw">#nexseed</a></p>&mdash; 鈴木 俊樹 (@08to05shi) <a href="https://twitter.com/08to05shi/status/1264932068242239488?ref_src=twsrc%5Etfw">May 25, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>

						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">おすすめしないけどやってる人が多いフリーランス的スキルアップ方法は、背伸びをした仕事を取る、提案すること。調べつつやる。<br><br>ただし、各分野で師匠的な人を必ず見つけておくこと。相談できる人がいない状況だと非常に辛い。<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a></p>&mdash; Kuniyoshi Ichi (@92441K) <a href="https://twitter.com/92441K/status/1263630572183629825?ref_src=twsrc%5Etfw">May 22, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
					<div class="grid-item tweet-grid4">
						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">授業には直接は関係ないですが<br>持続化給付金の申請出来ました！🎊✨<br>ずっと内容を勘違いしていて対象でない…と思っていたのですが　<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a>　の講師陣は<br>フリーランスの大先輩なので相談できて対象だと判明！<br>仲間がいるとこうも心強いとは…😭　感謝感謝です🙇🏻‍♀️🙇🏻‍♀️<br>(結構本気で助かった)</p>&mdash; はるか🥕にんじんエンジニア (@jkjnyn4rang) <a href="https://twitter.com/jkjnyn4rang/status/1261970834123448321?ref_src=twsrc%5Etfw">May 17, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div class="tweet">
							<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">終わってしまった。😢<br>この気持ちを忘れずに。<br>もっと成長したくなりました。<br>私もウェブマスター目指しちゃおう！<br>皆さんに会う時はまた成長しているように！！<a href="https://twitter.com/hashtag/%E6%97%85%E4%BA%BA%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E7%95%99%E5%AD%A6?src=hash&amp;ref_src=twsrc%5Etfw">#旅人エンジニア留学</a></p>&mdash; はるか🥕にんじんエンジニア (@jkjnyn4rang) <a href="https://twitter.com/jkjnyn4rang/status/1266403606447570944?ref_src=twsrc%5Etfw">May 29, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="review-content">
			<h3 class="">卒業生コメント</h3>
			<div class="comments-wrap">
				<div class="comment">
					<div class="comment-img-wrap"><img src="images/student_haruka_h.jpg" alt="student-pic"></div> 
					<div class="comment-text">
						<p class="student-name">橋本 遥</p>
						<p class="student-job">フリーランス</p>
						<p class="student-comment">
							旅人とエンジニア？と思うかもしれませんが、学べるのはそれだけではありません。<br>
							3週間って短いですが、大人になってからは感じづらかった真剣に何かをすることへの達成感も感じられて、私は<strong>これからの自分の人生の生き方まで考えるきっかけになりました。</strong>それと大人になってから出来る仲間ってなんか良いです！みんな本気ですよ！</p>
					</div>
				</div>
				<div class="comment">
					<div class="comment-text">
						<p class="student-name">鈴木 俊樹</p>
						<p class="student-job">学生</p>
						<p class="student-comment">旅するエンジニアになりたいと思いつつも<strong>中々行動することができなかった自分にとって貴重な経験となりました。</strong>わからないことはなんでも質問できる講師の方々と同じ目的を持った仲間と学習でき、とても成長しました。旅とプログラミングと英語を学べる３週間は最高でした！！</p>
					</div>
					<div class="comment-img-wrap"><img src="images/student_toshiki_s.jpg" alt="student-pic"></div> 
				</div>
				<div class="comment">
					<div class="comment-img-wrap"><img src="images/student_yurina_t.jpg" alt="student-pic"></div> 
					<div class="comment-text">
						<p class="student-name">多田優里奈</p>
						<p class="student-job">フリーランス</p>
						<p class="student-comment">プログラミングの技術に加え、それを活かしてどんな生活を目標にするかまで　“勉強する意味”を与えてくれる講座で毎日やる気が持続しました。たかが３週間、されど３週間。たった３週間で今までできなかったことができるようになり、ぐんと世界が広がって嬉しいです。独学では挫折していたであろう私も、「いつでも質問してください！」と言ってくれる講師陣に支えられやり切ることができました。さらに、疑問を出し合い一緒に頑張っていける仲間にも出会え、他業種から来た私にとってはこれからも頑張り合える関係になれたことがとても嬉しいです。<strong>人生の転機におすすめしたい講座です。</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="review-content">
			<h3 class="">アンケート結果</h3>
		</div>
	</section>

	

	<section id="price" class="main style3 secondary">
		<div class="content">
			<header>
				<h2>受講までの流れ</h2>
				<h3>Flow of Application</h3>
			</header>

			<div class="timeline">
				<div class="circle"></div>
				<ul>
					<li><em>STEP1</em> LINE@に登録して、キャリアプランを相談（一人ひとりに合わせた学習プランをご提案するため、アドバイザーがご面談の日時を設定致します。）</li>
					<li><em>STEP2</em>気持ちが固まったら、お申込み書と留学前の資料をお送りします。</li>
					<li><em>STEP3</em> 旅人エンジニア留学オンライン版の事前学習を開始します。オリジナルの学習システムを使い、オンライン授業前から基礎的なプログラミングの学習をスタートします。</li>
					<li class="last"><em>STEP4</em>オンライン授業開始！ご自宅でPCからクラスに参加しましょう。</li>
				</ul>
				<div class="circle"></div>
			</div>
		
		</div>
	</section>

<section id="faq" class="main style3 secondary">
	<div class="content">
		<header>
			<h2>よくあるご質問</h2>
			<h3>FAQ</h3>
		</header>
		<div class="accbox">
	  <!--ラベル1-->
	    <label for="label1">授業料以外にお金はかかりますか？</label>
	    <input type="checkbox" id="label1" class="cssacc" />
	    <div class="accshow">
	      <!--ここに隠す中身-->
	      <p>
	        はい、オンライン授業後、2週間の留学の際に、滞在期間中の学生ビザの料金(5,500ペソ)と、滞在期間中の食費、渡航費は別途ご用意いただく必要がございます。
	      </p>
	    </div>
	    <!--//ラベル1-->
	  <!--ラベル2-->
	    <label for="label2">言語は何を学べますか？</label>
	    <input type="checkbox" id="label2" class="cssacc" />
	    <div class="accshow">
	      <!--ここに隠す中身-->
	      <p>
	        主に、WEBサイトの見た目を作るHTML、CSS、JavaScriptを学びます。言語とは別ですが、WordPressという世界でもっとも使用されているWebメディア、サイト作成システムの使用方法についても学びます。
	      </p>
	    </div>
	    <!--//ラベル2-->
	  <!--ラベル3-->
	    <label for="label3">直接話を聞くことはできますか？</label>
	    <input type="checkbox" id="label3" class="cssacc" />
	    <div class="accshow">
	      <!--ここに隠す中身-->
	      <p>
	        はい！<a href="https://landing.lineml.jp/r/1638679644-4O1W9WP9?lp=YwYssx">こちらの公式LINE</a>に登録していただき、日程調整後、スタッフと直接電話にてご相談いただけます。
	      </p>
	    </div>
	    <!--//ラベル3-->

		  <!--ラベル7-->
		    <label for="label4">月5万円稼ぐ仕事ってどういうものがありますか？</label>
		    <input type="checkbox" id="label4" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        例えば、簡単なページ数1枚のWEBサイト作成は1案件5万円ほどのものが多いです。他にも、授業で学べるライティングや、WordPressでのサイト構築など、単価5万円以上の仕事もたくさんあります。実は、WEBサイト制作のお仕事は単価5万円以上の仕事のほうが多いです。
		      </p>
		    </div>
		   <!--//ラベル7-->

		  <!--ラベル8-->
		    <label for="label5">卒業したあと本当に5万円稼げるようになりますか？</label>
		    <input type="checkbox" id="label5" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        稼げるようになるためのカリキュラムを用意しました。ですが、もちろん身につけられるかは、頑張り次第です。プログラミングはセンスではなく、勉強時間に比例します。みっちり3週間時間を投資すれば、卒業後すぐに単価5万円の仕事をいただくことも可能です。
		      </p>
		    </div>
		  <!--//ラベル8-->

		  <!--ラベル10-->
		    <label for="label7">パソコン初心者ですが、大丈夫ですか？</label>
		    <input type="checkbox" id="label7" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        はい、全く問題ございません。これまでのご参加者のうち80％以上はプログラミング初心者の方です。ただ事前にPCを準備していただく必要があるので、早めにNexSeedの事前学習をスタートすることをおすすめしています。
		      </p>
		    </div>
		  <!--//ラベル10-->

		  <!--ラベル11-->
		    <label for="label8">開講日はいつですか？</label>
		    <input type="checkbox" id="label8" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        2020年5月11日(月)〜2020年5月29日(金)が今回の旅人エンジニア留学の留学期間です。<br>
		        また、コロナウイルスの影響が落ち着いた後、2週間の英語留学にご参加できます。2週間の英語留学開始日は任意の日付で構いません。
		      </p>
		    </div>
		  <!--//ラベル11-->

		  <!--ラベル12-->
		    <label for="label9">英語全然話せないんですが、大丈夫ですか？</label>
		    <input type="checkbox" id="label9" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        もちろんです。スピーキングフォーカスの授業が強みのNexSeedでは、生徒様ひとりひとりのレベルに合わせたレッスンをご提供しております。そのため、初心者から上級者までご満足頂ける内容になっています。
		      </p>
		    </div>
		  <!--//ラベル12-->

		  <!--ラベル13-->
		    <label for="label10">友達同士・カップルでも参加できますか？</label>
		    <input type="checkbox" id="label10" class="cssacc" />
		    <div class="accshow">
		      <!--ここに隠す中身-->
		      <p>
		        はい、友達同士、カップル同士で参加される方もいらっしゃいます！モチベーションの維持にも繋がりますので、おすすめです。
		      </p>
		    </div>
		  <!--//ラベル13-->

		</div><!--//.accbox-->
	</div>
</section>

	<!-- Contact -->
	<section id="contact" class="main style3 primary">
		<div class="content">
			<header>
				<h2>お問い合わせ</h2>
				<p>資料請求はこちらから。どのような相談でも構いません。お気軽にご相談ください。</p>
			</header>
			<div class="box">
				<form method="post" action="check-confirm.php" id="indexForm">
					<div class="fields">
						<input type="hidden" name="refcode" value="<?php echo $refcode; ?>">
						<div class="field half"><input type="text" name="name" placeholder="お名前(必須)" id="name" value="" class="name_box validate[required]" required /></div>
						<div class="field half"><input type="email" name="email" placeholder="メールアドレス(必須)" id="email" value="" class="validate[required]" required /></div>
						<div class="field"><input type="text" name="tel" placeholder="Skype ID もしくは 電話番号(必須)" id="tel" value="" class="validate[required]" pattern="^[a-zA-Z0-9]+$" required /></div>
						<!--								<div class="field"><textarea name="message" placeholder="Message" rows="6" id="message"></textarea></div>-->


						<input type="hidden" name="message" value="" />
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
	include('../inc/footer.html');
	?>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>