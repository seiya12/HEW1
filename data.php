<?php

	$fname = "mousikomi.csv";

	$filet = file($fname);
	$filet = array_reverse($filet);
	$rcnt = count($filet);



 ?>

<HTML>
<HEAD>
	<META HTTP-EQUIV="Content-Type"
	      content="Text/html;charset=UTF-8">
	<TITLE>申し込みデータベース</TITLE>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>

<BODY>
<div id="datacont">
	<?php for($i = 0;$i< $rcnt;$i++){

	list($sei,$mei,$seihuri,$meihuri,$seibetu,$nen,$gatu,$pi,$telno,$mail1,$pass,$yu,$zyusyo1,$zyusyo2,$zyusyo3,$syoku,$menkyo,$gyousei,$kibou,$ninzu,$issyoninzu,$heyaplan,$dai1,$dai2,$dai3,$renrakuzikan,$kibounitizi,$gositumon) = explode(',',$filet[$i]);

	print '<div id="databox">
	<table>
		<tr>
			<th>お名前</th>
			<td>'.$sei ." ". $mei.'</td>
		</tr>
		<tr>
			<th>フリガナ</th>
			<td>'. $seihuri . " ". $meihuri .'</td>
		</tr>
		<tr>
			<th>性別</th>
			<td>'. $seibetu .'</td>
		</tr>
		<tr>
			<th>生年月日</th>
			<td>'. $nen.'年'.$gatu.'月'.$pi.'日' .'</td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td>'. $mail1 .'</td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td>'. $pass .'</td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td>'. $telno .'</td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td>'. $yu .'</td>
		</tr>
		<tr>
			<th>ご住所</th>
			<td>'. $zyusyo1.$zyusyo2.$zyusyo3 .'</td>
		</tr>
		<tr>
			<th>職種</th>
			<td>'. $syoku .'</td>
		</tr>
		<tr>
			<th>所持免許</th>
			<td>'. $menkyo .'</td>
		</tr>
		<tr>
			<th>行政処分</th>
			<td>'. $gyousei .'</td>
		</tr>
		<tr>
			<th>希望車種</th>
			<td>'. $kibou .'</td>
		</tr>
		<tr>
			<th>入校される人数</th>
			<td>'. $ninzu .'人</td>
		</tr>
		<tr>
			<th>一緒に入校される方の名前</th>
			<td>'. $issyoninzu .'</td>
		</tr>
		<tr>
			<th>希望部屋タイプ</th>
			<td>'. $heyaplan .'</td>
		</tr>
		<tr>
			<th>希望入校日</th>
			<td>第一希望：'. $dai1 .'<br>
				第二希望：'. $dai2 .'<br>
				第三希望：'. $dai3 .'
			</td>
		</tr>
		<tr>
			<th>希望の連絡時間</th>
			<td>'. $renrakuzikan .'<br>
				'. $kibounitizi .'
			</td>
		</tr>
		<tr>
			<th>ご質問・ご要望など</th>
			<td>'. $gositumon .'</td>
		</tr>

	</table></div>';
} ?>
</div>
</BODY>
</HTML>