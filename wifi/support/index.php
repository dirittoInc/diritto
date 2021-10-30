<?php

	$service = $_GET['service'];
	$cb = $_GET['cb'];
	$router = $_GET['router'];
	$before = $_GET['before'];
	$cp = $_GET['cp'];
	$op = $_GET['op'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=1000">
	<meta name="robot" content="noindex">

	<title>お申込みから開通まで　|　株式会社ディリット　｜　Diritto.Inc</title>

	<link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="../css/sp.css"/>
	<link rel="stylesheet" media="screen and (min-device-width:1001px)" href="../css/main.css" />

	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/array.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/jquery.bgswicher.js"></script>

</head>
<body>

	<div id="main_flame">
		<script>
			<!--
				make_header(1,0);
			-->
		</script>

		<div id="top_space"></div>

		<table id="sub_page_table">
			<tr>
				<td id="sub_page_right_title">
					お申込みから開通まで
				</td>
			</tr>

			<tr>
				<td id="right_flame" valign="top">
					<div class="right_flame_container">
						<div id="p_list">
							<a href="../index.php">トップ</a>　|　お申込みから開通まで
						</div>

						<div class="sub_page_title">お申込みから開通まで</div>

						<div class="sub_page_sub_text">
							インターネットのお申込みありがとうございます。インターネット開通までのステップでご不明な点がございましたら、
							お気軽に弊社までご連絡下さい。<br>
							<div class="sp_block"><br></div>
							○株式会社ディリット　<span class="sp_block"></span>≫　<a href="tel:0120-954-674" class="english" style="text-decoration:underline;">0120-954-674</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">20:00</span>）
						</div>

						<table id="short_flow">
							<tr id="short_flow_header" class="english">
								<td>Step <span>1</span></td>
								<td>Step <span>2</span></td>
								<td>Step <span>3</span></td>
								<td>Step <span>4</span></td>
								<td>Step <span>5</span></td>
								<td>Step <span>6</span></td>
							</tr>
							<tr id="short_flow_td">
								<td class="td_line">お申込み</td>
								<td class="td_line"><div class="td_sankaku"></div>契約書類の<br>到着</td>
								<td class="td_line"><div class="td_sankaku"></div>開通日連絡</td>
								<td class="td_line"><div class="td_sankaku"></div>開通工事</td>
								<td class="td_line"><div class="td_sankaku"></div>以前のネット<br>＆オプション<br>解約</td>
								<td><div class="td_sankaku"></div>キャンペーン<br>適用・受取</td>
							</tr>
						</table>

						<div class="table_memo">
							※書類の到着や連絡は、順序が前後する場合があります。
						</div>

						<table id="long_flow">
							<tr>
								<td style="width:100px;">
									<div class="long_flow_step_icon english">STEP<br><span>1</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon1.png" width="140px" height="140px">
								</td>
								<td style="width:160px;" class="sp_hide_block"><img class="step_left_margin" src="../img/step_icon1.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 1</span>　お申込み</div>

									<div class="sub_page_sub_text step_left_margin">
										サービス内容（月額料金・契約期間・解約金など）にご納得頂いた上で、お電話にてインターネットのお申込みをします。<br>
										<br>

										<?php if($service == "sb" or $service == "sa"):?>
											<span class="strong">本人確認登録（免許証などの身分証の登録）</span>・<span class="strong">支払い登録（口座やクレジットカードの登録）</span>が完了していない方は、
											<span class="strong">ショートメール、または、後日届く書類</span>でご対応をお願いします。<br>
											<br>
											<span class="color_red">※支払い登録が完了しないと、ソフトバンクのキャンペーンの適用が対象外となります。必ず登録頂くようお願いします。</span><br>
										<?php elseif($service == "so" or $service == "nu"):?>
											後日、支払い登録に関するショートメール、または、書類が届きます。口座かクレジットカードの登録を宜しくお願いします。<br>
											<br>
											<span class="color_red">※支払い登録が完了しないと、キャンペーンの適用が対象外となります。必ず登録頂くようお願いします。</span><br>
										<?php endif;?>

									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="long_sankaku_flame">
									<div class="long_sankaku"></div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="long_flow_step_icon english">STEP<br><span>2</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon2.png" width="140px" height="140px">
								</td>
								<td class="sp_hide_block">
									<img class="step_left_margin" src="../img/step_icon2.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 2</span>　契約書類の到着</div>

									<div class="sub_page_sub_text step_left_margin">
										お申込み頂いたサービスの契約書類が到着します。<span class="strong">ご契約内容</span>をご確認下さい。<br>
										<br>
										▼契約書類記載の情報<br>
										<?php if($service == "sb" or $service == "so"):?>
										・<span class="strong">インターネットの設定情報（<span class="english">ID</span>、パスワード）</span><br>
										<?php endif;?>
										・<span class="strong">マイページの案内（<span class="english">ID</span>、パスワード）</span><br>
										・<span class="strong">サービス概要（月額料金・契約期間・解約金など）</span><br>
										・<span class="strong">サポート窓口</span><br>
									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="long_sankaku_flame">
									<div class="long_sankaku"></div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="long_flow_step_icon english">STEP<br><span>3</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon3.png" width="140px" height="140px">
								</td>
								<td class="sp_hide_block"><img class="step_left_margin" src="../img/step_icon3.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 3</span>　開通日連絡</div>

									<div class="sub_page_sub_text step_left_margin">
										<?php if($service == "sb" or $service == "so"):?>
											工事日が決定したら、<span class="strong">ショートメール、または書類</span>が届きます。<span class="strong">派遣工事・無派遣工事</span>のどちらになるかも確認することができます。
											もし、工事日日程を変更する場合は、サポート窓口までご連絡をお願いします。<br>
											<br>
											<?php if($service == "sb"):?>
												○ソフトバンク光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0800-111-2009" class="english" style="text-decoration:underline;">0800-111-2009</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">19:00</span>）<br>
											<?php elseif($service == "so"):?>
												○ソネット光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0120-80-7761" class="english" style="text-decoration:underline;">0120-80-7761</a><span class="sp_block"></span>（受付時間：<span class="english">9:00</span>～<span class="english">18:00</span>）<br>
											<?php endif;?>
											<br>
											<?php if($router == "true"):?>
												今回は、弊社（株式会社ディリット）より、<span class="strong">無線ルーターをプレゼント</span>します。開通日に合わせて発送しますので、お受け取りを宜しくお願いします。<br>
												<span class="color_red">※開通日前にご連絡しますので、開通のご意思の確認が取れ次第、発送します。</span><br>
											<?php endif;?>
										<?php elseif($service == "sa"):?>
											ソフトバンク<span class="english">Air</span>の到着日が決定したら、<span class="strong">ショートメール、または書類</span>が届きます。<br>
											もし、ソフトバンク<span class="english">Air</span>の配送先を変更したい場合は、マイページより変更して下さい。<br>
											<br>
											○ソフトバンク<span class="english">Air</span>　配送先変更は<a style="text-decoration:underline;" target="_blank" href="http://ybb.softbank.jp/support/contact/sbair/m-06/detail/?id=06-003">こちら</a>
										<?php endif;?>
									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="long_sankaku_flame">
									<div class="long_sankaku"></div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="long_flow_step_icon english">STEP<br><span>4</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon4.png" width="140px" height="140px">
								</td>
								<td class="sp_hide_block"><img class="step_left_margin" src="../img/step_icon4.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 4</span>　開通工事</div>

									<div class="sub_page_sub_text step_left_margin">

									<?php if($service == "sb" or $service == "so"):?>
										工事が完了すれば、<span class="strong">インターネットが開通</span>します。<br>
										<br>
										▼工事の種類（工事業者の判断により決まります）<br>
										・<span class="strong">派遣工事</span> … 作業員がお部屋の中まで配線を引き込みます。<br>
										　⇒<span class="strong"><span class="english">30</span>分～<span class="english">1</span>時間程度</span>のお立合いが必要<br>
										・<span class="strong">無派遣工事</span> … モデムが郵送されてきます。<br>
										　⇒おウチにインターネット専用のコンセントがありますので、<span class="strong">モデムを接続</span>して下さい。<br><span class="color_red">（コンセントが無い場合は、サポート窓口までご相談下さい。）</span><br>
										<br>

										<span class="color_red">※インターネットの利用には、初期設定が必要です。設定方法につきましては、プロバイダ、もしくは、無線ルーターのサポート窓口にご連絡下さい。</span><br>
										<br>
										<?php if($service == "sb"):?>
											○ソフトバンク光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0800-111-2009" class="english" style="text-decoration:underline;">0800-111-2009</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">19:00</span>）<br>
										<?php elseif($service == "so"):?>
											○ソネット光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0120-80-7761" class="english" style="text-decoration:underline;">0120-80-7761</a><span class="sp_block"></span>（受付時間：<span class="english">9:00</span>～<span class="english">18:00</span>）<br>
										<?php endif;?>
										<br>
										▼無線ルーターの設定方法（無線ルーターの会社）<br>
										・<span class="english">BUFFALO</span>　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0570-086-086" class="english" style="text-decoration:underline;">0570-086-086</a>
										（受付時間：月～土・祝<span class="english">9:30</span>～<span class="english">19:00</span>、日<span class="english">9:30</span>～<span class="english">17:30</span>）<br>
										・<span class="english">I-O DATA</span>　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:050-3116-3014" class="english" style="text-decoration:underline;">050-3116-3014</a>
										（受付時間：<span class="english">9:00</span>～<span class="english">17:00</span>）<br>
										・<span class="english">tp-link</span>　サポート窓口　<span class="sp_block"></span>≫　固定電話：<a href="tel:0120-095-156" class="english" style="text-decoration:underline;">0120-095-156</a>　携帯電話：<a href="tel:0570-066-881" class="english" style="text-decoration:underline;">0570-066-881</a>
										（受付時間：平日<span class="english">9:00</span>～<span class="english">18:00</span>、土日祝<span class="english">10:00</span>～<span class="english">18:00</span>）<br>
									<?php elseif($service == "sa"):?>
										ソフトバンク<span class="english">Air</span>が到着したら、<span class="strong">コンセントに挿すだけ</span>で利用を開始することができます。<span class="strong">初期設定は必要ありません。</span><br>
										<br>
									<?php endif;?>

									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="long_sankaku_flame">
									<div class="long_sankaku"></div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="long_flow_step_icon english">STEP<br><span>5</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon5.png" width="140px" height="140px">
								</td>
								<td class="sp_hide_block"><img class="step_left_margin" src="../img/step_icon5.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 5</span>　以前利用のインターネット＆オプション解約</div>

									<div class="sub_page_sub_text step_left_margin">
										<?php if($before == "true"):?>
											以前に利用していたインターネット回線を解約します。プロバイダまで連絡して<span class="strong">「解約したい」</span>とご連絡下さい。<br>
											<div class="sp_block"><br></div>
											<span class="color_red">
												※以前に利用していたインターネットを解約しないと二重契約になります。必ずご解約をお願いします。<br>
											</span>
											<br>
										<?php else:?>
											今回は新規のご契約なので、他のサービスの解約は必要ありません。<br>
											<br>
										<?php endif;?>

										<?php if($op == "true"):?>
											<?php if($service == "sb" or $service == "sa"):?>
												オプションを利用、または解約される場合、以下の窓口までご連絡下さい。<br>
												<div class="sp_block"><br></div>
												○オプションサポート窓口　<span class="sp_block"></span>≫　<a href="tel:0120-952-621" class="english" style="text-decoration:underline;">0120-952-621</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">20:00</span>）<br>
											<?php elseif($service == "so"):?>
												オプションを利用、または解約される場合、以下の窓口までご連絡下さい。<br>
												<div class="sp_block"><br></div>
												○ソネット光サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0120-80-7761" class="english" style="text-decoration:underline;">0120-80-7761</a><span class="sp_block"></span>（受付時間：<span class="english">9:00</span>～<span class="english">18:00</span>）<br>
											<?php else:?>
											<?php endif;?>
										<?php else:?>
											お申込みしたオプションはありません。
										<?php endif;?>
									</div>
								</td>
							</tr>

							<tr>
								<td colspan="3" class="long_sankaku_flame">
									<div class="long_sankaku"></div>
								</td>
							</tr>

							<tr>
								<td>
									<div class="long_flow_step_icon english">STEP<br><span>6</span></div>
									<img class="step_left_margin sp_block" src="../img/step_icon6.png" width="140px" height="140px">
								</td>
								<td class="sp_hide_block"><img class="step_left_margin" src="../img/step_icon6.png" width="140px" height="140px"></td>
								<td>
									<div class="sub_page_sub_title step_left_margin"><span class="english">STEP 6</span>　キャンペーン適用・受取</div>

									<div class="sub_page_sub_text step_left_margin">
										<?php if($cp == "true"):?>
											キャンペーンの適用・受取を宜しくお願いします。手続きが必要なキャンペーンにつきましては、
											<span class="strong">ショートメール、もしくは、書類</span>にて通知が届きますので、忘れずにご対応をお願いします。<br>
											<br>
											<?php if($service == "sb"):?>
												○ソフトバンク光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0800-111-2009" class="english" style="text-decoration:underline;">0800-111-2009</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">19:00</span>）<br>
												<br>
											<?php elseif($service == "so"):?>
												○ソネット光　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0120-80-7761" class="english" style="text-decoration:underline;">0120-80-7761</a><span class="sp_block"></span>（受付時間：<span class="english">9:00</span>～<span class="english">18:00</span>）<br>
												<br>
											<?php elseif($service == "sa"):?>
												○ソフトバンク<span class="english">Air</span>　サポート窓口　<span class="sp_block"></span>≫　<a href="tel:0800-111-2009" class="english" style="text-decoration:underline;">0800-111-2009</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">19:00</span>）<br>
												<br>
											<?php endif;?>

											<?php if($cb > 0):?>
												弊社（株式会社ディリット）からのキャッシュバックに関しましては、後日、<span class="strong">ショートメール</span>をお送りしますので、<span class="strong"><span class="english">Web</span>サイトで振込先口座を送信</span>して下さい。
												<span class="strong">開通月から半年後の末日</span>にキャッシュバック金額を指定口座にお振込みします。<br>
												キャッシュバック金額：<span class="strong"><span class="english"><?php echo($cb);?></span>円</span><br>
												<br>
												<span class="color_red">
													【弊社のキャッシュバックに関するご注意事項】<br>
													※弊社でインターネット回線をお申込み、開通されたお客様に限ります。<br>
													※キャッシュバックの受取は、インターネット開通月の翌々月までに、申請をしていただくことが条件となります。<br>
													※ご入金は工事開通月から半年後の月末にお振込みいたします。また、入金まで<span class="english">2</span>～<span class="english">3</span>日お時間を頂くことがありますので、予めご了承下さい。<br>
													※インターネット開通月から半年後までインターネットサービスを継続し、弊社まで一度ご連絡頂くことが条件となります。<br>
													<br>
												</span>
											<?php endif;?>
										<?php else:?>
											<?php if($cb > 0):?>
												弊社（株式会社ディリット）からのキャッシュバックに関しましては、後日、<span class="strong">ショートメール</span>をお送りしますので、<span class="strong"><span class="english">Web</span>サイトで振込先口座を送信</span>して下さい。
												<span class="strong">開通月から半年後の末日</span>にキャッシュバック金額を指定口座にお振込みします。<br>
												キャッシュバック金額：<span class="strong"><span class="english"><?php echo($cb);?></span>円</span><br>
												<br>
												<span class="color_red">
													【弊社のキャッシュバックに関するご注意事項】<br>
													※弊社でインターネット回線をお申込み、開通されたお客様に限ります。<br>
													※キャッシュバックの受取は、インターネット開通月の翌々月までに、申請をしていただくことが条件となります。<br>
													※ご入金は工事開通月から半年後の月末にお振込みいたします。また、入金まで<span class="english">2</span>～<span class="english">3</span>日お時間を頂くことがありますので、予めご了承下さい。<br>
													※インターネット開通月から半年後までインターネットサービスを継続し、弊社まで一度ご連絡頂くことが条件となります。<br>
													<br>
												</span>
											<?php else:?>
												今回、適用するキャンペーンはありません。<br>
											<?php endif;?>
										<?php endif;?>
										▼ご不明な点はお気軽にご相談下さい。<br>
										○株式会社ディリット　<span class="sp_block"></span>≫　<a href="tel:0120-954-674" class="english" style="text-decoration:underline;">0120-954-674</a><span class="sp_block"></span>（受付時間：<span class="english">10:00</span>～<span class="english">20:00</span>）
									</div>
								</td>
							</tr>

						</table>

						<div class="margin_bottom60"></div>

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
