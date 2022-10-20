<!doctype html>
<html>
<head>


<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<meta charset="UTF-8">
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap-theme.min.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="zi.css">
<link rel="stylesheet" href="btn.css">
<script src="jquery.min.js"></script>
<title>WSOFTScript</title>
<style type="text/css">
.auto-style1 {
	font-size: large;
}
.auto-style2 {
	font-size: 30pt;
}
.auto-style3 {
	font-size: 18pt;
}
.auto-style99 {
	font-size: 28pt;
}
.auto-style4 {
	font-size: small;
}
</style>
</head>
<body>
<?php
if($_GET['id']){
if(file_exists('documents/'.$_GET['id'].'.txt')){$rt=str_replace("\n","<br>",file_get_contents('documents/'.$_GET['id'].'.txt'));}else{
$rt=str_replace("\n","<br>",file_get_contents('error.txt'));
}
}else{
$rt=str_replace("\n","<br>",file_get_contents('toppage.txt'));
}
?>

<menubar><h1 class="text-left"><a href="?"><img src="logo.png" width="170vw" ></span></a></h1><p class="auto-style99"><?=$_GET['id']?></p></menubar><h4>

</h4>

<h3 class="auto-style1"><contents><?=$rt?></contents><p class="auto-style1">&nbsp;</p>
<p class="auto-style3">検索</p>
<form id="form1" action="#" method="get">
<input id="sbox1" id="q" name="q" type="text" placeholder="検索" value="<?=$_GET['q']?>" />
<input id="sbtn1" type="submit" value="検索" /></form>
<br>
<p class="auto-style1">
<?php
foreach(glob('documents/*') as $file){
    if(is_file($file)){
        if(strpos($file,$_GET['q']) != false){
$re=str_replace('.txt','',str_replace('documents/','',$file));
  echo '<a href="index.php?id='.$re.'">'.$re.'</a><br>';
}else{if(strpos(file_get_contents($file),$_GET['q']) != false){
$re=str_replace('.txt','',str_replace('documents/','',$file));
 echo '<a href="index.php?id='.$re.'">'.$re.'</a><br>';
}}
    }
}

?>
<br/><p class="auto-style1">(c)WSOFT 2020-2022 / WSOFT CMS<br>
</body>
</html>

 