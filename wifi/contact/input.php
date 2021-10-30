<?php

require_once('../config.php');
require_once('../functions.php');

date_default_timezone_set('Asia/Tokyo');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['name'])){ $name = $_POST['name'];} else {$name = '';}
	if(isset($_POST['furigana'])){ $furigana = $_POST['furigana'];} else {$furigana = '';}
	if(isset($_POST['company'])){ $company = $_POST['company'];} else {$company = '';}
	if(isset($_POST['telephone'])){ $telephone = $_POST['telephone'];} else {$telephone = '';}
	if(isset($_POST['email'])){ $email = $_POST['email'];} else {$email = '';}
	if(isset($_POST['memo'])){ $memo = $_POST['memo'];} else {$memo = '';}

	$dbh = connectDb();
	$sql = "insert into company_contact
		(name, furigana, company, telephone, email, memo, created, modified)
		values
		(:name, :furigana, :company, :telephone, :email, :memo, now(), now())";
	$stmt = $dbh->prepare($sql);
	$params = array(
		":name" => $name,
    ":furigana" => $furigana,
		":company" => $company,
    ":telephone" => $telephone,
    ":email" => $email,
    ":memo" => $memo
	);
	$stmt->execute($params);


mb_send_mail("$email","株式会社ディリット　お問い合わせを受け付けました。","
◇◇◇━━━━━━━━━━━━━━━━

株式会社ディリット　お問い合わせを受け付けました。

━━━━━━━━━━━━━━━━◇◇◇


　この度は、Webサイトにてお問い合わせをして頂きありがとうございます。

	内容確認の後、担当からEmailまたはお電話にてご連絡します。

　また、受付の混雑具合により、時間がかかる場合がありますので、あらかじめご了承お願いします。


━━━━━━━━━━━━━━━━━━━
━━━━━━━━━━━━━━━━━━━

株式会社ディリット
TEL:045-319-6612
営業時間：10:00～20:00

〒222-0033
神奈川横浜市港北区新横浜3-6-12
日総第12ビル 10F

━━━━━━━━━━━━━━━━━━━
━━━━━━━━━━━━━━━━━━━


","From:support@diritto.co.jp");


mb_send_mail("jimu@diritto.co.jp","【コーポレートサイト】より、お問い合わせを受け付けました。","

名前：$name
フリガナ：$furigana
法人名・部署名：$company

電話番号：$telephone
メールアドレス：$email
お問合せ内容：
$memo



","From:info@diritto.co.jp");


	header('Location: thanks.html');
	exit;

}


?>
