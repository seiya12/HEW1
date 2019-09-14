<?php


// 空白チェック
	$flag = 0;

	if($_POST['sei']=="" or $_POST['mei']==""){
		ErrSub("お名前を入力してください。");
		$flag=1;
	}
	if($_POST['seihuri']=="" or $_POST['meihuri']==""){
		ErrSub("フリガナを入力してください。");
		$flag=1;
	}
	if($_POST['nen']=="" or $_POST['gatu']=="" or $_POST['pi']==""){
		ErrSub("生年月日を入力してください。");
		$flag=1;
	}
	if($_POST['telno']==""){
		ErrSub("電話番号を入力してください。");
		$flag=1;
	}
	if($_POST['mail1']=="" or $_POST['mail2']==""){
		ErrSub("メールアドレスを入力してください。");
		$flag=1;
	}
	if($_POST['mail1']!==$_POST['mail2']){
		ErrSub("メールアドレスが一致しません。");
		$flag=1;
	}
	if($_POST['pass']==""){
		ErrSub("パスワードを入力してください。");
		$flag=1;
	}
	if($_POST['yu']==""){
		ErrSub("郵便番号を入力してください。");
		$flag=1;
	}
	if($_POST['zyusyo1']==""){
		ErrSub("都道府県を選択してください。");
		$flag=1;
	}
	if($_POST['zyusyo2']=="" or $_POST['zyusyo3']==""){
		ErrSub("ご住所を入力してください。");
		$flag=1;
	}
	if($_POST['ninzu']==""){
		ErrSub("入校される人数を入力してください。");
		$flag=1;
	}
	if($_POST['ninzu']>1 and $_POST['issyoninzu']==""){
		ErrSub("一緒に入校される方の名前入力してください。");
		$flag=1;
	}
	if($_POST['heyaplan']==""){
		ErrSub("希望部屋タイプを選択してください。");
		$flag=1;
	}
	if($_POST['heyaplan']=="コテージ 「フィット」" and $_POST['seibetu']=="男性"){
		ErrSub("ご希望の部屋タイプは女性専用プランです。");
		$flag=1;
	}
	if($_POST['heyaplan']=="「スカイハイ」 (ツイン)" and $_POST['seibetu']=="女性"){
		ErrSub("ご希望の部屋タイプは男性専用プランです。");
		$flag=1;
	}
	if($_POST['heyaplan']=="「スカイハイ」 (シングル)" and $_POST['seibetu']=="女性"){
		ErrSub("ご希望の部屋タイプは男性専用プランです。");
		$flag=1;
	}
	if($_POST['dai1']=="" or $_POST['dai2']=="" or $_POST['dai3']==""){
		ErrSub("希望入校日を第三希望まで入力してください。");
		$flag=1;
	}
	if($_POST['dai1']==$_POST['dai2'] or $_POST['dai2']==$_POST['dai3'] or $_POST['dai3']==$_POST['dai1']){
		ErrSub("希望入校日は別の日付を入力してください。");
		$flag=1;
	}
	if($_POST['renrakuzikan']==""){
		ErrSub("希望の連絡時間を選択してください。");
		$flag=1;
	}
// エラーが１つでもあれば終了	
	if($flag==1){
		ErrSub2();
	 	exit;
	}


// 空白ないとき受け取り
	$sei=$_POST['sei'];
	$mei=$_POST['mei'];
	$seihuri=$_POST['seihuri'];
	$meihuri=$_POST['meihuri'];
	$seibetu=$_POST['seibetu'];
	$nen=$_POST['nen']; 
	$gatu=$_POST['gatu']; 
	$pi=$_POST['pi']; 
	$telno=$_POST['telno']; 
	$mail1=$_POST['mail1'];
	$mail2=$_POST['mail2']; 
	$yu=$_POST['yu']; 
	$pass=$_POST['pass']; 
	$zyusyo1=$_POST['zyusyo1']; 
	$zyusyo2=$_POST['zyusyo2']; 
	$zyusyo3=$_POST['zyusyo3']; 
	$syoku=$_POST['syoku']; 
	$menkyo=$_POST['menkyo']; 
	$gyousei=$_POST['gyousei']; 
	$kibou=$_POST['kibou']; 
	$ninzu=$_POST['ninzu']; 
	$issyoninzu=$_POST['issyoninzu']; 
	$heyaplan=$_POST['heyaplan']; 
	$dai1=$_POST['dai1']; 
	$dai2=$_POST['dai2']; 
	$dai3=$_POST['dai3']; 
	$renrakuzikan=$_POST['renrakuzikan']; 
	$kibounitizi=$_POST['kibounitizi']; 
	$gositumon=$_POST['gositumon']; 





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
	<div id="kakuninbox">
	<h3>お申込内容確認</h3>
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
	<p>上記の内容でよろしいですか？</p>
<form action="omousikomikakutei.php" METHOD="post">
<input type="hidden" name="sei" value="<?= $sei ?>">
<input type="hidden" name="mei" value="<?= $mei ?>">
<input type="hidden" name="seihuri" value="<?= $seihuri ?>">
<input type="hidden" name="meihuri" value="<?= $meihuri ?>">
<input type="hidden" name="seibetu" value="<?= $seibetu ?>">
<input type="hidden" name="nen" value="<?= $nen ?>">
<input type="hidden" name="gatu" value="<?= $gatu ?>">
<input type="hidden" name="pi" value="<?= $pi ?>">
<input type="hidden" name="telno" value="<?= $telno ?>">
<input type="hidden" name="mail1" value="<?= $mail1 ?>">
<input type="hidden" name="yu" value="<?= $yu ?>">
<input type="hidden" name="pass" value="<?= $pass ?>">
<input type="hidden" name="zyusyo1" value="<?= $zyusyo1 ?>">
<input type="hidden" name="zyusyo2" value="<?= $zyusyo2 ?>">
<input type="hidden" name="zyusyo3" value="<?= $zyusyo3 ?>">
<input type="hidden" name="syoku" value="<?= $syoku ?>">
<input type="hidden" name="menkyo" value="<?= $menkyo ?>">
<input type="hidden" name="gyousei" value="<?= $gyousei ?>">
<input type="hidden" name="kibou" value="<?= $kibou ?>">
<input type="hidden" name="ninzu" value="<?= $ninzu ?>">
<input type="hidden" name="issyoninzu" value="<?= $issyoninzu ?>">
<input type="hidden" name="heyaplan" value="<?= $heyaplan ?>">
<input type="hidden" name="dai1" value="<?= $dai1 ?>">
<input type="hidden" name="dai2" value="<?= $dai2 ?>">
<input type="hidden" name="dai3" value="<?= $dai3 ?>">
<input type="hidden" name="renrakuzikan" value="<?= $renrakuzikan ?>">
<input type="hidden" name="kibounitizi" value="<?= $kibounitizi ?>">
<input type="hidden" name="gositumon" value="<?= $gositumon ?>">
	
	<input type="submit" value="お申込内容確定" id="sousinbot">
</form>



<form action="omousikomiform.php" METHOD="post">
<input type="hidden" name="sei" value="<?= $sei ?>">
<input type="hidden" name="mei" value="<?= $mei ?>">
<input type="hidden" name="seihuri" value="<?= $seihuri ?>">
<input type="hidden" name="meihuri" value="<?= $meihuri ?>">
<input type="hidden" name="seibetu" value="<?= $seibetu ?>">
<input type="hidden" name="nen" value="<?= $nen ?>">
<input type="hidden" name="gatu" value="<?= $gatu ?>">
<input type="hidden" name="pi" value="<?= $pi ?>">
<input type="hidden" name="telno" value="<?= $telno ?>">
<input type="hidden" name="mail1" value="<?= $mail1 ?>">
<input type="hidden" name="mail2" value="<?= $mail2 ?>">
<input type="hidden" name="yu" value="<?= $yu ?>">
<input type="hidden" name="zyusyo1" value="<?= $zyusyo1 ?>">
<input type="hidden" name="zyusyo2" value="<?= $zyusyo2 ?>">
<input type="hidden" name="zyusyo3" value="<?= $zyusyo3 ?>">
<input type="hidden" name="syoku" value="<?= $syoku ?>">
<input type="hidden" name="menkyo" value="<?= $menkyo ?>">
<input type="hidden" name="gyousei" value="<?= $gyousei ?>">
<input type="hidden" name="kibou" value="<?= $kibou ?>">
<input type="hidden" name="ninzu" value="<?= $ninzu ?>">
<input type="hidden" name="issyoninzu" value="<?= $issyoninzu ?>">
<input type="hidden" name="heyaplan" value="<?= $heyaplan ?>">
<input type="hidden" name="dai1" value="<?= $dai1 ?>">
<input type="hidden" name="dai2" value="<?= $dai2 ?>">
<input type="hidden" name="dai3" value="<?= $dai3 ?>">
<input type="hidden" name="renrakuzikan" value="<?= $renrakuzikan ?>">
<input type="hidden" name="kibounitizi" value="<?= $kibounitizi ?>">
<input type="hidden" name="gositumon" value="<?= $gositumon ?>">
	
	<input type="submit" value="訂正" id="teiseibot">
</form>
</div>
</div><!-- kakuninbox -->
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
<form action="omousikomiform.php" METHOD="post">
<input type="hidden" name="sei" value="<?= $_POST['sei'] ?>">
<input type="hidden" name="mei" value="<?= $_POST['mei'] ?>">
<input type="hidden" name="seihuri" value="<?= $_POST['seihuri'] ?>">
<input type="hidden" name="meihuri" value="<?= $_POST['meihuri']; ?>">
<input type="hidden" name="seibetu" value="<?= $_POST['seibetu'] ?>">
<input type="hidden" name="nen" value="<?= $_POST['nen'] ?>">
<input type="hidden" name="gatu" value="<?= $_POST['gatu'] ?>">
<input type="hidden" name="pi" value="<?= $_POST['pi'] ?>">
<input type="hidden" name="telno" value="<?= $_POST['telno'] ?>">
<input type="hidden" name="mail1" value="<?= $_POST['mail1'] ?>">
<input type="hidden" name="mail2" value="<?= $_POST['mail2'] ?>">
<input type="hidden" name="yu" value="<?= $_POST['yu'] ?>">
<input type="hidden" name="zyusyo1" value="<?= $_POST['zyusyo1'] ?>">
<input type="hidden" name="zyusyo2" value="<?= $_POST['zyusyo2'] ?>">
<input type="hidden" name="zyusyo3" value="<?= $_POST['zyusyo3'] ?>">
<input type="hidden" name="syoku" value="<?= $_POST['syoku'] ?>">
<input type="hidden" name="menkyo" value="<?= $_POST['menkyo'] ?>">
<input type="hidden" name="gyousei" value="<?= $_POST['gyousei'] ?>">
<input type="hidden" name="kibou" value="<?= $_POST['kibou'] ?>">
<input type="hidden" name="ninzu" value="<?= $_POST['ninzu'] ?>">
<input type="hidden" name="issyoninzu" value="<?= $_POST['issyoninzu'] ?>">
<input type="hidden" name="heyaplan" value="<?= $_POST['heyaplan'] ?>">
<input type="hidden" name="dai1" value="<?= $_POST['dai1'] ?>">
<input type="hidden" name="dai2" value="<?= $_POST['dai2'] ?>">
<input type="hidden" name="dai3" value="<?= $_POST['dai3'] ?>">
<input type="hidden" name="renrakuzikan" value="<?= $_POST['renrakuzikan'] ?>">
<input type="hidden" name="kibounitizi" value="<?= $_POST['kibounitizi'] ?>">
<input type="hidden" name="gositumon" value="<?= $_POST['gositumon'] ?>">
	
	<input type="submit" value="入力ページへ" id="teiseiboterr">
</div>
</BODY>
</HTML>
<?php

 }

?>
