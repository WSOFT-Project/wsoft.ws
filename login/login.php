<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<meta name="viewport" content="width=device-width">
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>ログイン</title>
</head>
<body>
<?php
$id='';$pass='';$recived=false;$result='';$img="logo.png";
if(array_key_exists('name',$_POST)){$id=$_POST['name'];}
if(array_key_exists('pass',$_POST)){$pass= $_POST['pass'];}
if(array_key_exists('name',$_POST)&&array_key_exists('pass',$_POST)){$recived=true;}
$output=null;
if($recived){
exec('wsid /l '.str_replace(' ','_',str_replace("'", "_", $id)).' '.str_replace(' ','_',str_replace("'", "_", $pass)), $output);
if($output[0]=="true"){
    $result='';
    session_start();
$url=$_SESSION['url'];
session_regenerate_id();
//Cookie['id']は暫定的に1週間有効です
setcookie("id",$id,time()+60*60*24*7,"/","wsoft.ws");
$_SESSION['id']=$id;
header("location:../".$url);
exit;
}else{
  $result='ログインに失敗しました';$img="error.png";
}
}
//背景画像のランダマイズ
$imgs=glob('' . '*.jpg');
$background = $imgs[ array_rand( $imgs ) ] ;

?>
  <img src="account-logo.png" class="logo"/>
<form class="login-form" method="POST" action="">

  <p fontsize="9" class="login-text">

    <span class="fa-stack fa-lg">
      <img src="<?=$img?>" width="65vw"/>
      
    </span>
    <br/>
    <p class="login-error"><?=$result?></p>
  </p>
  <input name="name" type="text" class="login-username" autofocus="true" required="true" placeholder="ユーザー名" value="<?=$id?>" />
  <input name="pass" type="Password" class="login-password" required="true" placeholder="パスワード" />
  <input type="submit" name="Login" value="ログイン" class="login-submit" />
</form>
<p class="login-forgot-pass"><a href="#" class="login-link">パスワードを忘れた場合</a>  <a class="login-link" href="login-old.php">旧UIでログイン</a></p>
<img class="underlay-photo" src="<?=$background?>"></img>
<div class="underlay-black"></div> 

</body>
</html>