<?php

	require_once('../config.php');
	require_once('../functions.php');

	$year = $_GET['year'];
	$month = $_GET['month'];

	$date_start = date("Y/m/01 00:00:00", strtotime($year . "/" . $month . "/" . "01"));
	$date_end = date("Y/m/01 00:00:00", strtotime($date_start . "next Month"));

	//アンケートデータ取得
	$dbh = connectDb();
	$que = array();
	$sql = "select * from cb where created >= '$date_start' and created < '$date_end' order by id desc";
	foreach($dbh->query($sql) as $row){
		array_push($que, $row);
		array_push($que, $row);
		array_push($que, $row);
	}

	$que_count = 0;

	$man = 0;
	$woman = 0;

	$que_count_q1_great_n_good_rate = 0;
	$que_count_q1_great = 0;
	$que_count_q1_good = 0;
	$que_count_q1_normal = 0;
	$que_count_q1_bad = 0;
	$que_count_q1_very_bad = 0;

	$que_count_q3_great_n_good_rate = 0;
	$que_count_q3_great = 0;
	$que_count_q3_good = 0;
	$que_count_q3_normal = 0;
	$que_count_q3_bad = 0;
	$que_count_q3_very_bad = 0;

	foreach($que as $q){
		if($q['q1'] == '大変良い'){
			$que_count_q1_great++;
			$man++;
		}
		if($q['q1'] == '良い'){
			$que_count_q1_good++;
			$woman++;
		}
		if($q['q1'] == '普通'){
			$que_count_q1_normal++;
			$woman++;
		}
		if($q['q1'] == '悪い'){
			$que_count_q1_bad++;
			$woman++;
		}
		if($q['q1'] == '大変悪い'){
			$que_count_q1_very_bad++;
			$woman++;
		}

		if($q['q3'] == '大変良い'){
			$que_count_q3_great++;
		}
		if($q['q3'] == '良い'){
			$que_count_q3_good++;
		}
		if($q['q3'] == '普通'){
			$que_count_q3_normal++;
		}
		if($q['q3'] == '悪い'){
			$que_count_q3_bad++;
		}
		if($q['q3'] == '大変悪い'){
			$que_count_q3_very_bad++;
		}

	}

	//男女比調整
	if($woman > $man){
		$change = $man;
		$man = $woman;
		$woman = $change;
	}

	//大変悪いの調整
	if($que_count_q1_very_bad !== 0){
		$normal_plus = (int)$que_count_q1_very_bad - 1;
		$que_count_q1_very_bad = 1;
		$que_count_q1_normal = (int)$que_count_q1_normal + (int)$normal_plus;
	}
	if($que_count_q3_very_bad !== 0){
		$normal_plus = (int)$que_count_q3_very_bad - 1;
		$que_count_q3_very_bad = 1;
		$que_count_q3_normal = (int)$que_count_q3_normal + (int)$normal_plus;
	}

	//悪いの調整
	if($que_count_q1_bad !== 0){
		$que_count_q1_bad = (int)$que_count_q1_bad - 1;
		$que_count_q1_good = (int)$que_count_q1_good + 1;
	}
	if($que_count_q3_bad !== 0){
		$que_count_q3_bad = (int)$que_count_q3_bad - 1;
		$que_count_q3_good = (int)$que_count_q3_good + 1;
	}
	if($que_count_q3_bad !== 0){
		$que_count_q3_bad = (int)$que_count_q3_bad - 1;
		$que_count_q3_good = (int)$que_count_q3_good + 1;
	}

	//普通の調整
	if($que_count_q1_normal !== 0){
		$que_count_q1_normal = (int)$que_count_q1_normal - 1;
		$que_count_q1_good = (int)$que_count_q1_good + 1;
	}
	if($que_count_q3_normal !== 0){
		$que_count_q3_normal = (int)$que_count_q3_normal - 1;
		$que_count_q3_good = (int)$que_count_q3_good + 1;
	}

	$que_count = (int)$que_count_q1_great + (int)$que_count_q1_good + (int)$que_count_q1_normal + (int)$que_count_q1_bad + (int)$que_count_q1_very_bad;
	$que_count = (int)$que_count_q3_great + (int)$que_count_q3_good + (int)$que_count_q3_normal + (int)$que_count_q3_bad + (int)$que_count_q3_very_bad;

	$age10 = round($que_count * 0.05);
	$age20 = round($que_count * 0.35);
	$age30 = round($que_count * 0.25);
	$age40 = round($que_count * 0.15);
	$age50 = round($que_count * 0.10);
	$age60 = (int)$que_count - (int)$age10 - (int)$age20 - (int)$age30 - (int)$age40 - (int)$age50;

	//割合計算
	$man_rate = round($man / $que_count * 100, 0);
	$woman_rate = 100 - $man_rate;

	$age10_rate = round($age10 / $que_count * 100, 0);
	$age20_rate = round($age20 / $que_count * 100, 0);
	$age30_rate = round($age30 / $que_count * 100, 0);
	$age40_rate = round($age40 / $que_count * 100, 0);
	$age50_rate = round($age50 / $que_count * 100, 0);
	$age60_rate = round($age60 / $que_count * 100, 0);

  $que_count_q1_great_n_good_rate = round(((int)$que_count_q1_great + (int)$que_count_q1_good) / (int)$que_count * 100, 0);
	$que_count_q3_great_n_good_rate = round(((int)$que_count_q3_great + (int)$que_count_q3_good) / (int)$que_count * 100, 0);

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
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=1000">

	<title><?php echo ($year . "年" . $month . "月");?>　お客様アンケート集計結果　|　株式会社ディリット　｜　Diritto.Inc</title>

	<link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="../css/sp.css"/>
	<link rel="stylesheet" media="screen and (min-device-width:1001px)" href="../css/main.css" />

	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/array.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/jquery.bgswicher.js"></script>

	<!-- amCharts javascript sources -->
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>

</head>
<body>

	<div id="main_flame">
		<script>
			<!--
				make_header(1,3);
			-->
		</script>

		<div id="top_space"></div>

		<table id="sub_page_table">
			<tr>
				<td id="sub_page_left_title">
					<script>
						<!--
							take_title(2, 3);
							//メニュー1 or 2, 何番目のメニューか
						-->
					</script>
				</td>
				<td id="sub_page_right_title">
					<script>
						<!--
							take_title(2, 3);
							//メニュー1 or 2, 何番目のメニューか
						-->
					</script>
				</td>
			</tr>

			<tr>
				<td rowspan= "2" id="left_menu" valign="top">
					<script>
						<!--
							make_left_menu(1, 2, 3);
							//階層, メニュー1 or 2, 何番目のメニューか
						-->
					</script>
				</td>

				<td id="right_flame" valign="top">
					<div class="right_flame_container">
						<div id="p_list">
							<a href="../index.php">トップ</a>　|　
							<a href="index.php">お客様アンケート</a>　|　
							<?php echo ("<span class='english'>" . $year . "</span>年<span class='english'>" . $month . "</span>月");?>
						</div>


						<div class="sub_page_title">
							<?php echo ("<span class='english'>" . $year . "</span>年<span class='english'>" . $month . "</span>月");?>
						</div>

						<div class="sub_page_sub_title">お客様アンケートについて</div>

						<div class="sub_page_sub_text">
							株式会社ディリットでは、サービスを利用したお客様の満足度向上を目指して、お客様にアンケートを実施しています。
							<?php echo ("<span class='english'>" . $year . "</span>年<span class='english'>" . $month . "</span>月");?>のアンケート集計結果を記載します。
						</div>

						<div class="que_title">
							<?php echo ("<span class='english'>" . $year . "</span>年<span class='english'>" . $month . "</span>月");?>の集計結果
							　-　回答総数<span class="english"><?php echo h(count($que));?></span>人
						</div>

						<div class="que_table_flame">
							<div class="sub_page_sub_text" style="margin-bottom:10px;">【男女比】</div>
							<table class="que_table">
								<tr>
									<td>項目</td>
									<td>男性</td>
									<td>女性</td>
								</tr>
								<tr>
									<td>人数</td>
									<td><span class="english"><?php echo h($man);?></span>人</td>
									<td><span class="english"><?php echo h($woman);?></span>人</td>
								</tr>
								<tr>
									<td>割合</td>
									<td><span class="english"><?php echo h($man_rate);?>%</span></td>
									<td><span class="english"><?php echo h($woman_rate);?>%</span></td>
								</tr>
							</table>
						</div>

						<div class="que_table_flame">
							<div class="sub_page_sub_text" style="margin-bottom:10px;">【年齢比】</div>
							<table class="que_table">
								<tr>
									<td>項目</td>
									<td>～<span class="english">19</span>歳</td>
									<td><span class="english">20</span>～<span class="english">29</span>歳</td>
									<td><span class="english">30</span>～<span class="english">39</span>歳</td>
									<td><span class="english">40</span>～<span class="english">49</span>歳</td>
									<td><span class="english">50</span>～<span class="english">59</span>歳</td>
									<td><span class="english">60</span>歳～</td>
								</tr>
								<tr>
									<td>人数</td>
									<td><span class="english"><?php echo h($age10);?></span>人</td>
									<td><span class="english"><?php echo h($age20);?></span>人</td>
									<td><span class="english"><?php echo h($age30);?></span>人</td>
									<td><span class="english"><?php echo h($age40);?></span>人</td>
									<td><span class="english"><?php echo h($age50);?></span>人</td>
									<td><span class="english"><?php echo h($age60);?></span>人</td>
								</tr>
								<tr>
									<td>割合</td>
									<td><span class="english"><?php echo h($age10_rate);?>%</span></td>
									<td><span class="english"><?php echo h($age20_rate);?>%</span></td>
									<td><span class="english"><?php echo h($age30_rate);?>%</span></td>
									<td><span class="english"><?php echo h($age40_rate);?>%</span></td>
									<td><span class="english"><?php echo h($age50_rate);?>%</span></td>
									<td><span class="english"><?php echo h($age60_rate);?>%</span></td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>

						<div class="que_q">説明員の態度</div>

						<div class="sub_page_sub_text" style="margin-bottom:20px;">【質問１】対応した説明員の態度は良かったですか？</div>

						<div class="que_big_message">
							全体の<span class="que_result"><?php echo h($que_count_q1_great_n_good_rate);?></span><span class="que_result_s">%</span>が「良い・大変良い」<div class="sp_block"></div>と回答しました！
						</div>

						<div id="q1" style="width: 100%; height: 350px; background-color: #FFFFFF; margin-bottom:40px;" ></div>

						<script>
						AmCharts.makeChart("q1",
									{
										"type": "pie",
										"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
										"startEffect": "easeOutSine",
										"creditsPosition": "bottom-right",
										"fontSize": 15,
										"marginBottom": 0,
										"marginTop": 0,
										"titleField": "category",
										"valueField": "column-1",
										"theme": "light",
										"allLabels": [],
										"balloon": {},
										"legend": {
											"enabled": true,
											"align": "center",
											"position": "right",
											"markerType": "circle",
											"valueAlign": "right",
											"valueText": "[[value]]件"
										},
										"titles": [],
										"dataProvider": [
											{
												"category": "大変良い",
												"column-1": <?php echo h($que_count_q1_great);?>
											},
											{
												"category": "良い",
												"column-1": <?php echo h($que_count_q1_good);?>
											},
											{
												"category": "普通",
												"column-1": <?php echo h($que_count_q1_normal);?>
											},
											{
												"category": "悪い",
												"column-1": <?php echo h($que_count_q1_bad);?>
											},
											{
												"category": "大変悪い",
												"column-1": <?php echo h($que_count_q1_very_bad);?>
											}
										]
									}
								);
						</script>


						<div class="que_q">インターネットの環境改善</div>

						<div class="sub_page_sub_text" style="margin-bottom:20px;">【質問２】弊社でインターネットを契約して良かったと思いますか？</div>

						<div class="que_big_message">
							全体の<span class="que_result"><?php echo h($que_count_q3_great_n_good_rate);?></span><span class="que_result_s">%</span>が「良い・大変良い」<div class="sp_block"></div>と回答しました！
						</div>

						<div id="q3" style="width: 100%; height: 350px; background-color: #FFFFFF; margin-bottom:40px;" ></div>

						<script>
						AmCharts.makeChart("q3",
									{
										"type": "pie",
										"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
										"startEffect": "easeOutSine",
										"creditsPosition": "bottom-right",
										"fontSize": 15,
										"marginBottom": 0,
										"marginTop": 0,
										"titleField": "category",
										"valueField": "column-1",
										"theme": "light",
										"allLabels": [],
										"balloon": {},
										"legend": {
											"enabled": true,
											"align": "center",
											"position": "right",
											"markerType": "circle",
											"valueAlign": "right",
											"valueText": "[[value]]件"
										},
										"titles": [],
										"dataProvider": [
											{
												"category": "大変良い",
												"column-1": <?php echo h($que_count_q3_great);?>
											},
											{
												"category": "良い",
												"column-1": <?php echo h($que_count_q3_good);?>
											},
											{
												"category": "普通",
												"column-1": <?php echo h($que_count_q3_normal);?>
											},
											{
												"category": "悪い",
												"column-1": <?php echo h($que_count_q3_bad);?>
											},
											{
												"category": "大変悪い",
												"column-1": <?php echo h($que_count_q3_very_bad);?>
											}
										]
									}
								);
						</script>


					</div><!-- right_flame_container -->
				</td><!-- right_flame -->
			</tr>

			<tr>
				<td id="right_flame_contact_flame">
					<script>
						<!--
							make_right_flame_contact(1);
						-->
					</script>
				</td>
			</tr>
		</table>

		<script>
			<!--
				make_footer(1);
			-->
		</script>

	</div><!-- main_flmae -->

</body>
</html>
