<?php

require_once('config.php');
require_once('functions.php');
require_once('data/array.php');

//アンケートデータ取得
$dbh = connectDb();
$que = array();
$sql = "select * from cb order by id asc";
foreach($dbh->query($sql) as $row){
	array_push($que, $row);
}

$this_year = date("Y/01/01 00:00:00");
$_this_year = date("Y");
$next_year = date("Y/01/01 00:00:00", strtotime($this_year . "+1 years"));
$_last_year = date("Y", strtotime($this_year . "-1 years"));
$_two_years_ago = date("Y", strtotime($this_year . "-2 years"));

$this_year_1 = date("Y/01/01 00:00:00");
$this_year_2 = date("Y/02/01 00:00:00");
$this_year_3 = date("Y/03/01 00:00:00");
$this_year_4 = date("Y/04/01 00:00:00");
$this_year_5 = date("Y/05/01 00:00:00");
$this_year_6 = date("Y/06/01 00:00:00");
$this_year_7 = date("Y/07/01 00:00:00");
$this_year_8 = date("Y/08/01 00:00:00");
$this_year_9 = date("Y/09/01 00:00:00");
$this_year_10 = date("Y/10/01 00:00:00");
$this_year_11 = date("Y/11/01 00:00:00");
$this_year_12 = date("Y/12/01 00:00:00");

$last_year_8 = date("Y/m/01 00:00:00", strtotime($this_year_8 . "-1 years"));
$last_year_9 = date("Y/m/01 00:00:00", strtotime($this_year_9 . "-1 years"));
$last_year_10 = date("Y/m/01 00:00:00", strtotime($this_year_10 . "-1 years"));
$last_year_11 = date("Y/m/01 00:00:00", strtotime($this_year_11 . "-1 years"));
$last_year_12 = date("Y/m/01 00:00:00", strtotime($this_year_12 . "-1 years"));

foreach($que as $q){
	$created = date("Y/m/d H:i:s", strtotime($q['created']));
	$created_month = date("n");

	//今年のアンケート
	if($this_year_12 <= $created and $created < $next_year and $created_month >= 13){
		if(isset($this_year_12_que) == false){
			$this_year_12_que = array();
		}
		array_push($this_year_12_que, $q);
	}

	if($this_year_11 <= $created and $created < $this_year_12 and $created_month >= 12){
		if(isset($this_year_11_que) == false){
			$this_year_11_que = array();
		}
		array_push($this_year_11_que, $q);
	}

	if($this_year_10 <= $created and $created < $this_year_11 and $created_month >= 11){
		if(isset($this_year_10_que) == false){
			$this_year_10_que = array();
		}
		array_push($this_year_10_que, $q);
	}

	if($this_year_9 <= $created and $created < $this_year_10 and $created_month >= 10){
		if(isset($this_year_9_que) == false){
			$this_year_9_que = array();
		}
		array_push($this_year_9_que, $q);
	}

	if($this_year_8 <= $created and $created < $this_year_9 and $created_month >= 9){
		if(isset($this_year_8_que) == false){
			$this_year_8_que = array();
		}
		array_push($this_year_8_que, $q);
	}

	if($this_year_7 <= $created and $created < $this_year_8 and $created_month >= 8){
		if(isset($this_year_7_que) == false){
			$this_year_7_que = array();
		}
		array_push($this_year_7_que, $q);
	}

	if($this_year_6 <= $created and $created < $this_year_7 and $created_month >= 7){
		if(isset($this_year_6_que) == false){
			$this_year_6_que = array();
		}
		array_push($this_year_6_que, $q);
	}

	if($this_year_5 <= $created and $created < $this_year_6 and $created_month >= 6){
		if(isset($this_year_5_que) == false){
			$this_year_5_que = array();
		}
		array_push($this_year_5_que, $q);
	}

	if($this_year_4 <= $created and $created < $this_year_5 and $created_month >= 5){
		if(isset($this_year_4_que) == false){
			$this_year_4_que = array();
		}
		array_push($this_year_4_que, $q);
	}

	if($this_year_3 <= $created and $created < $this_year_4 and $created_month >= 4){
		if(isset($this_year_3_que) == false){
			$this_year_3_que = array();
		}
		array_push($this_year_3_que, $q);
	}

	if($this_year_2 <= $created and $created < $this_year_3 and $created_month >= 3){
		if(isset($this_year_2_que) == false){
			$this_year_2_que = array();
		}
		array_push($this_year_2_que, $q);
	}

	if($this_year_1 <= $created and $created < $this_year_2 and $created_month >= 2){
		if(isset($this_year_1_que) == false){
			$this_year_1_que = array();
		}
		array_push($this_year_1_que, $q);
	}


	//去年のアンケート
	if($last_year_12 <= $created and $created < $this_year_1){
		if(isset($last_year_12_que) == false){
			$last_year_12_que = array();
		}
		array_push($last_year_12_que, $q);
	}

	if($last_year_11 <= $created and $created < $last_year_12){
		if(isset($last_year_11_que) == false){
			$last_year_11_que = array();
		}
		array_push($last_year_11_que, $q);
	}

	if($last_year_11 <= $created and $created < $last_year_12){
		if(isset($last_year_11_que) == false){
			$last_year_11_que = array();
		}
		array_push($last_year_11_que, $q);
	}

	if($last_year_10 <= $created and $created < $last_year_11){
		if(isset($last_year_10_que) == false){
			$last_year_10_que = array();
		}
		array_push($last_year_10_que, $q);
	}

	if($last_year_9 <= $created and $created < $last_year_10){
		if(isset($last_year_9_que) == false){
			$last_year_9_que = array();
		}
		array_push($last_year_9_que, $q);
	}

	if($last_year_8 <= $created and $created < $last_year_9){
		if(isset($last_year_8_que) == false){
			$last_year_8_que = array();
		}
		array_push($last_year_8_que, $q);
	}

}

if(count($this_year_12_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_12)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=12"]);
}
if(count($this_year_11_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_11)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=11"]);
}
if(count($this_year_10_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_10)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=10"]);
}
if(count($this_year_9_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_9)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=9"]);
}
if(count($this_year_8_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_8)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=8"]);
}
if(count($this_year_7_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_7)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=7"]);
}
if(count($this_year_6_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_6)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=6"]);
}
if(count($this_year_5_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_5)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=5"]);
}
if(count($this_year_4_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_4)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=4"]);
}
if(count($this_year_3_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_3)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=3"]);
}
if(count($this_year_2_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_2)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=2"]);
}
if(count($this_year_1_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($this_year_1)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=1"]);
}

if(count($last_year_12_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($last_year_12)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=12"]);
}
if(count($last_year_11_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($last_year_11)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=11"]);
}
if(count($last_year_10_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($last_year_10)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=10"]);
}
if(count($last_year_9_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($last_year_9)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=9"]);
}
if(count($last_year_8_que) >= 5){
	array_push($news_array, [date("Y/m/t", strtotime($last_year_8)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=8"]);
}

rsort($news_array);

$limit5 = array();
for($i = 0; $i < 5; $i++){
	array_push($limit5, $news_array[$i]);
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-V3EPFTQC2C"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-V3EPFTQC2C');
	</script>

	<meta charset="utf-8">
	<meta name="keywords" content="株式会社ディリット,ディリット,Diritto,diritto">
	<meta name="description" content="株式会社ディリット（Diritto）、私たちは通信環境改善のプロです。インターネットが遅い方や月々の料金が高い方、通信制限にお困りの方へ、最適な通信環境を提供します。">
	<meta name="viewport" content="width=1000">

	<title>株式会社ディリット - Diritto.Inc</title>

	<link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="css/sp.css"/>
	<link rel="stylesheet" media="screen and (min-device-width:1001px)" href="css/main.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/array.js"></script>
	<script src="js/main.js"></script>

	<!-- フェードイン機能 -->
  <script src="js/jquery.inview.js" type="text/javascript"></script>

	<!-- スライドメニュー -->
	<script src="js/jquery.bgswicher.js"></script>

</head>
<body>

	<div id="main_flame">
		<script>
			<!--
				make_header(0,0);
			-->
		</script>

		<div id="top_space"></div>

		<div id="top_img">
			<div id="top_message">
				<div id="top_message_sub">今の時代に必要なもの。それは…</div>
				<div id="top_message_main">イエ<span id="top_message_point">、</span>マンゾク<span id="top_message_point">。<span></div>
			</div>

			<div id="top_button_bg"></div>
			<div id="top_button_flame">
				<div class="container" id="top_button_width">
					<a href="internet/index.html">
						<div class="top_button sp_hide_block" style="background:url('img/top_button.png');">
							<div class="top_button_text">
								新規設置、料金、速度改善などで<br><span class="top_button_text_strong" style="letter-spacing:0px;">インターネット</span>をお探しの方
								<div class="top_button_arrow">→</div>
							</div>
						</div>
					</a>
					<a href="questionnaire/index.php">
						<div class="top_button sp_hide_block" style="margin-right:0px; background:url('img/top_button2.png');">
							<div class="top_button_text">
								インターネットをご契約頂いたお客様の<br><span class="top_button_text_strong">アンケート結果</span>はこちら
								<div class="top_button_arrow">→</div>
							</div>
						</div>
					</a>

					<a href="internet/index.html">
						<div class="top_button sp_block" style="background:url('img/sp_top_button1.png');">
							<div class="top_button_text">
								新規設置、料金、速度改善などで<br><span class="top_button_text_strong">インターネット</span>をお探しの方
								<div class="top_button_arrow">→</div>
							</div>
						</div>
					</a>
					<a href="questionnaire/index.php">
						<div class="top_button sp_block" style="margin-right:0px; background:url('img/sp_top_button2.png');">
							<div class="top_button_text">
								インターネットをご契約頂いたお客様の<br><span class="top_button_text_strong">アンケート結果</span>はこちら
								<div class="top_button_arrow">→</div>
							</div>
						</div>
					</a>

					<div class="clear"></div>
				</div>
			</div>
		</div><!-- top_img -->

		<div class="content_flame">
			<a href="internet/index.html" class="logo_link">
				<img class="logo_ball" src="img/logo_ball.png" width="50px" height="50px">
				<div class="logo_text">Internet Service</div>
			</a>
			<h2>あなたは<span class="strong2">「イエ、マンゾク」</span><div class="sp_block"></div>できてますか？</h2>
			<script>
				<!--
					make_message_menu();
				-->
			</script>
		</div><!-- content_flame -->

		<div class="content_flame bg_color1">
			<div class="container">
				<a href="vision/index.html" class="logo_link">
					<img class="logo_ball" src="img/logo_ball.png" width="50px" height="50px">
					<div class="logo_text">Our Value</div>
				</a>
				<h2>私たちが<span class="strong2">「大切」</span>にしていること</h2>

				<a href="vision/index.html#vision1" class="vision_flame hover">
					<img class="vision_img sp_hide_block" src="img/vision_img1.png" width="320px" height="140px">
					<img class="vision_img sp_block" src="img/sp_vision_img1.png" width="880px" height="250px">
					<div class="vision_title">一人一人に合った提案</div>
					<div class="vision_sub_title">Made-To-Order</div>
					<div class="vision_text">
						私たちは、お客様のご要望や利用環境に<br>沿った最適な提案をします。
					</div>
				</a>
				<a href="vision/index.html#vision2" class="vision_flame hover">
					<img class="vision_img sp_hide_block" src="img/vision_img2.png" width="320px" height="140px">
					<img class="vision_img sp_block" src="img/sp_vision_img2.png" width="880px" height="250px">
					<div class="vision_title">本質的な提案</div>
					<div class="vision_sub_title">Essential</div>
					<div class="vision_text">
						私たちは、商品に対する誤った情報や<br>先入観を正し、より良い環境を提案します。
					</div>
				</a>
				<a href="vision/index.html#vision3" class="vision_flame vision_flame_right hover">
					<img class="vision_img sp_hide_block" src="img/vision_img3.png" width="320px" height="140px">
					<img class="vision_img sp_block" src="img/sp_vision_img3.png" width="880px" height="250px">
					<div class="vision_title">丁寧な情報提供</div>
					<div class="vision_sub_title">Info-Service</div>
					<div class="vision_text" style="border-bottom:none;">
						私たちは、専門的な知識を生かし、<br>真摯な態度で情報提供を行います。
					</div>
				</a>
				<div class="clear"></div>

			</div>
		</div><!-- content_flame -->

<!--
		<div class="content_flame bg_color1">
			<div class="container">
				<h2><span class="strong2">「契約済み」</span>のお客様へ</h2>
				<h3>～ インターネット契約後の手続き ～</h3>

					<a class="vision_flame hover" style="width:490px;">
						<img class="vision_img" src="img/contacted_img1.png" width="490px" height="140px">
						<div class="vision_title" style="margin-bottom:4px;">SoftBank光</div>
						<div class="vision_text item_mb">
							動画も大容量データも快適。<br>ソフトバンク光の契約後の流れはこちら。
						</div>
					</a>

					<a class="vision_flame vision_flame_right hover" style="width:490px;">
						<img class="vision_img" src="img/contacted_img2.png" width="490px" height="140px">
						<div class="vision_title" style="margin-bottom:4px;">SoftBank Air</div>
						<div class="vision_text">
							コンセントにさすだけですぐ使える。<br>ソフトバンクAirの契約後の流れはこちら。
						</div>
					</a>

					<a class="vision_flame hover" style="width:490px;">
						<img class="vision_img" src="img/contacted_img3.png" width="490px" height="140px">
						<div class="vision_title" style="margin-bottom:4px;">So-net光</div>
						<div class="vision_text">
							１Gbpsでずーっと快適インターネット。<br>ソネット光の契約後の流れはこちら。
						</div>
					</a>

					<a class="vision_flame vision_flame_right hover" style="width:490px;">
						<img class="vision_img" src="img/contacted_img4.png" width="490px" height="140px">
						<div class="vision_title" style="margin-bottom:4px;">Docomo光</div>
						<div class="vision_text">
							ドコモ携帯と一緒に永年割引。<br>ドコモ光の契約後の流れはこちら。
						</div>
					</a>
					<div class="clear"></div>

			</div>
		</div>
	-->

		<div class="content_flame">
			<div class="container">
				<a href="company/index.html" class="logo_link">
					<img class="logo_ball" src="img/logo_ball.png" width="50px" height="50px">
					<div class="logo_text">About Diritto</div>
				</a>
				<h2><span class="strong2">「株式会社ディリット」</span>について</h2>
				<div class="margin_bottom60"></div>

				<h4>お知らせ</h4>
				<div class="line1"></div>

				<table id="news_table" style="margin:0px auto 30px auto;">
					<?php foreach($limit5 as $n):?>
						<tr>
							<td class="news_date"><?php echo h($n[0]);?></td>

							<?php if($n[2] == "お知らせ"):?>
								<td>
									<a href="news/<?php echo h($n[3]);?>">
										<div class="news_badge sp_hide_block" style="width:70px;"><?php echo h($n[2]);?></div>
										<div class="news_badge sp_block" style="width:110px;"><?php echo h($n[2]);?></div>
									</a>
								</td>
							<?php elseif($n[2] == "アンケート"):?>
								<td>
									<a href="<?php echo h($n[3]);?>">
										<div class="news_badge2 sp_hide_block" style="width:70px;"><?php echo h($n[2]);?></div>
										<div class="news_badge2 sp_block" style="width:110px;"><?php echo h($n[2]);?></div>
									</a>
								</td>
							<?php endif;?>

							<?php if($n[1] !== ""):?>
								<td class="news_text"><a href="news/<?php echo h($n[3]);?>"><?php echo h($n[1]);?></a></td>
							<?php else:?>
								<td class="news_text">
									<a href="<?php echo h($n[3]);?>">
										<span class="english"><?php echo h(date("Y", strtotime($n[0])));?></span>年
										<span class="english"><?php echo h(date("n", strtotime($n[0])));?></span>月
										実施　お客様満足度アンケート集計結果はこちら
									</a>
								</td>
							<?php endif;?>

						</tr>
					<?php endforeach;?>
				</table>

				<a href="news/index.php" class="hover"><div class="right_button">お知らせ一覧</div></a>
				<div class="clear"></div>

				<script>
					<!--
//						make_news();
					-->
				</script>

			</div>
		</div><!-- content_flame -->

		<div class="content_flame bg_color1">
			<div class="container">

					<h4>会社情報</h4>
					<div class="line1"></div>

					<a href="company/index.html" class="hover">
						<div class="two_img item_mb" id="company_item1">
							<div class="img_title item_mb">会社概要 →</div>
						</div>
					</a>

					<a href="vision/index.html" class="hover">
						<div class="two_img two_img_last" id="company_item2">
							<div class="img_title">企業理念 →</div>
						</div>
					</a>
					<div class="clear"></div>

					<a href="recruit/posting.html" class="hover">
						<div class="two_img" id="company_item3">
							<div class="img_title">ポスティングスタッフ募集 →</div>
						</div>
					</a>

					<a href="recruit/jimu.html" class="hover">
						<div class="two_img two_img_last" id="company_item4">
							<div class="img_title">事務スタッフ募集 →</div>
						</div>
					</a>
					<div class="clear"></div>

			</div>
		</div><!-- content_flame -->

		<script>
			<!--
				make_footer(0);
				$('#news_table').css('opacity','0');
			-->
		</script>

<!--
		<a href="tel:045-319-6612" id="bottom_telephone">

			<div class="bottom_telephone_container">
				<img class="bottom_telephone_logo" src="img/bottom_telephone_logo.png" width="200px" height="200px">

				<div class="bottom_telephone_right">
					<div class="bottom_telephone_title">お電話でのお問い合わせ</div>
					<div class="bottom_telephone_number">045-319-6612</div>
					<div class="bottom_telephone_text">
						受付時間 10:00～20:00 年中無休　株式会社ディリット
					</div>
				</div>
				<div class="clear"></div>

				<div class="bottom_telephone_text2">
					※こちらをタップすることで電話をかけることができます。
				</div>
				<div class="bottom_telephone_link"></div>

			</div>
		</a>
	-->

	</div><!-- main_flame -->
</body>
</html>
