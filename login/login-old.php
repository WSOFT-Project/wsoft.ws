<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="main.css">
<script type="text/javascript" src="rdback.js"></script>
<meta name="viewport" content="width=device-width">
<meta content="ja" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<title>ログイン</title>
</head>
<body>
<?php
$id='';$pass='';$recived=false;
if(array_key_exists('name',$_POST)){$id=$_POST['name'];}
if(array_key_exists('pass',$_POST)){$pass= $_POST['pass'];}
if(array_key_exists('name',$_POST)&&array_key_exists('pass',$_POST)){$recived=true;}
?>

<div class="login">
  <div class="heading">
    <h2><img src="account-logo-dark.png" width="270vw" style="text-align : center;"/></h2>
    <h4>WSOFTアカウントを使ってすべてのサービスにログインしよう</h4>
    <form method="POST" action="">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input name="name" type="text" class="form-control" placeholder="ユーザー名" value="<?=$id?>">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input name="pass" type="password" class="form-control" placeholder="パスワード">
        </div>

        <button name="submit_btn" type="submit" class="float">ログイン</button>

        
       </form>
      <br>
      <a href="ntp.php">アカウントを持っていませんか？こちらから作成できます</a>
      <a href="login.php">新UIでログイン</a>
     <h3>
     <?php
$output=null;
if($recived){
exec('wsid /l '.str_replace(' ','_',str_replace("'", "_", $id)).' '.str_replace(' ','_',str_replace("'", "_", $pass)), $output);
if($output[0]=="true"){
  session_start();
  $url=$_SESSION['url'];
  session_regenerate_id();
  $_SESSION['id']=$id;
  header("location:../".$url);
  exit;
}else{
  echo('ログインに失敗しました');
}
}
?>
</h3>
 		</div>
 </div>



</body>

</html>
