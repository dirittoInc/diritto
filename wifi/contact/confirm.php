<?php

	require_once('../config.php');
	require_once('../functions.php');

	if(isset($_POST['name'])){ $name = $_POST['name'];} else {$name = '';}
	if(isset($_POST['furigana'])){ $furigana = $_POST['furigana'];} else {$furigana = '';}
	if(isset($_POST['company'])){ $company = $_POST['company'];} else {$company = '';}
	if(isset($_POST['telephone'])){ $telephone = $_POST['telephone'];} else {$telephone = '';}
	if(isset($_POST['email'])){ $email = $_POST['email'];} else {$email = '';}
	if(isset($_POST['memo'])){ $memo = $_POST['memo'];} else {$memo = '';}

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
	<meta name="viewport" content="width=1000">
	<meta name="robots" content="noindex">

	<title>入力内容確認　|　株式会社ディリット　｜　Diritto.Inc</title>

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
				<td id="sub_page_left_title">
					お問い合わせ
				</td>
				<td id="sub_page_right_title">
					お問い合わせフォーム
				</td>
			</tr>

			<tr>
				<td id="left_menu" valign="top">
					<script>
						<!--
							make_left_menu(1, 2, 10);
							//階層, メニュー1 or 2, 何番目のメニューか
						-->
					</script>
				</td>

				<td id="right_flame" valign="top">
					<div class="right_flame_container">
						<div id="p_list">
							<a href="../index.php">トップ</a>　|　<a href="index.html">お問い合わせ</a>　|　入力内容確認
						</div>

						<div class="sub_page_title">入力内容確認</div>

						<table class="contact_flow">
							<tr>
								<td class="contact_flow_td"><span class="english">STEP1</span><div class="sp_block"></div> フォーム入力</td>
								<td class="contact_flow_td_check"><span class="english">STEP2</span><div class="sp_block"></div> 入力内容確認</td>
								<td class="contact_flow_td"><span class="english">STEP3</span><div class="sp_block"></div> 完了</td>
							</tr>
						</table><!-- contact_flow -->

						<div class="sub_page_sub_text">
							入力内容に誤りがないかを確認し、送信ボタンを押して下さい。
						</div>

						<div class="bold sp_hide_block" style="font-size:24px; margin-bottom:40px;">入力内容確認</div>
						<div class="bold sp_block" style="font-size:38px; margin-bottom:40px;">入力内容確認</div>

						<form action="input.php" method="post">
							<table class="contact_table">
								<tr>
									<td class="contact_td_width"><span class="bold">お名前</span>　<span class="required">※必須</span></td>
									<td><?php echo h($name);?></td>
								</tr>

								<tr>
									<td><span class="bold">フリガナ</span>　<span class="required">※必須</span></td>
									<td><?php echo h($furigana);?></td>
								</tr>

								<tr>
									<td><span class="bold">法人名・部署名</span></td>
									<td><?php echo h($company);?></td>
								</tr>

								<tr>
									<td><span class="bold">電話番号</span>　<span class="required">※必須</span></td>
									<td class="english"><?php echo h($telephone);?></td>
								</tr>

								<tr>
									<td><span class="bold">メールアドレス</span>　<span class="required">※必須</span></td>
									<td class="english"><?php echo h($email);?></td>
								</tr>

								<tr style="border-bottom:1px solid #bbb;">
									<td><span class="bold">お問合せ内容</span>　<span class="required">※必須</span></td>
									<td><?php echo nl2br($memo);?></td>
								</tr>

							</table>

							<input type="hidden" name="name" value="<?php echo h($name);?>">
							<input type="hidden" name="furigana" value="<?php echo h($furigana);?>">
							<input type="hidden" name="company" value="<?php echo h($company);?>">
							<input type="hidden" name="telephone" value="<?php echo h($telephone);?>">
							<input type="hidden" name="email" value="<?php echo h($email);?>">
							<input type="hidden" name="memo" value="<?php echo h($memo);?>">

							<input type="submit" class="submit_button hover" value="送信">
						</form>

					</div><!-- right_flame_container -->
				</td><!-- right_flame -->
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
