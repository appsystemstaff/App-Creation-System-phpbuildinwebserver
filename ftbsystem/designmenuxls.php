<?php session_start();  
if(!$_POST[nbr]){
?>   
<!DOCTYPE html> 
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style">
	<title></title>
	<link rel="stylesheet" href="css/jquerymobile-1.4.0.min.css">
	<link rel="stylesheet" href="css/jquery.mobile-1.4.0.min.css">
	<link rel="stylesheet" href="css/jqmobile.min.css">
	<link href="css/mtnpjhsp.css" rel="stylesheet">
	<link href="css/icons/icon.css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico">
	<!--wettopbr--><style type="text/css">
	</style><!--copyiframes-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.4.0.min.js"></script>
	<!--copyiframe--><!--copyiframes--> 
<script>
function checkform ( form )
	{
	var type = /(.xls)$/i;
	if(form.webxls){
	if (form.webxls.value){
	if (!type.test(form.webxls.value)){
	alert( "xls file types only." );
    form.webxls.focus();
	return false;}}
	}
	
	if(form.webxls.value==''){
	alert("Please select xls file.");
	form.webxls.focus();
	return (false);
	;}
	
	var porks = /^[0-9.]+$/;
	if(!porks.test(form.nbr.value)){
	alert("Numeric value only.");
	form.nbr.focus();
	return (false);
	}
	
	
	if(form.nbr.value==''){
	alert("Please enter value.");
	form.nbr.focus();
	return (false);
	;}
	
	if(form.nbr.value=>26){
	alert("Max 22 values in a row is allowed. You need to use form method if you add folder more than 22 in quantity.");
	form.nbr.focus();
	return (false);
	;}
	

	}</script>
 
 </head>
	<body><div data-role="page" data-theme="f" class="page indexhtml">
	<div  data-role="header" id="hrdiv" data-theme="f"><h1 id="hrs">AppMoney712 App Creation System</h1><a href="#navigations" id="menubttns"  data-rel="popup" class="ui-btn-left ui-btn ui-btn-inline ui-corner-all ui-btn-icon-left ui-icon-bars">&nbsp;&nbsp;&nbsp;</a>
	</div><!-- /header --><div data-role="content" class="pagebg"><!--copyiframe--><!-- /content!-->
	 <h3 style="color:#000000"><b>Navigation Menu for sub-apps - xls method</b></h3>
	 <FORM action="designmenuxls.php"  method="post" enctype="multipart/form-data" data-ajax="false"  onSubmit="return checkform(this);">
	 Maximum Folder Number:
	  <div class="ui-grid-b">
	 <div class="ui-block-a">
	 <input type="number" name="nbr" required><br>
	 <input type="file" name="webxls" required>
	 <input type="hidden" name="guanyin" value="<?php if(!$_POST[guanyin])$_SESSION[guanyin]=rand();
	echo htmlspecialchars($_SESSION[guanyin]); ?>">
	<input type="submit" name="submit" Value="SEND">
	<input type="reset" name="clear" Value="Clear"></div></div></FORM>
	 <hr>
	 <?php 
	 if(file_exists("xls/menu.html")){?>
	 <a  class="ui-btn ui-btn-f ui-btn-inline" href="xls/menu.php" target="_blank">Preview your menu</a>
	 <a  class="ui-btn ui-btn-f ui-btn-inline" href="menudownload.php" target="_blank">Download menu.html</a>
	 <?php  echo '<hr>';}?>
	<a  class="ui-btn ui-btn-f ui-btn-inline" href="designmenu.php">form method</a>
	<a  class="ui-btn ui-btn-f ui-btn-inline" href="https://www.dropbox.com/s/ciuw60r1100ho2f/nm.xls" target="_blank">Adding menu for sub-apps xls example</a>
	<br><br>
	<a href="#" class="tps"><img style="width:22px" src="img/tps.gif"><span><br>If you use adding folder method to add pages to your app, you need to create sub-apps menu file. You need to place the created file(menu.html) on the root folder of app zip file.</span></a>
	
	 
	 
	 <br><br>
	  Back to <a  class="ui-btn ui-btn-f ui-btn-inline" href="design.php">xls file upload</a>
	  
	  	
	
	<div id="navigations" data-role="popup" data-theme="none">
	<ul style="min-width:210px;" data-role="listview" data-inset="true">
	<li><a href="index.php" data-ajax="false">xls form design method</a></li>
	<li><a href="background.html" data-ajax="false">Background pictures</a></li>
	<li><a href="design.php" data-ajax="false">App design upload page</a></li>
	<li><a href="designmenuxls.php" data-ajax="false">Navigation Menu for sub-apps</a></li>
	<li><a href="explanation.php" data-ajax="false">Explanation</a></li>

	

	</ul></div><!-- /navigation -->	
	 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
  	 </div>
    </div>
	
	
 	
</body>
</html>

<?php
;}//$_POST[nbr]
if($_FILES['webxls']['name'] and $_POST[nbr] and preg_match('/^[0-9]*$/',$_POST[nbr])  and $_SESSION[guanyin] and $_SESSION[guanyin]==$_POST[guanyin]){

$nbr = $_POST[nbr];

if($_FILES['webxls']['size']<55000){
$tdy=date('Y-m-d');

$allowedExtensions = array("xls");

if($_FILES['webxls']){
$filename=$_FILES['webxls']['name'];$tmpname=$_FILES['webxls']['tmp_name'];
;}else{$filename='';$tmpname='';}

$filetyp = end(explode(".",strtolower($filename)));



	if ($filename > "") {  
      if (!in_array(end(explode(".", 
            strtolower($filename))), 
            $allowedExtensions)) {
      		echo "<script>alert(\"incorrect type不正確檔案.\");</script>"; 
      }else{
	  		$filename=str_replace("..","",$filename);
			$filename=str_replace("/","",$filename);
			$filename=str_replace("\\","",$filename);

	 		if($filetyp=='xls'){
	  		$nhtmlprn="xls/";
	    	move_uploaded_file($tmpname,$nhtmlprn.$filename);
			rename("xls/$filename", "xls/ntrn.xls");
			;}
		
		if($nbr){	
		require_once 'excel_reader2.php';	
		$ftexls="xls/ntrn.xls";
		$ftdata = new Spreadsheet_Excel_Reader("$ftexls");
		$ftdata->setOutputEncoding('utf-8');
		//$nbrow = $ftdata->rowcount();
			for($i=2;$i<=8;$i++){
				for($j=1;$j<26;$j++){
				if($j==1){$jspig = 'B';}else if($j==2){$jspig = 'C';}else if($j==3){$jspig = 'D';}else if($j==4){$jspig = 'E';}else if($j==5){$jspig = 'F';}else if($j==6){$jspig = 'G';}else if($j==7){$jspig = 'H';}else if($j==8){$jspig = 'I';}else if($j==9){$jspig = 'J';}else if($j==10){$jspig = 'K';}else if($j==11){$jspig = 'L';}else if($j==12){$jspig = 'M';}else if($j==13){$jspig = 'N';}else if($j==14){$jspig = 'O';}else if($j==15){$jspig = 'P';}else if($j==16){$jspig = 'Q';}else if($j==17){$jspig = 'R';}else if($j==18){$jspig = 'S';}else if($j==19){$jspig = 'T';}else if($j==20){$jspig = 'U';}else if($j==21){$jspig = 'V';}else if($j==22){$jspig = 'W';}else if($j==23){$jspig = 'X';}else if($j==24){$jspig = 'Y';}else if($j==25){$jspig = 'Z';}
				if($ftdata->val($i,$jspig))$jsn[$i] = $j;
				}
			}
		
			for($i=2;$i<=8;$i++){
			  if($jsn[$i]){
				if($i==2){$html .= 'datp({"btn":[{"menuitem": "pigmenu",';}
				else if($i==3){$html .= ',{"menuitem": "formmenu",';}
				else if($i==4){$html .= ',{"menuitem": "ksmenu",';}
				else if($i==5){$html .= ',{"menuitem": "pdmenu",';}
				else if($i==6){$html .= ',{"menuitem": "vdmenu",';}
				else if($i==7){$html .= ',{"menuitem": "albummenu",';}
				else if($i==8){$html .= ',{"menuitem": "postermenu",';}
				
				$html .= '"menunbr": "'.$jsn[$i].'","menutitle": "';
				
				for($j=1;$j<=$jsn[$i];$j++){
					if($j==1){$jspig = 'B';}else if($j==2){$jspig = 'C';}else if($j==3){$jspig = 'D';}else if($j==4){$jspig = 'E';}else if($j==5){$jspig = 'F';}else if($j==6){$jspig = 'G';}else if($j==7){$jspig = 'H';}else if($j==8){$jspig = 'I';}else if($j==9){$jspig = 'J';}else if($j==10){$jspig = 'K';}else if($j==11){$jspig = 'L';}else if($j==12){$jspig = 'M';}else if($j==13){$jspig = 'N';}else if($j==14){$jspig = 'O';}else if($j==15){$jspig = 'P';}else if($j==16){$jspig = 'Q';}else if($j==17){$jspig = 'R';}else if($j==18){$jspig = 'S';}else if($j==19){$jspig = 'T';}else if($j==20){$jspig = 'U';}else if($j==21){$jspig = 'V';}else if($j==22){$jspig = 'W';}else if($j==23){$jspig = 'X';}else if($j==24){$jspig = 'Y';}else if($j==25){$jspig = 'Z';}
					if($jsn[$i]>1)$html .= $ftdata->val($i,$jspig);
					if($j==$jsn[$i]){$html .= '"}';}else{$html .= ',';}
				;}
			
			 
			 }// if($jsn[$i]){	
			 
		   ;}//for($i=2;
		   $html .= ']});';	
		;}//if($nbr){	
	}
	
	
	
    } //if ($filename > "") 


				$fpagtrns="xls/menu.html";
				$opnrtrns = fopen($fpagtrns, "w");
				fwrite($opnrtrns,$html);
 				fclose($opnrtrns);	
				$htmlcontn ='';	
				
  //header("Content-Type: text/html; charset=utf-8"); 
  //echo $html;
// header('Content-disposition: attachment; filename="menu.html"');
echo "<meta http-equiv='refresh' content='0;URL=designmenuxls.php'>";
;};}?>