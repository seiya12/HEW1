<?php

	$flag = 0;

	if($_POST['mail']==""){
		ErrSub("メールアドレスを入力してください。");
		$flag=1;
	}
	if($_POST['pass']==""){
		ErrSub("パスワードを入力してください。");
		$flag=1;
	}
	if($flag==1){
		ErrSub2();
	 	exit;
	}


	$mail=$_POST['mail'];
	$pass=$_POST['pass'];

	$fname = "mousikomi.csv";

	$filet = file($fname);
	$rcnt = count($filet);

	$flag=0;

	for($i = 0;$i< $rcnt;$i++){

	list($sei,$mei,$seihuri,$meihuri,$seibetu,$nen,$gatu,$pi,$telno,$mail1,$pass1,$yu,$zyusyo1,$zyusyo2,$zyusyo3,$syoku,$menkyo,$gyousei,$kibou,$ninzu,$issyoninzu,$heyaplan,$dai1,$dai2,$dai3,$renrakuzikan,$kibounitizi,$gositumon) = explode(',',$filet[$i]);

	if($mail === $mail1){
		$flag = 1;
		break;
	}

	}

	if ($flag == 0){
		ErrSub($mail."は登録されていません。");
		$flag = 2;
	}

	if ($pass != $pass1){
		ErrSub($mail."のパスワードが違います。");
		$flag = 2;
	}
	if($flag==2){
		ErrSub2();
	 	exit;
	}

 ?>

<HTML>
<HEAD>
	<META HTTP-EQUIV="Content-Type"
	      content="Text/html;charset=UTF-8">
	<TITLE>お申込内容確認</TITLE>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>

<BODY>
	<div id="kakuninbox">
	<h3><?= $sei . $mei ?>様</h3>
	<table>
		<tr>
			<th>お名前</th>
			<td><?= $sei . $mei ?></td>
		</tr>
		<tr>
			<th>フリガナ</th>
			<td><?= $seihuri . $meihuri ?></td>
		</tr>
		<tr>
			<th>性別</th>
			<td><?= $seibetu ?></td>
		</tr>
		<tr>
			<th>生年月日</th>
			<td><?= $nen.'年'.$gatu.'月'.$pi.'日' ?></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><?= $telno ?></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><?= $mail1 ?></td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td><?= $pass ?></td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td><?= $yu ?></td>
		</tr>
		<tr>
			<th>ご住所</th>
			<td><?= $zyusyo1.$zyusyo2.$zyusyo3 ?></td>
		</tr>
		<tr>
			<th>職種</th>
			<td><?= $syoku ?></td>
		</tr>
		<tr>
			<th>所持免許</th>
			<td><?= $menkyo ?></td>
		</tr>
		<tr>
			<th>行政処分</th>
			<td><?= $gyousei ?></td>
		</tr>
		<tr>
			<th>希望車種</th>
			<td><?= $kibou ?></td>
		</tr>
		<tr>
			<th>入校される人数</th>
			<td><?= $ninzu ?></td>
		</tr>
		<tr>
			<th>一緒に入校される方の名前</th>
			<td><?= $issyoninzu ?></td>
		</tr>
		<tr>
			<th>希望部屋タイプ</th>
			<td><?= $heyaplan ?></td>
		</tr>
		<tr>
			<th>希望入校日</th>
			<td>第一希望：<?= $dai1 ?><br>
				第二希望：<?= $dai2 ?><br>
				第三希望：<?= $dai3 ?>
			</td>
		</tr>
		<tr>
			<th>希望の連絡時間</th>
			<td><?= $renrakuzikan ?><br>
				<?= $kibounitizi ?>
			</td>
		</tr>
		<tr>
			<th>ご質問・ご要望など</th>
			<td><?= $gositumon ?></td>
		</tr>

	</table>
	<p>*訂正、キャンセルをご希望の場合は、お問い合わせください</p>
	<p><img src="images/top-tel.gif""></p>
	<div class="backbot1">
	<button type="button" onclick="history.back()">戻る</button>
</div>
</div>

</BODY>
</HTML>


 <?php
	
function ErrSub($Msg1){

?>

<HTML>
<HEAD>
	<META HTTP-EQUIV="Content-Type"
	      content="Text/html;charset=UTF-8">
	<TITLE>三重県南部自動車学校</TITLE>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>

<BODY>
<div class="errmsg">
<p><?= '※'.$Msg1 ?></p>
</div>
</BODY>
</HTML>
<?php

 }

?>

<?php
	
function ErrSub2(){

?>

<HTML>
<HEAD>
	<META HTTP-EQUIV="Content-Type"
	      content="Text/html;charset=UTF-8">
	<TITLE>三重県南部自動車学校</TITLE>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>

<BODY>
<div class="errbot">
<button type="button" onclick="history.back()">戻る</button>
</div>
</BODY>
</HTML>
<?php

 }

?>