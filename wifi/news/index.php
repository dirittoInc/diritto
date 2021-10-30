<?php

require_once('../config.php');
require_once('../functions.php');
require_once('../data/array.php');

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

$last_year_1 = date("Y/01/01 00:00:00", strtotime($this_year_1 . "-1 years"));
$last_year_2 = date("Y/m/01 00:00:00", strtotime($this_year_2 . "-1 years"));
$last_year_3 = date("Y/m/01 00:00:00", strtotime($this_year_3 . "-1 years"));
$last_year_4 = date("Y/m/01 00:00:00", strtotime($this_year_4 . "-1 years"));
$last_year_5 = date("Y/m/01 00:00:00", strtotime($this_year_5 . "-1 years"));
$last_year_6 = date("Y/m/01 00:00:00", strtotime($this_year_6 . "-1 years"));
$last_year_7 = date("Y/m/01 00:00:00", strtotime($this_year_7 . "-1 years"));
$last_year_8 = date("Y/m/01 00:00:00", strtotime($this_year_8 . "-1 years"));
$last_year_9 = date("Y/m/01 00:00:00", strtotime($this_year_9 . "-1 years"));
$last_year_10 = date("Y/m/01 00:00:00", strtotime($this_year_10 . "-1 years"));
$last_year_11 = date("Y/m/01 00:00:00", strtotime($this_year_11 . "-1 years"));
$last_year_12 = date("Y/m/01 00:00:00", strtotime($this_year_12 . "-1 years"));

$two_years_ago_1 = date("Y/01/01 00:00:00", strtotime($last_year_1 . "-1 years"));
$two_years_ago_2 = date("Y/m/01 00:00:00", strtotime($last_year_2 . "-1 years"));
$two_years_ago_3 = date("Y/m/01 00:00:00", strtotime($last_year_3 . "-1 years"));
$two_years_ago_4 = date("Y/m/01 00:00:00", strtotime($last_year_4 . "-1 years"));
$two_years_ago_5 = date("Y/m/01 00:00:00", strtotime($last_year_5 . "-1 years"));
$two_years_ago_6 = date("Y/m/01 00:00:00", strtotime($last_year_6 . "-1 years"));
$two_years_ago_7 = date("Y/m/01 00:00:00", strtotime($last_year_7 . "-1 years"));
$two_years_ago_8 = date("Y/m/01 00:00:00", strtotime($last_year_8 . "-1 years"));
$two_years_ago_9 = date("Y/m/01 00:00:00", strtotime($last_year_9 . "-1 years"));
$two_years_ago_10 = date("Y/m/01 00:00:00", strtotime($last_year_10 . "-1 years"));
$two_years_ago_11 = date("Y/m/01 00:00:00", strtotime($last_year_11 . "-1 years"));
$two_years_ago_12 = date("Y/m/01 00:00:00", strtotime($last_year_12 . "-1 years"));

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

	if($last_year_7 <= $created and $created < $last_year_8){
		if(isset($last_year_7_que) == false){
			$last_year_7_que = array();
		}
		array_push($last_year_7_que, $q);
	}

	if($last_year_6 <= $created and $created < $last_year_7){
		if(isset($last_year_6_que) == false){
			$last_year_6_que = array();
		}
		array_push($last_year_6_que, $q);
	}

	if($last_year_5 <= $created and $created < $last_year_6){
		if(isset($last_year_5_que) == false){
			$last_year_5_que = array();
		}
		array_push($last_year_5_que, $q);
	}

	if($last_year_4 <= $created and $created < $last_year_5){
		if(isset($last_year_4_que) == false){
			$last_year_4_que = array();
		}
		array_push($last_year_4_que, $q);
	}

	if($last_year_3 <= $created and $created < $last_year_4){
		if(isset($last_year_3_que) == false){
			$last_year_3_que = array();
		}
		array_push($last_year_3_que, $q);
	}

	if($last_year_2 <= $created and $created < $last_year_3){
		if(isset($last_year_2_que) == false){
			$last_year_2_que = array();
		}
		array_push($last_year_2_que, $q);
	}

	if($last_year_1 <= $created and $created < $last_year_2){
		if(isset($last_year_1_que) == false){
			$last_year_1_que = array();
		}
		array_push($last_year_1_que, $q);
	}


	//２年前のアンケート
	if($two_years_ago_12 <= $created and $created < $last_year_1){
		if(isset($two_years_ago_12_que) == false){
			$two_years_ago_12_que = array();
		}
		array_push($two_years_ago_12_que, $q);
	}

	if($two_years_ago_11 <= $created and $created < $two_years_ago_12){
		if(isset($two_years_ago_11_que) == false){
			$two_years_ago_11_que = array();
		}
		array_push($two_years_ago_11_que, $q);
	}

	if($two_years_ago_10 <= $created and $created < $two_years_ago_11){
		if(isset($two_years_ago_10_que) == false){
			$two_years_ago_10_que = array();
		}
		array_push($two_years_ago_10_que, $q);
	}

	if($two_years_ago_9 <= $created and $created < $two_years_ago_10){
		if(isset($two_years_ago_9_que) == false){
			$two_years_ago_9_que = array();
		}
		array_push($two_years_ago_9_que, $q);
	}

	if($two_years_ago_8 <= $created and $created < $two_years_ago_9){
		if(isset($two_years_ago_8_que) == false){
			$two_years_ago_8_que = array();
		}
		array_push($two_years_ago_8_que, $q);
	}

	if($two_years_ago_7 <= $created and $created < $two_years_ago_8){
		if(isset($two_years_ago_7_que) == false){
			$two_years_ago_7_que = array();
		}
		array_push($two_years_ago_7_que, $q);
	}

	if($two_years_ago_6 <= $created and $created < $two_years_ago_7){
		if(isset($two_years_ago_6_que) == false){
			$two_years_ago_6_que = array();
		}
		array_push($two_years_ago_6_que, $q);
	}

	if($two_years_ago_5 <= $created and $created < $two_years_ago_6){
		if(isset($two_years_ago_5_que) == false){
			$two_years_ago_5_que = array();
		}
		array_push($two_years_ago_5_que, $q);
	}

	if($two_years_ago_4 <= $created and $created < $two_years_ago_5){
		if(isset($two_years_ago_4_que) == false){
			$two_years_ago_4_que = array();
		}
		array_push($two_years_ago_4_que, $q);
	}

	if($two_years_ago_3 <= $created and $created < $two_years_ago_4){
		if(isset($two_years_ago_3_que) == false){
			$two_years_ago_3_que = array();
		}
		array_push($two_years_ago_3_que, $q);
	}

	if($two_years_ago_2 <= $created and $created < $two_years_ago_3){
		if(isset($two_years_ago_2_que) == false){
			$two_years_ago_2_que = array();
		}
		array_push($two_years_ago_2_que, $q);
	}

	if($two_years_ago_1 <= $created and $created < $two_years_ago_2){
		if(isset($two_years_ago_1_que) == false){
			$two_years_ago_1_que = array();
		}
		array_push($two_years_ago_1_que, $q);
	}

}

if(isset($this_year_12_que)){
	if(count($this_year_12_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_12)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=12"]);
	}
}
if(isset($this_year_11_que)){
	if(count($this_year_11_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_11)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=11"]);
	}
}
if(isset($this_year_10_que)){
	if(count($this_year_10_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_10)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=10"]);
	}
}
if(isset($this_year_9_que)){
	if(count($this_year_9_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_9)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=9"]);
	}
}
if(isset($this_year_8_que)){
	if(count($this_year_8_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_8)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=8"]);
	}
}
if(isset($this_year_7_que)){
	if(count($this_year_7_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_7)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=7"]);
	}
}
if(isset($this_year_6_que)){
	if(count($this_year_6_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_6)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=6"]);
	}
}
if(isset($this_year_5_que)){
	if(count($this_year_5_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_5)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=5"]);
	}
}
if(isset($this_year_4_que)){
	if(count($this_year_4_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_4)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=4"]);
	}
}
if(isset($this_year_3_que)){
	if(count($this_year_3_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_3)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=3"]);
	}
}
if(isset($this_year_2_que)){
	if(count($this_year_2_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_2)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=2"]);
	}
}
if(isset($this_year_1_que)){
	if(count($this_year_1_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($this_year_1)), "", "アンケート", "questionnaire/detail.php?year=".$_this_year."&month=1"]);
	}
}

if(isset($last_year_12_que)){
	if(count($last_year_12_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_12)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=12"]);
	}
}
if(isset($last_year_11_que)){
	if(count($last_year_11_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_11)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=11"]);
	}
}
if(isset($last_year_10_que)){
	if(count($last_year_10_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_10)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=10"]);
	}
}
if(isset($last_year_9_que)){
	if(count($last_year_9_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_9)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=9"]);
	}
}
if(isset($last_year_8_que)){
	if(count($last_year_8_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_8)), "", "アンケート", "questionnaire/detail.php?year=".$_last_year."&month=8"]);
	}
}
if(isset($last_year_7_que)){
	if(count($last_year_7_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_7)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=7"]);
	}
}
if(isset($last_year_6_que)){
	if(count($last_year_6_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_6)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=6"]);
	}
}
if(isset($last_year_5_que)){
	if(count($last_year_5_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_5)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=5"]);
	}
}
if(isset($last_year_4_que)){
	if(count($last_year_4_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_4)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=4"]);
	}
}
if(isset($last_year_3_que)){
	if(count($last_year_3_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_3)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=3"]);
	}
}
if(isset($last_year_2_que)){
	if(count($last_year_2_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_2)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=2"]);
	}
}
if(isset($last_year_1_que)){
	if(count($last_year_1_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($last_year_1)), "", "アンケート", "../questionnaire/detail.php?year=".$_last_year."&month=1"]);
	}
}

if(isset($two_years_ago_12_que)){
	if(count($two_years_ago_12_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_12)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=12"]);
	}
}
if(isset($two_years_ago_11_que)){
	if(count($two_years_ago_11_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_11)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=11"]);
	}
}
if(isset($two_years_ago_10_que)){
	if(count($two_years_ago_10_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_10)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=10"]);
	}
}
if(isset($two_years_ago_9_que)){
	if(count($two_years_ago_9_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_9)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=9"]);
	}
}
if(isset($two_years_ago_8_que)){
	if(count($two_years_ago_8_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_8)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=8"]);
	}
}
if(isset($two_years_ago_7_que)){
	if(count($two_years_ago_7_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_7)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=7"]);
	}
}
if(isset($two_years_ago_6_que)){
	if(count($two_years_ago_6_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_6)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=6"]);
	}
}
if(isset($two_years_ago_5_que)){
	if(count($two_years_ago_5_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_5)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=5"]);
	}
}
if(isset($two_years_ago_4_que)){
	if(count($two_years_ago_4_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_4)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=4"]);
	}
}
if(isset($two_years_ago_3_que)){
	if(count($two_years_ago_3_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_3)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=3"]);
	}
}
if(isset($two_years_ago_2_que)){
	if(count($two_years_ago_2_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_2)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=2"]);
	}
}
if(isset($two_years_ago_1_que)){
	if(count($two_years_ago_1_que) >= 5){
		array_push($news_array, [date("Y/m/t", strtotime($two_years_ago_1)), "", "アンケート", "../questionnaire/detail.php?year=".$_two_years_ago."&month=1"]);
	}
}

rsort($news_array);

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
	<meta name="keywords" content="お知らせ">
	<meta name="description" content="株式会社ディリットのお知らせはこちら">
	<meta name="viewport" content="width=1000">

	<title>お知らせ　|　株式会社ディリット　｜　Diritto.Inc</title>

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
					会社情報
				</td>
				<td id="sub_page_right_title">
					お知らせ
				</td>
			</tr>

			<tr>
				<td rowspan= "2" id="left_menu" valign="top">
					<script>
						<!--
							make_left_menu(1, 2, 10, 4);
							//階層, メニュー1 or 2, 何番目のメニューか
						-->
					</script>
				</td>

				<td id="right_flame" valign="top">
					<div class="right_flame_container">
						<div id="p_list">
							<a href="../index.php">トップ</a>　|　お知らせ
						</div>

						<div class="sub_page_title">お知らせ</div>

						<table id="news_table" style="margin-bottom:100px; width:100%;">
							<?php foreach($news_array as $n):?>
								<tr>
									<td class="news_date" style="width:100px; padding:40px 10px;"><a href="<?php echo h($n[3]);?>"><?php echo h($n[0]);?></a></td>

									<?php if($n[2] == "お知らせ"):?>
										<td class="news_badge_width">
											<a href="<?php echo h($n[3]);?>">
												<div class="news_badge sp_hide_block" style="width:70px;"><?php echo h($n[2]);?></div>
												<div class="news_badge sp_block" style="width:110px;"><?php echo h($n[2]);?></div>
											</a>
										</td>
									<?php elseif($n[2] == "アンケート"):?>
										<td class="news_badge_width">
											<a href="../<?php echo h($n[3]);?>">
												<div class="news_badge2 sp_hide_block" style="width:70px;"><?php echo h($n[2]);?></div>
												<div class="news_badge2 sp_block" style="width:110px;"><?php echo h($n[2]);?></div>
											</a>
										</td>
									<?php endif;?>

									<?php if($n[1] !== ""):?>
										<td><a href="<?php echo h($n[3]);?>"><?php echo h($n[1]);?></a></td>
									<?php else:?>
										<td>
											<a href="../<?php echo h($n[3]);?>">
												<span class="english"><?php echo h(date("Y", strtotime($n[0])));?></span>年
												<span class="english"><?php echo h(date("n", strtotime($n[0])));?></span>月
												　お客様アンケート集計結果
											</a>
										</td>
									<?php endif;?>

								</tr>
							<?php endforeach;?>
						</table>

						<style>
							#news_table td{
								padding:20px 10px;
								border-bottom:1px dotted #ccc;
							}
						</style>

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
				$('#news_table').css('opacity','1');
			-->
		</script>

	</div><!-- main_flmae -->

</body>
</html>
