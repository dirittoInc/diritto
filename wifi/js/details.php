<?php

require_once('../config.php');
require_once('../functions.php');

if(preg_match('/^[1-9][0-9]*$/', $_GET['id'])){
  $id = (int)$_GET['id'];
}else{
  echo "不正なIDです。";
  exit;
}

//変数宣言
$next_week_order_sum = 0;
$next_week_result_sum = 0;
$next_week_contact_sum = 0;
$next_week_fine_sum = 0;
$next_week_rate = 0;

$one_week_order_sum = 0;
$one_week_result_sum = 0;
$one_week_contact_sum = 0;
$one_week_fine_sum = 0;
$one_week_rate = 0;

$one_month_order_sum = 0;
$one_month_result_sum = 0;
$one_month_contact_sum = 0;
$one_month_fine_sum = 0;
$one_month_rate = 0;

$two_week_order_sum = 0;
$two_week_result_sum = 0;
$two_week_contact_sum = 0;
$two_week_fine_sum = 0;
$two_week_rate = 0;

$two_month_order_sum = 0;
$two_month_result_sum = 0;
$two_month_contact_sum = 0;
$two_month_fine_sum = 0;
$two_month_rate = 0;

$three_week_order_sum = 0;
$three_week_result_sum = 0;
$three_week_contact_sum = 0;
$three_week_fine_sum = 0;
$three_week_rate = 0;

$three_month_order_sum = 0;
$three_month_result_sum = 0;
$three_month_contact_sum = 0;
$three_month_fine_sum = 0;
$three_month_rate = 0;

$four_week_order_sum = 0;
$four_week_result_sum = 0;
$four_week_contact_sum = 0;
$four_week_fine_sum = 0;
$four_week_rate = 0;

$four_month_order_sum = 0;
$four_month_result_sum = 0;
$four_month_contact_sum = 0;
$four_month_fine_sum = 0;
$four_month_rate = 0;

$five_week_order_sum = 0;
$five_week_result_sum = 0;
$five_week_contact_sum = 0;
$five_week_fine_sum = 0;
$five_week_rate = 0;

$five_month_order_sum = 0;
$five_month_result_sum = 0;
$five_month_contact_sum = 0;
$five_month_fine_sum = 0;
$five_month_rate = 0;

$six_week_order_sum = 0;
$six_week_result_sum = 0;
$six_week_contact_sum = 0;
$six_week_fine_sum = 0;
$six_week_rate = 0;

$six_month_order_sum = 0;
$six_month_result_sum = 0;
$six_month_contact_sum = 0;
$six_month_fine_sum = 0;
$six_month_rate = 0;

$seven_week_order_sum = 0;
$seven_week_result_sum = 0;
$seven_week_contact_sum = 0;
$seven_week_fine_sum = 0;
$seven_week_rate = 0;

$seven_month_order_sum = 0;
$seven_month_result_sum = 0;
$seven_month_contact_sum = 0;
$seven_month_fine_sum = 0;
$seven_month_rate = 0;

$eight_week_order_sum = 0;
$eight_week_result_sum = 0;
$eight_week_contact_sum = 0;
$eight_week_fine_sum = 0;
$eight_week_rate = 0;

$eight_month_order_sum = 0;
$eight_month_result_sum = 0;
$eight_month_contact_sum = 0;
$eight_month_fine_sum = 0;
$eight_month_rate = 0;

$nine_week_order_sum = 0;
$nine_week_result_sum = 0;
$nine_week_contact_sum = 0;
$nine_week_fine_sum = 0;
$nine_week_rate = 0;

$nine_month_order_sum = 0;
$nine_month_result_sum = 0;
$nine_month_contact_sum = 0;
$nine_month_fine_sum = 0;
$nine_month_rate = 0;

$ten_week_order_sum = 0;
$ten_week_result_sum = 0;
$ten_week_contact_sum = 0;
$ten_week_fine_sum = 0;
$ten_week_rate = 0;

$ten_month_order_sum = 0;
$ten_month_result_sum = 0;
$ten_month_contact_sum = 0;
$ten_month_fine_sum = 0;
$ten_month_rate = 0;

$created = "";

//日付を取得
date_default_timezone_set('Asia/Tokyo');
$year = date("Y");
$month = date("m");
$date = date("d");
$day = date("w");
if($day == 0){
  $day = 7;
}
$end = date("t");
$one_day = date("Y/m/01 00:00:00"); //当月1日の日付
$this_time = date("Y/m/d H:i:s");

$this_mon_minus = $day - 1;
$this_sun_plus = 7 - $day;

//週ごとのデータ用変数計算
$this_week_mon = date("Y/m/d 00:00:00", strtotime("-{$this_mon_minus} days", strtotime($this_time)));
$_this_week_mon = date("n/j", strtotime($this_week_mon));
$this_week_sun = date("Y/m/d 00:00:00", strtotime("+{$this_sun_plus} days", strtotime($this_time)));
$_this_week_sun = date("n/j", strtotime($this_week_sun));

$next_week_mon = date("Y/m/d H:i:s", strtotime($this_week_mon . "next Monday")); //次の月曜
$_next_week_mon = date("n/j", strtotime($this_week_mon . "next Monday"));
$next_week_sun = date("Y/m/d H:i:s", strtotime($this_week_sun . "next Sunday")); //次の日曜
$_next_week_sun = date("n/j", strtotime($this_week_sun . "next Sunday"));

$two_week_later_mon = date("Y/m/d H:i:s", strtotime($next_week_mon . "next Monday")); //次の月曜
$_two_week_later_mon = date("n/j", strtotime($next_week_mon . "next Monday"));
$two_week_later_sun = date("Y/m/d H:i:s", strtotime($next_week_sun . "next Sunday")); //次の日曜
$_two_week_later_sun = date("n/j", strtotime($next_week_sun . "next Sunday"));

$last_mon = date("Y/m/d H:i:s", strtotime($this_week_mon . "last Monday")); //次の月曜
$_last_mon = date("n/j", strtotime($this_week_mon . "last Monday"));
$last_sun = date("Y/m/d H:i:s", strtotime($this_week_sun . "last Sunday")); //次の日曜
$_last_sun = date("n/j", strtotime($this_week_sun . "last Sunday"));

$two_week_ago_mon = date("Y/m/d H:i:s", strtotime($last_mon . "last Monday")); //次の月曜
$_two_week_ago_mon = date("n/j", strtotime($last_mon . "last Monday"));
$two_week_ago_sun = date("Y/m/d H:i:s", strtotime($last_sun . "last Sunday")); //次の日曜
$_two_week_ago_sun = date("n/j", strtotime($last_sun . "last Sunday"));

$three_week_ago_mon = date("Y/m/d H:i:s", strtotime($two_week_ago_mon . "last Monday")); //次の月曜
$_three_week_ago_mon = date("n/j", strtotime($two_week_ago_mon . "last Monday"));
$three_week_ago_sun = date("Y/m/d H:i:s", strtotime($two_week_ago_sun . "last Sunday")); //次の日曜
$_three_week_ago_sun = date("n/j", strtotime($two_week_ago_sun . "last Sunday"));

$four_week_ago_mon = date("Y/m/d H:i:s", strtotime($three_week_ago_mon . "last Monday")); //次の月曜
$_four_week_ago_mon = date("n/j", strtotime($three_week_ago_mon . "last Monday"));
$four_week_ago_sun = date("Y/m/d H:i:s", strtotime($three_week_ago_sun . "last Sunday")); //次の日曜
$_four_week_ago_sun = date("n/j", strtotime($three_week_ago_sun . "last Sunday"));

$five_week_ago_mon = date("Y/m/d H:i:s", strtotime($four_week_ago_mon . "last Monday")); //次の月曜
$_five_week_ago_mon = date("n/j", strtotime($four_week_ago_mon . "last Monday"));
$five_week_ago_sun = date("Y/m/d H:i:s", strtotime($four_week_ago_sun . "last Sunday")); //次の日曜
$_five_week_ago_sun = date("n/j", strtotime($four_week_ago_sun . "last Sunday"));

$six_week_ago_mon = date("Y/m/d H:i:s", strtotime($five_week_ago_mon . "last Monday")); //次の月曜
$_six_week_ago_mon = date("n/j", strtotime($five_week_ago_mon . "last Monday"));
$six_week_ago_sun = date("Y/m/d H:i:s", strtotime($five_week_ago_sun . "last Sunday")); //次の日曜
$_six_week_ago_sun = date("n/j", strtotime($five_week_ago_sun . "last Sunday"));

$seven_week_ago_mon = date("Y/m/d H:i:s", strtotime($six_week_ago_mon . "last Monday")); //次の月曜
$_seven_week_ago_mon = date("n/j", strtotime($six_week_ago_mon . "last Monday"));
$seven_week_ago_sun = date("Y/m/d H:i:s", strtotime($six_week_ago_sun . "last Sunday")); //次の日曜
$_seven_week_ago_sun = date("n/j", strtotime($six_week_ago_sun . "last Sunday"));

$eight_week_ago_mon = date("Y/m/d H:i:s", strtotime($seven_week_ago_mon . "last Monday")); //次の月曜
$_eight_week_ago_mon = date("n/j", strtotime($seven_week_ago_mon . "last Monday"));
$eight_week_ago_sun = date("Y/m/d H:i:s", strtotime($seven_week_ago_sun . "last Sunday")); //次の日曜
$_eight_week_ago_sun = date("n/j", strtotime($seven_week_ago_sun . "last Sunday"));

$nine_week_ago_mon = date("Y/m/d H:i:s", strtotime($eight_week_ago_mon . "last Monday")); //次の月曜
$_nine_week_ago_mon = date("n/j", strtotime($eight_week_ago_mon . "last Monday"));
$nine_week_ago_sun = date("Y/m/d H:i:s", strtotime($eight_week_ago_sun . "last Sunday")); //次の日曜
$_nine_week_ago_sun = date("n/j", strtotime($eight_week_ago_sun . "last Sunday"));

$ten_week_ago_mon = date("Y/m/d H:i:s", strtotime($nine_week_ago_mon . "last Monday")); //次の月曜
$_ten_week_ago_mon = date("n/j", strtotime($nine_week_ago_mon . "last Monday"));
$ten_week_ago_sun = date("Y/m/d H:i:s", strtotime($nine_week_ago_sun . "last Sunday")); //次の日曜
$_ten_week_ago_sun = date("n/j", strtotime($nine_week_ago_sun . "last Sunday"));

if($day == 2){
  $this_week_tue = date("Y/m/d 18:00:00", strtotime($this_time));
}elseif($day > 2){
  $this_week_tue = date("Y/m/d 18:00:00", strtotime($this_time . "last Tuesday"));
}elseif($day < 2){
  $this_week_tue = date("Y/m/d 18:00:00", strtotime($this_time . "next Tuesday"));
}
$next_week_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "+1 weeks"));
$last_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-1 weeks"));
$two_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-2 weeks"));
$three_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-3 weeks"));
$four_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-4 weeks"));
$five_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-5 weeks"));
$six_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-6 weeks"));
$seven_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-7 weeks"));
$eight_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-8 weeks"));
$nine_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-9 weeks"));
$ten_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-10 weeks"));
$eleven_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-11 weeks"));
$twelve_week_ago_tue = date("Y/m/d 18:00:00", strtotime($this_week_tue . "-12 weeks"));

if($day == 3){
  $this_week_wed = date("Y/m/d 18:00:00", strtotime($this_time));
}elseif($day > 3){
  $this_week_wed = date("Y/m/d 18:00:00", strtotime($this_time . "last Wednesday"));
}elseif($day < 3){
  $this_week_wed = date("Y/m/d 18:00:00", strtotime($this_time . "next Wednesday"));
}
$next_week_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "+1 weeks"));
$last_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-1 weeks"));
$two_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-2 weeks"));
$three_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-3 weeks"));
$four_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-4 weeks"));
$five_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-5 weeks"));
$six_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-6 weeks"));
$seven_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-7 weeks"));
$eight_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-8 weeks"));
$nine_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-9 weeks"));
$ten_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-10 weeks"));
$eleven_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-11 weeks"));
$twelve_week_ago_wed = date("Y/m/d 18:00:00", strtotime($this_week_wed . "-12 weeks"));

//月ごとのデータ用変数計算
$next_month = date("Y/m/01 00:00:00", strtotime($one_day . "+1 months"));
$_one_day = date("n"); //表示用
$last_month = date("Y/m/01 00:00:00", strtotime($one_day . "-1 months"));
$_last_month = date("n", strtotime($one_day . "-1 months")); //表示用
$two_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-2 months"));
$_two_month_ago = date("n", strtotime($one_day . "-2 months")); //表示用
$three_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-3 months"));
$_three_month_ago = date("n", strtotime($one_day . "-3 months")); //表示用
$four_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-4 months"));
$_four_month_ago = date("n", strtotime($one_day . "-4 months")); //表示用
$five_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-5 months"));
$_five_month_ago = date("n", strtotime($one_day . "-5 months")); //表示用
$six_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-6 months"));
$_six_month_ago = date("n", strtotime($one_day . "-6 months")); //表示用
$seven_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-7 months"));
$_seven_month_ago = date("n", strtotime($one_day . "-7 months")); //表示用
$eight_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-8 months"));
$_eight_month_ago = date("n", strtotime($one_day . "-8 months")); //表示用
$nine_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-9 months"));
$_nine_month_ago = date("n", strtotime($one_day . "-9 months")); //表示用
$ten_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-10 months"));
$_ten_month_ago = date("n", strtotime($one_day . "-10 months")); //表示用
$eleven_month_ago = date("Y/m/01 00:00:00", strtotime($one_day . "-11 months"));
$_eleven_month_ago = date("n", strtotime($one_day . "-11 months")); //表示用

//配布＆配布枚数期間計算
if(date("w",strtotime($next_month)) == "1"){
  $next_month_first_mon = $next_month; //来月の1日
}else{
  $next_month_first_mon = date("Y/m/d H:i:s", strtotime($next_month . "next Monday")); //来月最初の月曜
}
$next_month_last_mon = date("Y/m/d H:i:s", strtotime($next_month_first_mon . "last Monday"));

if(date("w",strtotime($one_day)) == "1"){
  $first_mon = $one_day; //月の1日
}else{
  $first_mon = date("Y/m/d H:i:s", strtotime($one_day . "next Monday")); //今月最初の月曜
}
$this_month_last_mon = date("Y/m/d H:i:s", strtotime($first_mon . "last Monday"));

if(date("w",strtotime($last_month)) == "1"){
  $last_month_first_mon = $last_month; //先月の1日
}else{
  $last_month_first_mon = date("Y/m/d H:i:s", strtotime($last_month . "next Monday")); //先月最初の月曜
}
$last_month_last_mon = date("Y/m/d H:i:s", strtotime($last_month_first_mon . "last Monday"));

if(date("w",strtotime($two_month_ago)) == "1"){
  $two_month_ago_first_mon = $two_month_ago;
}else{
  $two_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($two_month_ago . "next Monday"));
}
$two_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($two_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($three_month_ago)) == "1"){
  $three_month_ago_first_mon = $three_month_ago;
}else{
  $three_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($three_month_ago . "next Monday"));
}
$three_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($three_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($four_month_ago)) == "1"){
  $four_month_ago_first_mon = $four_month_ago;
}else{
  $four_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($four_month_ago . "next Monday"));
}
$four_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($four_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($five_month_ago)) == "1"){
  $five_month_ago_first_mon = $five_month_ago;
}else{
  $five_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($five_month_ago . "next Monday"));
}
$five_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($five_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($six_month_ago)) == "1"){
  $six_month_ago_first_mon = $six_month_ago;
}else{
  $six_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($six_month_ago . "next Monday"));
}
$six_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($six_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($seven_month_ago)) == "1"){
  $seven_month_ago_first_mon = $seven_month_ago;
}else{
  $seven_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($seven_month_ago . "next Monday"));
}
$seven_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($seven_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($eight_month_ago)) == "1"){
  $eight_month_ago_first_mon = $eight_month_ago;
}else{
  $eight_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($eight_month_ago . "next Monday"));
}
$eight_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($eight_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($nine_month_ago)) == "1"){
  $nine_month_ago_first_mon = $nine_month_ago;
}else{
  $nine_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($nine_month_ago . "next Monday"));
}
$nine_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($nine_month_ago_first_mon . "last Monday"));

if(date("w",strtotime($ten_month_ago)) == "1"){
  $ten_month_ago_first_mon = $ten_month_ago;
}else{
  $ten_month_ago_first_mon = date("Y/m/d H:i:s", strtotime($ten_month_ago . "next Monday"));
}
$ten_month_ago_last_mon = date("Y/m/d H:i:s", strtotime($ten_month_ago_first_mon . "last Monday"));

//担当者格納
$dbh = connectDb();
$stmt = $dbh->prepare("select * from posting_id where id = :id limit 1");
$stmt->execute(array(":id" => $id));
$member = $stmt->fetch() or die("no one found!");
$code = $member['code'];
$name = $member['name'];

//勤怠データ格納
$dbh = connectDb();
$kintai = array();
$sql = "select * from diritto_kintai where modified >= '2020-01-01' and name = '$name' order by modified desc";
foreach($dbh->query($sql) as $row){
	array_push($kintai, $row);
}

foreach($kintai as $k){
  $created = date("Y/m/d H:i:s", strtotime($k['modified']));

  //週ごとのデータ：発注枚数合計、配布枚数合計
  if($created >= $this_week_mon and $created < $next_week_mon){
    $one_week_result_sum = $one_week_result_sum + $k['maisu'];
  }
  if($created >= $last_mon and $created < $this_week_mon){
    $two_week_result_sum = $two_week_result_sum + $k['maisu'];
  }
  if($created >= $two_week_ago_mon and $created < $last_mon){
    $three_week_result_sum = $three_week_result_sum + $k['maisu'];
  }
  if($created >= $three_week_ago_mon and $created < $two_week_ago_mon){
    $four_week_result_sum = $four_week_result_sum + $k['maisu'];
  }
  if($created >= $four_week_ago_mon and $created < $three_week_ago_mon){
    $five_week_result_sum = $five_week_result_sum + $k['maisu'];
  }
  if($created >= $five_week_ago_mon and $created < $four_week_ago_mon){
    $six_week_result_sum = $six_week_result_sum + $k['maisu'];
  }
  if($created >= $six_week_ago_mon and $created < $five_week_ago_mon){
    $seven_week_result_sum = $seven_week_result_sum + $k['maisu'];
  }
  if($created >= $seven_week_ago_mon and $created < $six_week_ago_mon){
    $eight_week_result_sum = $eight_week_result_sum + $k['maisu'];
  }
  if($created >= $eight_week_ago_mon and $created < $seven_week_ago_mon){
    $nine_week_result_sum = $nine_week_result_sum + $k['maisu'];
  }
  if($created >= $nine_week_ago_mon and $created < $eight_week_ago_mon){
    $ten_week_result_sum = $ten_week_result_sum + $k['maisu'];
  }

  if($created >= date("Y/m/d H:i:s", strtotime("2020-9-8"))){
    if($created >= $last_tue and $created < $next_week_tue){
      $next_week_order_sum = $next_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $two_week_ago_tue and $created < $last_tue){
      $one_week_order_sum = $one_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $three_week_ago_tue and $created < $two_week_ago_tue){
      $two_week_order_sum = $two_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $four_week_ago_tue and $created < $three_week_ago_tue){
      $three_week_order_sum = $three_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $five_week_ago_tue and $created < $four_week_ago_tue){
      $four_week_order_sum = $four_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $six_week_ago_tue and $created < $five_week_ago_tue){
      $five_week_order_sum = $five_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $seven_week_ago_tue and $created < $six_week_ago_tue){
      $six_week_order_sum = $six_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $eight_week_ago_tue and $created < $seven_week_ago_tue){
      $seven_week_order_sum = $seven_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $nine_week_ago_tue and $created < $eight_week_ago_tue){
      $eight_week_order_sum = $eight_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $ten_week_ago_tue and $created < $nine_week_ago_tue){
      $nine_week_order_sum = $nine_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $eleven_week_ago_tue and $created < $ten_week_ago_tue){
      $ten_week_order_sum = $ten_week_order_sum + $k['chirashi_order'];
    }
  }else{
    if($created >= $two_week_ago_wed and $created < $last_wed){
      $one_week_order_sum = $one_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $three_week_ago_wed and $created < $two_week_ago_wed){
      $two_week_order_sum = $two_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $four_week_ago_wed and $created < $three_week_ago_wed){
      $three_week_order_sum = $three_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $five_week_ago_wed and $created < $four_week_ago_wed){
      $four_week_order_sum = $four_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $six_week_ago_wed and $created < $five_week_ago_wed){
      $five_week_order_sum = $five_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $seven_week_ago_wed and $created < $six_week_ago_wed){
      $six_week_order_sum = $six_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $eight_week_ago_wed and $created < $seven_week_ago_wed){
      $seven_week_order_sum = $seven_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $nine_week_ago_wed and $created < $eight_week_ago_wed){
      $eight_week_order_sum = $eight_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $ten_week_ago_wed and $created < $nine_week_ago_wed){
      $nine_week_order_sum = $nine_week_order_sum + $k['chirashi_order'];
    }
    if($created >= $eleven_week_ago_wed and $created < $ten_week_ago_wed){
      $ten_week_order_sum = $ten_week_order_sum + $k['chirashi_order'];
    }
  }

  //月ごとのデータ：発注枚数合計、配布枚数合計
  if($created >= $first_mon and $created < $next_month){
    $one_month_result_sum = $one_month_result_sum + $k['maisu'];
  }
  if($created >= $last_month_first_mon and $created < $first_mon){
    $two_month_result_sum = $two_month_result_sum + $k['maisu'];
  }
  if($created >= $two_month_ago_first_mon and $created < $last_month_first_mon){
    $three_month_result_sum = $three_month_result_sum + $k['maisu'];
  }
  if($created >= $three_month_ago_first_mon and $created < $two_month_ago_first_mon){
    $four_month_result_sum = $four_month_result_sum + $k['maisu'];
  }
  if($created >= $four_month_ago_first_mon and $created < $three_month_ago_first_mon){
    $five_month_result_sum = $five_month_result_sum + $k['maisu'];
  }
  if($created >= $five_month_ago_first_mon and $created < $four_month_ago_first_mon){
    $six_month_result_sum = $six_month_result_sum + $k['maisu'];
  }
  if($created >= $six_month_ago_first_mon and $created < $five_month_ago_first_mon){
    $seven_month_result_sum = $seven_month_result_sum + $k['maisu'];
  }
  if($created >= $seven_month_ago_first_mon and $created < $six_month_ago_first_mon){
    $eight_month_result_sum = $eight_month_result_sum + $k['maisu'];
  }
  if($created >= $eight_month_ago_first_mon and $created < $seven_month_ago_first_mon){
    $nine_month_result_sum = $nine_month_result_sum + $k['maisu'];
  }
  if($created >= $nine_month_ago_first_mon and $created < $eight_month_ago_first_mon){
    $ten_month_result_sum = $ten_month_result_sum + $k['maisu'];
  }

  if($k['kubun'] == '発注' and $k['status'] == '発注済み'){

    if($created >= $this_month_last_mon and $created < $next_month_last_mon){
      $one_month_order_sum = $one_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $last_month_last_mon and $created < $this_month_last_mon){
      $two_month_order_sum = $two_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $two_month_ago_last_mon and $created < $last_month_last_mon){
      $three_month_order_sum = $three_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $four_month_ago_last_mon and $created < $three_month_ago_last_mon){
      $four_month_order_sum = $four_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $five_month_ago_last_mon and $created < $four_month_ago_last_mon){
      $five_month_order_sum = $five_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $six_month_ago_last_mon and $created < $five_month_ago_last_mon){
      $six_month_order_sum = $six_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $seven_month_ago_last_mon and $created < $six_month_ago_last_mon){
      $seven_month_order_sum = $seven_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $eight_month_ago_last_mon and $created < $seven_month_ago_last_mon){
      $eight_month_order_sum = $eight_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $nine_month_ago_last_mon and $created < $eight_month_ago_last_mon){
      $nine_month_order_sum = $nine_month_order_sum + $k['chirashi_order'];
    }
    if($created >= $ten_month_ago_last_mon and $created < $nine_month_ago_last_mon){
      $ten_month_order_sum = $ten_month_order_sum + $k['chirashi_order'];
    }

  }

}

//週ごとのデータ：罰金枚数合計
$one_week_fine_sum = $one_week_order_sum - $one_week_result_sum;
if($one_week_fine_sum < 0){$one_week_fine_sum = 0;}
$two_week_fine_sum = $two_week_order_sum - $two_week_result_sum;
if($two_week_fine_sum < 0){$two_week_fine_sum = 0;}
$three_week_fine_sum = $three_week_order_sum - $three_week_result_sum;
if($three_week_fine_sum < 0){$three_week_fine_sum = 0;}
$four_week_fine_sum = $four_week_order_sum - $four_week_result_sum;
if($four_week_fine_sum < 0){$four_week_fine_sum = 0;}
$five_week_fine_sum = $five_week_order_sum - $five_week_result_sum;
if($five_week_fine_sum < 0){$five_week_fine_sum = 0;}
$six_week_fine_sum = $six_week_order_sum - $six_week_result_sum;
if($six_week_fine_sum < 0){$six_week_fine_sum = 0;}
$seven_week_fine_sum = $seven_week_order_sum - $seven_week_result_sum;
if($seven_week_fine_sum < 0){$seven_week_fine_sum = 0;}
$eight_week_fine_sum = $eight_week_order_sum - $eight_week_result_sum;
if($eight_week_fine_sum < 0){$eight_week_fine_sum = 0;}
$nine_week_fine_sum = $nine_week_order_sum - $nine_week_result_sum;
if($nine_week_fine_sum < 0){$nine_week_fine_sum = 0;}
$ten_week_fine_sum = $ten_week_order_sum - $ten_week_result_sum;
if($ten_week_fine_sum < 0){$ten_week_fine_sum = 0;}

//月ごとのデータ：罰金枚数合計
$one_month_fine_sum = $one_month_order_sum - $one_month_result_sum;
if($one_month_fine_sum < 0){$one_month_fine_sum = 0;}
$two_month_fine_sum = $two_month_order_sum - $two_month_result_sum;
if($two_month_fine_sum < 0){$two_month_fine_sum = 0;}
$three_month_fine_sum = $three_month_order_sum - $three_month_result_sum;
if($three_month_fine_sum < 0){$three_month_fine_sum = 0;}
$four_month_fine_sum = $four_month_order_sum - $four_month_result_sum;
if($four_month_fine_sum < 0){$four_month_fine_sum = 0;}
$five_month_fine_sum = $five_month_order_sum - $five_month_result_sum;
if($five_month_fine_sum < 0){$five_month_fine_sum = 0;}
$six_month_fine_sum = $six_month_order_sum - $six_month_result_sum;
if($six_month_fine_sum < 0){$six_month_fine_sum = 0;}
$seven_month_fine_sum = $seven_month_order_sum - $seven_month_result_sum;
if($seven_month_fine_sum < 0){$seven_month_fine_sum = 0;}
$eight_month_fine_sum = $eight_month_order_sum - $eight_month_result_sum;
if($eight_month_fine_sum < 0){$eight_month_fine_sum = 0;}
$nine_month_fine_sum = $nine_month_order_sum - $nine_month_result_sum;
if($nine_month_fine_sum < 0){$nine_month_fine_sum = 0;}
$ten_month_fine_sum = $ten_month_order_sum - $ten_month_result_sum;
if($ten_month_fine_sum < 0){$ten_month_fine_sum = 0;}

//顧客データ格納
$dbh = connectDb();
$contact = array();
$sql = "select * from customers_app where status = 'active' and entry != '申込' and entry != '一次受け（未対応）' and entry != '一次受け（完了）' and tantou_chirashi = '$code' and karien != '仮エントリー' and entry_id != '' order by modified desc";
foreach($dbh->query($sql) as $row){
	array_push($contact, $row);
}

foreach($contact as $c){
  $created = date("Y/m/d H:i:s", strtotime($c['modified']));

  //週ごとのデータ：獲得件数合計
  if($created >= $this_week_mon and $created < $next_week_mon){
    $one_week_contact_sum++;
  }
  if($created >= $last_mon and $created < $this_week_mon){
    $two_week_contact_sum++;
  }
  if($created >= $two_week_ago_mon and $created < $last_mon){
    $three_week_contact_sum++;
  }
  if($created >= $three_week_ago_mon and $created < $two_week_ago_mon){
    $four_week_contact_sum++;
  }
  if($created >= $four_week_ago_mon and $created < $three_week_ago_mon){
    $five_week_contact_sum++;
  }
  if($created >= $five_week_ago_mon and $created < $four_week_ago_mon){
    $six_week_contact_sum++;
  }
  if($created >= $six_week_ago_mon and $created < $five_week_ago_mon){
    $seven_week_contact_sum++;
  }
  if($created >= $seven_week_ago_mon and $created < $six_week_ago_mon){
    $eight_week_contact_sum++;
  }
  if($created >= $eight_week_ago_mon and $created < $seven_week_ago_mon){
    $nine_week_contact_sum++;
  }
  if($created >= $nine_week_ago_mon and $created < $eight_week_ago_mon){
    $ten_week_contact_sum++;
  }

  //月ごとのデータ：獲得件数合計
  if($created >= $first_mon and $created < $next_month_first_mon){
    $one_month_contact_sum++;
  }
  if($created >= $last_month_first_mon and $created < $first_mon){
    $two_month_contact_sum++;
  }
  if($created >= $two_month_ago_first_mon and $created < $last_month_first_mon){
    $three_month_contact_sum++;
  }
  if($created >= $three_month_ago_first_mon and $created < $two_month_ago_first_mon){
    $four_month_contact_sum++;
  }
  if($created >= $four_month_ago_first_mon and $created < $three_month_ago_first_mon){
    $five_month_contact_sum++;
  }
  if($created >= $five_month_ago_first_mon and $created < $four_month_ago_first_mon){
    $six_month_contact_sum++;
  }
  if($created >= $six_month_ago_first_mon and $created < $five_month_ago_first_mon){
    $six_month_contact_sum++;
  }
  if($created >= $seven_month_ago_first_mon and $created < $six_month_ago_first_mon){
    $seven_month_contact_sum++;
  }
  if($created >= $eight_month_ago_first_mon and $created < $seven_month_ago_first_mon){
    $eight_month_contact_sum++;
  }
  if($created >= $nine_month_ago_first_mon and $created < $eight_month_ago_first_mon){
    $nine_month_contact_sum++;
  }
  if($created >= $ten_month_ago_first_mon and $created < $nine_month_ago_first_mon){
    $ten_month_contact_sum++;
  }
}

//獲得率計算
if($one_week_contact_sum !== 0){
  $one_week_rate = round($one_week_result_sum / $one_week_contact_sum);
}else{
  $one_week_rate = 0;
}
if($two_week_contact_sum !== 0){
  $two_week_rate = round($two_week_result_sum / $two_week_contact_sum);
}else{
  $two_week_rate = 0;
}
if($three_week_contact_sum !== 0){
  $three_week_rate = round($three_week_result_sum / $three_week_contact_sum);
}else{
  $three_week_rate = 0;
}
if($four_week_contact_sum !== 0){
  $four_week_rate = round($four_week_result_sum / $four_week_contact_sum);
}else{
  $four_week_rate = 0;
}
if($five_week_contact_sum !== 0){
  $five_week_rate = round($five_week_result_sum / $five_week_contact_sum);
}else{
  $five_week_rate = 0;
}
if($six_week_contact_sum !== 0){
  $six_week_rate = round($six_week_result_sum / $six_week_contact_sum);
}else{
  $six_week_rate = 0;
}
if($seven_week_contact_sum !== 0){
  $seven_week_rate = round($seven_week_result_sum / $seven_week_contact_sum);
}else{
  $seven_week_rate = 0;
}
if($eight_week_contact_sum !== 0){
  $eight_week_rate = round($eight_week_result_sum / $eight_week_contact_sum);
}else{
  $eight_week_rate = 0;
}
if($nine_week_contact_sum !== 0){
  $nine_week_rate = round($nine_week_result_sum / $nine_week_contact_sum);
}else{
  $nine_week_rate = 0;
}
if($ten_week_contact_sum !== 0){
  $ten_week_rate = round($ten_week_result_sum / $ten_week_contact_sum);
}else{
  $ten_week_rate = 0;
}

if($one_month_contact_sum !== 0){
  $one_month_rate = round($one_month_result_sum / $one_month_contact_sum);
}else{
  $one_month_rate = 0;
}
if($two_month_contact_sum !== 0){
  $two_month_rate = round($two_month_result_sum / $two_month_contact_sum);
}else{
  $two_month_rate = 0;
}
if($three_month_contact_sum !== 0){
  $three_month_rate = round($three_month_result_sum / $three_month_contact_sum);
}else{
  $three_month_rate = 0;
}
if($four_month_contact_sum !== 0){
  $four_month_rate = round($four_month_result_sum / $four_month_contact_sum);
}else{
  $four_month_rate = 0;
}
if($five_month_contact_sum !== 0){
  $five_month_rate = round($five_month_result_sum / $five_month_contact_sum);
}else{
  $five_month_rate = 0;
}
if($six_month_contact_sum !== 0){
  $six_month_rate = round($six_month_result_sum / $six_month_contact_sum);
}else{
  $six_month_rate = 0;
}
if($seven_month_contact_sum !== 0){
  $seven_month_rate = round($seven_month_result_sum / $seven_month_contact_sum);
}else{
  $seven_month_rate = 0;
}
if($eight_month_contact_sum !== 0){
  $eight_month_rate = round($eight_month_result_sum / $eight_month_contact_sum);
}else{
  $eight_month_rate = 0;
}
if($nine_month_contact_sum !== 0){
  $nine_month_rate = round($nine_month_result_sum / $nine_month_contact_sum);
}else{
  $nine_month_rate = 0;
}
if($ten_month_contact_sum !== 0){
  $ten_month_rate = round($ten_month_result_sum / $ten_month_contact_sum);
}else{
  $ten_month_rate = 0;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>

	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="robots" content="noindex">

	<title>ポスティングスタッフ ｜ 株式会社Diritto</title>

	<link rel="stylesheet" href="../css/main.css">
	<script src="../js/jquery-3.5.0.min.js"></script>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script src="../js/array.js"></script>
	<script src="../js/main.js"></script>

  <!-- Graph用 -->
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>

</head>
<body>
	<img id="diritto_logo" src="../img/logo.png" width="150px" height="65px">

	<script>
		<!--
			make_left_flame(2,0);
		-->
	</script>

	<div id="right_flame">
	<div id="admin_flame">

		<div class="right_flame_title"><a href="index.php">ポスティングスタッフ進捗管理</a>　/　<?php echo h($member['name']);?>さん</div>

		<div class="input_flame">
			<div class="item">▼チラシ枚数（/週）</div>
			<div class="clear"></div>

      <div id="week_sheets" style="width: 1200px; height: 300px; background-color: #FFFFFF; margin:0px;"></div>
      <!-- amCharts javascript code -->
      <script type="text/javascript">
        AmCharts.makeChart("week_sheets",
          {
            "type": "serial",
            "categoryField": "category",
					  "columnSpacing": 3,
            "rotate": false,
            "startDuration": 1,
            "creditsPosition": "top-left",
            "startEffect": "easeOutSine",
            "marginTop": 0,
            "fontSize": 12,
            "theme": "light",
            "categoryAxis": {
              "gridPosition": "start",
            },
            "trendLines": [],
            "graphs": [
              {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "fillAlphas": 1,
                "id": "AmGraph-1",
                "labelText": "[[value]]",
                "fontSize": 8,
                "title": "発注枚数",
                "type": "column",
                "valueField": "column-1"
              },
              {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "fillAlphas": 1,
                "id": "AmGraph-2",
                "labelText": "[[value]]",
                "fontSize": 8,
                "title": "配布枚数",
                "type": "column",
                "valueField": "column-2"
              },
              {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "fillAlphas": 1,
                "id": "AmGraph-3",
                "labelText": "[[value]]",
                "fontSize": 8,
                "title": "罰金対象",
                "type": "column",
                "valueField": "column-3"
              }
            ],
            "guides": [],
            "valueAxes": [
              {
                "id": "ValueAxis-1",
                "minimum": 0,
                "autoGridCount": false,
                "title": "",
              }
            ],
            "allLabels": [],
            "balloon": {},
            "legend": {
              "enabled": true,
              "align": "center",
              "autoMargins": false,
              "position": "right",
              "useGraphSettings": true
            },
            "titles": [
              {
                "id": "Title-1",
                "size": 15,
                "text": ""
              }
            ],
            "dataProvider": [
              {
                "category": "<?php echo h($_nine_week_ago_mon . "～" . $_nine_week_ago_sun);?>",
                "column-1": <?php echo h($ten_week_order_sum);?>,
                "column-2": <?php echo h($ten_week_result_sum);?>,
                "column-3": <?php echo h($ten_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_eight_week_ago_mon . "～" . $_eight_week_ago_sun);?>",
                "column-1": <?php echo h($nine_week_order_sum);?>,
                "column-2": <?php echo h($nine_week_result_sum);?>,
                "column-3": <?php echo h($nine_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_seven_week_ago_mon . "～" . $_seven_week_ago_sun);?>",
                "column-1": <?php echo h($eight_week_order_sum);?>,
                "column-2": <?php echo h($eight_week_result_sum);?>,
                "column-3": <?php echo h($eight_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_six_week_ago_mon . "～" . $_six_week_ago_sun);?>",
                "column-1": <?php echo h($seven_week_order_sum);?>,
                "column-2": <?php echo h($seven_week_result_sum);?>,
                "column-3": <?php echo h($seven_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_five_week_ago_mon . "～" . $_five_week_ago_sun);?>",
                "column-1": <?php echo h($six_week_order_sum);?>,
                "column-2": <?php echo h($six_week_result_sum);?>,
                "column-3": <?php echo h($six_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_four_week_ago_mon . "～" . $_four_week_ago_sun);?>",
                "column-1": <?php echo h($five_week_order_sum);?>,
                "column-2": <?php echo h($five_week_result_sum);?>,
                "column-3": <?php echo h($five_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_three_week_ago_mon . "～" . $_three_week_ago_sun);?>",
                "column-1": <?php echo h($four_week_order_sum);?>,
                "column-2": <?php echo h($four_week_result_sum);?>,
                "column-3": <?php echo h($four_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_two_week_ago_mon . "～" . $_two_week_ago_sun);?>",
                "column-1": <?php echo h($three_week_order_sum);?>,
                "column-2": <?php echo h($three_week_result_sum);?>,
                "column-3": <?php echo h($three_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_last_mon . "～" . $_last_sun);?>",
                "column-1": <?php echo h($two_week_order_sum);?>,
                "column-2": <?php echo h($two_week_result_sum);?>,
                "column-3": <?php echo h($two_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_this_week_mon . "～" . $_this_week_sun);?>",
                "column-1": <?php echo h($one_week_order_sum);?>,
                "column-2": <?php echo h($one_week_result_sum);?>,
                "column-3": <?php echo h($one_week_fine_sum);?>
              },
              {
                "category": "<?php echo h($_next_week_mon . "～" . $_next_week_sun);?>",
                "column-1": <?php echo h($next_week_order_sum);?>,
                "column-2": <?php echo h($next_week_result_sum);?>,
                "column-3": <?php echo h($next_week_fine_sum);?>
              }
            ]
          }
        );
      </script>
      <div class="graph_space"></div>


      <div class="input_flame">
  			<div class="item">▼獲得件数（/週）</div>
  			<div class="clear"></div>

        <div id="week_contact" style="width: 1200px; height: 200px; background-color: #FFFFFF; margin:0px 0px 0px 28px;"></div>

        <!-- amCharts javascript code -->
        <script type="text/javascript">
          AmCharts.makeChart("week_contact",
            {
              "type": "serial",
              "categoryField": "category",
              "startDuration": 1,
              "creditsPosition": "top-left",
              "startEffect": "easeOutSine",
              "marginTop": 0,
              "fontSize": 12,
              "theme": "light",
              "categoryAxis": {
                "gridPosition": "start",
              },
              "trendLines": [],
              "graphs": [
                {
                  "balloonText": "[[title]] of [[category]]:[[value]]",
                  "bullet": "round",
                  "id": "AmGraph-1",
                  "labelText": "[[value]]",
                  "lineThickness": 4,
                  "title": "獲得数（件）",
                  "valueField": "column-1"
                }
              ],
              "guides": [],
              "valueAxes": [
                {
                  "id": "ValueAxis-1",
                  "minimum": 0,
                  "autoGridCount": false,
                  "title": "",
                }
              ],
              "allLabels": [],
              "balloon": {},
              "legend": {
                "enabled": true,
                "align": "center",
                "autoMargins": false,
                "position": "right",
                "useGraphSettings": true
              },
              "titles": [
                {
                  "id": "Title-1",
                  "text": ""
                }
              ],
              "dataProvider": [
                {
                  "category": "<?php echo h($_nine_week_ago_mon . "～" . $_nine_week_ago_sun);?>",
                  "column-1": <?php echo h($ten_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_eight_week_ago_mon . "～" . $_eight_week_ago_sun);?>",
                  "column-1": <?php echo h($nine_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_seven_week_ago_mon . "～" . $_seven_week_ago_sun);?>",
                  "column-1": <?php echo h($eight_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_six_week_ago_mon . "～" . $_six_week_ago_sun);?>",
                  "column-1": <?php echo h($seven_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_five_week_ago_mon . "～" . $_five_week_ago_sun);?>",
                  "column-1": <?php echo h($six_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_four_week_ago_mon . "～" . $_four_week_ago_sun);?>",
                  "column-1": <?php echo h($five_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_three_week_ago_mon . "～" . $_three_week_ago_sun);?>",
                  "column-1": <?php echo h($four_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_two_week_ago_mon . "～" . $_two_week_ago_sun);?>",
                  "column-1": <?php echo h($three_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_last_mon . "～" . $_last_sun);?>",
                  "column-1": <?php echo h($two_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_this_week_mon . "～" . $_this_week_sun);?>",
                  "column-1": <?php echo h($one_week_contact_sum);?>
                },
                {
                  "category": "<?php echo h($_next_week_mon . "～" . $_next_week_sun);?>",
                  "column-1": <?php echo h($next_week_contact_sum);?>
                }
              ]
            }
          );
        </script>
        <div class="graph_space"></div>


        <div class="input_flame">
    			<div class="item">▼チラシ枚数（/月）</div>
    			<div class="clear"></div>

          <div id="month_sheets" style="width: 1200px; height: 300px; background-color: #FFFFFF; margin:0px;"></div>
          <!-- amCharts javascript code -->
          <script type="text/javascript">
            AmCharts.makeChart("month_sheets",
              {
                "type": "serial",
                "categoryField": "category",
    					  "columnSpacing": 3,
                "rotate": false,
                "startDuration": 1,
                "creditsPosition": "top-left",
                "startEffect": "easeOutSine",
                "marginTop": 0,
                "fontSize": 12,
                "theme": "light",
                "categoryAxis": {
                  "gridPosition": "start",
                },
                "trendLines": [],
                "graphs": [
                  {
                    "balloonText": "[[title]] of [[category]]:[[value]]",
                    "fillAlphas": 1,
                    "id": "AmGraph-1",
                    "labelText": "[[value]]",
                    "fontSize": 10,
                    "title": "発注枚数",
                    "type": "column",
                    "valueField": "column-1"
                  },
                  {
                    "balloonText": "[[title]] of [[category]]:[[value]]",
                    "fillAlphas": 1,
                    "id": "AmGraph-2",
                    "labelText": "[[value]]",
                    "fontSize": 10,
                    "title": "配布枚数",
                    "type": "column",
                    "valueField": "column-2"
                  }
                ],
                "guides": [],
                "valueAxes": [
                  {
                    "id": "ValueAxis-1",
                    "minimum": 0,
                    "autoGridCount": false,
                    "title": "",
                  }
                ],
                "allLabels": [],
                "balloon": {},
                "legend": {
                  "enabled": true,
                  "align": "center",
                  "autoMargins": false,
                  "position": "right",
                  "useGraphSettings": true
                },
                "titles": [
                  {
                    "id": "Title-1",
                    "size": 15,
                    "text": ""
                  }
                ],
                "dataProvider": [
                  {
                    "category": "<?php echo h($_nine_month_ago . '月');?>",
                    "column-1": <?php echo h($ten_month_order_sum);?>,
                    "column-2": <?php echo h($ten_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_eight_month_ago . '月');?>",
                    "column-1": <?php echo h($nine_month_order_sum);?>,
                    "column-2": <?php echo h($nine_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_seven_month_ago . '月');?>",
                    "column-1": <?php echo h($eight_month_order_sum);?>,
                    "column-2": <?php echo h($eight_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_six_month_ago . '月');?>",
                    "column-1": <?php echo h($seven_month_order_sum);?>,
                    "column-2": <?php echo h($seven_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_five_month_ago . '月');?>",
                    "column-1": <?php echo h($six_month_order_sum);?>,
                    "column-2": <?php echo h($six_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_four_month_ago . '月');?>",
                    "column-1": <?php echo h($five_month_order_sum);?>,
                    "column-2": <?php echo h($five_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_three_month_ago . '月');?>",
                    "column-1": <?php echo h($four_month_order_sum);?>,
                    "column-2": <?php echo h($four_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_two_month_ago . '月');?>",
                    "column-1": <?php echo h($three_month_order_sum);?>,
                    "column-2": <?php echo h($three_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_last_month . '月');?>",
                    "column-1": <?php echo h($two_month_order_sum);?>,
                    "column-2": <?php echo h($two_month_result_sum);?>
                  },
                  {
                    "category": "<?php echo h($_one_day . '月');?>",
                    "column-1": <?php echo h($one_month_order_sum);?>,
                    "column-2": <?php echo h($one_month_result_sum);?>
                  }
                ]
              }
            );
          </script>
          <div class="graph_space"></div>


          <div class="input_flame">
      			<div class="item">▼獲得件数（/月）</div>
      			<div class="clear"></div>

            <div id="month_contact" style="width: 1200px; height: 200px; background-color: #FFFFFF; margin:0px 0px 0px 28px;"></div>

            <!-- amCharts javascript code -->
            <script type="text/javascript">
              AmCharts.makeChart("month_contact",
                {
                  "type": "serial",
                  "categoryField": "category",
                  "startDuration": 1,
                  "creditsPosition": "top-left",
                  "startEffect": "easeOutSine",
                  "marginTop": 0,
                  "fontSize": 12,
                  "theme": "light",
                  "categoryAxis": {
                    "gridPosition": "start",
                  },
                  "trendLines": [],
                  "graphs": [
                    {
                      "balloonText": "[[title]] of [[category]]:[[value]]",
                      "bullet": "round",
                      "id": "AmGraph-1",
                      "labelText": "[[value]]",
                      "lineThickness": 4,
                      "title": "獲得数（件）",
                      "valueField": "column-1"
                    }
                  ],
                  "guides": [],
                  "valueAxes": [
                    {
                      "id": "ValueAxis-1",
                      "minimum": 0,
                      "autoGridCount": false,
                      "title": "",
                    }
                  ],
                  "allLabels": [],
                  "balloon": {},
                  "legend": {
                    "enabled": true,
                    "align": "center",
                    "autoMargins": false,
                    "position": "right",
                    "useGraphSettings": true
                  },
                  "titles": [
                    {
                      "id": "Title-1",
                      "text": ""
                    }
                  ],
                  "dataProvider": [
                    {
                      "category": "<?php echo h($_nine_month_ago . '月');?>",
                      "column-1": <?php echo h($ten_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_eight_month_ago . '月');?>",
                      "column-1": <?php echo h($nine_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_seven_month_ago . '月');?>",
                      "column-1": <?php echo h($eight_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_six_month_ago . '月');?>",
                      "column-1": <?php echo h($seven_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_five_month_ago . '月');?>",
                      "column-1": <?php echo h($six_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_four_month_ago . '月');?>",
                      "column-1": <?php echo h($five_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_three_month_ago . '月');?>",
                      "column-1": <?php echo h($four_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_two_month_ago . '月');?>",
                      "column-1": <?php echo h($three_month_contact_sum);?>
                    },
                    {
                      "category": "<?php echo h($_last_month . '月');?>",
                      "column-1": <?php echo h($two_month_contact_sum);?>                    },
                    {
                      "category": "<?php echo h($_one_day . '月');?>",
                      "column-1": <?php echo h($one_month_contact_sum);?>
                    }
                  ]
                }
              );
            </script>
            <div class="graph_space"></div>


            <div class="input_flame">
        			<div class="item">▼獲得率（/月）</div>
        			<div class="clear"></div>

              <div id="month_rate" style="width: 1200px; height: 200px; background-color: #FFFFFF; margin:0px 0px 0px 8px;"></div>

              <!-- amCharts javascript code -->
              <script type="text/javascript">
                AmCharts.makeChart("month_rate",
                  {
                    "type": "serial",
                    "categoryField": "category",
                    "startDuration": 1,
                    "creditsPosition": "top-left",
                    "startEffect": "easeOutSine",
                    "marginTop": 0,
                    "fontSize": 12,
                    "theme": "light",
                    "categoryAxis": {
                      "gridPosition": "start",
                    },
                    "trendLines": [],
                    "graphs": [
                      {
                        "balloonText": "[[title]] of [[category]]:[[value]]",
                        "bullet": "round",
                        "id": "AmGraph-1",
                        "lineColor": "rgb(253, 212, 0)",
                        "labelText": "[[value]]",
                        "lineThickness": 4,
                        "title": "獲得率（枚/件）",
                        "valueField": "column-1"
                      }
                    ],
                    "guides": [],
                    "valueAxes": [
                      {
                        "id": "ValueAxis-1",
                        "minimum": 0,
                        "autoGridCount": false,
                        "reversed": true,
                        "title": "",
                      }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "legend": {
                      "enabled": true,
                      "align": "center",
                      "autoMargins": false,
                      "position": "right",
                      "useGraphSettings": true
                    },
                    "titles": [
                      {
                        "id": "Title-1",
                        "text": ""
                      }
                    ],
                    "dataProvider": [
                      {
                        "category": "<?php echo h($_nine_month_ago . '月');?>"
                        <?php
                          if($ten_month_rate !== 0){
                            echo ",\"column-1\": " . $ten_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_eight_month_ago . '月');?>"
                        <?php
                          if($nine_month_rate !== 0){
                            echo ",\"column-1\": " . $nine_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_seven_month_ago . '月');?>"
                        <?php
                          if($eight_month_rate !== 0){
                            echo ",\"column-1\": " . $eight_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_six_month_ago . '月');?>"
                        <?php
                          if($seven_month_rate !== 0){
                            echo ",\"column-1\": " . $seven_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_five_month_ago . '月');?>"
                        <?php
                          if($six_month_rate !== 0){
                            echo ",\"column-1\": " . $six_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_four_month_ago . '月');?>"
                        <?php
                          if($five_month_rate !== 0){
                            echo ",\"column-1\": " . $five_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_three_month_ago . '月');?>"
                        <?php
                          if($four_month_rate !== 0){
                            echo ",\"column-1\": " . $four_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_two_month_ago . '月');?>"
                        <?php
                          if($three_month_rate !== 0){
                            echo ",\"column-1\": " . $three_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_last_month . '月');?>"
                        <?php
                          if($two_month_rate !== 0){
                            echo ",\"column-1\": " . $two_month_rate;
                          }
                        ?>
                      },
                      {
                        "category": "<?php echo h($_one_day . '月');?>"
                        <?php
                          if($one_month_rate !== 0){
                            echo ",\"column-1\": " . $one_month_rate;
                          }
                        ?>
                      }
                    ]
                  }
                );
              </script>
              <div class="graph_space"></div>

	</div>
	</div><!-- right_flame -->
	<div class="clear"></div>

	<script>
		<!--
			make_footer();
		-->
	</script>

</body>
</html>
