<?php
$to= 'madokayoko0810@gmail.com';
$subject=$_POST['_subject'];
$body =$_POST['username']."\n".$_POST['username']."\n".$_POST['usercomment'];
mail($to,$subject,$body);
?>
このファイルをサーバーに置いて､contact.htmlを置いた場所のパスに書き換えれば送信できます