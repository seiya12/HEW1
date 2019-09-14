<?php

// 受け取り
	$fname = "mousikomi.csv";

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
	$pass=$_POST['pass'];  
	$yu=$_POST['yu']; 
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

	$yu = str_replace("-", "", $yu);
	$yu = str_replace("ー", "", $yu);
	$issyoninzu = str_replace("\r\n", "<br>", $issyoninzu);
	$issyoninzu = str_replace("\r", "<br>", $issyoninzu);
	$issyoninzu = str_replace("\n", "<br>", $issyoninzu);
	$gositumon = str_replace("\r\n", "<br>", $gositumon);
	$gositumon = str_replace("\r", "<br>", $gositumon);
	$gositumon = str_replace("\n", "<br>", $gositumon);

	$rec = $sei.','.$mei.','.$seihuri.','.$meihuri.','.$seibetu.','.$nen.','.$gatu.','.$pi.','.$telno.','.$mail1.','.$pass.','.$yu.','.$zyusyo1.','.$zyusyo2.','.$zyusyo3.','.$syoku.','.$menkyo.','.$gyousei.','.$kibou.','.$ninzu.','.$issyoninzu.','.$heyaplan.','.$dai1.','.$dai2.','.$dai3.','.$renrakuzikan.','.$kibounitizi.','.$gositumon."\n";

	$fpt = @fopen($fname,'a');

	if (! file_exists($fname))
	{
		ErrSub("ファイル".$fname."が見つかりません。");
	}

	if (! $fpt)
	{
		ErrSub("ファイル".$fname."が追加OPENできません。");
	}

	fputs($fpt,$rec);

	fclose($fpt);






?>
<!-- HTML -->
<HTML>
<HEAD>
	<META HTTP-EQUIV="Content-Type"
	      content="Text/html;charset=UTF-8">
	<TITLE>三重県南部自動車学校</TITLE>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>

<BODY>
	<div id="kakuteibox">
		<p>お申込みありがとうございます! 後日担当者からご希望のお時間を目安にお電話をさせて頂きます。</p>

		<h2>合宿の流れを一目で確認！</h2>
		<a href="life.html"><img src="images/title-album.jpg" width="718" height="209"></a>

		<h2>ナンブまでの交通アクセスを確認</h2>
		<a href="gakkou.html"><img src="images/title.jpg" width="718" height="209"></a>
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