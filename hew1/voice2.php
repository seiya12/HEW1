<?php
	
	
	$fname = "bbs.csv";

	if (! file_exists($fname))
	{
		ErrSub("ファイル".$fname."が見つかりません。");
	}

	$flag=0;

	if($_POST['msg1']=="" or $_POST['msg2']=="" or $_POST['msg3']==""){
		ErrSub("日付を入力してください");
		$flag=1;
	}
	if($_POST['msgvoice']==""){
		ErrSub("コメントを入力してください");
		$flag=1;
	}
	if($flag==1){
		ErrSub2();
	 	exit;
	}

	$msg1 = $_POST['msg1'];
	$msg2 = $_POST['msg2'];
	$msg3 = $_POST['msg3'];
	$msgvoice = $_POST['msgvoice'];
	$ini1 = $_POST['ini1'];
	$ini2 = $_POST['ini2'];

	$msgvoice = str_replace("\r\n", "<br>", $msgvoice);
	$msgvoice = str_replace("\r", "<br>", $msgvoice);
	$msgvoice = str_replace("\n", "<br>", $msgvoice);

	$rec = $msg1.'年'.$msg2.'月'.$msg3.'日,'.$msgvoice.','.$ini1.'．'.$ini2."．\n";

	$fpt = @fopen($fname,'a');

	if (! $fpt)
	{
		ErrSub("ファイル".$fname."が追加OPENできません。");
	}

	fputs($fpt,$rec);

	fclose($fpt);

	$filet = file($fname);
	
	$filet = array_reverse($filet);
	
	$rcnt = count($filet);

?>







<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>三重県南部自動車学校</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<div id=wrapper>
<div id=header>
		<div id="hideform">
	<form action="kakunin.php" METHOD="post">
	<table>
		<tr>
		    <th>メールアドレス</th>
		    <td><input type="text" name="mail" class="twidth"></td>
		    <th>パスワード</th>
		    <td><input type="password" name="pass" class="twidth"></td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<th></th>
			<td><input type="submit" value="GO!" class="rb"></td>
		</tr>
	</table>
	　　　　　　　　　　　
	</form>
	</div><!-- hideform -->

	<div id="klink"><ul><li onclick="hideopen();"><a>お申込内容確認</a></li></ul></div>
	<img src="images/site-name1.png" id="title">
	<img src="images/top-tel.gif" id="toptel">
</div><!-- header -->
<div id=naviwidth>
<div id=navi>
	<ul>
		<li><a href="index.html">トップページ</a></li>
 		<li><a href="miryoku.html">NANBUの魅力</a></li>
 		<li><a href="plan.html">プラン紹介</a></li>
 		<li><a href="ryoukin.html"><div id=nh>料金表</div><span id=navispan>入校日カレンダー</span></a></li>
 		<li><a href="sisetu.html">施設案内</a></li>
 		<li><a href="gakkou.html">学校案内</a></li>
 		<li><a href="omousikomi.html">お申し込み</a></li>
 	</ul>
</div><!-- navi -->
</div><!-- naviwidth -->

<div id="container">
	<div id="itemA">
		<div class="linkimg"><img src="images/title-voice.jpg" width="690" height="193"></div>

		<h3 class="hagaki"><img src="images/hagaki-title.jpg"></h3>
		
		<div class="voicebox2">

	<?php for($i = 0;$i< $rcnt;$i++)
	{
		list($voice1,$voice2,$voice3) = explode(',',$filet[$i]);

		print
		 '<div class="voi"><h4>'.$voice1.'</h4>
		 <p>'.$voice2.'</p>
		 <p>'.$voice3.'</p></div>';
	} ?>

		</div> <!-- voicebox -->

	</div><!-- itemA -->
	<div id="itemB">
		<div id="naviB">
			<h2>卒業生の声</h2>
			<ul>
				<li><img src="images/point2.gif" width="15" height="15"><a href="voice.php">最新のお便り</a></li>
				<li><img src="images/point2.gif" width="15" height="15"><a href="voice8.html">2018年のお便り</a></li>
				<li><img src="images/point2.gif" width="15" height="15"><a href="voice7.html">2017年のお便り</a></li>
			</ul>

		</div>
		<div class="imglink"><a href="https://www.instagram.com/nanbu_hometigiru/" target="_blank"><img src="images/insta.png" width="250" height="87"></a></div>
					<div class="imglink"><a href="https://twitter.com/safety_nanbu" target="_blank"><img src="images/twitter.png" width="250"></div>
					<div class="imglink"><a href="media.php"><img src="images/bnr-media.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="life.html"><img src="images/bnr-album.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="voice8.html"><img src="images/bnr-voice.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="qanda.html"><img src="images/bnr-qaa.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="gakkou.html#access"><img src="images/bnr-access.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="hogosya.html"><img src="images/bnr-parents.jpg" width="250" height="104"></a></div>
					<div class="imglink"><a href="omousikomihouhou.html#ron"><img src="images/bnr-loan.jpg" width="250" height="156"></a></div>
					<div class="imglink" id="bnrn"><a href="nfile.html"><img src="images/page_banner.png" width="244"></div>
					<h3 id="logobnr">インストラクターの紹介</h3></a>
					<div id="topback"><a href="#top"><img src="images/topcute.png" width="180" height="180"></a></div>
				</div><!-- itemB -->
			</div><!-- container -->
			<div id=footerwidth>
				<div id=footer>
					<div id=Lf>
						<img src="images/footer-logo.png" id="flogo">
						<p>三重県伊勢市小俣町元町1648-10<br>
						フリーダイヤル	0800-200-4555</p>
					</div><!-- Lf -->
					<div id=Rf>
						<div id=Rf1>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="index.html">トップページ</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="miryoku.html">NANBUの魅力</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="plan.html">プラン紹介</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="ryoukin.html">料金表</a>
							</div>
						</div>
						<div id=Rf2>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="sisetu.html">施設案内</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="gakkou.html">学校案内</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="omousikomi.html">お申込み</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="omousikomihouhou.html">お申し込み方法</a>
							</div>
						</div>
						<div id=Rf3>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="omousikomikiyaku.html">お申込み規約</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="puraibasi.html">プライバシーポリシー</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="qanda.html">よくある質問</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="gakkou.html#access">交通アクセス</a>
							</div>
						</div>
						<div id=Rf4>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="nfile.html">インストラクターの紹介</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="voice8.html">卒業生の声</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="life.html">合宿ライフアルバム</a>
							</div>
							<div class=rf3>
								<img src="images/point1.gif" width="15" height="15">
								<a href="hogosya.html">保護者の皆様へ</a>
							</div>
						</div><!-- Rf -->
					</div>
				</div><!-- footer -->
			</div><!-- footerwidth -->
</div><!-- wrapper -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/test.js"></script>
</body>
</html>


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
