<?php
if($_COOKIE['score']){}else{setcookie("score",$_POST['score'], time()+99999, "/", "wsoft.ws");}
if($_POST['score']>$_COOKIE['score']){
setcookie("score",$_POST['score'], time()+99999, "/", "wsoft.ws");
}
if($_POST['score']>file_get_contents("score.txt")){
    file_put_contents("score.txt",$_POST['score']);
}
echo '<h1>みんなのハイスコア:'.file_get_contents("score.txt").'</h1>';
echo '<h1>あなたのハイスコア:'.$_COOKIE['score'].'</h1>';
echo '<h1>今回のスコア:'.$_POST['score'].'</h1>';
?>
<h1><a href="index.php">リトライ</a></h1>